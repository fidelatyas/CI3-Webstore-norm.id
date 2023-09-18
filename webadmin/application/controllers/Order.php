<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller
{
    private $_user;
    private $_setting;

    private $_api_url;
    private $_client_id;
    private $_api_secret;

    public function __construct()
    {
        parent:: __construct();

        $user_id = $this->session->userdata('user_id');

        if ($user_id > 0)
        {
            $this->_user = $this->core_model->get('user', $user_id);
            $this->_setting = $this->setting_model->load();
            $this->_acl = $this->cms_function->generate_acl($this->_user->id, $this->_setting);

            $this->_api_url = 'https://westbike.id:8443';
            $this->_client_id = '6ce94de64a9948229151d5fc9548153f';
            $this->_api_secret = '8f178bbb92984196a06b84a427fb32a4';
        }
        else
        {
            redirect(base_url() . 'login/');
        }
    }




    /* Export Function Area */
    public function export_order_list($order_id = '')
    {
        $arr_order_id = explode(',', $order_id);
        $arr_order = $this->core_model->get('order', $arr_order_id);
        $arr_order_item_lookup = [];

        foreach ($arr_order as $order)
        {
            $order->courier = 'SAP';

            if ($order->shipping_courier == 'REG' || $order->shipping_courier == 'ND' || $order->shipping_courier == 'SD')
            {
                $order->courier = 'Anteraja';
            }
            elseif ($order->shipping_courier == 'EZ' || $order->shipping_courier == 'J&T Regular')
            {
                $order->courier = 'JNT';
            }
            elseif ($order->shipping_courier == 'Westbike Messenger')
            {
                $order->courier = 'WMS';
            }
        }

        if (count($arr_order_id) > 0)
        {
            $this->db->where_in('order_id', $arr_order_id);
            $arr_order_item = $this->core_model->get('order_item');

            foreach ($arr_order_item as $order_item)
            {
                $order_item->quantity_display = number_format($order_item->quantity, 0, '', '');
                $order->patient_name = ($order->patient_id > 0) ? $order->patient_name : $order->shipping_name;

                if (!isset($arr_order_item_lookup[$order_item->order_id]))
                {
                    $arr_order_item_lookup[$order_item->order_id] = $order_item->product_name . ' (' . $order_item->quantity_display . ')';

                    continue;
                }

                $arr_order_item_lookup[$order_item->order_id] .= ', ' . $order_item->product_name . ' (' . $order_item->quantity_display . ')';
            }
        }

        // export to excel
        $this->load->library('cms_excel');

        $title = 'Order Report';
        $objPHPExcel = $this->cms_excel->create_excel($title);
        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'Report CRM');
        $this->cms_excel->setbold($objPHPExcel, array('A1'));
        $this->cms_excel->setmerge($objPHPExcel, array('A1:F1'));
        $this->cms_excel->setautosize($objPHPExcel, array('A', 'B', 'C', 'D', 'E', 'F', 'G'));

        $row = 4;

        if (count($arr_order) > 0)
        {
            $objPHPExcel->getActiveSheet()->setCellValueExplicit("A{$row}", 'Number');
            $objPHPExcel->getActiveSheet()->setCellValue("B{$row}", 'Name');
            $objPHPExcel->getActiveSheet()->setCellValue("C{$row}", 'Date');
            $objPHPExcel->getActiveSheet()->setCellValue("D{$row}", 'Payment Status');
            $objPHPExcel->getActiveSheet()->setCellValue("E{$row}", 'Status');
            $objPHPExcel->getActiveSheet()->setCellValue("F{$row}", 'Courier');
            $objPHPExcel->getActiveSheet()->setCellValue("G{$row}", 'Item');
            $this->cms_excel->setborder($objPHPExcel, "A{$row}", "G{$row}", '#000');
            $this->cms_excel->setbold($objPHPExcel, array("A{$row}", "B{$row}", "C{$row}", "D{$row}", "E{$row}", "F{$row}", "G{$row}"));

            $row += 1;

            foreach ($arr_order as $order)
            {
                $objPHPExcel->getActiveSheet()->setCellValue("A{$row}", $order->number);
                $objPHPExcel->getActiveSheet()->setCellValue("B{$row}", $order->patient_name);
                $objPHPExcel->getActiveSheet()->setCellValue("C{$row}", PHPExcel_Shared_Date::PHPToExcel($order->date));
                $objPHPExcel->getActiveSheet()->setCellValue("D{$row}", $order->payment_status);
                $objPHPExcel->getActiveSheet()->setCellValue("E{$row}", $order->status);
                $objPHPExcel->getActiveSheet()->setCellValue("F{$row}", $order->courier);
                $objPHPExcel->getActiveSheet()->setCellValue("G{$row}", $arr_order_item_lookup[$order->id]);
                $this->cms_excel->setdateformat($objPHPExcel, array("C{$row}"));
                $this->cms_excel->setborder($objPHPExcel, "A{$row}", "G{$row}", '#000');

                $row += 1;
            }
        }
        else
        {
            $objPHPExcel->getActiveSheet()->setCellValue("A{$row}", 'No Data.');
        }

        $this->cms_excel->download_excel($objPHPExcel, $title);
    }
    /* End Export Function Area */




    /* Public Function Area */
    public function add($patient_id = 0)
    {
        $arr_data = array();
        $acl = $this->_acl;

        if (!isset($acl['order']) || $acl['order']->add <= 0)
        {
            redirect(base_url());
        }

        if ($patient_id <= 0)
        {
            redirect(base_url() . 'order/all/');
        }

        $patient = $this->core_model->get('patient', $patient_id);

        $arr_data['title'] = 'Data';
        $arr_data['nav'] = 'Order Add';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;
        $arr_data['patient'] = $patient;
        $arr_data['arr_product'] = $this->_get_product();
        $arr_data['arr_province'] = $this->_get_province();

        $this->load->view('order_add', $arr_data);
    }

    public function all($page = 1, $sort = 'ASC', $row = 'status', $query = '')
    {
        $arr_data = array();
        $acl = $this->_acl;

        if (!isset($acl['order']) || $acl['order']->list <= 0)
        {
            redirect(base_url());
        }

        $query = urldecode($query);

        // get all order
        if ($query != '')
        {
            $this->db->like('type', $query);
            $this->db->or_like('number', $query);
            $this->db->or_like('name', $query);
            $this->db->or_like('date', $query);
            $this->db->or_like('status', $query);
        }

        if ($row == 'status' || $row == 'payment_status')
        {
            if ($sort == 'ASC')
            {
                $this->db->order_by("FIELD(location, 'Apotek Now', 'Haistar'), FIELD(payment_status, 'Paid', 'Pending', 'expire', 'EXPIRED', 'FREE', 'deny', 'Refund', ''), FIELD(status, 'Pending', 'Processing', 'Shipped', 'Delivered', 'Cancelled'), date DESC, id DESC");
            }
            else
            {
                $this->db->order_by("FIELD(location, 'Apotek Now', 'Haistar'), FIELD(payment_status, 'Refund', 'deny', 'FREE', 'EXPIRED', 'expire', 'Pending', 'Paid', ''), FIELD(status, 'Processing', 'Pending', 'Shipped', 'Delivered', 'Cancelled'), date DESC, id DESC");
            }
        }
        else
        {
            $this->db->order_by($row, $sort);
        }

        $this->db->limit($this->_setting->setting__limit_page, ($page - 1) * $this->_setting->setting__limit_page);
        $arr_order = $this->core_model->get('order');
        $arr_consultation_id = $this->cms_function->extract_records($arr_order, 'consultation_id');
        $arr_patient_id = $this->cms_function->extract_records($arr_order, 'patient_id');
        $arr_order_id = $this->cms_function->extract_records($arr_order, 'id');
        $arr_consultation_lookup = array();
        $arr_patient_id = array();
        $arr_order_item_lookup = array();

        $arr_consultation = $this->core_model->get('consultation', $arr_consultation_id);

        foreach ($arr_consultation as $consultation)
        {
            $arr_consultation_lookup[$consultation->id] = clone $consultation;
        }

        $arr_patient = $this->core_model->get('patient', $arr_patient_id);

        foreach ($arr_patient as $patient)
        {
            $arr_patient_lookup[$patient->id] = clone $patient;
        }

        if (count($arr_order_id) > 0)
        {
            $this->db->where_in('order_id', $arr_order_id);
            $arr_order_item = $this->core_model->get('order_item');

            foreach ($arr_order_item as $order_item)
            {
                $order_item->quantity_display = number_format($order_item->quantity, 0, '', '');

                if (isset($arr_order_item_lookup[$order_item->order_id]))
                {
                    $arr_order_item_lookup[$order_item->order_id] .= ", {$order_item->quantity_display} {$order_item->product_name}";

                    continue;
                }

                $arr_order_item_lookup[$order_item->order_id] = "{$order_item->quantity_display} {$order_item->product_name}";
            }
        }

        foreach ($arr_order as $key => $order)
        {
            $order->date_display = date('d F Y', $order->date);
            $order->total_display = number_format($order->grand_total, 0, '.', ',');

            $order->patient_name = (isset($arr_patient_lookup[$order->patient_id])) ? ucwords(strtolower($arr_patient_lookup[$order->patient_id]->name)) : $order->patient_name;
            $order->category_name = (isset($arr_consultation_lookup[$order->consultation_id])) ? $arr_consultation_lookup[$order->consultation_id]->category_name : '';
            $order->consultation_status = (isset($arr_consultation_lookup[$order->consultation_id])) ? $arr_consultation_lookup[$order->consultation_id]->status : '';

            $order->patient_phone = (isset($arr_patient_lookup[$order->patient_id])) ? $arr_patient_lookup[$order->patient_id]->phone : $order->shipping_phone;
            $order->patient_phone = substr_replace($order->patient_phone, "62", 0, 1);

            $order->patient_email = (isset($arr_patient_lookup[$order->patient_id])) ? $arr_patient_lookup[$order->patient_id]->email : $order->shipping_email;
            $order->patient_name = ($order->patient_id <= 0) ? $order->shipping_name : $order->patient_name;
            $order->item_list = (isset($arr_order_item_lookup[$order->id])) ? $arr_order_item_lookup[$order->id] : '';
            $order->source = (isset($arr_patient_lookup[$order->patient_id])) ? $arr_patient_lookup[$order->patient_id]->source : '';

            $order->courier = 'SAP';

            if ($order->shipping_courier == 'REG' || $order->shipping_courier == 'ND' || $order->shipping_courier == 'SD')
            {
                $order->courier = 'Anteraja';
            }
            elseif ($order->shipping_courier == 'EZ' || $order->shipping_courier == 'J&T Regular')
            {
                $order->courier = 'JNT';
            }
            elseif ($order->shipping_courier == 'Westbike Messenger')
            {
                $order->courier = 'WMS';
            }

            $order->courier = $order->courier . ' - ' . $order->shipping_courier;
        }

        // count page
        if ($query != '')
        {
            $this->db->like('type', $query);
            $this->db->or_like('number', $query);
            $this->db->or_like('name', $query);
            $this->db->or_like('date', $query);
            $this->db->or_like('status', $query);
        }

        $count_order = $this->core_model->count('order');
        $count_page = ceil($count_order / $this->_setting->setting__limit_page);

        $arr_data['title'] = 'Order';
        $arr_data['nav'] = 'Order List';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;

        $arr_data['page'] = $page;
        $arr_data['sort'] = $sort;
        $arr_data['row'] = $row;
        $arr_data['query'] = $query;

        $arr_data['arr_order'] = $arr_order;
        $arr_data['count_page'] = $count_page;

        $this->load->view('order', $arr_data);
    }

    public function edit($order_id = 0)
    {
        $arr_data = array();
        $acl = $this->_acl;

        if (!isset($acl['order']) || $acl['order']->edit <= 0)
        {
            redirect(base_url());
        }

        $order = $this->core_model->get('order', $order_id);
        $order->date_display = date('Y-m-d H:i:s', $order->date);
        $order->payment_date_display = ($order->payment_date > 0) ? date('Y-m-d H:i:s', $order->payment_date) : '';
        $order->processed_date_display = ($order->processed_date > 0) ? date('Y-m-d H:i:s', $order->processed_date) : '';
        $order->delivered_date_display = ($order->delivered_date > 0) ? date('Y-m-d H:i:s', $order->delivered_date) : '';
        $order->subtotal_display = number_format($order->subtotal, 0, '.', ',');
        $order->shipping_display = number_format($order->shipping, 0, '.', ',');
        $order->discount_display = number_format($order->discount, 0, '.', ',');
        $order->grand_total_display = number_format($order->grand_total, 0, '.', ',');
        $order->courier = 'SAP';

        if ($order->shipping_courier == 'REG' || $order->shipping_courier == 'ND' || $order->shipping_courier == 'SD')
        {
            $order->courier = 'Anteraja';
        }
        elseif ($order->shipping_courier == 'EZ' || $order->shipping_courier == 'J&T Regular')
        {
            $order->courier = 'JNT';
        }

        $order->courier = $order->courier . ' - ' . $order->shipping_courier;
        $order->insurance = (0.2 / 100) * $order->subtotal;
        $order->insurance_display = number_format($order->insurance, 0, '.', ',');

        $this->db->where('order_id', $order->id);
        $order->arr_order_item = $this->core_model->get('order_item');
        $arr_product_id = array();
        $arr_order_item_lookup = array();

        foreach ($order->arr_order_item as $order_item)
        {
            $order_item->quantity_display = number_format($order_item->quantity, 0, '', '');
            $order_item->price_display = number_format($order_item->price, 0, '.', ',');
            $order_item->discount_display = number_format($order_item->discount, 0, '.', ',');
            $order_item->total_display = number_format($order_item->total, 0, '.', ',');

            if ($order_item->product_id == 11)
            {
                $arr_product_id[1] = 1;
                $arr_product_id[3] = 3;
                $arr_product_id[4] = 4;

                if (isset($arr_order_item_lookup[1]))
                {
                    $arr_order_item_lookup[1] += $order_item->quantity;
                }
                else
                {
                    $arr_order_item_lookup[1] = $order_item->quantity;
                }

                if (isset($arr_order_item_lookup[3]))
                {
                    $arr_order_item_lookup[3] += $order_item->quantity;
                }
                else
                {
                    $arr_order_item_lookup[3] = $order_item->quantity;
                }

                if (isset($arr_order_item_lookup[4]))
                {
                    $arr_order_item_lookup[4] += $order_item->quantity;
                }
                else
                {
                    $arr_order_item_lookup[4] = $order_item->quantity;
                }
            }
            elseif ($order_item->product_id == 10 || $order_item->product_id == 12)
            {
                $arr_product_id[6] = 6;
                $arr_product_id[7] = 7;

                if (isset($arr_order_item_lookup[6]))
                {
                    $arr_order_item_lookup[6] += $order_item->quantity_display;
                }
                else
                {
                    $arr_order_item_lookup[6] = $order_item->quantity_display;
                }

                if (isset($arr_order_item_lookup[7]))
                {
                    $arr_order_item_lookup[7] += $order_item->quantity_display;
                }
                else
                {
                    $arr_order_item_lookup[7] = $order_item->quantity_display;
                }
            }
            elseif ($order_item->product_id == 13)
            {
                $arr_product_id[3] = 3;
                $arr_product_id[4] = 4;

                if (isset($arr_order_item_lookup[3]))
                {
                    $arr_order_item_lookup[3] += $order_item->quantity_display;
                }
                else
                {
                    $arr_order_item_lookup[3] = $order_item->quantity_display;
                }

                if (isset($arr_order_item_lookup[4]))
                {
                    $arr_order_item_lookup[4] += $order_item->quantity_display;
                }
                else
                {
                    $arr_order_item_lookup[4] = $order_item->quantity_display;
                }
            }
            else
            {
                $arr_product_id[$order_item->product_id] = $order_item->product_id;

                if (isset($arr_order_item_lookup[$order_item->product_id]))
                {
                    $arr_order_item_lookup[$order_item->product_id] += $order_item->quantity_display;
                }
                else
                {
                    $arr_order_item_lookup[$order_item->product_id] = $order_item->quantity_display;
                }
            }
        }

        $arr_product_id = array_values($arr_product_id);
        $order->arr_product = $this->core_model->get('product', $arr_product_id);

        foreach ($order->arr_product as $product)
        {
            $product->name = $product->name . ' (x' . number_format($arr_order_item_lookup[$product->id], 0, '', '') . ')';
        }

        // get tracking
        $arr_history = array();

        if ($order->status == 'Processing' || $order->status == 'Delivered')
        {
            if ($order->shipping_courier == 'EZ' || $order->shipping_courier == 'J&T Regular')
            {
                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => "http://interchange.jet.co.id:22268/jandt-order-web/track/trackAction!tracking.action",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_POSTFIELDS =>"{\"awb\":\"{$order->number}\",\"eccompanyid\":\"NORM\",\"method\":\"2\"}",
                    CURLOPT_HTTPHEADER => array(
                        "Authorization: Basic Tk9STTpSOW9iR2VEM3F1Mmo=",
                        "Content-Type: text/plain"
                    ),
                ));

                $response = curl_exec($curl);
                // var_dump($response);

                curl_close($curl);

                $obj_shipping = json_decode($response);
                $arr_history = (isset($obj_shipping->error_id)) ? array() : array_reverse($obj_shipping->history);

                foreach ($arr_history as $history)
                {
                    $history->rowstate_name = $history->status;
                    $history->description = '';
                    $history->create_date = date('Y-m-d H:i:s', strtotime($history->date_time));

                    $history->description = (strtolower($history->status) == strtolower('Paket telah diterima')) ? 'Paket telah diterima oleh ' . $history->receiver : '';
                }
            }
            elseif ($order->shipping_courier == 'ND' || $order->shipping_courier == 'REG')
            {
                $basepath = 'https://doit.anteraja.id/norm/tracking/';

                $arr_header = array();
                $arr_header[] = 'access-key-id: Anteraja_x_Norm';
                $arr_header[] = 'secret-access-key: oH5OZ4Z2jXMEJ6itJoksQZi5';
                $arr_header[] = 'Content-Type: application/json';

                $data = new stdClass();
                $data->waybill_no = $order->shipping_courier_tracking_id;

                $payload = json_encode($data);

                $curl = curl_init($basepath);
                curl_setopt($curl, CURLOPT_HTTPHEADER, $arr_header);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_POST, true);
                curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);

                $response = curl_exec($curl);
                curl_close($curl);

                $obj_response = json_decode($response);

                $arr_history = (isset($obj_response->content->history)) ? $obj_response->content->history : array();

                foreach ($arr_history as $history)
                {
                    $history->rowstate_name = $history->message->id;
                    $history->description = '';
                    $history->create_date = date('Y-m-d H:i:s', strtotime($history->timestamp));
                }
            }
            else
            {
                $url = 'http://track.coresyssap.com/shipment/tracking/awb?awb_no=' . $order->shipping_courier_tracking_id . '&api_key=global';
                $curl = curl_init($url);

                curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'api_key: EliO_#_2020'));
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

                $history = curl_exec($curl);
                curl_close($curl);

                $arr_history = json_decode($history);

                // $arr_history = ($arr_history == null) ? array() : $arr_history;
                // $arr_history = (count($arr_history) > 0) ? array_reverse($arr_history) : $arr_history;
                $arr_history = array();
            }
        }

        if ($order->status == 'Processing')
        {
            $history = new stdClass();
            $history->rowstate_name = 'ORDER PROCESSED';
            $history->create_date = date('Y-m-d H:i:s', $order->processed_date);
            $history->description = 'Your order has been processed and will be collected by courier.';
            $arr_history[] = clone $history;
        }

        if ($order->payment_status == 'Paid')
        {
            $history = new stdClass();
            $history->rowstate_name = 'PAYMENT CONFIRMED';
            $history->create_date = date('Y-m-d H:i:s', $order->payment_date);
            $history->description = 'Your payment has been confirmed. Your order will be processed.';
            $arr_history[] = clone $history;
        }

        $history = new stdClass();
        $history->rowstate_name = 'ORDER CREATED';
        $history->create_date = date('Y-m-d H:i:s', $order->date);
        $history->description = 'Your order has been created. Awaiting payment.';
        $arr_history[] = clone $history;

        if ($order->patient_id > 0)
        {
            $patient = $this->core_model->get('patient', $order->patient_id);
        }
        else
        {
            $patient = new stdClass();

            $patient->id = 0;
            $patient->number = '';
            $patient->name = $order->shipping_name;
        }

        $arr_data['title'] = 'Order';
        $arr_data['nav'] = 'Order Edit';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;

        $arr_data['order'] = $order;
        $arr_data['patient'] = $patient;
        $arr_data['arr_product'] = $this->_get_product();
        $arr_data['arr_history'] = $arr_history;

        $this->load->view('order_edit', $arr_data);
    }

    public function print_shipping($order_id)
    {
        $order = $this->core_model->get('order', $order_id);
        $order->date_display = date('d M Y', $order->date);
        $order->insurance = floor((0.2 / 100) * $order->subtotal);
        $order->insurance_display = 'IDR ' . number_format($order->insurance, 0, '.', ',');
        $order->shipping_display = 'IDR ' . number_format($order->shipping, 0, '.', ',');
        $order->weight = 0;
        $order->product_list = '';

        $this->db->where('order_id', $order->id);
        $arr_order_item = $this->core_model->get('order_item');
        $arr_product_id = $this->cms_function->extract_records($arr_order_item, 'product_id');

        $arr_product = $this->core_model->get('product', $arr_product_id);

        foreach ($arr_product as $product)
        {
            $arr_product_lookup[$product->id] = clone $product;
        }

        foreach ($arr_order_item as $order_item)
        {
            $order_item->quantity_display = number_format($order_item->quantity, 0, '', '');
            $order_item->product_name = (isset($arr_product_lookup[$order_item->product_id])) ? $arr_product_lookup[$order_item->product_id]->name : '';

            $order->weight += (isset($arr_product_lookup[$order_item->product_id])) ? ($arr_product_lookup[$order_item->product_id]->weight * $order_item->quantity) : 0;

            if ($order->product_list != '')
            {
                $order->product_list .= ', ' . $order_item->product_name . ' (x' . $order_item->quantity_display . ')';

                continue;
            }

            $order->product_list = $order_item->product_name . ' (x' . $order_item->quantity_display . ')';
        }

        $order->arr_order_item = $arr_order_item;
        $order->courier = 'SAP';

        if ($order->shipping_courier == 'REG' || $order->shipping_courier == 'ND' || $order->shipping_courier == 'SD')
        {
            $order->courier = 'Anteraja';
        }
        elseif ($order->shipping_courier == 'EZ' || $order->shipping_courier == 'J&T Regular')
        {
            $order->courier = 'JNT';
        }

        // update order
        $this->core_model->update('order', $order->id, array('print' => 1));

        $arr_data['title'] = 'Print Receipt';
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['account'] = $this->_user;
        $arr_data['setting'] = $this->_setting;
        $arr_data['acl'] = $this->_acl;

        $arr_data['order'] = $order;

        $this->load->view('print/shipping', $arr_data);
    }
    /* End Public Function Area */




    /* Ajax Area */
    public function ajax_add()
    {
        $json['status'] = 'success';

        try
        {
            $this->db->trans_start();

            $acl = $this->_acl;

            if ($this->session->userdata('user_id') != $this->_user->id)
            {
                throw new Exception('Session Expired. Please log out first.');
            }

            if (!isset($acl['order']) || $acl['order']->add <= 0)
            {
                throw new Exception('You have no access to add Administrator.');
            }

            $order_record = array();
            $arr_category_id = array();
            $arr_order_item = array();
            $shipping_id = 0;

            // get record from views
            foreach ($_POST as $k => $v)
            {
                $v = $this->security->xss_clean(trim($v));

                if ($k == 'order_item_order_item')
                {
                    $arr_order_item = json_decode($v);
                }
                elseif ($k == 'shipping_id')
                {
                    $shipping_id = $v;
                }
                else
                {
                    $order_record[$k] = ($k == 'date' || $k == 'birthdate') ? strtotime($v) : $v;
                }
            }

            $shipment = $this->core_model->get('shipment', $shipping_id);

            $order_record['shipping_province'] = $shipment->province;
            $order_record['shipping_city'] = $shipment->city;
            $order_record['shipping_district'] = $shipment->district;
            $order_record['shipping_district_code'] = $shipment->receiver_code;
            $order_record['shipping_courier'] = $shipment->name;
            $order_record['shipping_city_type'] = $shipment->number;
            $order_record['shipping_tlc'] = $shipment->number;

            $order_record['date'] = time();

            $order_record = $this->cms_function->populate_foreign_field($order_record['patient_id'], $order_record, 'patient');

            $this->_validate_add($order_record);

            // Insert Database
            $order_id = $this->core_model->insert('order', $order_record);

            // add order_item
            $location = $this->_update_order_item($order_id, $order_record, $arr_order_item);

            $order_record['id'] = $order_id;
            $order_record['last_query'] = $this->db->last_query();

            // generate number
            if (!isset($order_record['number']) || (isset($order_record['number']) && $order_record['number'] == ''))
            {
                $order_record['number'] = 'NORM' . date('Ym', time()) . str_pad($order_id, 6, 0, STR_PAD_LEFT);;
                $this->core_model->update('order', $order_id, array('number' => $order_record['number'], 'location' => $location, 'payment_id' => $order_record['number']));
            }

            // generate invoice
            $end_point = $this->_setting->setting__webshop_xendit_base_url . 'v2/invoices';

            $data = array();
            $data['external_id'] = $order_record['number'];
            $data['amount'] = (int)$order_record['grand_total'];
            $data['payer_email'] = $order_record['shipping_email'];
            $data['description'] = 'Norm payment';
            $data['should_send_email'] = true;
            $data['success_redirect_url'] = 'https://norm.id/checkout/thankyou/' . $order_id . '/';

            $arr_header = array();
            $arr_header[] = 'Content-Type: application/json';

            $payload = json_encode($data);

            $curl = curl_init();
            curl_setopt($curl, CURLOPT_HTTPHEADER, $arr_header);
            curl_setopt($curl, CURLOPT_USERPWD, $this->_setting->setting__webshop_xendit_production_secret_key . ':');
            curl_setopt($curl, CURLOPT_URL, $end_point);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            $response = curl_exec($curl);
            $response_object = json_decode($response, true);

            // update payment_url
            if (!isset($response_object['invoice_url']))
            {
                $response_object['invoice_url'] = 'Test Invoice URL';
            }

            $invoice_url = (!isset($response_object['invoice_url'])) ? '' : $response_object['invoice_url'];

            $this->core_model->update('order', $order_id, array('payment_url' => $response_object['invoice_url']));

            // add history
            $this->cms_function->add_log($this->_user, $order_record, 'add', 'order');

            $json['number'] = $order_record['number'];
            $json['response'] = $response;

            $this->db->trans_complete();
        }
        catch (Exception $e)
        {
            $json['message'] = $e->getMessage();
            $json['status'] = 'error';

            if ($json['message'] == '')
            {
                $json['message'] = 'Server error.';
            }
        }

        echo json_encode($json);
    }

    public function ajax_delete($order_id = 0)
    {
        $json['status'] = 'success';

        try
        {
            $this->db->trans_start();

            $acl = $this->_acl;

            if ($this->session->userdata('user_id') != $this->_user->id)
            {
                throw new Exception('Session Expired. Please log out first.');
            }

            if (!isset($acl['order']) || $acl['order']->delete <= 0)
            {
                throw new Exception('You have no access to delete Administrator.');
            }

            if ($order_id <= 0)
            {
                throw new Exception();
            }

            $order = $this->core_model->get('order', $order_id);
            $updated = $_POST['updated'];
            $order_record = array();

            foreach ($order as $k => $v)
            {
                $order_record[$k] = $v;

                if ($k == 'updated' && $v != $updated)
                {
                    throw new Exception('This data has been updated by another order. Please refresh the page.');
                }
            }

            $this->_validate_delete($order_id);

            $this->core_model->delete('order', $order_id);
            $order_record['id'] = $order->id;
            $order_record['name'] = $order->name;
            $order_record['last_query'] = $this->db->last_query();

            // add history
            $this->cms_function->add_log($this->_user, $order_record, 'delete', 'order');

            $this->db->trans_complete();
        }
        catch (Exception $e)
        {
            $json['message'] = $e->getMessage();
            $json['status'] = 'error';

            if ($json['message'] == '')
            {
                $json['message'] = 'Server error.';
            }
        }

        echo json_encode($json);
    }

    public function ajax_edit($order_id = 0)
    {
        $json['status'] = 'success';

        try
        {
            $this->db->trans_start();

            $acl = $this->_acl;

            if ($this->session->userdata('user_id') != $this->_user->id)
            {
                throw new Exception('Session Expired. Please log out first.');
            }

            if (!isset($acl['order']) || $acl['order']->edit <= 0)
            {
                throw new Exception('You have no access to edit Administrator.');
            }

            if ($order_id <= 0)
            {
                throw new Exception();
            }

            $order_record = array();

            $old_order = $this->core_model->get('order', $order_id);

            foreach ($old_order as $key => $value)
            {
                $old_order_record[$key] = $value;
            }

            // get record from views
            foreach ($_POST as $k => $v)
            {
                if ($k == 'updated' && $v != $old_order_record['updated'])
                {
                    throw new Exception('This order data has been updated by another account. Please refresh this page.');
                }
                else
                {
                    $v = $this->security->xss_clean(trim($v));

                    $order_record[$k] = ($k == 'date' || $k == 'birthdate') ? strtotime($v) : $v;
                }
            }

            if (isset($order_record['status']) && $order_record['status'] == 'Processing')
            {
                $order_record['processed_date'] = time();
            }

            if (isset($order_record['status']) && $order_record['status'] == 'Delivered')
            {
                $order_record['delivered_date'] = time();
            }

            if ($old_order_record['payment_status'] != 'Paid' && (isset($order_record['payment_status']) && $order_record['payment_status'] == 'Paid'))
            {
                $order_record['payment_date'] = time();
                $order_record['payment_status_message'] = 'Manual Payment';
            }

            $this->_validate_edit($order_id, $order_record);

            // Insert Database
            $this->core_model->update('order', $order_id, $order_record);
            $order_record['id'] = $order_id;
            $order_record['last_query'] = $this->db->last_query();

            // populate foreign field
            // if any
            $arr_table = array('order_item');
            $this->cms_function->update_foreign_field($arr_table, $order_record, 'order');

            // cek status
            $this->db->where('order_id', $order_id);
            $arr_order_item = $this->core_model->get('order_item');
            $arr_product_id = $this->cms_function->extract_records($arr_order_item, 'product_id');

            $arr_product = $this->core_model->get('product', $arr_product_id);
            $arr_product_lookup = array();
            $weight = 0;
            $product_name = '';
            $total_qty = 0;

            foreach ($arr_product as $product)
            {
                $arr_product_lookup[$product->id] = clone $product;
            }

            foreach ($arr_order_item as $order_item)
            {
                $weight += $order_item->quantity * $arr_product_lookup[$order_item->product_id]->weight;
                $total_qty += $order_item->quantity;

                if ($product_name == '')
                {
                    $product_name = $arr_product_lookup[$order_item->product_id]->name . '(x' . number_format($order_item->quantity, 0, '', '') . ')';
                }
                else
                {
                    $product_name .= ', ' . $arr_product_lookup[$order_item->product_id]->name . '(x' . number_format($order_item->quantity, 0, '', '') . ')';
                }
            }

            if ($old_order_record['status'] == 'Pending' && (isset($order_record['status']) && $order_record['status'] == 'Processing'))
            {
                // send data to shipping
                if ($old_order_record['shipping_courier'] == 'EZ' || $old_order_record['shipping_courier'] == 'J&T Regular')
                {
                    // send data to JNT
                    $key = 'AKe62df84bJ3d8e4b1hea2R45j11klsb';

                    $param = array(
                        'username' => 'NORM',
                        'api_key' => 'A5XSYE',
                        'orderid' => $old_order_record['number'],
                        'shipper_name' => 'NORM',
                        'shipper_contact' => 'Millah',
                        'shipper_phone'=> '+622145742832',
                        'shipper_addr'=> 'Jl. Kavling A6 no.42 rt 009/002, kecamatan koja kelurahan tugu utara, provinsi jakarta utara, kodepos 14260',
                        'origin_code'=> 'JKT',
                        'receiver_name'=> $old_order_record['shipping_name'],
                        'receiver_phone'=> $old_order_record['shipping_phone'],
                        'receiver_addr'=> $old_order_record['shipping_address_line_1'] . ' ' . $old_order_record['shipping_address_line_2'] . ' ' . $old_order_record['shipping_address_line_3'],
                        'receiver_zip'=> $old_order_record['shipping_postcode'],
                        'destination_code'=> $old_order_record['shipping_city_type'],
                        'receiver_area'=> $old_order_record['shipping_district_code'],
                        'qty'=> $total_qty,
                        'weight'=> ($weight / 1000 < 1) ? 1 : $weight / 1000,
                        'goodsdesc'=> 'Norm Product',
                        'servicetype'=>'6',
                        'insurance'=> (0.2 / 100) * $old_order_record['subtotal'],
                        'orderdate'=> date('Y-m-d H:i:s'),
                        'item_name'=>'Package',
                        'expresstype'=>'1',
                        'goodsvalue'=> $old_order_record['subtotal'],
                        'sendstarttime'=>date('Y-m-d', time()) . ' 11:00:00',
                        'sendendtime'=>date('Y-m-d', time()) . ' 23:00:00',
                    );

                    $json_data = json_encode(array('detail' => array($param)));
                    $sign = base64_encode(md5($json_data.$key));

                    $url = 'http://jk.jet.co.id:22232/JandT_ecommerce/api/onlineOrder.action';
                    $url .= '?data_param='.urlencode($json_data).'&data_sign='.$sign;

                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $url);
                    curl_setopt($ch, CURLOPT_POST, true);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                    $price = curl_exec($ch);
                    curl_close($ch);

                    $result = json_decode($price);
                    $arr_result = $result->detail;

                    if ($arr_result[0]->status == 'Error')
                    {
                        throw new Exception($arr_result[0]->reason);
                    }

                    $this->core_model->update('order', $order_id, array('shipping_courier_tracking_id' => $arr_result[0]->awb_no));
                }
                elseif ($old_order_record['shipping_courier'] == 'REG' || $old_order_record['shipping_courier'] == 'ND')
                {
                    // send data to anteraja
                    $basepath = 'https://doit.anteraja.id/norm/order/';

                    $arr_header = array();
                    $arr_header[] = 'access-key-id: Anteraja_x_Norm';
                    $arr_header[] = 'secret-access-key: oH5OZ4Z2jXMEJ6itJoksQZi5';
                    $arr_header[] = 'Content-Type: application/json';

                    $shipper = new stdClass();
                    $shipper->name = 'Norm';
                    $shipper->phone = '021 4574 2832';
                    $shipper->email = 'developer@norm.id';
                    $shipper->district = '31.72.03';//'31.71.07';
                    $shipper->address = 'Jl. Kavling A6 no.42 rt 009/002, kecamatan koja kelurahan tugu utara, provinsi jakarta utara, kodepos 14260';
                    $shipper->postcode = '10210';
                    $shipper->geoloc = '';

                    $receiver = new stdClass();
                    $receiver->name = $old_order_record['shipping_name'];
                    $receiver->phone = $old_order_record['shipping_phone'];
                    $receiver->email = $old_order_record['shipping_email'];
                    $receiver->district = $old_order_record['shipping_tlc'];
                    $receiver->address = $old_order_record['shipping_address_line_1'] . ' ' . $old_order_record['shipping_address_line_2'] . ' ' . $old_order_record['shipping_address_line_3'];
                    $receiver->postcode = $old_order_record['shipping_postcode'];
                    $receiver->geoloc = '';

                    $arr_item = array();
                    $item = new stdClass();

                    foreach ($arr_order_item as $order_item)
                    {
                        $item->item_name = ($arr_product_lookup[$order_item->product_id]) ? $arr_product_lookup[$order_item->product_id]->name . ' x' . number_format($order_item->quantity, 0, '', '') : '';
                        $item->declared_value = ($order_item->price <= 0) ? 39000 : $order_item->price;
                        $item->weight = ($arr_product_lookup[$order_item->product_id]) ? $arr_product_lookup[$order_item->product_id]->weight : '';
                        $item->weight = ($item->weight < 100) ? 100 : $item->weight;
                        $arr_item[] = clone $item;
                    }

                    $param = new stdClass();
                    $param->booking_id = $old_order_record['number'];
                    $param->service_code = $old_order_record['shipping_courier'];
                    $param->parcel_total_weight = ($weight <= 1000) ? 1000 : $weight;
                    $param->shipper = clone $shipper;
                    $param->receiver = clone $receiver;
                    $param->items = $arr_item;
                    $param->use_insurance = 1;
                    $param->declared_value = $old_order_record['subtotal'];

                    $payload = json_encode($param);

                    $curl = curl_init($basepath);
                    curl_setopt($curl, CURLOPT_HTTPHEADER, $arr_header);
                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($curl, CURLOPT_POST, true);
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);

                    $price = curl_exec($curl);
                    curl_close($curl);

                    $result = json_decode($price);

                    if ($result->content == null)
                    {
                        throw new Exception($result->info);
                    }

                    $this->core_model->update('order', $order_id, array('shipping_courier_tracking_id' => $result->content->waybill_no));
                }
                elseif ($old_order_record['shipping_courier'] == 'Westbike Messenger')
                {
                    $authentication = $this->_authenticate();
                    $delivery_order = $this->_submit_delivery_order($authentication, $old_order_record);
                    $this->_checkout($authentication, $delivery_order);

                    $this->core_model->update('order', $order_id, array('shipping_courier_tracking_id' => $delivery_order->id));
                }
                else
                {
                    // send data to SAP
                    $param = new stdClass();
                    $param->customer_code = 'CGK016269';
                    $param->awb_no = $old_order_record['number'];
                    $param->reference_no = $old_order_record['number'];
                    $param->pickup_name = 'Norm';
                    $param->pickup_address = 'Jalan Danau Toba no G2/149. Bendungan Hilir, Tanah Abang, Jakarta Pusat';
                    $param->pickup_phone = '021 4574 2832';
                    $param->pickup_district_code = 'JK00';
                    $param->service_type_code = $old_order_record['shipping_courier'];
                    $param->quantity = 1;
                    $param->weight = $weight;
                    $param->volumetric = '16x18x6';
                    $param->shipment_type_code = 'SHTPC';
                    $param->insurance_flag = 1;
                    $param->cod_flag = 1;
                    $param->shipper_name = $param->pickup_name;
                    $param->shipper_address = $param->pickup_address;
                    $param->shipper_phone = $param->pickup_phone;
                    $param->destination_district_code = $old_order_record['shipping_district_code'];
                    $param->receiver_name = $old_order_record['shipping_name'];
                    $param->receiver_address = $old_order_record['shipping_address_line_1'] . ' ' . $old_order_record['shipping_address_line_2'] . ' ' . $old_order_record['shipping_address_line_3'];
                    $param->receiver_phone = $old_order_record['shipping_phone'];
                    $param->receiver_postal_code = $old_order_record['shipping_postcode'];
                    $json_param = json_encode($param);

                    $url = 'https://api.coresyssap.com/shipment/pickup/single_push';
                    $cprice = curl_init($url);

                    curl_setopt($cprice, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'api_key: EliO_#_2020'));
                    curl_setopt($cprice, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($cprice, CURLOPT_CUSTOMREQUEST, 'POST');
                    curl_setopt($cprice, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($cprice, CURLOPT_POSTFIELDS, $json_param);

                    $price = curl_exec($cprice);
                    curl_close($cprice);

                    $result = json_decode($price);

                    if ($result->status == 'fail')
                    {
                        // throw new Exception($result->msg);
                    }

                    // $this->core_model->update('order_id', $order_id_id, array('shipping_courier_tracking_id' => $old_order_record['number']));
                }
            }

            if (isset($order_record['payment_status']) && $order_record['payment_status'] == 'Paid')
            {
                // send data to webshop
            }

            // add user_history
            $this->cms_function->add_log($this->_user, $order_record, 'edit', 'order');

            $this->db->trans_complete();
        }
        catch (Exception $e)
        {
            $json['message'] = $e->getMessage();
            $json['status'] = 'error';

            if ($json['message'] == '')
            {
                $json['message'] = 'Server error.';
            }
        }

        echo json_encode($json);
    }

    public function ajax_get_city()
    {
        $json['status'] = 'success';

        try
        {
            $province_id = $this->input->post('province_id');

            $this->db->where('province_id', $province_id);
            $this->db->order_by('name');
            $json['arr_city'] = $this->core_model->get('city');
        }
        catch (Exception $e)
        {
            $json['message'] = $e->getMessage();
            $json['status'] = 'error';

            if ($json['message'] == '')
            {
                $json['message'] = 'Server error.';
            }
        }

        echo json_encode($json);
    }

    public function ajax_get_district()
    {
        $json['status'] = 'success';

        try
        {
            $province_id = $this->input->post('province_id');
            $city_id = $this->input->post('city_id');

            $this->db->where('city_id', $city_id);
            $this->db->where('province_id', $province_id);
            $this->db->order_by('name');
            $json['arr_district'] = $this->core_model->get('district');
        }
        catch (Exception $e)
        {
            $json['message'] = $e->getMessage();
            $json['status'] = 'error';

            if ($json['message'] == '')
            {
                $json['message'] = 'Server error.';
            }
        }

        echo json_encode($json);
    }

    public function ajax_get_shipping()
    {
        $json['status'] = 'success';

        try
        {
            $province_id = $this->input->post('province_id');
            $city_id = $this->input->post('city_id');
            $district_id = $this->input->post('district_id');

            $this->db->where('city_id', $city_id);
            $this->db->where('province_id', $province_id);
            $this->db->where('district_id', $district_id);
            // $this->db->where('type !=', 'SAP');
            $this->db->order_by('name');
            $arr_shipping = $this->core_model->get('shipping');

            foreach ($arr_shipping as $shipping)
            {
                $shipping->price_display = number_format($shipping->price, 0, '.', ',');
            }

            $json['arr_shipping'] = $arr_shipping;
        }
        catch (Exception $e)
        {
            $json['message'] = $e->getMessage();
            $json['status'] = 'error';

            if ($json['message'] == '')
            {
                $json['message'] = 'Server error.';
            }
        }

        echo json_encode($json);
    }

    public function ajax_get_shipment()
    {
        $json['status'] = 'success';

        try
        {
            $postcode = $this->input->post('postcode');

            $this->db->where('postcode', $postcode);
            $this->db->where('name !=', 'Lion Parcel');
            $this->db->order_by('name');
            $arr_shipment = $this->core_model->get('shipment');

            foreach ($arr_shipment as $shipment)
            {
                $shipment->price_display = number_format($shipment->price, 0, '.', ',');
            }

            $json['arr_shipment'] = $arr_shipment;
        }
        catch (Exception $e)
        {
            $json['message'] = $e->getMessage();
            $json['status'] = 'error';

            if ($json['message'] == '')
            {
                $json['message'] = 'Server error.';
            }
        }

        echo json_encode($json);
    }

    public function ajax_print_eticket()
    {
        $json['status'] = 'success';

        try
        {
            $order_id = $this->input->post('order_id');
            $product_id = $this->input->post('product_id');

            $order = $this->core_model->get('order', $order_id);

            $patient_name = $order->shipping_name;

            if ($order->patient_id > 0)
            {
                $patient = $this->core_model->get('patient', $order->patient_id);
                $patient_name = $patient->name;
            }

            $date = date('d M', $order->date);
            $year = date('Y', $order->date);
            $year_expiry = date('Y', $order->date) + 1;

            $consultation_number = '-';

            if ($order->patient_id > 0)
            {
                $this->db->where('patient_id', $order->patient_id);
                $this->db->where('status', 'Finish');
                $arr_consultation = $this->core_model->get('consultation');
                $arr_consultation_id = $this->cms_function->extract_records($arr_consultation, 'id');
                $arr_consultation_lookup = array();

                foreach ($arr_consultation as $consultation)
                {
                    $arr_consultation_lookup[$consultation->id] = $consultation->number;
                }

                if (count($arr_consultation_id) > 0)
                {
                    $this->db->where_in('consultation_id', $arr_consultation_id);
                    $this->db->where('product_id', $product_id);
                    $this->db->limit(1);
                    $this->db->order_by('id DESC');
                    $arr_consultation_product = $this->core_model->get('consultation_product');

                    foreach ($arr_consultation_product as $consultation_product)
                    {
                        $consultation_number = (isset($arr_consultation_lookup[$consultation_product->consultation_id])) ? $arr_consultation_lookup[$consultation_product->consultation_id] : '-';
                    }
                }
            }

            // product
            $product = new stdClass();

            if ($product_id == 1)
            {
                $product->id = 1;
                $product->name = 'Finasteride 1mg';
                $product->hiw = '1x sehari sesudah makan';
                $product->amount = '30 Kapsul';
            }
            elseif ($product_id == 3)
            {
                $product->id = 3;
                $product->name = 'Hair Tonic';
                $product->hiw = '2x sehari 2-3 semprotan';
                $product->amount = '30 ml';
            }
            elseif ($product_id == 4)
            {
                $product->id = 4;
                $product->name = 'Anti-DHT Shampoo';
                $product->hiw = '2x sehari pada saat mandi';
                $product->amount = '120 ml';
            }
            elseif ($product_id == 6)
            {
                $product->id = 6;
                $product->name = 'Day Cream';
                $product->hiw = '1x sehari sebelum beraktivitas';
                $product->amount = '15 gr';
            }
            elseif ($product_id == 7)
            {
                $product->id = 7;
                $product->name = 'Night Cream';
                $product->hiw = '1x sehari sebelum tidur';
                $product->amount = '15 gr';
            }
            elseif ($product_id == 8)
            {
                $product->id = 8;
                $product->name = 'Night Cream';
                $product->hiw = '1x sehari sebelum tidur';
                $product->amount = '15 gr';
            }
            elseif ($product_id == 14)
            {
                $product->id = 14;
                $product->name = 'Sildenafil 50mg';
                $product->hiw = '1x sehari 1 jam sebelum berhubungan';
                $product->amount = '1 tablet';
            }
            elseif ($product_id == 15)
            {
                $product->id = 15;
                $product->name = 'Sildenafil 100mg';
                $product->hiw = '1x sehari 1 jam sebelum berhubungan';
                $product->amount = '1 tablet';
            }
            elseif ($product_id == 16)
            {
                $product->id = 16;
                $product->name = 'Stamina Cream';
                $product->hiw = 'Oleskan di bagian bawah penis sebelum berhubungan';
                $product->amount = '10 gr';
            }
            elseif ($product_id == 17)
            {
                $product->id = 17;
                $product->name = 'Protective Mask';
                $product->hiw = '';
                $product->amount = '1 buah';
            }

            $arr_data['title'] = 'Print eticket';
            $arr_data['csrf'] = $this->cms_function->generate_csrf();
            $arr_data['account'] = $this->_user;
            $arr_data['setting'] = $this->_setting;
            $arr_data['acl'] = $this->_acl;

            $arr_data['patient_name'] = $patient_name;
            $arr_data['date'] = $date;
            $arr_data['year'] = $year;
            $arr_data['year_expiry'] = $year_expiry;
            $arr_data['consultation_number'] = $consultation_number;
            $arr_data['product'] = $product;

            $json['receipt_view'] = $this->load->view('print/eticket', $arr_data, true);
        }
        catch (Exception $e)
        {
            $json['message'] = $e->getMessage();
            $json['status'] = 'error';

            if ($json['message'] == '')
            {
                $json['message'] = 'Server error.';
            }
        }

        echo json_encode($json);
    }

    public function ajax_print_shipping($order_id)
    {
        $json['status'] = 'success';

        try
        {
            $acl = $this->_acl;

            if ($order_id <= 0)
            {
                throw new Exception();
            }

            $order = $this->core_model->get('order', $order_id);
            $order->date_display = date('d M Y', $order->date);
            $order->insurance = floor((0.2 / 100) * $order->subtotal);
            $order->insurance_display = 'IDR ' . number_format($order->insurance, 0, '.', ',');
            $order->shipping_display = 'IDR ' . number_format($order->shipping, 0, '.', ',');
            $order->weight = 0;
            $order->product_list = '';

            $this->db->where('order_id', $order->id);
            $arr_order_item = $this->core_model->get('order_item');
            $arr_product_id = $this->cms_function->extract_records($arr_order_item, 'product_id');

            $arr_product = $this->core_model->get('product', $arr_product_id);

            foreach ($arr_product as $product)
            {
                $arr_product_lookup[$product->id] = clone $product;
            }

            foreach ($arr_order_item as $order_item)
            {
                $order_item->quantity_display = number_format($order_item->quantity, 0, '', '');
                $order_item->product_name = (isset($arr_product_lookup[$order_item->product_id])) ? $arr_product_lookup[$order_item->product_id]->name : '';

                $order->weight += (isset($arr_product_lookup[$order_item->product_id])) ? ($arr_product_lookup[$order_item->product_id]->weight * $order_item->quantity) : 0;

                if ($order->product_list != '')
                {
                    $order->product_list .= ', ' . $order_item->product_name . ' (x' . $order_item->quantity_display . ')';

                    continue;
                }

                $order->product_list = $order_item->product_name . ' (x' . $order_item->quantity_display . ')';
            }

            $order->arr_order_item = $arr_order_item;
            $order->courier = 'SAP';

            if ($order->shipping_courier == 'REG' || $order->shipping_courier == 'ND' || $order->shipping_courier == 'SD')
            {
                $order->courier = 'Anteraja';
            }
            elseif ($order->shipping_courier == 'EZ')
            {
                $order->courier = 'JNT';
            }

            // update order
            $this->core_model->update('order', $order->id, array('print' => 1));

            $arr_data['title'] = 'Print Receipt';
            $arr_data['csrf'] = $this->cms_function->generate_csrf();
            $arr_data['account'] = $this->_user;
            $arr_data['setting'] = $this->_setting;
            $arr_data['acl'] = $this->_acl;

            $arr_data['order'] = $order;

            $json['shipping_view'] = $this->load->view('print/shipping_small', $arr_data, true);
        }
        catch (Exception $e)
        {
            $json['message'] = $e->getMessage();
            $json['status'] = 'error';

            if ($json['message'] == '')
            {
                $json['message'] = 'Server error.';
            }
        }

        echo json_encode($json);
    }

    public function ajax_update_status()
    {
        $json['status'] = 'success';

        try
        {
            $this->db->trans_start();

            $acl = $this->_acl;

            if ($this->session->userdata('user_id') != $this->_user->id)
            {
                throw new Exception('Session Expired. Please log out first.');
            }

            if (!isset($acl['order']) || $acl['order']->edit <= 0)
            {
                throw new Exception('You have no access to edit Administrator.');
            }

            $order_id = $this->input->post('order_id');

            $order_record['status'] = $this->input->post('status');
            $order_record['processed_date'] = time();

            $this->core_model->update('order', $order_id, $order_record);

            $order_record['id'] = $order_id;

            $arr_table = array('order_item');
            $this->cms_function->update_foreign_field($arr_table, $order_record, 'order');

            $this->db->trans_complete();
        }
        catch (Exception $e)
        {
            $json['message'] = $e->getMessage();
            $json['status'] = 'error';

            if ($json['message'] == '')
            {
                $json['message'] = 'Server error.';
            }
        }

        echo json_encode($json);
    }

    public function ajax_update($order_id = 0)
    {
        $json['status'] = 'success';

        try
        {
            $this->db->trans_start();

            $acl = $this->_acl;

            if ($order_id <= 0)
            {
                throw new Exception();
            }

            if ($this->session->userdata('user_id') != $this->_user->id)
            {
                throw new Exception('Session Expired. Please log out first.');
            }

            if (!isset($acl['order']) || $acl['order']->edit <= 0)
            {
                throw new Exception('You have no access to edit Administrator.');
            }

            $order = $this->core_model->get('order', $order_id);
            $order_record = array();

            $order_record['shipped'] = 1;
            $order_record['date_shipped'] = time();
            $this->core_model->update('order', $order->id, $order_record);

            if (time() >= 1640970000)
            {
                $this->db->simple_query("USE `webshop_4_selestialbrands`");
            }
            else
            {
                $this->db->simple_query("USE `webshop_4_selestial`");
            }

            $this->db->where('number', $order->number);
            $this->db->where('fulfillment_status', 'Pending');
            $arr_sale = $this->core_model->get('sale');

            if (count($arr_sale) > 0)
            {
                $sale_record = array();
                $sale_record['fulfillment_date'] = time();
                $sale_record['fulfillment_status'] = 'Shipped';
                $this->core_model->update('sale', $arr_sale[0]->id, $sale_record);

                // add inventory_history
                $this->db->where('sale_id', $arr_sale[0]->id);
                $arr_sale_item = $this->core_model->get('sale_item');

                $arr_product = $this->core_model->get('product');
                $arr_product_lookup = array();

                foreach ($arr_product as $product)
                {
                    $arr_product_lookup[$product->id] = clone $product;
                }

                $sale = $arr_sale[0];

                foreach ($arr_sale_item as $sale_item)
                {
                    if (isset($arr_product_lookup[$sale_item->product_id]) && $arr_product_lookup[$sale_item->product_id]->type == 'Virtual Bundling')
                    {
                        $arr_item = json_decode($arr_product_lookup[$sale_item->product_id]->item);

                        foreach ($arr_item as $item)
                        {
                            $quantity = $sale_item->quantity * $item->quantity;
                            $inventory_history_record = array();

                            $inventory_history_record['location_id'] = $sale->location_id;
                            $inventory_history_record['product_id'] = $item->product_id;

                            $inventory_history_record['ref_id'] = $sale->id;
                            $inventory_history_record['ref_item_id'] = $sale_item->id;

                            $inventory_history_record['type'] = 'Sale';
                            $inventory_history_record['name'] = 'Sale ' . $sale->number . ' (Item: ' . $arr_product_lookup[$sale_item->product_id]->name . ')';
                            $inventory_history_record['date'] = (isset($sale_record['fulfillment_date'])) ? $sale_record['fulfillment_date'] : 0;
                            $inventory_history_record['quantity'] = $quantity * -1;
                            $inventory_history_record['unit'] = (isset($arr_product_lookup[$item->product_id])) ? $arr_product_lookup[$item->product_id]->unit : 'PCS';

                            $inventory_history_record['location_type'] = $sale->location_type;
                            $inventory_history_record['location_number'] = $sale->location_number;
                            $inventory_history_record['location_name'] = $sale->location_name;
                            $inventory_history_record['location_date'] = $sale->location_date;
                            $inventory_history_record['location_status'] = $sale->location_status;

                            $inventory_history_record['product_type'] = (isset($arr_product_lookup[$item->product_id])) ? $arr_product_lookup[$item->product_id]->type : '';
                            $inventory_history_record['product_number'] = (isset($arr_product_lookup[$item->product_id])) ? $arr_product_lookup[$item->product_id]->number : '';
                            $inventory_history_record['product_name'] = (isset($arr_product_lookup[$item->product_id])) ? $arr_product_lookup[$item->product_id]->name : '';
                            $inventory_history_record['product_date'] = (isset($arr_product_lookup[$item->product_id])) ? $arr_product_lookup[$item->product_id]->date : 0;
                            $inventory_history_record['product_status'] = (isset($arr_product_lookup[$item->product_id])) ? $arr_product_lookup[$item->product_id]->status : '';

                            $inventory_history_record['ref_type'] = $sale->type;
                            $inventory_history_record['ref_number'] = $sale->number;
                            $inventory_history_record['ref_name'] = $sale->name;
                            $inventory_history_record['ref_date'] = $sale->date;
                            $inventory_history_record['ref_status'] = $sale->status;

                            $inventory_history_record['ref_item_type'] = $sale_item->type;
                            $inventory_history_record['ref_item_number'] = $sale_item->number;
                            $inventory_history_record['ref_item_name'] = $sale_item->name;
                            $inventory_history_record['ref_item_date'] = $sale_item->date;
                            $inventory_history_record['ref_item_status'] = $sale_item->status;
                            $this->core_model->insert('inventory_history', $inventory_history_record);

                            // update inventory
                            $this->db->set('quantity', "quantity - {$quantity}", FALSE);
                            $this->db->where('location_id', $sale->location_id);
                            $this->db->where('product_id', $item->product_id);
                            $this->core_model->update('inventory');
                        }
                    }
                    else
                    {
                        $inventory_history_record = array();

                        $inventory_history_record['location_id'] = $sale->location_id;
                        $inventory_history_record['product_id'] = $sale_item->product_id;

                        $inventory_history_record['ref_id'] = $sale->id;
                        $inventory_history_record['ref_item_id'] = $sale_item->id;

                        $inventory_history_record['type'] = 'Sale';
                        $inventory_history_record['name'] = 'Sale ' . $sale->number . ' (Item: ' . $arr_product_lookup[$sale_item->product_id]->name . ')';
                        $inventory_history_record['date'] = (isset($sale_record['fulfillment_date'])) ? $sale_record['fulfillment_date'] : 0;
                        $inventory_history_record['quantity'] = $sale_item->quantity * -1;
                        $inventory_history_record['unit'] = (isset($arr_product_lookup[$sale_item->product_id])) ? $arr_product_lookup[$sale_item->product_id]->unit : 'PCS';

                        $inventory_history_record['location_type'] = $sale->location_type;
                        $inventory_history_record['location_number'] = $sale->location_number;
                        $inventory_history_record['location_name'] = $sale->location_name;
                        $inventory_history_record['location_date'] = $sale->location_date;
                        $inventory_history_record['location_status'] = $sale->location_status;

                        $inventory_history_record['product_type'] = (isset($arr_product_lookup[$sale_item->product_id])) ? $arr_product_lookup[$sale_item->product_id]->type : '';
                        $inventory_history_record['product_number'] = (isset($arr_product_lookup[$sale_item->product_id])) ? $arr_product_lookup[$sale_item->product_id]->number : '';
                        $inventory_history_record['product_name'] = (isset($arr_product_lookup[$sale_item->product_id])) ? $arr_product_lookup[$sale_item->product_id]->name : '';
                        $inventory_history_record['product_date'] = (isset($arr_product_lookup[$sale_item->product_id])) ? $arr_product_lookup[$sale_item->product_id]->date : 0;
                        $inventory_history_record['product_status'] = (isset($arr_product_lookup[$sale_item->product_id])) ? $arr_product_lookup[$sale_item->product_id]->status : '';

                        $inventory_history_record['ref_type'] = $sale->type;
                        $inventory_history_record['ref_number'] = $sale->number;
                        $inventory_history_record['ref_name'] = $sale->name;
                        $inventory_history_record['ref_date'] = $sale->date;
                        $inventory_history_record['ref_status'] = $sale->status;

                        $inventory_history_record['ref_item_type'] = $sale_item->type;
                        $inventory_history_record['ref_item_number'] = $sale_item->number;
                        $inventory_history_record['ref_item_name'] = $sale_item->name;
                        $inventory_history_record['ref_item_date'] = $sale_item->date;
                        $inventory_history_record['ref_item_status'] = $sale_item->status;
                        $this->core_model->insert('inventory_history', $inventory_history_record);

                        // update inventory
                        $this->db->set('quantity', "quantity - {$sale_item->quantity}", FALSE);
                        $this->db->where('location_id', $sale->location_id);
                        $this->db->where('product_id', $sale_item->product_id);
                        $this->core_model->update('inventory');
                    }
                }
            }

            $this->db->trans_complete();
        }
        catch (Exception $e)
        {
            $json['message'] = $e->getMessage();
            $json['status'] = 'error';

            if ($json['message'] == '')
            {
                $json['message'] = 'Server error.';
            }
        }

        echo json_encode($json);
    }
    /* End Ajax Area */




    /* Private Function Area */
    private function _get_product()
    {
        $this->db->where('status', 'Publish');
        return $this->core_model->get('product');
    }

    private function _get_province()
    {
        $this->db->order_by('name');
        return $this->core_model->get('province');
    }

    private function _update_order_item($order_id, $order_record, $arr_order_item)
    {
        $location = 'Apotek Now';

        foreach ($arr_order_item as $order_item)
        {
            if ($order_item->product_id == 1 || $order_item->product_id == 3 || $order_item->product_id == 4 || $order_item->product_id == 11 || $order_item->product_id == 13 || $order_item->product_id == 16)
            {
                $location = 'Apotek Now';
            }

            if ($order_record['shipping_courier'] == 'Westbike Messenger')
            {
                $location = 'Apotek Now';
            }

            $order_item_record = array();

            $order_item_record['order_id'] = $order_id;

            $order_item_record['product_id'] = $order_item->product_id;
            $order_item_record['price'] = $order_item->price;
            $order_item_record['discount'] = ($order_item->discount / 100) * ($order_item->price * $order_item->quantity);
            $order_item_record['quantity'] = $order_item->quantity;
            $order_item_record['total'] = $order_item->total;

            $order_item_record['order_type'] = (isset($order_record['type'])) ? $order_record['type'] :'';
            $order_item_record['order_number'] = (isset($order_record['number'])) ? $order_record['number'] :'';
            $order_item_record['order_name'] = (isset($order_record['name'])) ? $order_record['name'] :'';
            $order_item_record['order_date'] = (isset($order_record['date'])) ? $order_record['date'] : 0;
            $order_item_record['order_status'] = (isset($order_record['status'])) ? $order_record['status'] :'';

            $order_item_record = $this->cms_function->populate_foreign_field($order_item_record['product_id'], $order_item_record, 'product');

            $this->core_model->insert('order_item', $order_item_record);
        }

        return $location;
    }

    private function _validate_add($record)
    {
    }

    private function _validate_delete($order_id)
    {
        $this->db->where('deletable <=', 0);
        $this->db->where('id', $order_id);
        $count_order = $this->core_model->count('order');

        if ($count_order > 0)
        {
            throw new Exception('Data cannot be deleted.');
        }
    }

    private function _validate_edit($order_id, $record)
    {
        // check editable
        $this->db->where('editable <=', 0);
        $this->db->where('id', $order_id);
        $count_order = $this->core_model->count('order');

        if ($count_order > 0)
        {
            throw new Exception('Data cannot be updated.');
        }
    }

    private function _authenticate()
    {
        $url = $this->_api_url . '/api/auth/authenticate';

        $params = '{"grantType":"client_credential","clientId":"'. $this->_client_id .'","clientSecret":"' . $this->_api_secret . '"}';

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $params,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'User-Agent: Mozilla/5.0 (platform; rv:geckoversion) Gecko/geckotrail Firefox/firefoxversion'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $arr_response = json_decode($response);

        return $arr_response;
    }

    private function _checkout($authentication, $delivery_order)
    {
        $url = $this->_api_url . '/api/merchant/invoices/checkout';
        $params = '{"transactionOrderIds": ["' . $delivery_order->id . '"]}';

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $params,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: Bearer ' . $authentication->access_token
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $arr_response = json_decode($response);
    }

    private function _submit_delivery_order($authentication, $old_order_record)
    {
        $address = $old_order_record['shipping_address_line_1'];

        $url = $this->_api_url . '/api/transaction/delivery/order';
        $params = '{"pickupAddress": {"address": "Jalan Danau Toba No. G2/149, Bendungan Hilir,","description": "Samping Anna Suite","pickupPhone": "6282193222215","pickupName": "Norm","longitude": "-6.210210884542241","latitude": "106.81193902143738","cityId": 1,"cityCode": 7,"zoneId": 100,"zoneCode": "11179"},"deliveryAddress": {"address": "'. $address .'","description": "","pickupPhone": "6282193222215","pickupName": "Norm","longitude": 0,"latitude": 0,"receiverName": "'. $old_order_record['shipping_name'] .'","receiverEmail": "'. $old_order_record['shipping_email'] .'","cityId": 1,"receiverPhone": "'. $old_order_record['shipping_phone'] .'","cityCode": 7,"zoneId": "'. trim($old_order_record['shipping_tlc']) .'","zoneCode": "'. trim($old_order_record['shipping_district_code']) .'"},"serviceId": 22,"serviceCode": "G-SameDay","itemDescription": "Skincare Norm","weight": 1,"volume": 100,"height": 30,"width": 20,"lengths": 10,"externalRefNum": "'. $old_order_record['number'] .'"}';

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $params,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: Bearer ' . $authentication->access_token
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $arr_response = json_decode($response);

        return $arr_response;
    }
    /* End Private Function Area */
}