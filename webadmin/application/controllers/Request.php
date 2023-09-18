<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Request extends CI_Controller
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




    /* Public Function Area */
    public function export()
    {
        $this->load->library('cms_excel');

        $acl = $this->_acl;

        // get all request
        $arr_request = $this->core_model->get('request');
        $arr_request_id = $this->cms_function->extract_records($arr_request, 'id');
        $arr_request_lookup = array();

        foreach ($arr_request as $request)
        {
            $arr_request_lookup[$request->id] = clone $request;
        }

        $this->db->where_in('request_id', $arr_request_id);
        $arr_request_item = $this->core_model->get('request_item');

        foreach ($arr_request_item as $request_item)
        {
            $request_item->request_number = (isset($arr_request_lookup[$request_item->request_id])) ? $arr_request_lookup[$request_item->request_id]->number : '';
            $request_item->request_name = (isset($arr_request_lookup[$request_item->request_id])) ? $arr_request_lookup[$request_item->request_id]->name : '';
            $request_item->request_date = (isset($arr_request_lookup[$request_item->request_id])) ? $arr_request_lookup[$request_item->request_id]->date : '';
            $request_item->request_status = (isset($arr_request_lookup[$request_item->request_id])) ? $arr_request_lookup[$request_item->request_id]->status : '';

            $request_item->request_estimated_price = (isset($arr_request_lookup[$request_item->request_id])) ? $arr_request_lookup[$request_item->request_id]->shipping : '';
            $request_item->request_shipping_name = (isset($arr_request_lookup[$request_item->request_id])) ? $arr_request_lookup[$request_item->request_id]->shipping_name : '';
            $request_item->request_shipping_phone = (isset($arr_request_lookup[$request_item->request_id])) ? $arr_request_lookup[$request_item->request_id]->shipping_phone : '';

            $request_item->request_shipping_province = (isset($arr_request_lookup[$request_item->request_id])) ? $arr_request_lookup[$request_item->request_id]->shipping_province : '';
            $request_item->request_shipping_city = (isset($arr_request_lookup[$request_item->request_id])) ? $arr_request_lookup[$request_item->request_id]->shipping_city : '';
            $request_item->request_shipping_district = (isset($arr_request_lookup[$request_item->request_id])) ? $arr_request_lookup[$request_item->request_id]->shipping_district : '';
        }

        $title = 'Report Shipment';
        $objPHPExcel = $this->cms_excel->create_excel($title);
        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'Report Shipment');
        $this->cms_excel->setbold($objPHPExcel, array('A1', 'A2'));
        $this->cms_excel->setmerge($objPHPExcel, array('A1:L1', 'A2:L2'));
        $this->cms_excel->setautosize($objPHPExcel, array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'k', 'L'));

        $row = 3;

        if (count($arr_request_item) > 0)
        {
            $objPHPExcel->getActiveSheet()->setCellValueExplicit("A{$row}", 'Number');
            $objPHPExcel->getActiveSheet()->setCellValue("B{$row}", 'Name');
            $objPHPExcel->getActiveSheet()->setCellValue("C{$row}", 'Date');
            $objPHPExcel->getActiveSheet()->setCellValue("D{$row}", 'Status');
            $objPHPExcel->getActiveSheet()->setCellValue("E{$row}", 'Item');
            $objPHPExcel->getActiveSheet()->setCellValue("F{$row}", 'Quantity');
            $objPHPExcel->getActiveSheet()->setCellValue("G{$row}", 'Estimated_price');
            $objPHPExcel->getActiveSheet()->setCellValue("H{$row}", 'Shipping Name');
            $objPHPExcel->getActiveSheet()->setCellValue("I{$row}", 'Shipping Phone');
            $objPHPExcel->getActiveSheet()->setCellValue("J{$row}", 'Province');
            $objPHPExcel->getActiveSheet()->setCellValue("K{$row}", 'City');
            $objPHPExcel->getActiveSheet()->setCellValue("L{$row}", 'District');
            $this->cms_excel->setborder($objPHPExcel, "A{$row}", "L{$row}", '#000');
            $this->cms_excel->setbold($objPHPExcel, array("A{$row}", "B{$row}", "C{$row}", "D{$row}", "E{$row}", "F{$row}", "G{$row}", "H{$row}", "I{$row}", "J{$row}", "K{$row}", "L{$row}"));

            $row += 1;

            foreach ($arr_request_item as $request_item)
            {
                $objPHPExcel->getActiveSheet()->setCellValue("A{$row}", $request_item->request_number);
                $objPHPExcel->getActiveSheet()->setCellValue("B{$row}", $request_item->request_name);
                $objPHPExcel->getActiveSheet()->setCellValue("C{$row}", PHPExcel_Shared_Date::PHPToExcel($request_item->request_date));
                $objPHPExcel->getActiveSheet()->setCellValue("D{$row}", $request_item->request_status);
                $objPHPExcel->getActiveSheet()->setCellValue("E{$row}", $request_item->product_name);
                $objPHPExcel->getActiveSheet()->setCellValue("F{$row}", $request_item->quantity);
                $objPHPExcel->getActiveSheet()->setCellValue("G{$row}", $request_item->request_estimated_price);
                $objPHPExcel->getActiveSheet()->setCellValue("H{$row}", $request_item->request_shipping_name);
                $objPHPExcel->getActiveSheet()->setCellValue("I{$row}", $request_item->request_shipping_phone);
                $objPHPExcel->getActiveSheet()->setCellValue("J{$row}", $request_item->request_shipping_province);
                $objPHPExcel->getActiveSheet()->setCellValue("K{$row}", $request_item->request_shipping_city);
                $objPHPExcel->getActiveSheet()->setCellValue("L{$row}", $request_item->request_shipping_district);
                $this->cms_excel->setdateformat($objPHPExcel, array("C{$row}"));
                $this->cms_excel->setnumberformat($objPHPExcel, array("F{$row}", "G{$row}"));
                $this->cms_excel->setborder($objPHPExcel, "A{$row}", "L{$row}", '#000');

                $row += 1;
            }
        }
        else
        {
            $objPHPExcel->getActiveSheet()->setCellValue("A{$row}", 'No Data.');
        }

        $this->cms_excel->download_excel($objPHPExcel, $title);
    }

    public function add($order_id = 0)
    {
        $arr_data = array();
        $acl = $this->_acl;

        if (!isset($acl['request']) || $acl['request']->add <= 0)
        {
            redirect(base_url());
        }

        $order = new stdClass();
        $arr_shipping = array();
        $arr_city = array();
        $arr_district = array();

        if ($order_id > 0)
        {
            $order = $this->core_model->get('order', $order_id);
            $order->description = 'Request Shipment for order ' . $order->number;

            $this->db->where('order_id', $order->id);
            $order->arr_order_item = $this->core_model->get('order_item');
            $arr_product_id = $this->cms_function->extract_records($order->arr_order_item, 'product_id');
            $arr_product_lookup = array();

            $arr_product = $this->core_model->get('product', $arr_product_id);

            foreach ($arr_product as $product)
            {
                $arr_product_lookup[$product->id] = clone $product;
            }

            foreach ($order->arr_order_item as $order_item)
            {
                $order_item->product_name = (isset($arr_product_lookup[$order_item->product_id])) ? $arr_product_lookup[$order_item->product_id]->name : 0;
                $order_item->product_weight = (isset($arr_product_lookup[$order_item->product_id])) ? $arr_product_lookup[$order_item->product_id]->weight : 0;
                $order_item->quantity_display = number_format($order_item->quantity, 0, '', '');

                $order_item->price_display = number_format($order_item->price, 0, ',', '.');
                $order_item->total = $order_item->price * $order_item->quantity;

                $order_item->total_display = number_format($order_item->total, 0, ',', '.');
            }

            // get shipping
            $this->db->where('province_name', $order->shipping_province);
            $this->db->where('city_name', $order->shipping_city);
            $this->db->where('district_name', $order->shipping_district);
            $arr_shipping = $this->core_model->get('shipping');

            foreach ($arr_shipping as $shipping)
            {
                $shipping->price_display = number_format($shipping->price, 0, ',', '.');
            }

            $this->db->where('province_id', $arr_shipping[0]->province_id);
            $arr_city = $this->core_model->get('city');

            $this->db->where('province_id', $arr_shipping[0]->province_id);
            $this->db->where('city_id', $arr_shipping[0]->city_id);
            $arr_district = $this->core_model->get('district');

            $order->province_id = $arr_shipping[0]->province_id;
            $order->city_id = $arr_shipping[0]->city_id;
            $order->district_id = $arr_shipping[0]->district_id;
        }

        $arr_data['title'] = 'Request';
        $arr_data['nav'] = 'Request Add';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;

        $arr_data['today'] = date('Y-m-d', time());
        $arr_data['arr_province'] = $this->_get_province();
        $arr_data['arr_product'] = $this->_get_product();

        $arr_data['order_id'] = $order_id;
        $arr_data['order'] = $order;

        $arr_data['arr_city'] = $arr_city;
        $arr_data['arr_district'] = $arr_district;
        $arr_data['arr_shipping'] = $arr_shipping;

        $this->load->view('request_add', $arr_data);
    }

    public function add_influencer($influencer_id = 0)
    {
        $arr_data = array();
        $acl = $this->_acl;

        if (!isset($acl['request']) || $acl['request']->add <= 0)
        {
            redirect(base_url());
        }

        $influencer = new stdClass();
        $arr_shipping = array();
        $arr_city = array();
        $arr_district = array();

        if ($influencer_id > 0)
        {
            $influencer = $this->core_model->get('influencer', $influencer_id);
            $influencer->description = 'Request Shipment for influencer ' . $influencer->name;

            $influencer->arr_influencer_item = array();
            $arr_product_id = $this->cms_function->extract_records($influencer->arr_influencer_item, 'product_id');
            $arr_product_lookup = array();

            $arr_product = $this->core_model->get('product', $arr_product_id);

            foreach ($arr_product as $product)
            {
                $arr_product_lookup[$product->id] = clone $product;
            }

            // get shipping
            $this->db->where('postcode', $influencer->postcode);
            $this->db->where('name !=', 'Lion Parcel');
            $this->db->where('name !=', 'Westbike Messenger');
            $arr_shipment = $this->core_model->get('shipment');

            foreach ($arr_shipment as $shipment)
            {
                $shipment->price_display = number_format($shipment->price, 0, ',', '.');
            }
        }

        $arr_data['title'] = 'Request';
        $arr_data['nav'] = 'Request Add';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;

        $arr_data['today'] = date('Y-m-d', time());
        $arr_data['arr_province'] = $this->_get_province();
        $arr_data['arr_product'] = $this->_get_product();

        $arr_data['influencer_id'] = $influencer_id;
        $arr_data['influencer'] = $influencer;

        $arr_data['arr_city'] = $arr_city;
        $arr_data['arr_district'] = $arr_district;
        $arr_data['arr_shipment'] = $arr_shipment;

        $this->load->view('request_add_influencer', $arr_data);
    }

    public function all($page = 1, $sort = 'ASC', $row = 'number', $query = '')
    {
        $arr_data = array();
        $acl = $this->_acl;

        if (!isset($acl['request']) || $acl['request']->list <= 0)
        {
            redirect(base_url());
        }

        $query = urldecode($query);

        // get all request
        if ($query != '')
        {
            $this->db->like('type', $query);
            $this->db->or_like('number', $query);
            $this->db->or_like('name', $query);
            $this->db->or_like('date', $query);
            $this->db->or_like('status', $query);
        }

        if ($row == 'status')
        {
            if ($sort == 'ASC')
            {
                $this->db->order_by("FIELD(status, 'Pending', 'Processing', 'Delivered', 'Cancelled'), date DESC, id DESC");
            }
            else
            {
                $this->db->order_by("FIELD(status, 'Delivered', 'Processing', 'Pending', 'Cancelled'), date DESC, id DESC");
            }
        }
        else
        {
            $this->db->order_by($row, $sort);
        }

        $this->db->limit($this->_setting->setting__limit_page, ($page - 1) * $this->_setting->setting__limit_page);
        $arr_request = $this->core_model->get('request');

        foreach ($arr_request as $request)
        {
            $request->date_display = date('d F Y', $request->date);
            $request->processed_date_display = ($request->processed_date > 0) ? date('d F Y H:i:s', $request->processed_date) : '';
            $request->delivered_date_display = ($request->delivered_date > 0) ? date('d F Y H:i:s', $request->delivered_date) : '';

            $request->courier = 'SAP';

            if ($request->shipping_courier == 'REG' || $request->shipping_courier == 'ND' || $request->shipping_courier == 'SD')
            {
                $request->courier = 'Anteraja';
            }
            elseif ($request->shipping_courier == 'EZ' || $request->shipping_courier == 'J&T Regular')
            {
                $request->courier = 'JNT';
            }

            $request->courier .= ' - ' . $request->shipping_courier;
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

        $count_request = $this->core_model->count('request');
        $count_page = ceil($count_request / $this->_setting->setting__limit_page);

        $arr_data['title'] = 'Request';
        $arr_data['nav'] = 'Request List';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;

        $arr_data['page'] = $page;
        $arr_data['sort'] = $sort;
        $arr_data['row'] = $row;
        $arr_data['query'] = $query;

        $arr_data['arr_request'] = $arr_request;
        $arr_data['count_page'] = $count_page;

        $this->load->view('request', $arr_data);
    }

    public function clone_request($request_id = 0)
    {
        $arr_data = array();
        $acl = $this->_acl;

        if (!isset($acl['request']) || $acl['request']->add <= 0)
        {
            redirect(base_url());
        }

        $request = new stdClass();
        $arr_shipping = array();
        $arr_city = array();
        $arr_district = array();

        $request = $this->core_model->get('request', $request_id);
        $request->name = $request->name;

        $this->db->where('request_id', $request->id);
        $request->arr_request_item = $this->core_model->get('request_item');
        $arr_product_id = $this->cms_function->extract_records($request->arr_request_item, 'product_id');
        $arr_product_lookup = array();

        $arr_product = $this->core_model->get('product', $arr_product_id);

        foreach ($arr_product as $product)
        {
            $arr_product_lookup[$product->id] = clone $product;
        }

        foreach ($request->arr_request_item as $request_item)
        {
            $request_item->product_name = (isset($arr_product_lookup[$request_item->product_id])) ? $arr_product_lookup[$request_item->product_id]->name : 0;
            $request_item->product_weight = (isset($arr_product_lookup[$request_item->product_id])) ? $arr_product_lookup[$request_item->product_id]->weight : 0;
            $request_item->quantity_display = number_format($request_item->quantity, 0, '', '');

            $request_item->price_display = number_format($request_item->price, 0, ',', '.');
            $request_item->total = $request_item->price * $request_item->quantity;

            $request_item->total_display = number_format($request_item->total, 0, ',', '.');
        }

        $arr_data['title'] = 'Request';
        $arr_data['nav'] = 'Request Add';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;

        $arr_data['today'] = date('Y-m-d', time());
        $arr_data['arr_province'] = $this->_get_province();
        $arr_data['arr_product'] = $this->_get_product();

        $arr_data['request_id'] = $request_id;
        $arr_data['request'] = $request;

        $arr_data['arr_city'] = $arr_city;
        $arr_data['arr_district'] = $arr_district;
        $arr_data['arr_shipping'] = $arr_shipping;

        $this->load->view('request_clone', $arr_data);
    }

    public function edit($request_id = 0)
    {
        $arr_data = array();
        $acl = $this->_acl;

        if (!isset($acl['request']) || $acl['request']->edit <= 0)
        {
            redirect(base_url());
        }

        $request = $this->core_model->get('request', $request_id);
        $request->date_display = date('Y-m-d', $request->date);
        $request->processed_date_display = ($request->processed_date > 0) ? date('d F Y H:i:s', $request->processed_date) : '';
        $request->delivered_date_display = ($request->delivered_date > 0) ? date('d F Y H:i:s', $request->delivered_date) : '';
        $request->courier = 'SAP';

        if ($request->shipping_courier == 'REG' || $request->shipping_courier == 'ND' || $request->shipping_courier == 'SD')
        {
            $request->courier = 'Anteraja';
        }
        elseif ($request->shipping_courier == 'EZ')
        {
            $request->courier = 'JNT';
        }

        $request->courier = $request->courier . ' - ' . $request->shipping_courier;
        $request->insurance = (0.2 / 100) * $request->subtotal;
        $request->insurance_display = number_format($request->insurance, 0, '.', ',');

        $this->db->where('request_id', $request->id);
        $request->arr_request_item = $this->core_model->get('request_item');
        $arr_product_id = array();
        $arr_request_item_lookup = array();

        foreach ($request->arr_request_item as $request_item)
        {
            $request_item->price_display = number_format($request_item->price, 0, ',', '.');
            $request_item->quantity_display = number_format($request_item->quantity, 0, '', '');
            $request_item->total_display = number_format($request_item->total, 0, ',', '.');

            if ($request_item->product_id == 11)
            {
                $arr_product_id[1] = 1;
                $arr_product_id[3] = 3;
                $arr_product_id[4] = 4;

                if (isset($arr_request_item_lookup[1]))
                {
                    $arr_request_item_lookup[1] += $request_item->quantity;
                }
                else
                {
                    $arr_request_item_lookup[1] = $request_item->quantity;
                }

                if (isset($arr_request_item_lookup[3]))
                {
                    $arr_request_item_lookup[3] += $request_item->quantity;
                }
                else
                {
                    $arr_request_item_lookup[3] = $request_item->quantity;
                }

                if (isset($arr_request_item_lookup[4]))
                {
                    $arr_request_item_lookup[4] += $request_item->quantity;
                }
                else
                {
                    $arr_request_item_lookup[4] = $request_item->quantity;
                }
            }
            elseif ($request_item->product_id == 10 || $request_item->product_id == 12)
            {
                $arr_product_id[6] = 6;
                $arr_product_id[7] = 7;

                if (isset($arr_request_item_lookup[6]))
                {
                    $arr_request_item_lookup[6] += $request_item->quantity_display;
                }
                else
                {
                    $arr_request_item_lookup[6] = $request_item->quantity_display;
                }

                if (isset($arr_request_item_lookup[7]))
                {
                    $arr_request_item_lookup[7] += $request_item->quantity_display;
                }
                else
                {
                    $arr_request_item_lookup[7] = $request_item->quantity_display;
                }
            }
            elseif ($request_item->product_id == 13)
            {
                $arr_product_id[3] = 3;
                $arr_product_id[4] = 4;

                 if (isset($arr_request_item_lookup[3]))
                {
                    $arr_request_item_lookup[3] += $request_item->quantity_display;
                }
                else
                {
                    $arr_request_item_lookup[3] = $request_item->quantity_display;
                }

                if (isset($arr_request_item_lookup[4]))
                {
                    $arr_request_item_lookup[4] += $request_item->quantity_display;
                }
                else
                {
                    $arr_request_item_lookup[4] = $request_item->quantity_display;
                }
            }
            else
            {
                $arr_product_id[$request_item->product_id] = $request_item->product_id;

                if (isset($arr_request_item_lookup[$request_item->product_id]))
                {
                    $arr_request_item_lookup[$request_item->product_id] += $request_item->quantity_display;
                }
                else
                {
                    $arr_request_item_lookup[$request_item->product_id] = $request_item->quantity_display;
                }
            }
        }

        $arr_product_id = array_values($arr_product_id);
        $request->arr_product = $this->core_model->get('product', $arr_product_id);

        foreach ($request->arr_product as $product)
        {
            $product->name = $product->name . ' (x' . number_format($arr_request_item_lookup[$product->id], 0, '', '') . ')';
        }

        // get tracking
        $arr_history = array();

        if ($request->status == 'Processing' || $request->status == 'Delivered')
        {
            if ($request->shipping_courier == 'EZ')
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
                    CURLOPT_POSTFIELDS =>"{\"awb\":\"{$request->number}\",\"eccompanyid\":\"NORM\",\"method\":\"2\"}",
                    CURLOPT_HTTPHEADER => array(
                        "Authorization: Basic Tk9STTpSOW9iR2VEM3F1Mmo=",
                        "Content-Type: text/plain"
                    ),
                ));

                $response = curl_exec($curl);

                curl_close($curl);

                $obj_shipping = json_decode($response);
                $arr_history = (isset($obj_shipping->error_id)) ? array() : array_reverse($obj_shipping->history);

                foreach ($arr_history as $history)
                {
                    $history->rowstate_name = $history->status;
                    $history->description = '';
                    $history->create_date = date('Y-m-d H:i:s', strtotime($history->date_time));
                }
            }
            elseif ($request->shipping_courier == 'ND' || $request->shipping_courier == 'REG')
            {
                $basepath = 'https://doit.anteraja.id/norm/tracking/';

                $arr_header = array();
                $arr_header[] = 'access-key-id: Anteraja_x_Norm';
                $arr_header[] = 'secret-access-key: oH5OZ4Z2jXMEJ6itJoksQZi5';
                $arr_header[] = 'Content-Type: application/json';

                $data = new stdClass();
                $data->waybill_no = $request->shipping_courier_tracking_id;

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
                $url = 'http://track.coresyssap.com/shipment/tracking/awb?awb_no=' . $request->shipping_courier_tracking_id . '&api_key=global';
                $curl = curl_init($url);

                curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'api_key: EliO_#_2020'));
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

                $history = curl_exec($curl);
                curl_close($curl);

                $arr_history = json_decode($history);

                $arr_history = ($arr_history == null) ? array() : $arr_history;
                $arr_history = (count($arr_history) > 0) ? array_reverse($arr_history) : $arr_history;
            }
        }

        if ($request->status == 'Processing')
        {
            $history = new stdClass();
            $history->rowstate_name = 'REQUEST PROCESSED';
            $history->create_date = date('Y-m-d H:i:s', $request->processed_date);
            $history->description = 'Your request has been processed and will be collected by courier.';
            $arr_history[] = clone $history;
        }

        $arr_data['title'] = 'Request';
        $arr_data['nav'] = 'Request Edit';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;

        $arr_data['request'] = $request;
        $arr_data['arr_product'] = $this->_get_product();
        $arr_data['arr_history'] = $arr_history;

        $this->load->view('request_edit', $arr_data);
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

            if (!isset($acl['request']) || $acl['request']->add <= 0)
            {
                throw new Exception('You have no access to add Administrator.');
            }

            $request_record = array();
            $arr_request_item = array();
            $shipping_id = 0;

            // get record from views
            foreach ($_POST as $k => $v)
            {
                $v = $this->security->xss_clean(trim($v));

                if ($k == 'request_item_request_item')
                {
                    $arr_request_item = json_decode($v);
                }
                elseif ($k == 'shipping_id')
                {
                    $shipping_id = $v;
                }
                else
                {
                    $request_record[$k] = ($k == 'date' || $k == 'birthdate') ? strtotime($v) : $v;
                }
            }

            $shipment = $this->core_model->get('shipment', $shipping_id);

            $request_record['shipping_province'] = $shipment->province;
            $request_record['shipping_city'] = $shipment->city;
            $request_record['shipping_district'] = $shipment->district;
            $request_record['shipping_district_code'] = $shipment->receiver_code;
            $request_record['shipping_courier'] = $shipment->name;
            $request_record['shipping_city_type'] = $shipment->number;
            $request_record['shipping_tlc'] = $shipment->receiver_code;

            $this->_validate_add($request_record);

            // Insert Database
            $request_id = $this->core_model->insert('request', $request_record);
            $request_record['id'] = $request_id;
            $request_record['last_query'] = $this->db->last_query();

            // generate number
            if (!isset($request_record['number']) || (isset($request_record['number']) && $request_record['number'] == ''))
            {
                $request_record['number'] = 'NORM-REQ' . str_pad($request_id, 6, 0, STR_PAD_LEFT);
                $this->core_model->update('request', $request_id, array('number' => $request_record['number']));
            }

            // add request_item
            $this->_update_request_item($request_id, $request_record, $arr_request_item);
            $this->_send_webshop_data($request_record, $arr_request_item);

            // add history
            $this->cms_function->add_log($this->_user, $request_record, 'add', 'request');

            $json['number'] = $request_record['number'];

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

    public function ajax_delete($request_id = 0)
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

            if (!isset($acl['request']) || $acl['request']->delete <= 0)
            {
                throw new Exception('You have no access to delete Administrator.');
            }

            if ($request_id <= 0)
            {
                throw new Exception();
            }

            $request = $this->core_model->get('request', $request_id);
            $updated = $_POST['updated'];
            $request_record = array();

            foreach ($request as $k => $v)
            {
                $request_record[$k] = $v;

                if ($k == 'updated' && $v != $updated)
                {
                    throw new Exception('This data has been updated by another request. Please refresh the page.');
                }
            }

            $this->_validate_delete($request_id);

            $this->core_model->delete('request', $request_id);
            $request_record['id'] = $request->id;
            $request_record['name'] = $request->name;
            $request_record['last_query'] = $this->db->last_query();

            // add history
            $this->cms_function->add_log($this->_user, $request_record, 'delete', 'request');

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

    public function ajax_edit($request_id = 0)
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

            if (!isset($acl['request']) || $acl['request']->edit <= 0)
            {
                throw new Exception('You have no access to edit Administrator.');
            }

            if ($request_id <= 0)
            {
                throw new Exception();
            }

            $request_record = array();

            $old_request = $this->core_model->get('request', $request_id);

            foreach ($old_request as $key => $value)
            {
                $old_request_record[$key] = $value;
            }

            // get record from views
            foreach ($_POST as $k => $v)
            {
                if ($k == 'updated' && $v != $old_request_record['updated'])
                {
                    throw new Exception('This request data has been updated by another account. Please refresh this page.');
                }
                else
                {
                    $v = $this->security->xss_clean(trim($v));

                    $request_record[$k] = ($k == 'date' || $k == 'birthdate') ? strtotime($v) : $v;
                }
            }

             if (isset($request_record['status']) && $request_record['status'] == 'Processing')
            {
                $request_record['processed_date'] = time();
            }

            if (isset($request_record['status']) && $request_record['status'] == 'Delivered')
            {
                $request_record['delivered_date'] = time();
            }

            $this->_validate_edit($request_id, $request_record);

            // Insert Database
            $this->core_model->update('request', $request_id, $request_record);
            $request_record['id'] = $request_id;
            $request_record['last_query'] = $this->db->last_query();

            // populate foreign field
            // if any
            $arr_table = array('request_item');
            $this->cms_function->update_foreign_field($arr_table, $request_record, 'request');

            // cek status
            $this->db->where('request_id', $request_id);
            $arr_request_item = $this->core_model->get('request_item');
            $arr_product_id = $this->cms_function->extract_records($arr_request_item, 'product_id');

            $arr_product = $this->core_model->get('product', $arr_product_id);
            $arr_product_lookup = array();
            $weight = 0;
            $product_name = '';
            $total_qty = 0;

            foreach ($arr_product as $product)
            {
                $arr_product_lookup[$product->id] = clone $product;
            }

            foreach ($arr_request_item as $request_item)
            {
                $weight += $request_item->quantity * $arr_product_lookup[$request_item->product_id]->weight;
                $total_qty += $request_item->quantity;

                if ($product_name == '')
                {
                    $product_name = $arr_product_lookup[$request_item->product_id]->name . '(x' . number_format($request_item->quantity, 0, '', '') . ')';
                }
                else
                {
                    $product_name .= ', ' . $arr_product_lookup[$request_item->product_id]->name . '(x' . number_format($request_item->quantity, 0, '', '') . ')';
                }
            }

            if ($old_request_record['status'] == 'Pending' && (isset($request_record['status']) && $request_record['status'] == 'Processing'))
            {
                // send data to shipping
                if ($old_request_record['shipping_courier'] == 'EZ' || $old_request_record['shipping_courier'] == 'J&T Regular')
                {
                    // send data to JNT
                    $key = 'AKe62df84bJ3d8e4b1hea2R45j11klsb';

                    $param = array(
                        'username' => 'NORM',
                        'api_key' => 'A5XSYE',
                        'orderid' => $old_request_record['number'],
                        'shipper_name' => 'NORM',
                        'shipper_contact' => 'Millah',
                        'shipper_phone'=> '+622145742832',
                        'shipper_addr'=> 'Jl. Kavling A6 no.42 rt 009/002, kecamatan koja kelurahan tugu utara, provinsi jakarta utara, kodepos 14260',
                        'origin_code'=> 'JKT',
                        'receiver_name'=> $old_request_record['shipping_name'],
                        'receiver_phone'=> $old_request_record['shipping_phone'],
                        'receiver_addr'=> $old_request_record['shipping_address_line_1'] . ' ' . $old_request_record['shipping_address_line_2'] . ' ' . $old_request_record['shipping_address_line_3'],
                        'receiver_zip'=> $old_request_record['shipping_postcode'],
                        'destination_code'=> $old_request_record['shipping_city_type'],
                        'receiver_area'=> $old_request_record['shipping_tlc'],
                        'qty'=> $total_qty,
                        'weight'=> ($weight / 1000 < 1) ? 1 : $weight / 1000,
                        'goodsdesc'=> $product_name,
                        'servicetype'=>'6',
                        'insurance'=> (0.2 / 100) * $old_request_record['subtotal'],
                        'requestdate'=> date('Y-m-d H:i:s'),
                        'item_name'=>'Package',
                        'expresstype'=>'1',
                        'goodsvalue'=> $old_request_record['subtotal'],
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

                    $this->core_model->update('request', $request_id, array('shipping_courier_tracking_id' => $arr_result[0]->awb_no));
                }
                elseif ($old_request_record['shipping_courier'] == 'REG' || $old_request_record['shipping_courier'] == 'ND')
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
                    $shipper->district = '31.71.07';
                    $shipper->address = 'Jl. Kavling A6 no.42 rt 009/002, kecamatan koja kelurahan tugu utara, provinsi jakarta utara, kodepos 14260';
                    $shipper->postcode = '10210';
                    $shipper->geoloc = '';

                    $receiver = new stdClass();
                    $receiver->name = $old_request_record['shipping_name'];
                    $receiver->phone = $old_request_record['shipping_phone'];
                    $receiver->email = $old_request_record['shipping_email'];
                    $receiver->district = $old_request_record['shipping_tlc'];
                    $receiver->address = $old_request_record['shipping_address_line_1'] . ' ' . $old_request_record['shipping_address_line_2'] . ' ' . $old_request_record['shipping_address_line_3'];
                    $receiver->postcode = $old_request_record['shipping_postcode'];
                    $receiver->geoloc = '';

                    $arr_item = array();
                    $item = new stdClass();

                    foreach ($arr_request_item as $request_item)
                    {
                        $item->item_name = ($arr_product_lookup[$request_item->product_id]) ? $arr_product_lookup[$request_item->product_id]->name . ' x' . number_format($request_item->quantity, 0, '', '') : '';
                        $item->declared_value = ($request_item->price <= 0) ? 39000 : $request_item->price;
                        $item->weight = ($arr_product_lookup[$request_item->product_id]) ? $arr_product_lookup[$request_item->product_id]->weight : '';
                        $item->weight = ($item->weight < 100) ? 100 : $item->weight;
                        $arr_item[] = clone $item;
                    }

                    $param = new stdClass();
                    $param->booking_id = $old_request_record['number'];
                    $param->service_code = $old_request_record['shipping_courier'];
                    $param->parcel_total_weight = ($weight <= 1000) ? 1000 : $weight;
                    $param->shipper = clone $shipper;
                    $param->receiver = clone $receiver;
                    $param->items = $arr_item;
                    $param->use_insurance = 1;
                    $param->declared_value = $old_request_record['subtotal'];

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

                    $this->core_model->update('request', $request_id, array('shipping_courier_tracking_id' => $result->content->waybill_no));
                }
                elseif ($old_request_record['shipping_courier'] == 'Westbike Messenger')
                {
                    $authentication = $this->_authenticate();
                    $delivery_order = $this->_submit_delivery_order($authentication, $old_request_record);
                    $this->_checkout($authentication, $delivery_order);

                    $this->core_model->update('request', $request_id, array('shipping_courier_tracking_id' => $delivery_order->id));
                }
                else
                {
                    // send data to SAP
                    $param = new stdClass();
                    $param->customer_code = 'CGK016269';
                    $param->awb_no = $old_request_record['number'];
                    $param->reference_no = $old_request_record['number'];
                    $param->pickup_name = 'Norm';
                    $param->pickup_address = 'Jalan Danau Toba no G2/149. Bendungan Hilir, Tanah Abang, Jakarta Pusat';
                    $param->pickup_phone = '021 4574 2832';
                    $param->pickup_district_code = 'JK00';
                    $param->service_type_code = $old_request_record['shipping_courier'];
                    $param->quantity = 1;
                    $param->weight = $weight;
                    $param->volumetric = '16x18x6';
                    $param->shipment_type_code = 'SHTPC';
                    $param->insurance_flag = 1;
                    $param->cod_flag = 1;
                    $param->shipper_name = $param->pickup_name;
                    $param->shipper_address = $param->pickup_address;
                    $param->shipper_phone = $param->pickup_phone;
                    $param->destination_district_code = $old_request_record['shipping_district_code'];
                    $param->receiver_name = $old_request_record['shipping_name'];
                    $param->receiver_address = $old_request_record['shipping_address_line_1'] . ' ' . $old_request_record['shipping_address_line_2'] . ' ' . $old_request_record['shipping_address_line_3'];
                    $param->receiver_phone = $old_request_record['shipping_phone'];
                    $param->receiver_postal_code = $old_request_record['shipping_postcode'];
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
                        throw new Exception($result->msg);
                    }

                    $this->core_model->update('request', $request_id, array('shipping_courier_tracking_id' => $old_request_record['number']));
                }
            }

            // add user_history
            $this->cms_function->add_log($this->_user, $request_record, 'edit', 'request');

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

    public function ajax_print_eticket()
    {
        $json['status'] = 'success';

        try
        {
            $request_id = $this->input->post('request_id');
            $product_id = $this->input->post('product_id');
            $request = $this->core_model->get('request', $request_id);

            $patient_name = $request->shipping_name;

            $date = date('d M', $request->date);
            $year = date('Y', $request->date);
            $year_expiry = date('Y', $request->date) + 1;

            $consultation_number = '-';

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

    public function ajax_print_shipping($request_id)
    {
        $json['status'] = 'success';

        try
        {
            $acl = $this->_acl;

            if ($request_id <= 0)
            {
                throw new Exception();
            }

            $request = $this->core_model->get('request', $request_id);
            $request->date_display = date('d M Y', $request->date);
            $request->insurance = floor((0.2 / 100) * $request->subtotal);
            $request->insurance_display = 'IDR ' . number_format($request->insurance, 0, '.', ',');
            $request->shipping_display = 'IDR ' . number_format($request->shipping, 0, '.', ',');
            $request->weight = 0;
            $request->product_list = '';

            $this->db->where('request_id', $request->id);
            $arr_request_item = $this->core_model->get('request_item');
            $arr_product_id = $this->cms_function->extract_records($arr_request_item, 'product_id');

            $arr_product = $this->core_model->get('product', $arr_product_id);

            foreach ($arr_product as $product)
            {
                $arr_product_lookup[$product->id] = clone $product;
            }

            foreach ($arr_request_item as $request_item)
            {
                $request_item->quantity_display = number_format($request_item->quantity, 0, '', '');
                $request_item->product_name = (isset($arr_product_lookup[$request_item->product_id])) ? $arr_product_lookup[$request_item->product_id]->name : '';

                $request->weight += (isset($arr_product_lookup[$request_item->product_id])) ? ($arr_product_lookup[$request_item->product_id]->weight * $request_item->quantity) : 0;

                if ($request->product_list != '')
                {
                    $request->product_list .= ', ' . $request_item->product_name . ' (x' . $request_item->quantity_display . ')';

                    continue;
                }

                $request->product_list = $request_item->product_name . ' (x' . $request_item->quantity_display . ')';
            }

            $request->arr_request_item = $arr_request_item;
            $request->patient_name = '';
            $request->courier = 'SAP';

            if ($request->shipping_courier == 'REG' || $request->shipping_courier == 'ND' || $request->shipping_courier == 'SD')
            {
                $request->courier = 'Anteraja';
            }
            elseif ($request->shipping_courier == 'EZ')
            {
                $request->courier = 'JNT';
            }

            $arr_data['title'] = 'Print Receipt';
            $arr_data['csrf'] = $this->cms_function->generate_csrf();
            $arr_data['account'] = $this->_user;
            $arr_data['setting'] = $this->_setting;
            $arr_data['acl'] = $this->_acl;

            $arr_data['order'] = $request;

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

    public function ajax_update($request_id = 0)
    {
        $json['status'] = 'success';

        try
        {
            $this->db->trans_start();

            $acl = $this->_acl;

            if ($request_id <= 0)
            {
                throw new Exception();
            }

            if ($this->session->userdata('user_id') != $this->_user->id)
            {
                throw new Exception('Session Expired. Please log out first.');
            }

            $request = $this->core_model->get('request', $request_id);
            $request_record = array();

            $request_record['shipped'] = 1;
            $request_record['shipped_date'] = time();
            $this->core_model->update('request', $request->id, $request_record);

            if (time() >= 1640970000)
            {
                $this->db->simple_query("USE `webshop_4_selestialbrands`");
            }
            else
            {
                $this->db->simple_query("USE `webshop_4_selestial`");
            }

            $this->db->where('number', $request->number);
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

    private function _send_webshop_data($request_record, $arr_request_item)
    {
        if (time() >= 1640970000)
        {
            $this->db->simple_query("USE `webshop_4_selestialbrands`");
        }
        else
        {
            $this->db->simple_query("USE `webshop_4_selestial`");
        }

        $arr_product = $this->core_model->get('product');
        $arr_product_lookup = array();

        foreach ($arr_product as $product)
        {
            $arr_product_lookup[$product->id] = clone $product;
        }

        $sale_record = array();

        $sale_record['customer_id'] = 1;
        $sale_record['location_id'] = 1;
        $sale_record['channel_id'] = 7;
        $sale_record['brand_id'] = 2;

        $sale_record['number'] = $request_record['number'];
        $sale_record['date'] = $request_record['date'];
        $sale_record['name'] = $request_record['name'];
        $sale_record['payment_date'] = time();
        $sale_record['status'] = 'Paid';
        $sale_record['fulfillment_status'] = 'Pending';

        $sale_record['shipping_name'] = $request_record['shipping_name'];
        $sale_record['shipping_email'] = $request_record['shipping_email'];
        $sale_record['shipping_phone'] = $request_record['shipping_phone'];
        $sale_record['shipping_address_line_1'] = $request_record['shipping_address_line_1'];
        $sale_record['shipping_address_line_2'] = $request_record['shipping_address_line_2'];
        $sale_record['shipping_address_line_3'] = $request_record['shipping_address_line_3'];
        $sale_record['shipping_postcode'] = $request_record['shipping_postcode'];
        $sale_record['shipping_province'] = $request_record['shipping_province'];
        $sale_record['shipping_city'] = $request_record['shipping_city'];
        $sale_record['shipping_district'] = $request_record['shipping_district'];

        $sale_record['author_id'] = 0;
        $sale_record['author_name'] = 'System API';

        $sale_record = $this->cms_function->populate_foreign_field($sale_record['location_id'], $sale_record, 'location');
        $sale_record = $this->cms_function->populate_foreign_field($sale_record['brand_id'], $sale_record, 'brand');
        $sale_record = $this->cms_function->populate_foreign_field($sale_record['channel_id'], $sale_record, 'channel');
        $sale_record = $this->cms_function->populate_foreign_field($sale_record['customer_id'], $sale_record, 'customer');
        $sale_id = $this->core_model->insert('sale', $sale_record);

        $arr_webshop_product_id_lookup = array();
        $arr_webshop_product_id_lookup[1] = 10; // Finasteride
        $arr_webshop_product_id_lookup[3] = 11; // Hair Tonic
        $arr_webshop_product_id_lookup[4] = 13; // Anti DHT Shampoo
        $arr_webshop_product_id_lookup[6] = 14; // Day Cream
        $arr_webshop_product_id_lookup[7] = 15; // Night Cream 1
        $arr_webshop_product_id_lookup[8] = 16; // Night Cream 2
        $arr_webshop_product_id_lookup[16] = 12; // Stamina Cream

        $arr_webshop_product_id_lookup[11] = 197; // Complete Hair Loss Kit
        $arr_webshop_product_id_lookup[13] = 198; // Starter Hair Loss kit

        $arr_webshop_product_id_lookup[18] = 1; // Face Wash
        $arr_webshop_product_id_lookup[19] = 3; // Face Scrub
        $arr_webshop_product_id_lookup[20] = 2; // Moisturizer
        $arr_webshop_product_id_lookup[21] = 5; // Shampoo
        $arr_webshop_product_id_lookup[22] = 4; // Body Wash
        $arr_webshop_product_id_lookup[32] = 6; // Water Resistant Utility Bag
        $arr_webshop_product_id_lookup[35] = 7; // Summer Sol
        $arr_webshop_product_id_lookup[36] = 8; // White Night

        $arr_webshop_product_id_lookup[23] = 199; // Ultimate Gentleman Set
        $arr_webshop_product_id_lookup[24] = 201; // Complete Maintenance Set
        $arr_webshop_product_id_lookup[25] = 203; // Complete Shower Set
        $arr_webshop_product_id_lookup[26] = 200; // Ultimate Gentleman Set + Bag
        $arr_webshop_product_id_lookup[27] = 202; // Complete Maintenance Set + Bag
        $arr_webshop_product_id_lookup[28] = 204; // Complete Shower Set + Bag
        $arr_webshop_product_id_lookup[29] = 205; // Starter Maintenance Set
        $arr_webshop_product_id_lookup[30] = 206; // Daily Maintenance Set
        $arr_webshop_product_id_lookup[31] = 207; // Aging maintenance Set
        $arr_webshop_product_id_lookup[33] = 208; // Ultimate Gift Set
        $arr_webshop_product_id_lookup[34] = 209; // Ultimate Gift Set + Bag
        $arr_webshop_product_id_lookup[37] = 210; // Spektrum Set

        $arr_webshop_product_id_lookup[38] = 211;
        $arr_webshop_product_id_lookup[39] = 212;

        foreach ($arr_request_item as $request_item)
        {
            $sale_item_record = array();

            $sale_item_record['product_id'] = (isset($arr_webshop_product_id_lookup[$request_item->product_id])) ? $arr_webshop_product_id_lookup[$request_item->product_id] : 0;
            $sale_item_record['location_id'] = (isset($sale_record['location_id'])) ? $sale_record['location_id'] : 0;
            $sale_item_record['sale_id'] = $sale_id;
            $sale_item_record['channel_id'] = (isset($sale_record['channel_id'])) ? $sale_record['channel_id'] : 0;
            $sale_item_record['customer_id'] = (isset($sale_record['customer_id'])) ? $sale_record['customer_id'] : 0;
            $sale_item_record['brand_id'] = (isset($arr_product_lookup[$sale_item_record['product_id']])) ? $arr_product_lookup[$sale_item_record['product_id']]->brand_id : 0;
            $sale_item_record['category_id'] = (isset($arr_product_lookup[$sale_item_record['product_id']])) ? $arr_product_lookup[$sale_item_record['product_id']]->category_id : 0;

            $sale_item_record['quantity'] = $request_item->quantity;

            $sale_item_record['location_type'] = (isset($sale_record['location_type'])) ? $sale_record['location_type'] : '';
            $sale_item_record['location_number'] = (isset($sale_record['location_number'])) ? $sale_record['location_number'] : '';
            $sale_item_record['location_name'] = (isset($sale_record['location_name'])) ? $sale_record['location_name'] : '';
            $sale_item_record['location_date'] = (isset($sale_record['location_date'])) ? $sale_record['location_date'] : 0;
            $sale_item_record['location_status'] = (isset($sale_record['location_status'])) ? $sale_record['location_status'] : '';

            $sale_item_record['sale_type'] = (isset($sale_record['type'])) ? $sale_record['type'] : '';
            $sale_item_record['sale_number'] = (isset($sale_record['number'])) ? $sale_record['number'] : '';
            $sale_item_record['sale_name'] = (isset($sale_record['name'])) ? $sale_record['name'] : '';
            $sale_item_record['sale_date'] = (isset($sale_record['date'])) ? $sale_record['date'] : 0;
            $sale_item_record['sale_status'] = (isset($sale_record['status'])) ? $sale_record['status'] : '';

            $sale_item_record['brand_type'] = (isset($arr_product_lookup[$sale_item_record['product_id']])) ? $arr_product_lookup[$sale_item_record['product_id']]->brand_type : '';
            $sale_item_record['brand_number'] = (isset($arr_product_lookup[$sale_item_record['product_id']])) ? $arr_product_lookup[$sale_item_record['product_id']]->brand_number : '';
            $sale_item_record['brand_name'] = (isset($arr_product_lookup[$sale_item_record['product_id']])) ? $arr_product_lookup[$sale_item_record['product_id']]->brand_name : '';
            $sale_item_record['brand_date'] = (isset($arr_product_lookup[$sale_item_record['product_id']])) ? $arr_product_lookup[$sale_item_record['product_id']]->brand_date : 0;
            $sale_item_record['brand_status'] = (isset($arr_product_lookup[$sale_item_record['product_id']])) ? $arr_product_lookup[$sale_item_record['product_id']]->brand_status : '';

            $sale_item_record['category_type'] = (isset($arr_product_lookup[$sale_item_record['product_id']])) ? $arr_product_lookup[$sale_item_record['product_id']]->category_type : '';
            $sale_item_record['category_number'] = (isset($arr_product_lookup[$sale_item_record['product_id']])) ? $arr_product_lookup[$sale_item_record['product_id']]->category_number : '';
            $sale_item_record['category_name'] = (isset($arr_product_lookup[$sale_item_record['product_id']])) ? $arr_product_lookup[$sale_item_record['product_id']]->category_name : '';
            $sale_item_record['category_date'] = (isset($arr_product_lookup[$sale_item_record['product_id']])) ? $arr_product_lookup[$sale_item_record['product_id']]->category_date : 0;
            $sale_item_record['category_status'] = (isset($arr_product_lookup[$sale_item_record['product_id']])) ? $arr_product_lookup[$sale_item_record['product_id']]->category_status : '';

            $sale_item_record['product_type'] = (isset($arr_product_lookup[$sale_item_record['product_id']])) ? $arr_product_lookup[$sale_item_record['product_id']]->type : '';
            $sale_item_record['product_number'] = (isset($arr_product_lookup[$sale_item_record['product_id']])) ? $arr_product_lookup[$sale_item_record['product_id']]->number : '';
            $sale_item_record['product_name'] = (isset($arr_product_lookup[$sale_item_record['product_id']])) ? $arr_product_lookup[$sale_item_record['product_id']]->name : '';
            $sale_item_record['product_date'] = (isset($arr_product_lookup[$sale_item_record['product_id']])) ? $arr_product_lookup[$sale_item_record['product_id']]->date : 0;
            $sale_item_record['product_status'] = (isset($arr_product_lookup[$sale_item_record['product_id']])) ? $arr_product_lookup[$sale_item_record['product_id']]->status : '';

            $sale_item_record['customer_type'] = (isset($sale_record['customer_type'])) ? $sale_record['customer_type'] : '';
            $sale_item_record['customer_number'] = (isset($sale_record['customer_number'])) ? $sale_record['customer_number'] : '';
            $sale_item_record['customer_name'] = (isset($sale_record['customer_name'])) ? $sale_record['customer_name'] : '';
            $sale_item_record['customer_date'] = (isset($sale_record['customer_date'])) ? $sale_record['customer_date'] : 0;
            $sale_item_record['customer_status'] = (isset($sale_record['customer_status'])) ? $sale_record['customer_status'] : '';

            $sale_item_record['channel_type'] = (isset($sale_record['channel_type'])) ? $sale_record['channel_type'] : '';
            $sale_item_record['channel_number'] = (isset($sale_record['channel_number'])) ? $sale_record['channel_number'] : '';
            $sale_item_record['channel_name'] = (isset($sale_record['channel_name'])) ? $sale_record['channel_name'] : '';
            $sale_item_record['channel_date'] = (isset($sale_record['channel_date'])) ? $sale_record['channel_date'] : 0;
            $sale_item_record['channel_status'] = (isset($sale_record['channel_status'])) ? $sale_record['channel_status'] : '';

            $sale_item_record['author_id'] = 0;
            $sale_item_record['author_name'] = 'System API';

            $sale_item_id = $this->core_model->insert('sale_item', $sale_item_record);
        }
    }

    private function _update_request_item($request_id, $request_record, $arr_request_item)
    {
        foreach ($arr_request_item as $request_item)
        {
            $request_item_record = array();

            $request_item_record['request_id'] = $request_id;

            $request_item_record['product_id'] = $request_item->product_id;
            $request_item_record['price'] = $request_item->price;
            $request_item_record['quantity'] = $request_item->quantity;
            $request_item_record['total'] = $request_item->total;

            $request_item_record['request_type'] = (isset($request_record['type'])) ? $request_record['type'] :'';
            $request_item_record['request_number'] = (isset($request_record['number'])) ? $request_record['number'] :'';
            $request_item_record['request_name'] = (isset($request_record['name'])) ? $request_record['name'] :'';
            $request_item_record['request_date'] = (isset($request_record['date'])) ? $request_record['date'] : 0;
            $request_item_record['request_status'] = (isset($request_record['status'])) ? $request_record['status'] :'';

            $request_item_record = $this->cms_function->populate_foreign_field($request_item_record['product_id'], $request_item_record, 'product');

            $this->core_model->insert('request_item', $request_item_record);
        }
    }

    private function _validate_add($record)
    {
    }

    private function _validate_delete($request_id)
    {
        $this->db->where('deletable <=', 0);
        $this->db->where('id', $request_id);
        $count_request = $this->core_model->count('request');

        if ($count_request > 0)
        {
            throw new Exception('Data cannot be deleted.');
        }
    }

    private function _validate_edit($request_id, $record)
    {
        // check editable
        $this->db->where('editable <=', 0);
        $this->db->where('id', $request_id);
        $count_request = $this->core_model->count('request');

        if ($count_request > 0)
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
        $params = '{"pickupAddress": {"address": "Jalan Danau Toba No. G2/149, Bendungan Hilir,","description": "Samping Anna Suite","pickupPhone": "6282193222215","pickupName": "Norm","longitude": "-6.210210884542241","latitude": "106.81193902143738","cityId": 1,"cityCode": 7,"zoneId": 100,"zoneCode": "11179"},"deliveryAddress": {"address": "'. $address .'","description": "","pickupPhone": "6282193222215","pickupName": "Norm","longitude": 0,"latitude": 0,"receiverName": "'. $old_order_record['shipping_name'] .'","receiverEmail": "'. $old_order_record['shipping_email'] .'","cityId": 1,"receiverPhone": "'. $old_order_record['shipping_phone'] .'","cityCode": 7,"zoneId": "'. trim($old_order_record['shipping_city_type']) .'","zoneCode": "'. trim($old_order_record['shipping_district_code']) .'"},"serviceId": 22,"serviceCode": "G-SameDay","itemDescription": "Skincare Norm","weight": 1,"volume": 100,"height": 30,"width": 20,"lengths": 10,"externalRefNum": "'. $old_order_record['number'] .'"}';

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