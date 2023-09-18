<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Xendit extends CI_Controller
{
    private $_setting;
    private $_patient;
    private $_api_key;
    private $_api_endpoint_url;

    public function __construct()
    {
        parent:: __construct();

        $this->_setting = $this->setting_model->load();
        $this->_api_key = '550a0cd295be34497bac8ae03bb19567';
        $this->_api_endpoint_url = 'https://hiperion.haistar.co.id/';
    }




    /* Public Function Area */
    public function callback()
    {
        $json['status'] = 'success';

        try
        {
            set_time_limit(0);

            $this->db->trans_start();

            $json_result = file_get_contents('php://input');

            $result = json_decode($json_result);

            $fees = $result->paid_amount - $result->adjusted_received_amount;

            if ($result->payment_method == 'CREDIT_CARD')
            {
                $fees = (((2.9 / 100) * $result->paid_amount) + 2000);
                $fees = floor($fees + (0.1 * $fees));
            }

            $order_record = array();
            $order_record['payment_date'] = strtotime($result->paid_at);
            $order_record['payment_status'] = ($result->status == 'PAID') ? 'Paid' : $result->status;
            $order_record['payment_status_message'] = 'Paid with Xendit';

            $this->db->where('payment_id', $result->external_id);
            $this->core_model->update('order', 0, $order_record);

            // send email
            $this->db->where('payment_id', $result->external_id);
            $arr_order = $this->core_model->get('order');

            if (count($arr_order) > 0)
            {
                $order = $arr_order[0];

                $user_type = '';

                if ($order->author_id > 0)
                {
                    $user = $this->core_model->get('user', $order->author_id);

                    $user_type = $user->position;
                }

                $this->db->where('order_id', $order->id);
                $arr_order_item = $this->core_model->get('order_item');
                $subtotal = 0;
                $discount_item = 0;

                foreach ($arr_order_item as $order_item)
                {
                    $order_item->quantity_display = number_format($order_item->quantity, 0, '', '');
                    $order_item->price_display = 'IDR ' . number_format($order_item->price, 0, ',', '.');
                    $order_item->discount_display = 'IDR ' . number_format($order_item->discount, 0, ',', '.');
                    $order_item->total_display = 'IDR ' . number_format($order_item->total, 0, ',', '.');

                    $subtotal += $order_item->total;
                    $discount_item += $order_item->discount;
                }

                $order->discount = $order->discount - $discount_item;
                $order->discount = ($order->discount <= 0) ? 0 : $order->discount;

                $order->subtotal = $order->subtotal - $discount_item;

                $order->subtotal_display = 'IDR ' . number_format($order->subtotal, 0, ',', '.');
                $order->discount_display = 'IDR ' . number_format($order->discount, 0, ',', '.');
                $order->shipping_display = 'IDR ' . number_format($order->shipping, 0, ',', '.');
                $order->grand_total_display = 'IDR ' . number_format($order->grand_total, 0, ',', '.');

                $order->patient_name = ($order->patient_name == '') ? $order->shipping_name : $order->patient_name;

                if ($result->status == 'PAID')
                {
                    $record = array();
                    $record['order'] = $order;
                    $record['arr_order_item'] = $arr_order_item;

                    $subject = 'Terima kasih telah memesan di Norm';
                    $message = $this->load->view('email/thankyou_purchase', $record, true);

                    $this->cms_function->load_email_library($this->_setting, $order->shipping_email, array(), $subject, $message, 'html');

                    $this->db->where('order_id', $order->id);
                    $order->arr_order_item = $this->core_model->get('order_item');

                    // send data to haistar if location == haistar
                    if ($order->location == 'Haistar')
                    {
                        $arr_product = $this->core_model->get('product');
                        $arr_product_lookup = array();
                        $weight = 0;
                        $total_qty = 0;
                        $product_name = '';
                        $courier = '';
                        $delivery_type = '';
                        $awb_number = '';

                        foreach ($arr_product as $product)
                        {
                            $arr_product_lookup[$product->id] = clone $product;
                        }

                        foreach ($order->arr_order_item as $order_item)
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

                        // generate awb number
                        // send data to shipping
                        if ($order->shipping_courier == 'EZ' || $order->shipping_courier == 'J&T Regular')
                        {
                            // send data to JNT
                            $key = 'AKe62df84bJ3d8e4b1hea2R45j11klsb';

                            $param = array(
                                'username' => 'NORM',
                                'api_key' => 'A5XSYE',
                                'orderid' => $order->number,
                                'shipper_name' => 'NORM',
                                'shipper_contact' => 'Millah',
                                'shipper_phone'=> '+622145742832',
                                'shipper_addr'=> 'Kw. Industri Pulogadung, JL. Pulo Kambing Raya KAV. II E No.08',
                                'origin_code'=> 'JKT',
                                'receiver_name'=> $order->shipping_name,
                                'receiver_phone'=> $order->shipping_phone,
                                'receiver_addr'=> $order->shipping_address_line_1 . ' ' . $order->shipping_address_line_2 . ' ' . $order->shipping_address_line_3,
                                'receiver_zip'=> $order->shipping_postcode,
                                'destination_code'=> $order->shipping_city_type,
                                'receiver_area'=> $order->shipping_tlc,
                                'qty'=> $total_qty,
                                'weight'=> ($weight / 1000 < 1) ? 1 : $weight / 1000,
                                'goodsdesc'=> 'Norm Product',
                                'servicetype'=>'6',
                                'insurance'=> (0.2 / 100) * $order->subtotal,
                                'orderdate'=> date('Y-m-d H:i:s'),
                                'item_name'=>'Package',
                                'expresstype'=>'1',
                                'goodsvalue'=> $order->subtotal,
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

                            $awb = json_decode($price);
                            $arr_awb = $awb->detail;
                            $json['awb'] = $awb;

                            $awb_number = (isset($arr_awb[0]->awb_no)) ? $arr_awb[0]->awb_no : '';
                            $courier = 'JNT';
                            $delivery_type = 9;

                            $this->core_model->update('order', $order->id, array('status' => 'Processing', 'shipping_courier_tracking_id' => $arr_awb[0]->awb_no));
                        }
                        elseif ($order->shipping_courier == 'REG' || $order->shipping_courier == 'ND' || $order->shipping_courier == 'SD')
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
                            $shipper->email = 'sugi@selestialbrands.com';
                            $shipper->district = '31.75.02';
                            $shipper->address = 'Kw. Industri Pulogadung, JL. Pulo Kambing Raya KAV. II E No.08';
                            $shipper->postcode = '13920';
                            $shipper->geoloc = '';

                            $receiver = new stdClass();
                            $receiver->name = $order->shipping_name;
                            $receiver->phone = $order->shipping_phone;
                            $receiver->email = $order->shipping_email;
                            $receiver->district = $order->shipping_tlc;
                            $receiver->address = $order->shipping_address_line_1 . ' ' . $order->shipping_address_line_2 . ' ' . $order->shipping_address_line_3;
                            $receiver->postcode = $order->shipping_postcode;
                            $receiver->geoloc = '';

                            $arr_item = array();
                            $item = new stdClass();

                            foreach ($order->arr_order_item as $order_item)
                            {
                                $item->item_name = ($arr_product_lookup[$order_item->product_id]) ? $arr_product_lookup[$order_item->product_id]->name . ' x' . number_format($order_item->quantity, 0, '', '') : '';
                                $item->declared_value = ($order_item->price <= 0) ? 39000 : $order_item->price;
                                $item->weight = ($arr_product_lookup[$order_item->product_id]) ? $arr_product_lookup[$order_item->product_id]->weight : '';
                                $item->weight = ($item->weight < 100) ? 100 : $item->weight;
                                $arr_item[] = clone $item;
                            }

                            $param = new stdClass();
                            $param->booking_id = $order->number;
                            $param->service_code = $order->shipping_courier;
                            $param->parcel_total_weight = ($weight <= 1000) ? 1000 : $weight;
                            $param->shipper = clone $shipper;
                            $param->receiver = clone $receiver;
                            $param->items = $arr_item;
                            $param->use_insurance = 1;
                            $param->declared_value = $order->subtotal;

                            $payload = json_encode($param);

                            $curl = curl_init($basepath);
                            curl_setopt($curl, CURLOPT_HTTPHEADER, $arr_header);
                            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                            curl_setopt($curl, CURLOPT_POST, true);
                            curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);

                            $price = curl_exec($curl);
                            curl_close($curl);

                            $awb = json_decode($price);
                            $json['awb'] = $awb;

                            $awb_number = (isset($awb->content->waybill_no)) ? $awb->content->waybill_no : '';
                            $courier = 'AnterAja';

                            $arr_delivery_lookup = array();
                            $arr_delivery_lookup['REG'] = 100;
                            $arr_delivery_lookup['ND'] = 74;
                            $arr_delivery_lookup['SD'] = 119;

                            $delivery_type = (isset($arr_delivery_lookup[$order->shipping_courier])) ? $arr_delivery_lookup[$order->shipping_courier] : 100;

                            $this->core_model->update('order', $order->id, array('status' => 'Processing', 'shipping_courier_tracking_id' => $awb->content->waybill_no));
                        }

                        // send data to haistar
                        $signature = $this->_get_signature();

                        $arr_code_product_id_lookup = array();
                        $arr_code_product_id_lookup[18] = 'NPRO-000015'; // Face Wash
                        $arr_code_product_id_lookup[19] = 'NPRO-000017'; // Face Scrub
                        $arr_code_product_id_lookup[20] = 'NPRO-000016'; // Moisturizer
                        $arr_code_product_id_lookup[21] = 'NPRO-000019'; // Shampoo
                        $arr_code_product_id_lookup[22] = 'NPRO-000018'; // Body Wash
                        $arr_code_product_id_lookup[23] = 'NKIT-000020'; // Ultimate Gentleman Set
                        $arr_code_product_id_lookup[24] = 'NKIT-000021'; // Complete Maintenance Set
                        $arr_code_product_id_lookup[25] = 'NKIT-000022'; // Complete Shower Set
                        $arr_code_product_id_lookup[26] = 'NKIT-000043'; // Ultimate Gentleman Set + Bag
                        $arr_code_product_id_lookup[27] = 'NKIT-000046'; // Complete Maintenance Set + Bag
                        $arr_code_product_id_lookup[28] = 'NKIT-000047'; // Complete Shower Set + Bag
                        $arr_code_product_id_lookup[29] = 'NKIT-000028'; // Starter Maintenance Set
                        $arr_code_product_id_lookup[30] = 'NKIT-000029'; // Daily Maintenance Set
                        $arr_code_product_id_lookup[31] = 'NKIT-000045'; // Aging maintenance Set
                        $arr_code_product_id_lookup[32] = 'NPRO-000044'; // Water Resistant Utility Bag
                        $arr_code_product_id_lookup[33] = 'NKIT-000052'; // Ultimate Gift Set
                        $arr_code_product_id_lookup[34] = 'NKIT-000053'; // Ultimate Gift Set + bag
                        $arr_code_product_id_lookup[35] = 'NPRO-000050'; // Summer Sol
                        $arr_code_product_id_lookup[36] = 'NPRO-000051'; // White Night
                        $arr_code_product_id_lookup[37] = 'NKIT-000054'; // Spektrum Set

                        $arr_code_product_id_lookup[38] = 'NPRO-000055';
                        $arr_code_product_id_lookup[39] = 'NPRO-000056';

                        $curl = curl_init();

                        $arr_items = array();

                        foreach ($order->arr_order_item as $order_item)
                        {
                            $item = new stdClass();
                            $item->item_code = $arr_code_product_id_lookup[$order_item->product_id];
                            $item->quantity = $order_item->quantity;
                            $item->unit_price = number_format($order_item->price, 0, '', '');
                            $arr_items[] = clone $item;
                        }

                        $record = array();

                        $record['apikey'] = $this->_api_key;
                        $record['location'] = 'LOCLN';
                        $record['code'] = $order->number;
                        $record['order_date'] = date('Y-m-d H:i:s', time());
                        $record['channel_id'] = 'WEB';
                        $record['courier_name'] = $courier;
                        $record['delivery_type_name'] = $delivery_type;
                        $record['waybill_number'] = $awb_number;
                        $record['stock_type_name'] = 'MULTI CHANNEL';
                        $record['payment_type'] = 'NON COD';
                        $record['cod_price'] = 0;
                        $record['total_price'] = number_format($order->grand_total, 0, '', '');
                        $record['remark'] = 'Fragile. Handle with care.';

                        $record['recipient_name'] = $order->shipping_name;
                        $record['recipient_postal_code'] = $order->shipping_postcode;
                        $record['recipient_phone'] = $order->shipping_phone;
                        $record['recipient_email'] = $order->shipping_email;
                        $record['recipient_address'] = $order->shipping_address_line_1 . ' ' . $order->shipping_address_line_2 . ' ' . $order->shipping_address_line_3;
                        $record['recipient_country'] = 'Indonesia';
                        $record['recipient_province'] = $order->shipping_province;
                        $record['recipient_city'] = $order->shipping_city;
                        $record['recipient_district'] = $order->shipping_district;

                        $record['stock_source'] = 'GOOD STOCK';
                        $record['order_type'] = 'Sales Order';
                        $record['dfod_price'] = 0;
                        $record['shipping_price'] = number_format($order->shipping, 0, '', '');
                        $record['items'] = $arr_items;

                        // https://hiperiondev.haistar.co.id/
                        curl_setopt_array($curl, array(
                            CURLOPT_URL => $this->_api_endpoint_url . '/Push_order/?apikey=' . $this->_api_key,
                            CURLOPT_RETURNTRANSFER => true,
                            CURLOPT_ENCODING => '',
                            CURLOPT_MAXREDIRS => 10,
                            CURLOPT_TIMEOUT => 0,
                            CURLOPT_FOLLOWLOCATION => true,
                            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                            CURLOPT_CUSTOMREQUEST => 'POST',
                            CURLOPT_POSTFIELDS => json_encode($record),
                            CURLOPT_HTTPHEADER => array(
                                'Apikey: ' . $this->_api_key,
                                'Content-Type: application/json',
                                'x-authorization: ' . $signature,
                            ),
                        ));

                        $response = curl_exec($curl);
                        $json['response_haistar'] = $response;

                        curl_close($curl);
                    }

                    // update reseller status
                    if ($order->user_id > 0)
                    {
                        $user_record = array();
                        $user_record['status'] = 'Active';

                        $this->core_model->update('user', $order->user_id, $user_record);

                        // send email reseller

                        $subject = 'Akun reseller kamu sudah aktif.';
                        $message = 'Halo ' . $order->user_name . '\n\nTerima kasih sudah melakukan pembelian produk kami.\nSemoga kamu dapat merasakan pengalaman menggunakan produk norm.\n\nKami sudah mengaktifkan akun reseller kamu. silakan masuk ke agent.norm.id dan kamu sudah bisa melakukan transaksi.\n\nJangan lupa lengkapi data diri kamu ya.\n\nThank You\nBest Regards\n\n\nAnya\nCare Specialist Norm.';

                        $this->cms_function->load_email_library($this->_setting, $order->shipping_email, array(), $subject, $message, 'text');
                    }

                    // send data to facebook
                    $this->load->library('user_agent');

                    $ip_address = $this->cms_function->get_ip_address();

                    // hash customer data
                    $email_hash = hash('sha256', $order->shipping_email);
                    $time = time() - 300;
                    $data = '[{"event_id": "'. $order->number .'","event_name": "Purchase","event_time": '. $time .',"action_source": "website","opt_out": false,"user_data": {"client_ip_address":"'. $ip_address .'","client_user_agent":"'. $this->agent->agent_string() .'","em": ["'. $email_hash .'"],"country": ["3843971dcfdee5083e6289e1bbdbb003e538b5a8a668fc43ae4f19d415ac18a2"]},"custom_data": {"currency": "IDR","value": "'. $order->subtotal .'","order_id": "'. $order->number .'"}}]';

                    $curl = curl_init();

                    curl_setopt_array($curl, array(
                        CURLOPT_URL => 'https://graph.facebook.com/v11.0/326385042688014/events',
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => '',
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 0,
                        CURLOPT_FOLLOWLOCATION => true,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => 'POST',
                        CURLOPT_POSTFIELDS => array('access_token' => 'EAAG4EM4N2tEBABkxxd3nlFoXkLAoK6sUugOQT2EYFFCDmv0tGIN01T6YkZA5wyfg7bE0YZAIjM8fth0xx19LFdTOjviE85T7cAJwwJHQ5dRawzAJcDPZB3hR6DZAhQF9nuZAPgcrwelZByOBscvmkZCcSjUYmyIr4ddXXt8nc5nsVBexzAcZB5hU','data' => $data, 'test_event_code' => 'TEST90859'),
                    ));

                    $response = curl_exec($curl);
                    curl_close($curl);

                    $json['response_graph_api'] = $response;
                    $json['fb_data'] = $data;
                }

                // insert order to webshop
                $this->db->where('payment_id', $result->external_id);
                $arr_order = $this->core_model->get('order');

                if (count($arr_order) > 0 && $result->status == 'PAID')
                {
                    $arr_customer_lookup = array();

                    $order = $arr_order[0];
                    $order->shipping_email = strtolower($order->shipping_email);
                    $order->discount_item = 0;

                    foreach ($arr_order_item as $order_item)
                    {
                        $order_item->additional_data = '';
                        $order->discount_item += $order_item->discount;

                        if ($order_item->product_id == 10 || $order_item->product_id == 12)
                        {
                            $this->db->where('patient_id', $order->patient_id);
                            $arr_consultation = $this->core_model->get('consultation');
                            $arr_consultation_id = $this->cms_function->extract_records($arr_consultation, 'id');

                            if (count($arr_consultation_id) > 0)
                            {
                                $this->db->select('product_id');
                                $this->db->where_in('consultation_id', $arr_consultation_id);
                                $arr_consultation_product = $this->core_model->get('consultation_product');

                                foreach ($arr_consultation_product as $consultation_product)
                                {
                                    if ($consultation_product->product_id == 7)
                                    {
                                        $order_item->additional_data = 'Night Cream 1';
                                    }
                                    elseif ($consultation_product->product_id == 8)
                                    {
                                        $order_item->additional_data = 'Night Cream 2';
                                    }
                                }
                            }
                        }

                        $arr_order_item_lookup[$order_item->order_id][] = clone $order_item;
                    }

                    $patient = $this->core_model->get('patient', $order->patient_id);
                    $patient->email = strtolower($patient->email);

                    $order->email = ($order->patient_id > 0) ? $patient->email : $order->shipping_email;

                    $this->db->simple_query("USE webshop_1_eliocare");

                    $user = new stdClass();
                    $user->id = 0;
                    $user->name = '';

                    // get user-data
                    if ($patient->referral != '')
                    {
                        $this->db->select('id, name');
                        $this->db->where('referral_name', $patient->referral);
                        $arr_user = $this->core_model->get('user');

                        $user->id = $arr_user[0]->id;
                        $user->name = $arr_user[0]->name;
                    }

                    $arr_product =  $this->core_model->get('product');
                    $arr_product_lookup = array();

                    foreach ($arr_product as $product)
                    {
                        $arr_product_lookup[$product->id] = clone $product;
                    }

                    // insert customer
                    if ($order->patient_id > 0)
                    {
                        $this->db->where('email', $patient->email);
                        $count_customer = $this->core_model->count('customer');

                        if ($count_customer <= 0)
                        {
                            $customer_record = array();

                            $customer_record['number'] = $patient->number;
                            $customer_record['status'] = 'Active';
                            $customer_record['name'] = ucwords(strtolower($patient->name));
                            $customer_record['date'] = $patient->date;
                            $customer_record['email'] = strtolower($patient->email);
                            $customer_record['phone'] = $patient->phone;
                            $customer_record['gender'] = $patient->gender;

                            $customer_record['author_id'] = $user->id;
                            $customer_record['author_name'] = $user->name;
                            $customer_id = $this->core_model->insert('customer', $customer_record);

                            $arr_customer_lookup[strtolower($patient->email)] = $customer_id;
                        }
                        else
                        {
                            $this->db->where('email', $patient->email);
                            $arr_customer = $this->core_model->get('customer');

                            if (count($arr_customer) > 0)
                            {
                                $arr_customer_lookup[strtolower($arr_customer[0]->email)] = $arr_customer[0]->id;
                            }
                        }
                    }
                    else
                    {
                        $this->db->where('email', $order->shipping_email);
                        $count_customer = $this->core_model->count('customer');

                        if ($count_customer <= 0)
                        {
                            $customer_record = array();

                            $customer_record['status'] = 'Active';
                            $customer_record['name'] = ucwords(strtolower($order->shipping_name));
                            $customer_record['date'] = $order->date;
                            $customer_record['email'] = $order->shipping_email;
                            $customer_record['phone'] = $order->shipping_phone;
                            $customer_id = $this->core_model->insert('customer', $customer_record);

                            $customer_record['number'] = '#GUEST' . str_pad($customer_id, 4, 0, STR_PAD_LEFT);
                            $this->core_model->update('customer', $customer_id, array('number' => $customer_record['number']));

                            $arr_customer_lookup[$order->email] = $customer_id;
                        }
                        else
                        {
                            $this->db->where('email', $order->shipping_email);
                            $arr_customer = $this->core_model->get('customer');

                            if (count($arr_customer) > 0)
                            {
                                $arr_customer_lookup[strtolower($arr_customer[0]->email)] = $arr_customer[0]->id;
                            }
                        }
                    }

                    // insert sale
                    $sale_record['bank_id'] = 6;
                    $sale_record['channel_id'] = ($user_type == 'Reseller') ? 11 : 2;
                    $sale_record['customer_id'] = (isset($arr_customer_lookup[$order->email])) ? $arr_customer_lookup[$order->email] : 0;
                    $sale_record['location_id'] = ($order->location == 'Haistar') ? 2 : 1;
                    $sale_record['method_id'] = 8;

                    $sale_record['number'] = $order->number;
                    $sale_record['date'] = $order->date;
                    $sale_record['status'] = 'Paid';

                    $sale_record['subtotal'] = $subtotal;
                    $sale_record['shipping'] = $order->shipping;
                    $sale_record['discount'] = $order->discount - $order->discount_item;
                    $sale_record['discount_item'] = $order->discount_item;
                    $sale_record['total'] = $order->grand_total;
                    $sale_record['fees'] = $fees;

                    $sale_record['method'] = $result->payment_method;
                    // $sale_record['payment_channel'] - $result->payment_channel;
                    $sale_record['fulfillment'] = $order->location;

                    $sale_record['payment_number'] = $order->payment_id;
                    $sale_record['payment_status'] = 'Paid';
                    $sale_record['payment_method'] = 'Website Third Party';
                    $sale_record['payment_url'] = $order->payment_url;

                    $sale_record['receiver_name'] = $order->shipping_name;
                    $sale_record['phone'] = $order->shipping_phone;
                    $sale_record['email'] = $order->email;
                    $sale_record['address_line_1'] = $order->shipping_address_line_1;
                    $sale_record['address_line_2'] = $order->shipping_address_line_2;
                    $sale_record['address_line_3'] = $order->shipping_address_line_3;
                    $sale_record['postcode'] = $order->shipping_postcode;
                    $sale_record['city'] = $order->shipping_city;
                    $sale_record['province'] = $order->shipping_province;
                    $sale_record['district'] = $order->shipping_district;
                    $sale_record['courier'] = $order->shipping_courier;
                    $sale_record['courier_id'] = $order->shipping_courier_tracking_id;

                    $sale_record = $this->cms_function->populate_foreign_field($sale_record['bank_id'], $sale_record, 'bank');
                    $sale_record = $this->cms_function->populate_foreign_field($sale_record['location_id'], $sale_record, 'location');
                    $sale_record = $this->cms_function->populate_foreign_field($sale_record['channel_id'], $sale_record, 'channel');
                    $sale_record = $this->cms_function->populate_foreign_field($sale_record['customer_id'], $sale_record, 'customer');
                    $sale_record = $this->cms_function->populate_foreign_field($sale_record['method_id'], $sale_record, 'method');

                    $sale_record['author_id'] = $user->id;
                    $sale_record['author_name'] = $user->name;

                    $sale_id = $this->core_model->insert('sale', $sale_record);

                    $arr_webshop_product_id_lookup = array();
                    $arr_webshop_product_id_lookup[1] = 19; // Finasteride
                    $arr_webshop_product_id_lookup[3] = 20; // Hair Tonic
                    $arr_webshop_product_id_lookup[4] = 21; // Anti DHT Shampoo
                    $arr_webshop_product_id_lookup[6] = 22; // Day Cream
                    $arr_webshop_product_id_lookup[7] = 23; // Night Cream 1
                    $arr_webshop_product_id_lookup[8] = 24; // Night Cream 2
                    $arr_webshop_product_id_lookup[16] = 27; // Stamina Cream
                    $arr_webshop_product_id_lookup[17] = 28; // Protective Mask

                    $arr_webshop_product_id_lookup[11] = 81; // Complete Hair Loss Kit
                    $arr_webshop_product_id_lookup[13] = 82; // Starter Hair Loss kit

                    $arr_webshop_product_id_lookup[18] = 33; // Face Wash
                    $arr_webshop_product_id_lookup[19] = 34; // Face Scrub
                    $arr_webshop_product_id_lookup[20] = 35; // Moisturizer
                    $arr_webshop_product_id_lookup[21] = 36; // Shampoo
                    $arr_webshop_product_id_lookup[22] = 37; // Body Wash
                    $arr_webshop_product_id_lookup[23] = 62; // Ultimate Gentleman Set
                    $arr_webshop_product_id_lookup[24] = 63; // Complete Maintenance Set
                    $arr_webshop_product_id_lookup[25] = 64; // Complete Shower Set
                    $arr_webshop_product_id_lookup[26] = 80; // Ultimate Gentleman Set + Bag
                    $arr_webshop_product_id_lookup[27] = 78; // Complete Maintenance Set + Bag
                    $arr_webshop_product_id_lookup[28] = 79; // Complete Shower Set + Bag
                    $arr_webshop_product_id_lookup[29] = 70; // Starter Maintenance Set
                    $arr_webshop_product_id_lookup[30] = 71; // Daily Maintenance Set
                    $arr_webshop_product_id_lookup[31] = 72; // Aging maintenance Set
                    $arr_webshop_product_id_lookup[32] = 41; // Water Resistant Utility Bag
                    $arr_webshop_product_id_lookup[33] = 96; // Ultimate Gift Set
                    $arr_webshop_product_id_lookup[34] = 97; // Ultimate Gift Set + Bag

                    $arr_webshop_product_id_lookup[35] = 94; // Summer Sol
                    $arr_webshop_product_id_lookup[36] = 95; // White Night
                    $arr_webshop_product_id_lookup[37] = 98; // Spektrum Set

                    $arr_webshop_product_id_lookup[38] = 211; // Summer Sol Vial
                    $arr_webshop_product_id_lookup[39] = 212; // White Night Vial

                    // insert sale_item
                    foreach ($arr_order_item as $order_item)
                    {
                        $product_id = (isset($arr_webshop_product_id_lookup[$order_item->product_id])) ? $arr_webshop_product_id_lookup[$order_item->product_id] : 0;

                        $sale_item_record = array();

                        $sale_item_record['bank_id'] = (isset($sale_record['bank_id'])) ? $sale_record['bank_id'] : 0;
                        $sale_item_record['location_id'] = (isset($sale_record['location_id'])) ? $sale_record['location_id'] : 0;
                        $sale_item_record['method_id'] = (isset($sale_record['method_id'])) ? $sale_record['method_id'] : 0;
                        $sale_item_record['product_id'] = $product_id;
                        $sale_item_record['sale_id'] = $sale_id;
                        $sale_item_record['channel_id'] = (isset($sale_record['channel_id'])) ? $sale_record['channel_id'] : 0;
                        $sale_item_record['customer_id'] = (isset($sale_record['customer_id'])) ? $sale_record['customer_id'] : 0;
                        $sale_item_record['category_id'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->category_id : 0;

                        $sale_item_record['quantity'] = $order_item->quantity;
                        $sale_item_record['price'] = $order_item->price;
                        $sale_item_record['total'] = $order_item->quantity * $order_item->price;
                        $sale_item_record['unit'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->unit : 'PCS';

                        $sale_item_record['bank_type'] = (isset($sale_record['bank_type'])) ? $sale_record['bank_type'] : '';
                        $sale_item_record['bank_number'] = (isset($sale_record['bank_number'])) ? $sale_record['bank_number'] : '';
                        $sale_item_record['bank_name'] = (isset($sale_record['bank_name'])) ? $sale_record['bank_name'] : '';
                        $sale_item_record['bank_date'] = (isset($sale_record['bank_date'])) ? $sale_record['bank_date'] : 0;
                        $sale_item_record['bank_status'] = (isset($sale_record['bank_status'])) ? $sale_record['bank_status'] : '';

                        $sale_item_record['category_type'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->category_type : 0;
                        $sale_item_record['category_number'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->category_number : 0;
                        $sale_item_record['category_name'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->category_name : 0;
                        $sale_item_record['category_date'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->category_date : 0;
                        $sale_item_record['category_status'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->category_status : 0;

                        $sale_item_record['location_type'] = (isset($sale_record['location_type'])) ? $sale_record['location_type'] : '';
                        $sale_item_record['location_number'] = (isset($sale_record['location_number'])) ? $sale_record['location_number'] : '';
                        $sale_item_record['location_name'] = (isset($sale_record['location_name'])) ? $sale_record['location_name'] : '';
                        $sale_item_record['location_date'] = (isset($sale_record['location_date'])) ? $sale_record['location_date'] : 0;
                        $sale_item_record['location_status'] = (isset($sale_record['location_status'])) ? $sale_record['location_status'] : '';

                        $sale_item_record['method_type'] = (isset($sale_record['method_type'])) ? $sale_record['method_type'] : '';
                        $sale_item_record['method_number'] = (isset($sale_record['method_number'])) ? $sale_record['method_number'] : '';
                        $sale_item_record['method_name'] = (isset($sale_record['method_name'])) ? $sale_record['method_name'] : '';
                        $sale_item_record['method_date'] = (isset($sale_record['method_date'])) ? $sale_record['method_date'] : 0;
                        $sale_item_record['method_status'] = (isset($sale_record['method_status'])) ? $sale_record['method_status'] : '';

                        $sale_item_record['product_type'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->type : '';
                        $sale_item_record['product_number'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->number : '';
                        $sale_item_record['product_name'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->name : '';
                        $sale_item_record['product_date'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->date : 0;
                        $sale_item_record['product_status'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->status : '';

                        $sale_item_record['sale_type'] = (isset($sale_record['type'])) ? $sale_record['type'] : '';
                        $sale_item_record['sale_number'] = (isset($sale_record['number'])) ? $sale_record['number'] : '';
                        $sale_item_record['sale_name'] = (isset($sale_record['name'])) ? $sale_record['name'] : '';
                        $sale_item_record['sale_date'] = (isset($sale_record['date'])) ? $sale_record['date'] : 0;
                        $sale_item_record['sale_status'] = (isset($sale_record['status'])) ? $sale_record['status'] : '';

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

                        $sale_item_record['author_id'] = $user->id;
                        $sale_item_record['author_name'] = $user->name;

                        $sale_item_id = $this->core_model->insert('sale_item', $sale_item_record);

                        // insert inventory_history
                        $inventory_history_record = array();

                        $inventory_history_record['location_id'] = (isset($sale_record['location_id'])) ? $sale_record['location_id'] : 0;
                        $inventory_history_record['product_id'] = $product_id;

                        $inventory_history_record['ref_id'] = $sale_id;
                        $inventory_history_record['ref_item_id'] = $sale_item_id;

                        $inventory_history_record['type'] = 'Sale';
                        $inventory_history_record['name'] = 'Sale ' . $sale_record['number'];
                        $inventory_history_record['date'] = (isset($sale_record['date'])) ? $sale_record['date'] : 0;
                        $inventory_history_record['quantity'] = $order_item->quantity * -1;
                        $inventory_history_record['unit'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->unit : 'PCS';

                        $inventory_history_record['location_type'] = (isset($sale_record['location_type'])) ? $sale_record['location_type'] : '';
                        $inventory_history_record['location_number'] = (isset($sale_record['location_number'])) ? $sale_record['location_number'] : '';
                        $inventory_history_record['location_name'] = (isset($sale_record['location_name'])) ? $sale_record['location_name'] : '';
                        $inventory_history_record['location_date'] = (isset($sale_record['location_date'])) ? $sale_record['location_date'] : 0;
                        $inventory_history_record['location_status'] = (isset($sale_record['location_status'])) ? $sale_record['location_status'] : '';

                        $inventory_history_record['product_type'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->type : '';
                        $inventory_history_record['product_number'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->number : '';
                        $inventory_history_record['product_name'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->name : '';
                        $inventory_history_record['product_date'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->date : 0;
                        $inventory_history_record['product_status'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->status : '';

                        $inventory_history_record['ref_type'] = (isset($sale_record['type'])) ? $sale_record['type'] : '';
                        $inventory_history_record['ref_number'] = (isset($sale_record['number'])) ? $sale_record['number'] : '';
                        $inventory_history_record['ref_name'] = (isset($sale_record['name'])) ? $sale_record['name'] : '';
                        $inventory_history_record['ref_date'] = (isset($sale_record['date'])) ? $sale_record['date'] : 0;
                        $inventory_history_record['ref_status'] = (isset($sale_record['status'])) ? $sale_record['status'] : '';

                        $inventory_history_record['ref_item_type'] = (isset($sale_item_record['type'])) ? $sale_item_record['type'] : '';
                        $inventory_history_record['ref_item_number'] = (isset($sale_item_record['number'])) ? $sale_item_record['number'] : '';
                        $inventory_history_record['ref_item_name'] = (isset($sale_item_record['name'])) ? $sale_item_record['name'] : '';
                        $inventory_history_record['ref_item_date'] = (isset($sale_item_record['date'])) ? $sale_item_record['date'] : 0;
                        $inventory_history_record['ref_item_status'] = (isset($sale_item_record['status'])) ? $sale_item_record['status'] : '';

                        $inventory_history_record['author_id'] = $user->id;
                        $inventory_history_record['author_name'] = $user->name;

                        $this->core_model->insert('inventory_history', $inventory_history_record);

                        // update inventory
                        $this->db->set('quantity', "quantity - {$order_item->quantity}", FALSE);
                        $this->db->where('location_id', $sale_record['location_id']);
                        $this->db->where('product_id', $product_id);
                        $this->core_model->update('inventory');

                        if ($arr_product_lookup[$product_id]->type == 'Package')
                        {
                            $arr_item = json_decode($arr_product_lookup[$product_id]->item);
                            $arr_product_item_id = $this->cms_function->extract_records($arr_item, 'product_id');
                            $arr_product_item_lookup = array();

                            $arr_product_item = $this->core_model->get('product', $arr_product_item_id);

                            foreach ($arr_product_item as $product_item)
                            {
                                $arr_product_item_lookup[$product_item->id] = clone $product_item;
                            }

                            foreach ($arr_item as $item)
                            {
                                $inventory_history_record = array();
                                $quantity = $order_item->quantity * $item->quantity;

                                $inventory_history_record['location_id'] = (isset($sale_record['location_id'])) ? $sale_record['location_id'] : 0;
                                $inventory_history_record['product_id'] = $item->product_id;

                                $inventory_history_record['ref_id'] = $sale_id;
                                $inventory_history_record['ref_item_id'] = $sale_item_id;

                                $inventory_history_record['type'] = 'Sale';
                                $inventory_history_record['name'] = 'Sale ' . $sale_record['number'];
                                $inventory_history_record['date'] = (isset($sale_record['date'])) ? $sale_record['date'] : 0;
                                $inventory_history_record['quantity'] = $quantity * -1;
                                $inventory_history_record['unit'] = (isset($arr_product_item_lookup[$item->product_id])) ? $arr_product_item_lookup[$item->product_id]->unit : 'PCS';

                                $inventory_history_record['location_type'] = (isset($sale_record['location_type'])) ? $sale_record['location_type'] : '';
                                $inventory_history_record['location_number'] = (isset($sale_record['location_number'])) ? $sale_record['location_number'] : '';
                                $inventory_history_record['location_name'] = (isset($sale_record['location_name'])) ? $sale_record['location_name'] : '';
                                $inventory_history_record['location_date'] = (isset($sale_record['location_date'])) ? $sale_record['location_date'] : 0;
                                $inventory_history_record['location_status'] = (isset($sale_record['location_status'])) ? $sale_record['location_status'] : '';

                                $inventory_history_record['product_type'] = (isset($arr_product_item_lookup[$item->product_id])) ? $arr_product_item_lookup[$item->product_id]->type : '';
                                $inventory_history_record['product_number'] = (isset($arr_product_item_lookup[$item->product_id])) ? $arr_product_item_lookup[$item->product_id]->number : '';
                                $inventory_history_record['product_name'] = (isset($arr_product_item_lookup[$item->product_id])) ? $arr_product_item_lookup[$item->product_id]->name : '';
                                $inventory_history_record['product_date'] = (isset($arr_product_item_lookup[$item->product_id])) ? $arr_product_item_lookup[$item->product_id]->date : 0;
                                $inventory_history_record['product_status'] = (isset($arr_product_item_lookup[$item->product_id])) ? $arr_product_item_lookup[$item->product_id]->status : '';

                                $inventory_history_record['ref_type'] = (isset($sale_record['type'])) ? $sale_record['type'] : '';
                                $inventory_history_record['ref_number'] = (isset($sale_record['number'])) ? $sale_record['number'] : '';
                                $inventory_history_record['ref_name'] = (isset($sale_record['name'])) ? $sale_record['name'] : '';
                                $inventory_history_record['ref_date'] = (isset($sale_record['date'])) ? $sale_record['date'] : 0;
                                $inventory_history_record['ref_status'] = (isset($sale_record['status'])) ? $sale_record['status'] : '';

                                $inventory_history_record['ref_item_type'] = (isset($sale_item_record['type'])) ? $sale_item_record['type'] : '';
                                $inventory_history_record['ref_item_number'] = (isset($sale_item_record['number'])) ? $sale_item_record['number'] : '';
                                $inventory_history_record['ref_item_name'] = (isset($sale_item_record['name'])) ? $sale_item_record['name'] : '';
                                $inventory_history_record['ref_item_date'] = (isset($sale_item_record['date'])) ? $sale_item_record['date'] : 0;
                                $inventory_history_record['ref_item_status'] = (isset($sale_item_record['status'])) ? $sale_item_record['status'] : '';

                                $inventory_history_record['author_id'] = $user->id;
                                $inventory_history_record['author_name'] = $user->name;

                                $this->core_model->insert('inventory_history', $inventory_history_record);

                                // update inventory
                                $this->db->set('quantity', "quantity - {$quantity}", FALSE);
                                $this->db->where('location_id', $sale_record['location_id']);
                                $this->db->where('product_id', $item->product_id);
                                $this->core_model->update('inventory');
                            }
                        }
                    }

                    // add transaction
                    $transaction_record = array();

                    $transaction_record['bank_id'] = (isset($sale_record['bank_id'])) ? $sale_record['bank_id'] : 0;
                    $transaction_record['customer_id'] = (isset($sale_record['customer_id'])) ? $sale_record['customer_id'] : 0;
                    $transaction_record['ref_id'] = $sale_id;

                    $transaction_record['type'] = 'Sale';
                    $transaction_record['name'] = (isset($sale_record['number'])) ? 'Payment for Sale ' . $sale_record['number'] : '';
                    $transaction_record['date'] = strtotime($result->paid_at);

                    $transaction_record['amount'] = $result->paid_amount;

                    $transaction_record['bank_type'] = (isset($sale_record['bank_type'])) ? $sale_record['bank_type'] : '';
                    $transaction_record['bank_number'] = (isset($sale_record['bank_number'])) ? $sale_record['bank_number'] : '';
                    $transaction_record['bank_name'] = (isset($sale_record['bank_name'])) ? $sale_record['bank_name'] : '';
                    $transaction_record['bank_date'] = (isset($sale_record['bank_date'])) ? $sale_record['bank_date'] : 0;
                    $transaction_record['bank_status'] = (isset($sale_record['bank_status'])) ? $sale_record['bank_status'] : '';

                    $transaction_record['customer_type'] = (isset($sale_record['customer_type'])) ? $sale_record['customer_type'] : '';
                    $transaction_record['customer_number'] = (isset($sale_record['customer_number'])) ? $sale_record['customer_number'] : '';
                    $transaction_record['customer_name'] = (isset($sale_record['customer_name'])) ? $sale_record['customer_name'] : '';
                    $transaction_record['customer_date'] = (isset($sale_record['customer_date'])) ? $sale_record['customer_date'] : 0;
                    $transaction_record['customer_status'] = (isset($sale_record['customer_status'])) ? $sale_record['customer_status'] : '';

                    $transaction_record['ref_type'] = (isset($sale_record['type'])) ? $sale_record['type'] : '';
                    $transaction_record['ref_number'] = (isset($sale_record['number'])) ? $sale_record['number'] : '';
                    $transaction_record['ref_name'] = (isset($sale_record['name'])) ? $sale_record['name'] : '';
                    $transaction_record['ref_date'] = (isset($sale_record['date'])) ? $sale_record['date'] : 0;
                    $transaction_record['ref_status'] = (isset($sale_record['status'])) ? $sale_record['status'] : '';

                    $transaction_record['author_id'] = $user->id;
                    $transaction_record['author_name'] = $user->name;

                    $transaction_id = $this->core_model->insert('transaction', $transaction_record);
                }

                // insert order to webshop selestial
                $this->db->simple_query('USE webapps_2_eliocare');

                $this->db->where('payment_id', $result->external_id);
                $arr_order = $this->core_model->get('order');

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

                if (count($arr_order) > 0 && $result->status == 'PAID')
                {
                    $order = $arr_order[0];
                    $patient_email = '';
                    $discount_item = 0;

                    if ($order->patient_id > 0)
                    {
                        $patient = $this->core_model->get('patient', $order->patient_id);
                        $patient_email = strtolower($patient->email);
                    }

                    $this->db->where('order_id', $order->id);
                    $arr_order_item = $this->core_model->get('order_item');

                    foreach ($arr_order_item as $order_item)
                    {
                        $discount_item += $order_item->discount;
                    }

                    if (time() >= 1640970000)
                    {
                        $this->db->simple_query("USE `webshop_4_selestialbrands`");
                    }
                    else
                    {
                        $this->db->simple_query("USE `webshop_4_selestial`");
                    }

                    // check if customer exist
                    if ($order->patient_id > 0)
                    {
                        $this->db->where('email', $patient_email);
                        $count_customer = $this->core_model->count('customer');

                        if ($count_customer <= 0)
                        {
                            $customer_record = array();

                            $customer_record['number'] = $patient->number;
                            $customer_record['status'] = 'Active';
                            $customer_record['name'] = ucwords(strtolower($patient->name));
                            $customer_record['date'] = $patient->date;
                            $customer_record['email'] = strtolower($patient_email);
                            $customer_record['phone'] = $patient->phone;

                            $customer_id = $this->core_model->insert('customer', $customer_record);

                            $arr_customer_lookup[strtolower($patient_email)] = $customer_id;
                        }
                        else
                        {
                            $this->db->where('email', $patient_email);
                            $arr_customer = $this->core_model->get('customer');

                            if (count($arr_customer) > 0)
                            {
                                $arr_customer_lookup[strtolower($arr_customer[0]->email)] = $arr_customer[0]->id;
                            }
                        }
                    }
                    else
                    {
                        $this->db->where('email', $order->shipping_email);
                        $count_customer = $this->core_model->count('customer');

                        if ($count_customer <= 0)
                        {
                            $customer_record = array();

                            $customer_record['status'] = 'Active';
                            $customer_record['name'] = ucwords(strtolower($order->shipping_name));
                            $customer_record['date'] = $order->date;
                            $customer_record['email'] = $order->shipping_email;
                            $customer_record['phone'] = $order->shipping_phone;
                            $customer_id = $this->core_model->insert('customer', $customer_record);

                            $customer_record['number'] = '#GUEST' . str_pad($customer_id, 4, 0, STR_PAD_LEFT);
                            $this->core_model->update('customer', $customer_id, array('number' => $customer_record['number']));

                            $arr_customer_lookup[$order->email] = $customer_id;
                        }
                        else
                        {
                            $this->db->where('email', $order->shipping_email);
                            $arr_customer = $this->core_model->get('customer');

                            if (count($arr_customer) > 0)
                            {
                                $arr_customer_lookup[strtolower($arr_customer[0]->email)] = $arr_customer[0]->id;
                            }
                        }
                    }

                    $order->email = ($order->patient_id > 0) ? strtolower($patient->email) : strtolower($order->shipping_email);

                    $sale_record = array();

                    $sale_record['bank_id'] = 2;
                    $sale_record['brand_id'] = 2;
                    $sale_record['channel_id'] = ($user_type == 'Reseller') ? 6 : 2;
                    $sale_record['customer_id'] = $arr_customer_lookup[$order->email];
                    $sale_record['location_id'] = ($order->location == 'Haistar') ? 2 : 1;
                    $sale_record['method_id'] = 5;

                    $sale_record['number'] = $order->number;
                    $sale_record['date'] = $order->date;
                    $sale_record['payment_date'] = time();
                    $sale_record['status'] = 'Paid';
                    $sale_record['fulfillment_status'] = 'Pending';

                    $sale_record['subtotal'] = $order->subtotal;
                    $sale_record['shipping'] = $order->shipping;
                    $sale_record['discount_order'] = $order->discount - $discount_item;
                    $sale_record['discount_item'] = $discount_item;
                    $sale_record['total_discount'] = $sale_record['discount_order'] + $sale_record['discount_item'];
                    $sale_record['total'] = $order->grand_total;

                    $sale_record['shipping_name'] = $order->shipping_name;
                    $sale_record['shipping_phone'] = $order->shipping_phone;
                    $sale_record['shipping_email'] = $order->email;
                    $sale_record['shipping_address_line_1'] = $order->shipping_address_line_1;
                    $sale_record['shipping_address_line_2'] = $order->shipping_address_line_2;
                    $sale_record['shipping_address_line_3'] = $order->shipping_address_line_3;
                    $sale_record['shipping_postcode'] = $order->shipping_postcode;
                    $sale_record['shipping_city'] = $order->shipping_city;
                    $sale_record['shipping_province'] = $order->shipping_province;
                    $sale_record['shipping_district'] = $order->shipping_district;
                    $sale_record['airway_bill_number'] = $order->shipping_courier_tracking_id;

                    $sale_record = $this->cms_function->populate_foreign_field($sale_record['bank_id'], $sale_record, 'bank');
                    $sale_record = $this->cms_function->populate_foreign_field($sale_record['brand_id'], $sale_record, 'brand');
                    $sale_record = $this->cms_function->populate_foreign_field($sale_record['location_id'], $sale_record, 'location');
                    $sale_record = $this->cms_function->populate_foreign_field($sale_record['channel_id'], $sale_record, 'channel');
                    $sale_record = $this->cms_function->populate_foreign_field($sale_record['customer_id'], $sale_record, 'customer');
                    $sale_record = $this->cms_function->populate_foreign_field($sale_record['method_id'], $sale_record, 'method');

                    $sale_id = $this->core_model->insert('sale', $sale_record);

                    $arr_webshop_product = $this->core_model->get('product');
                    $arr_webshop_product_lookup = array();

                    foreach ($arr_webshop_product as $webshop_product)
                    {
                        $arr_webshop_product_lookup[$webshop_product->id] = clone $webshop_product;
                    }

                    // insert sale_item
                    foreach ($arr_order_item as $order_item)
                    {
                        $product_id = (isset($arr_webshop_product_id_lookup[$order_item->product_id])) ? $arr_webshop_product_id_lookup[$order_item->product_id] : 0;

                        $sale_item_record = array();

                        $sale_item_record['bank_id'] = (isset($sale_record['bank_id'])) ? $sale_record['bank_id'] : 0;
                        $sale_item_record['brand_id'] = (isset($arr_webshop_product_lookup[$product_id])) ? $arr_webshop_product_lookup[$product_id]->brand_id : 0;
                        $sale_item_record['location_id'] = (isset($sale_record['location_id'])) ? $sale_record['location_id'] : 0;
                        $sale_item_record['product_id'] = $product_id;
                        $sale_item_record['sale_id'] = $sale_id;
                        $sale_item_record['channel_id'] = (isset($sale_record['channel_id'])) ? $sale_record['channel_id'] : 0;
                        $sale_item_record['customer_id'] = (isset($sale_record['customer_id'])) ? $sale_record['customer_id'] : 0;
                        $sale_item_record['category_id'] = (isset($arr_webshop_product_lookup[$product_id])) ? $arr_webshop_product_lookup[$product_id]->category_id : 0;

                        $sale_item_record['quantity'] = $order_item->quantity;
                        $sale_item_record['price'] = $order_item->price;
                        $sale_item_record['discount'] = $order_item->discount;
                        $sale_item_record['total'] = ($order_item->quantity * $order_item->price) - $order_item->discount;
                        $sale_item_record['unit'] = (isset($arr_webshop_product_lookup[$product_id])) ? $arr_webshop_product_lookup[$product_id]->unit : 'PCS';

                        $sale_item_record['brand_type'] = (isset($arr_webshop_product_lookup[$product_id])) ? $arr_webshop_product_lookup[$product_id]->brand_type : 0;
                        $sale_item_record['brand_number'] = (isset($arr_webshop_product_lookup[$product_id])) ? $arr_webshop_product_lookup[$product_id]->brand_number : 0;
                        $sale_item_record['brand_name'] = (isset($arr_webshop_product_lookup[$product_id])) ? $arr_webshop_product_lookup[$product_id]->brand_name : 0;
                        $sale_item_record['brand_date'] = (isset($arr_webshop_product_lookup[$product_id])) ? $arr_webshop_product_lookup[$product_id]->brand_date : 0;
                        $sale_item_record['brand_status'] = (isset($arr_webshop_product_lookup[$product_id])) ? $arr_webshop_product_lookup[$product_id]->brand_status : 0;

                        $sale_item_record['bank_type'] = (isset($sale_record['bank_type'])) ? $sale_record['bank_type'] : '';
                        $sale_item_record['bank_number'] = (isset($sale_record['bank_number'])) ? $sale_record['bank_number'] : '';
                        $sale_item_record['bank_name'] = (isset($sale_record['bank_name'])) ? $sale_record['bank_name'] : '';
                        $sale_item_record['bank_date'] = (isset($sale_record['bank_date'])) ? $sale_record['bank_date'] : 0;
                        $sale_item_record['bank_status'] = (isset($sale_record['bank_status'])) ? $sale_record['bank_status'] : '';

                        $sale_item_record['category_type'] = (isset($arr_webshop_product_lookup[$product_id])) ? $arr_webshop_product_lookup[$product_id]->category_type : 0;
                        $sale_item_record['category_number'] = (isset($arr_webshop_product_lookup[$product_id])) ? $arr_webshop_product_lookup[$product_id]->category_number : 0;
                        $sale_item_record['category_name'] = (isset($arr_webshop_product_lookup[$product_id])) ? $arr_webshop_product_lookup[$product_id]->category_name : 0;
                        $sale_item_record['category_date'] = (isset($arr_webshop_product_lookup[$product_id])) ? $arr_webshop_product_lookup[$product_id]->category_date : 0;
                        $sale_item_record['category_status'] = (isset($arr_webshop_product_lookup[$product_id])) ? $arr_webshop_product_lookup[$product_id]->category_status : 0;

                        $sale_item_record['location_type'] = (isset($sale_record['location_type'])) ? $sale_record['location_type'] : '';
                        $sale_item_record['location_number'] = (isset($sale_record['location_number'])) ? $sale_record['location_number'] : '';
                        $sale_item_record['location_name'] = (isset($sale_record['location_name'])) ? $sale_record['location_name'] : '';
                        $sale_item_record['location_date'] = (isset($sale_record['location_date'])) ? $sale_record['location_date'] : 0;
                        $sale_item_record['location_status'] = (isset($sale_record['location_status'])) ? $sale_record['location_status'] : '';

                        $sale_item_record['product_type'] = (isset($arr_webshop_product_lookup[$product_id])) ? $arr_webshop_product_lookup[$product_id]->type : '';
                        $sale_item_record['product_number'] = (isset($arr_webshop_product_lookup[$product_id])) ? $arr_webshop_product_lookup[$product_id]->number : '';
                        $sale_item_record['product_name'] = (isset($arr_webshop_product_lookup[$product_id])) ? $arr_webshop_product_lookup[$product_id]->name : '';
                        $sale_item_record['product_date'] = (isset($arr_webshop_product_lookup[$product_id])) ? $arr_webshop_product_lookup[$product_id]->date : 0;
                        $sale_item_record['product_status'] = (isset($arr_webshop_product_lookup[$product_id])) ? $arr_webshop_product_lookup[$product_id]->status : '';

                        $sale_item_record['sale_type'] = (isset($sale_record['type'])) ? $sale_record['type'] : '';
                        $sale_item_record['sale_number'] = (isset($sale_record['number'])) ? $sale_record['number'] : '';
                        $sale_item_record['sale_name'] = (isset($sale_record['name'])) ? $sale_record['name'] : '';
                        $sale_item_record['sale_date'] = (isset($sale_record['date'])) ? $sale_record['date'] : 0;
                        $sale_item_record['sale_status'] = (isset($sale_record['status'])) ? $sale_record['status'] : '';

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

                        $sale_item_id = $this->core_model->insert('sale_item', $sale_item_record);
                    }

                    $transaction_record = array();

                    $transaction_record['bank_id'] = (isset($sale_record['bank_id'])) ? $sale_record['bank_id'] : 0;
                    $transaction_record['channel_id'] = (isset($sale_record['channel_id'])) ? $sale_record['channel_id'] : 0;
                    $transaction_record['customer_id'] = (isset($sale_record['customer_id'])) ? $sale_record['customer_id'] : 0;
                    $transaction_record['ref_id'] = $sale_id;

                    $transaction_record['type'] = 'Sale';
                    $transaction_record['name'] = (isset($sale_record['number'])) ? 'Payment for Sale ' . $sale_record['number'] : '';
                    $transaction_record['date'] = (isset($sale_record['payment_date'])) ? $sale_record['payment_date'] : time();

                    $transaction_record['amount'] = $sale_record['total'];

                    $transaction_record['bank_type'] = (isset($sale_record['bank_type'])) ? $sale_record['bank_type'] : '';
                    $transaction_record['bank_number'] = (isset($sale_record['bank_number'])) ? $sale_record['bank_number'] : '';
                    $transaction_record['bank_name'] = (isset($sale_record['bank_name'])) ? $sale_record['bank_name'] : '';
                    $transaction_record['bank_date'] = (isset($sale_record['bank_date'])) ? $sale_record['bank_date'] : 0;
                    $transaction_record['bank_status'] = (isset($sale_record['bank_status'])) ? $sale_record['bank_status'] : '';

                    $transaction_record['channel_type'] = (isset($sale_record['channel_type'])) ? $sale_record['channel_type'] : '';
                    $transaction_record['channel_number'] = (isset($sale_record['channel_number'])) ? $sale_record['channel_number'] : '';
                    $transaction_record['channel_name'] = (isset($sale_record['channel_name'])) ? $sale_record['channel_name'] : '';
                    $transaction_record['channel_date'] = (isset($sale_record['channel_date'])) ? $sale_record['channel_date'] : 0;
                    $transaction_record['channel_status'] = (isset($sale_record['channel_status'])) ? $sale_record['channel_status'] : '';

                    $transaction_record['customer_type'] = (isset($sale_record['customer_type'])) ? $sale_record['customer_type'] : '';
                    $transaction_record['customer_number'] = (isset($sale_record['customer_number'])) ? $sale_record['customer_number'] : '';
                    $transaction_record['customer_name'] = (isset($sale_record['customer_name'])) ? $sale_record['customer_name'] : '';
                    $transaction_record['customer_date'] = (isset($sale_record['customer_date'])) ? $sale_record['customer_date'] : 0;
                    $transaction_record['customer_status'] = (isset($sale_record['customer_status'])) ? $sale_record['customer_status'] : '';

                    $transaction_record['ref_type'] = (isset($sale_record['type'])) ? $sale_record['type'] : '';
                    $transaction_record['ref_number'] = (isset($sale_record['number'])) ? $sale_record['number'] : '';
                    $transaction_record['ref_name'] = (isset($sale_record['name'])) ? $sale_record['name'] : '';
                    $transaction_record['ref_date'] = (isset($sale_record['date'])) ? $sale_record['date'] : 0;
                    $transaction_record['ref_status'] = (isset($sale_record['status'])) ? $sale_record['status'] : '';

                    $transaction_id = $this->core_model->insert('transaction', $transaction_record);
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

    public function kredivo()
    {
        $json['status'] = 'success';

        try
        {
            $this->db->trans_start();

            $json_result = file_get_contents('php://input');
            // $json_result = '{"items": [{"id": "16", "url": "https://www.norm.id/", "name": "Stamina Cream", "type": "Norm Product", "price": "249000", "quantity": "1"}], "amount": 373150, "order_id": "ceb2ee2e-6ecc-4eb8-940c-a7c53ea1e2c3", "external_id": "NORM202101009204", "payment_type": "30_days", "transaction_id": "16362bc2-504e-40ee-918f-3edfed9edb8b", "customer_details": {"email": "ariefwangsa2@gmail.com", "phone": "082216191220 ", "last_name": ".", "first_name": "Kukuh Arief Wangsa "}, "shipping_address": {"city": "NABIRE", "phone": "082216191220 ", "address": "Dinas penanaman modal dan pelayanan terpadu satu pintu Kabupaten Nabire ", "last_name": ".", "first_name": "Kukuh Arief Wangsa ", "postal_code": "98815", "country_code": "IDN"}, "transaction_status": "settlement", "cardless_credit_type": "KREDIVO", "callback_authentication_token": "bcfc25e7e00fe74e3472cb862802d9aaa938ef9a27e3152c07fe548c554a03bf"}';

            $result = json_decode($json_result);

            $fees = 0;

            $order_record = array();
            $order_record['payment_date'] = time();
            $order_record['payment_status'] = ($result->transaction_status == 'settlement') ? 'Paid' : $result->transaction_status;
            $order_record['payment_status_message'] = 'Paid with Kredivo';

            $this->db->where('payment_id', $result->external_id);
            $this->core_model->update('order', 0, $order_record);

            // send email
            $this->db->where('payment_id', $result->external_id);
            $arr_order = $this->core_model->get('order');

            if (count($arr_order) > 0)
            {
                $order = $arr_order[0];
                $order->subtotal_display = 'IDR ' . number_format($order->subtotal, 0, ',', '.');
                $order->discount_display = 'IDR ' . number_format($order->discount, 0, ',', '.');
                $order->shipping_display = 'IDR ' . number_format($order->shipping, 0, ',', '.');
                $order->grand_total_display = 'IDR ' . number_format($order->grand_total, 0, ',', '.');

                $this->db->where('order_id', $order->id);
                $arr_order_item = $this->core_model->get('order_item');
                $subtotal = 0;

                foreach ($arr_order_item as $order_item)
                {
                    $order_item->quantity_display = number_format($order_item->quantity, 0, '', '');
                    $order_item->price_display = 'IDR ' . number_format($order_item->price, 0, ',', '.');

                    $order_item->total_display = 'IDR ' . number_format($order_item->total, 0, ',', '.');

                    $subtotal += $order_item->total;
                }

                if ($result->transaction_status == 'settlement')
                {
                    $record = array();
                    $record['order'] = $order;
                    $record['arr_order_item'] = $arr_order_item;

                    $subject = 'Terima kasih telah memesan di Norm';
                    $message = $this->load->view('email/thankyou_purchase', $record, true);

                    $this->cms_function->load_email_library($this->_setting, $order->shipping_email, array(), $subject, $message, 'html');
                }

                $this->db->where('order_id', $order->id);
                $arr_order_item = $this->core_model->get('order_item');

                // send data to haistar if location == haistar
                if ($order->location == 'Haistar')
                {
                    $arr_product = $this->core_model->get('product');
                    $arr_product_lookup = array();
                    $weight = 0;
                    $total_qty = 0;
                    $product_name = '';
                    $courier = '';
                    $delivery_type = '';
                    $awb_number = '';

                    foreach ($arr_product as $product)
                    {
                        $arr_product_lookup[$product->id] = clone $product;
                    }

                    foreach ($order->arr_order_item as $order_item)
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

                    // generate awb number
                    // send data to shipping
                    if ($order->shipping_courier == 'EZ')
                    {
                        // send data to JNT
                        $key = 'AKe62df84bJ3d8e4b1hea2R45j11klsb';

                        $param = array(
                            'username' => 'NORM',
                            'api_key' => 'A5XSYE',
                            'orderid' => $order->number,
                            'shipper_name' => 'NORM',
                            'shipper_contact' => 'Millah',
                            'shipper_phone'=> '+622145742832',
                            'shipper_addr'=> 'Kw. Industri Pulogadung, JL. Pulo Kambing Raya KAV. II E No.08',
                            'origin_code'=> 'JKT',
                            'receiver_name'=> $order->shipping_name,
                            'receiver_phone'=> $order->shipping_phone,
                            'receiver_addr'=> $order->shipping_address_line_1 . ' ' . $order->shipping_address_line_2 . ' ' . $order->shipping_address_line_3,
                            'receiver_zip'=> $order->shipping_postcode,
                            'destination_code'=> $order->shipping_city_type,
                            'receiver_area'=> $order->shipping_tlc,
                            'qty'=> $total_qty,
                            'weight'=> ($weight / 1000 < 1) ? 1 : $weight / 1000,
                            'goodsdesc'=> 'Norm Product',
                            'servicetype'=>'6',
                            'insurance'=> (0.2 / 100) * $order->subtotal,
                            'orderdate'=> date('Y-m-d H:i:s'),
                            'item_name'=>'Package',
                            'expresstype'=>'1',
                            'goodsvalue'=> $order->subtotal,
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

                        $awb = json_decode($price);
                        $arr_awb = $awb->detail;
                        $json['awb'] = $awb;

                        $awb_number = (isset($arr_awb[0]->awb_no)) ? $arr_awb[0]->awb_no : '';
                        $courier = 'JNT';
                        $delivery_type = 9;

                        $this->core_model->update('order', $order->id, array('shipping_courier_tracking_id' => $arr_awb[0]->awb_no));
                    }
                    elseif ($order->shipping_courier == 'REG' || $order->shipping_courier == 'ND' || $order->shipping_courier == 'SD')
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
                        $shipper->email = 'sugi@selestialbrands.com';
                        $shipper->district = '31.75.02';
                        $shipper->address = 'Kw. Industri Pulogadung, JL. Pulo Kambing Raya KAV. II E No.08';
                        $shipper->postcode = '13920';
                        $shipper->geoloc = '';

                        $receiver = new stdClass();
                        $receiver->name = $order->shipping_name;
                        $receiver->phone = $order->shipping_phone;
                        $receiver->email = $order->shipping_email;
                        $receiver->district = $order->shipping_tlc;
                        $receiver->address = $order->shipping_address_line_1 . ' ' . $order->shipping_address_line_2 . ' ' . $order->shipping_address_line_3;
                        $receiver->postcode = $order->shipping_postcode;
                        $receiver->geoloc = '';

                        $arr_item = array();
                        $item = new stdClass();

                        foreach ($order->arr_order_item as $order_item)
                        {
                            $item->item_name = ($arr_product_lookup[$order_item->product_id]) ? $arr_product_lookup[$order_item->product_id]->name . ' x' . number_format($order_item->quantity, 0, '', '') : '';
                            $item->declared_value = ($order_item->price <= 0) ? 39000 : $order_item->price;
                            $item->weight = ($arr_product_lookup[$order_item->product_id]) ? $arr_product_lookup[$order_item->product_id]->weight : '';
                            $item->weight = ($item->weight < 100) ? 100 : $item->weight;
                            $arr_item[] = clone $item;
                        }

                        $param = new stdClass();
                        $param->booking_id = $order->number;
                        $param->service_code = $order->shipping_courier;
                        $param->parcel_total_weight = ($weight <= 1000) ? 1000 : $weight;
                        $param->shipper = clone $shipper;
                        $param->receiver = clone $receiver;
                        $param->items = $arr_item;
                        $param->use_insurance = 1;
                        $param->declared_value = $order->subtotal;

                        $payload = json_encode($param);

                        $curl = curl_init($basepath);
                        curl_setopt($curl, CURLOPT_HTTPHEADER, $arr_header);
                        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                        curl_setopt($curl, CURLOPT_POST, true);
                        curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);

                        $price = curl_exec($curl);
                        curl_close($curl);

                        $awb = json_decode($price);
                        $json['awb'] = $awb;

                        $awb_number = (isset($awb->content->waybill_no)) ? $awb->content->waybill_no : '';
                        $courier = 'AnterAja';

                        $arr_delivery_lookup = array();
                        $arr_delivery_lookup['REG'] = 100;
                        $arr_delivery_lookup['ND'] = 74;
                        $arr_delivery_lookup['SD'] = 119;

                        $delivery_type = (isse($arr_delivery_lookup[$order->shipping_courier])) ? $arr_delivery_lookup[$order->shipping_courier] : 100;

                        $this->core_model->update('order', $order->id, array('shipping_courier_tracking_id' => $awb->content->waybill_no));
                    }

                    // send data to haistar
                    $signature = $this->_get_signature();

                    $arr_code_product_id_lookup = array();
                    $arr_code_product_id_lookup[18] = 'NPRO-000015'; // Face Wash
                    $arr_code_product_id_lookup[19] = 'NPRO-000017'; // Face Scrub
                    $arr_code_product_id_lookup[20] = 'NPRO-000016'; // Moisturizer
                    $arr_code_product_id_lookup[21] = 'NPRO-000019'; // Shampoo
                    $arr_code_product_id_lookup[22] = 'NPRO-000018'; // Body Wash
                    $arr_code_product_id_lookup[23] = 'NKIT-000020'; // Ultimate Gentleman Set
                    $arr_code_product_id_lookup[24] = 'NKIT-000021'; // Complete Maintenance Set
                    $arr_code_product_id_lookup[25] = 'NKIT-000022'; // Complete Shower Set
                    $arr_code_product_id_lookup[26] = 'NKIT-000043'; // Ultimate Gentleman Set + Bag
                    $arr_code_product_id_lookup[27] = 'NKIT-000046'; // Complete Maintenance Set + Bag
                    $arr_code_product_id_lookup[28] = 'NKIT-000047'; // Complete Shower Set + Bag
                    $arr_code_product_id_lookup[29] = 'NKIT-000028'; // Starter Maintenance Set
                    $arr_code_product_id_lookup[30] = 'NKIT-000029'; // Daily Maintenance Set
                    $arr_code_product_id_lookup[31] = 'NKIT-000045'; // Aging maintenance Set
                    $arr_code_product_id_lookup[32] = 'NPRO-000044'; // Water Resistant Utility Bag
                    $arr_code_product_id_lookup[33] = 'NKIT-000052'; // Ultimate Gift Set
                    $arr_code_product_id_lookup[34] = 'NKIT-000053'; // Ultimate Gift Set + bag
                    $arr_code_product_id_lookup[35] = 'NPRO-000050'; // Summer Sol
                    $arr_code_product_id_lookup[36] = 'NPRO-000051'; // White Night
                    $arr_code_product_id_lookup[37] = 'NKIT-000054'; // Spektrum Set

                    $curl = curl_init();

                    $arr_items = array();

                    foreach ($order->arr_order_item as $order_item)
                    {
                        $item = new stdClass();
                        $item->item_code = $arr_code_product_id_lookup[$order_item->product_id];
                        $item->quantity = $order_item->quantity;
                        $item->unit_price = number_format($order_item->price, 0, '', '');
                        $arr_items[] = clone $item;
                    }

                    $record = array();

                    $record['apikey'] = $this->_api_key;
                    $record['location'] = 'LOCLN';
                    $record['code'] = $order->number;
                    $record['order_date'] = date('Y-m-d H:i:s', time());
                    $record['channel_id'] = 'WEB';
                    $record['courier_name'] = $courier;
                    $record['delivery_type_name'] = $delivery_type;
                    $record['waybill_number'] = $awb_number;
                    $record['stock_type_name'] = 'MULTI CHANNEL';
                    $record['payment_type'] = 'NON COD';
                    $record['cod_price'] = 0;
                    $record['total_price'] = number_format($order->grand_total, 0, '', '');
                    $record['remark'] = 'Fragile. Handle with care.';

                    $record['recipient_name'] = $order->shipping_name;
                    $record['recipient_postal_code'] = $order->shipping_postcode;
                    $record['recipient_phone'] = $order->shipping_phone;
                    $record['recipient_email'] = $order->shipping_email;
                    $record['recipient_address'] = $order->shipping_address_line_1 . ' ' . $order->shipping_address_line_2 . ' ' . $order->shipping_address_line_3;
                    $record['recipient_country'] = 'Indonesia';
                    $record['recipient_province'] = $order->shipping_province;
                    $record['recipient_city'] = $order->shipping_city;
                    $record['recipient_district'] = $order->shipping_district;

                    $record['stock_source'] = 'GOOD STOCK';
                    $record['order_type'] = 'Sales Order';
                    $record['dfod_price'] = 0;
                    $record['shipping_price'] = number_format($order->shipping, 0, '', '');
                    $record['items'] = $arr_items;

                    // https://hiperiondev.haistar.co.id/
                    curl_setopt_array($curl, array(
                        CURLOPT_URL => $this->_api_endpoint_url . '/Push_order/?apikey=' . $this->_api_key,
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => '',
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 0,
                        CURLOPT_FOLLOWLOCATION => true,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => 'POST',
                        CURLOPT_POSTFIELDS => json_encode($record),
                        CURLOPT_HTTPHEADER => array(
                            'Apikey: ' . $this->_api_key,
                            'Content-Type: application/json',
                            'x-authorization: ' . $signature,
                        ),
                    ));

                    $response = curl_exec($curl);
                    $json['response_haistar'] = $response;

                    curl_close($curl);
                }

                // insert order to webshop
                $this->db->where('payment_id', $result->external_id);
                $arr_order = $this->core_model->get('order');

                if (count($arr_order) > 0 && $result->transaction_status == 'settlement')
                {
                    $arr_customer_lookup = array();

                    $order = $arr_order[0];
                    $order->shipping_email = strtolower($order->shipping_email);
                    $order->discount_item = 0;

                    $this->db->where('order_id', $order->id);
                    $arr_order_item = $this->core_model->get('order_item');

                    foreach ($arr_order_item as $order_item)
                    {
                        $order_item->additional_data = '';
                        $order->discount_item += $order_item->discount;

                        if ($order_item->product_id == 10 || $order_item->product_id == 12)
                        {
                            $this->db->where('patient_id', $order->patient_id);
                            $arr_consultation = $this->core_model->get('consultation');
                            $arr_consultation_id = $this->cms_function->extract_records($arr_consultation, 'id');

                            if (count($arr_consultation_id) > 0)
                            {
                                $this->db->select('product_id');
                                $this->db->where_in('consultation_id', $arr_consultation_id);
                                $arr_consultation_product = $this->core_model->get('consultation_product');

                                foreach ($arr_consultation_product as $consultation_product)
                                {
                                    if ($consultation_product->product_id == 7)
                                    {
                                        $order_item->additional_data = 'Night Cream 1';
                                    }
                                    elseif ($consultation_product->product_id == 8)
                                    {
                                        $order_item->additional_data = 'Night Cream 2';
                                    }
                                }
                            }
                        }

                        $arr_order_item_lookup[$order_item->order_id][] = clone $order_item;
                    }

                    $patient = $this->core_model->get('patient', $order->patient_id);
                    $patient->email = strtolower($patient->email);

                    $order->email = ($order->patient_id > 0) ? $patient->email : $order->shipping_email;

                    $this->db->simple_query("USE webshop_1_eliocare");

                    $user = new stdClass();
                    $user->id = 0;
                    $user->name = '';

                    // get user-data
                    if ($patient->referral != '')
                    {
                        $this->db->select('id, name');
                        $this->db->where('referral_name', $patient->referral);
                        $arr_user = $this->core_model->get('user');

                        $user->id = $arr_user[0]->id;
                        $user->name = $arr_user[0]->name;
                    }

                    $arr_product =  $this->core_model->get('product');
                    $arr_product_lookup = array();

                    foreach ($arr_product as $product)
                    {
                        $arr_product_lookup[$product->id] = clone $product;
                    }

                    // insert customer
                    if ($order->patient_id > 0)
                    {
                        $this->db->where('email', $patient->email);
                        $count_customer = $this->core_model->count('customer');

                        if ($count_customer <= 0)
                        {
                            $customer_record = array();

                            $customer_record['number'] = $patient->number;
                            $customer_record['status'] = 'Active';
                            $customer_record['name'] = ucwords(strtolower($patient->name));
                            $customer_record['date'] = $patient->date;
                            $customer_record['email'] = strtolower($patient->email);
                            $customer_record['phone'] = $patient->phone;
                            $customer_record['gender'] = $patient->gender;

                            $customer_record['author_id'] = $user->id;
                            $customer_record['author_name'] = $user->name;
                            $customer_id = $this->core_model->insert('customer', $customer_record);

                            $arr_customer_lookup[strtolower($patient->email)] = $customer_id;
                        }
                        else
                        {
                            $this->db->where('email', $patient->email);
                            $arr_customer = $this->core_model->get('customer');

                            if (count($arr_customer) > 0)
                            {
                                $arr_customer_lookup[strtolower($arr_customer[0]->email)] = $arr_customer[0]->id;
                            }
                        }
                    }
                    else
                    {
                        $this->db->where('email', $order->shipping_email);
                        $count_customer = $this->core_model->count('customer');

                        if ($count_customer <= 0)
                        {
                            $customer_record = array();

                            $customer_record['status'] = 'Active';
                            $customer_record['name'] = ucwords(strtolower($order->shipping_name));
                            $customer_record['date'] = $order->date;
                            $customer_record['email'] = $order->shipping_email;
                            $customer_record['phone'] = $order->shipping_phone;
                            $customer_id = $this->core_model->insert('customer', $customer_record);

                            $customer_record['number'] = '#GUEST' . str_pad($customer_id, 4, 0, STR_PAD_LEFT);
                            $this->core_model->update('customer', $customer_id, array('number' => $customer_record['number']));

                            $arr_customer_lookup[$order->email] = $customer_id;
                        }
                        else
                        {
                            $this->db->where('email', $order->shipping_email);
                            $arr_customer = $this->core_model->get('customer');

                            if (count($arr_customer) > 0)
                            {
                                $arr_customer_lookup[strtolower($arr_customer[0]->email)] = $arr_customer[0]->id;
                            }
                        }
                    }

                    // insert customer
                    $sale_record['bank_id'] = 6;
                    $sale_record['brand_id'] = 2;
                    $sale_record['channel_id'] = 2;
                    $sale_record['customer_id'] = $arr_customer_lookup[$order->email];
                    $sale_record['location_id'] = ($order->location == 'Haistar') ? 2 : 1;
                    $sale_record['method_id'] = 8;

                    $sale_record['number'] = $order->number;
                    $sale_record['date'] = $order->date;
                    $sale_record['status'] = 'Paid';

                    $sale_record['subtotal'] = $subtotal;
                    $sale_record['shipping'] = $order->shipping;
                    $sale_record['discount'] = $order->discount - $order->discount_item;
                    $sale_record['discount_item'] = $order->discount_item;
                    $sale_record['total'] = $order->grand_total;
                    $sale_record['fees'] = $fees;

                    $sale_record['method'] = 'Kredivo';
                    $sale_record['payment_channel'] = 'Kredivo';

                    $sale_record['payment_number'] = $order->payment_id;
                    $sale_record['payment_status'] = 'Paid';
                    $sale_record['payment_method'] = 'Website Third Party';
                    $sale_record['payment_url'] = $order->payment_url;

                    $sale_record['receiver_name'] = $order->shipping_name;
                    $sale_record['phone'] = $order->shipping_phone;
                    $sale_record['email'] = $order->email;
                    $sale_record['address_line_1'] = $order->shipping_address_line_1;
                    $sale_record['address_line_2'] = $order->shipping_address_line_2;
                    $sale_record['address_line_3'] = $order->shipping_address_line_3;
                    $sale_record['postcode'] = $order->shipping_postcode;
                    $sale_record['city'] = $order->shipping_city;
                    $sale_record['province'] = $order->shipping_province;
                    $sale_record['district'] = $order->shipping_district;
                    $sale_record['courier'] = $order->shipping_courier;
                    $sale_record['courier_id'] = $order->shipping_courier_tracking_id;
                    $sale_record['fulfillment'] = $order->location;

                    $sale_record = $this->cms_function->populate_foreign_field($sale_record['bank_id'], $sale_record, 'bank');
                    $sale_record = $this->cms_function->populate_foreign_field($sale_record['brand_id'], $sale_record, 'brand');
                    $sale_record = $this->cms_function->populate_foreign_field($sale_record['location_id'], $sale_record, 'location');
                    $sale_record = $this->cms_function->populate_foreign_field($sale_record['channel_id'], $sale_record, 'channel');
                    $sale_record = $this->cms_function->populate_foreign_field($sale_record['customer_id'], $sale_record, 'customer');
                    $sale_record = $this->cms_function->populate_foreign_field($sale_record['method_id'], $sale_record, 'method');

                    $sale_record['author_id'] = $user->id;
                    $sale_record['author_name'] = $user->name;

                    $sale_id = $this->core_model->insert('sale', $sale_record);

                    $arr_webshop_product_id_lookup = array();
                    $arr_webshop_product_id_lookup[1] = 19; // Finasteride
                    $arr_webshop_product_id_lookup[3] = 20; // Hair Tonic
                    $arr_webshop_product_id_lookup[4] = 21; // Anti DHT Shampoo
                    $arr_webshop_product_id_lookup[6] = 22; // Day Cream
                    $arr_webshop_product_id_lookup[7] = 23; // Night Cream 1
                    $arr_webshop_product_id_lookup[8] = 24; // Night Cream 2
                    $arr_webshop_product_id_lookup[16] = 27; // Stamina Cream
                    $arr_webshop_product_id_lookup[17] = 28; // Protective Mask

                    $arr_webshop_product_id_lookup[11] = 81; // Complete Hair Loss Kit
                    $arr_webshop_product_id_lookup[13] = 82; // Starter Hair Loss kit

                    $arr_webshop_product_id_lookup[18] = 33; // Face Wash
                    $arr_webshop_product_id_lookup[19] = 34; // Face Scrub
                    $arr_webshop_product_id_lookup[20] = 35; // Moisturizer
                    $arr_webshop_product_id_lookup[21] = 36; // Shampoo
                    $arr_webshop_product_id_lookup[22] = 37; // Body Wash
                    $arr_webshop_product_id_lookup[23] = 62; // Ultimate Gentleman Set
                    $arr_webshop_product_id_lookup[24] = 63; // Complete Maintenance Set
                    $arr_webshop_product_id_lookup[25] = 64; // Complete Shower Set
                    $arr_webshop_product_id_lookup[26] = 80; // Ultimate Gentleman Set + Bag
                    $arr_webshop_product_id_lookup[27] = 78; // Complete Maintenance Set + Bag
                    $arr_webshop_product_id_lookup[28] = 79; // Complete Shower Set + Bag
                    $arr_webshop_product_id_lookup[29] = 70; // Starter Maintenance Set
                    $arr_webshop_product_id_lookup[30] = 71; // Daily Maintenance Set
                    $arr_webshop_product_id_lookup[31] = 72; // Aging maintenance Set
                    $arr_webshop_product_id_lookup[32] = 41; // Water Resistant Utility Bag
                    $arr_webshop_product_id_lookup[33] = 96; // Ultimate Gift Set
                    $arr_webshop_product_id_lookup[34] = 97; // Ultimate Gift Set + Bag
                    $arr_webshop_product_id_lookup[35] = 94; // Summer Sol
                    $arr_webshop_product_id_lookup[36] = 95; // White Night
                    $arr_webshop_product_id_lookup[37] = 98; // Spektrum Set

                    // insert sale_item
                    foreach ($arr_order_item as $order_item)
                    {
                        $product_id = (isset($arr_webshop_product_id_lookup[$order_item->product_id])) ? $arr_webshop_product_id_lookup[$order_item->product_id] : 0;

                        $sale_item_record = array();

                        $sale_item_record['bank_id'] = (isset($sale_record['bank_id'])) ? $sale_record['bank_id'] : 0;
                        $sale_item_record['location_id'] = (isset($sale_record['location_id'])) ? $sale_record['location_id'] : 0;
                        $sale_item_record['method_id'] = (isset($sale_record['method_id'])) ? $sale_record['method_id'] : 0;
                        $sale_item_record['product_id'] = $product_id;
                        $sale_item_record['sale_id'] = $sale_id;
                        $sale_item_record['channel_id'] = (isset($sale_record['channel_id'])) ? $sale_record['channel_id'] : 0;
                        $sale_item_record['customer_id'] = (isset($sale_record['customer_id'])) ? $sale_record['customer_id'] : 0;
                        $sale_item_record['category_id'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->category_id : 0;

                        $sale_item_record['quantity'] = $order_item->quantity;
                        $sale_item_record['price'] = $order_item->price;
                        $sale_item_record['total'] = $order_item->quantity * $order_item->price;
                        $sale_item_record['unit'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->unit : 'PCS';

                        $sale_item_record['bank_type'] = (isset($sale_record['bank_type'])) ? $sale_record['bank_type'] : '';
                        $sale_item_record['bank_number'] = (isset($sale_record['bank_number'])) ? $sale_record['bank_number'] : '';
                        $sale_item_record['bank_name'] = (isset($sale_record['bank_name'])) ? $sale_record['bank_name'] : '';
                        $sale_item_record['bank_date'] = (isset($sale_record['bank_date'])) ? $sale_record['bank_date'] : 0;
                        $sale_item_record['bank_status'] = (isset($sale_record['bank_status'])) ? $sale_record['bank_status'] : '';

                        $sale_item_record['category_type'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->category_type : 0;
                        $sale_item_record['category_number'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->category_number : 0;
                        $sale_item_record['category_name'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->category_name : 0;
                        $sale_item_record['category_date'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->category_date : 0;
                        $sale_item_record['category_status'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->category_status : 0;

                        $sale_item_record['location_type'] = (isset($sale_record['location_type'])) ? $sale_record['location_type'] : '';
                        $sale_item_record['location_number'] = (isset($sale_record['location_number'])) ? $sale_record['location_number'] : '';
                        $sale_item_record['location_name'] = (isset($sale_record['location_name'])) ? $sale_record['location_name'] : '';
                        $sale_item_record['location_date'] = (isset($sale_record['location_date'])) ? $sale_record['location_date'] : 0;
                        $sale_item_record['location_status'] = (isset($sale_record['location_status'])) ? $sale_record['location_status'] : '';

                        $sale_item_record['method_type'] = (isset($sale_record['method_type'])) ? $sale_record['method_type'] : '';
                        $sale_item_record['method_number'] = (isset($sale_record['method_number'])) ? $sale_record['method_number'] : '';
                        $sale_item_record['method_name'] = (isset($sale_record['method_name'])) ? $sale_record['method_name'] : '';
                        $sale_item_record['method_date'] = (isset($sale_record['method_date'])) ? $sale_record['method_date'] : 0;
                        $sale_item_record['method_status'] = (isset($sale_record['method_status'])) ? $sale_record['method_status'] : '';

                        $sale_item_record['product_type'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->type : '';
                        $sale_item_record['product_number'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->number : '';
                        $sale_item_record['product_name'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->name : '';
                        $sale_item_record['product_date'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->date : 0;
                        $sale_item_record['product_status'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->status : '';

                        $sale_item_record['sale_type'] = (isset($sale_record['type'])) ? $sale_record['type'] : '';
                        $sale_item_record['sale_number'] = (isset($sale_record['number'])) ? $sale_record['number'] : '';
                        $sale_item_record['sale_name'] = (isset($sale_record['name'])) ? $sale_record['name'] : '';
                        $sale_item_record['sale_date'] = (isset($sale_record['date'])) ? $sale_record['date'] : 0;
                        $sale_item_record['sale_status'] = (isset($sale_record['status'])) ? $sale_record['status'] : '';

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

                        $sale_item_record['author_id'] = $user->id;
                        $sale_item_record['author_name'] = $user->name;

                        $sale_item_id = $this->core_model->insert('sale_item', $sale_item_record);

                        // insert inventory_history
                        $inventory_history_record = array();

                        $inventory_history_record['location_id'] = (isset($sale_record['location_id'])) ? $sale_record['location_id'] : 0;
                        $inventory_history_record['product_id'] = $product_id;

                        $inventory_history_record['ref_id'] = $sale_id;
                        $inventory_history_record['ref_item_id'] = $sale_item_id;

                        $inventory_history_record['type'] = 'Sale';
                        $inventory_history_record['name'] = 'Sale ' . $sale_record['number'];
                        $inventory_history_record['date'] = (isset($sale_record['date'])) ? $sale_record['date'] : 0;
                        $inventory_history_record['quantity'] = $order_item->quantity * -1;
                        $inventory_history_record['unit'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->unit : 'PCS';

                        $inventory_history_record['location_type'] = (isset($sale_record['location_type'])) ? $sale_record['location_type'] : '';
                        $inventory_history_record['location_number'] = (isset($sale_record['location_number'])) ? $sale_record['location_number'] : '';
                        $inventory_history_record['location_name'] = (isset($sale_record['location_name'])) ? $sale_record['location_name'] : '';
                        $inventory_history_record['location_date'] = (isset($sale_record['location_date'])) ? $sale_record['location_date'] : 0;
                        $inventory_history_record['location_status'] = (isset($sale_record['location_status'])) ? $sale_record['location_status'] : '';

                        $inventory_history_record['product_type'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->type : '';
                        $inventory_history_record['product_number'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->number : '';
                        $inventory_history_record['product_name'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->name : '';
                        $inventory_history_record['product_date'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->date : 0;
                        $inventory_history_record['product_status'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->status : '';

                        $inventory_history_record['ref_type'] = (isset($sale_record['type'])) ? $sale_record['type'] : '';
                        $inventory_history_record['ref_number'] = (isset($sale_record['number'])) ? $sale_record['number'] : '';
                        $inventory_history_record['ref_name'] = (isset($sale_record['name'])) ? $sale_record['name'] : '';
                        $inventory_history_record['ref_date'] = (isset($sale_record['date'])) ? $sale_record['date'] : 0;
                        $inventory_history_record['ref_status'] = (isset($sale_record['status'])) ? $sale_record['status'] : '';

                        $inventory_history_record['ref_item_type'] = (isset($sale_item_record['type'])) ? $sale_item_record['type'] : '';
                        $inventory_history_record['ref_item_number'] = (isset($sale_item_record['number'])) ? $sale_item_record['number'] : '';
                        $inventory_history_record['ref_item_name'] = (isset($sale_item_record['name'])) ? $sale_item_record['name'] : '';
                        $inventory_history_record['ref_item_date'] = (isset($sale_item_record['date'])) ? $sale_item_record['date'] : 0;
                        $inventory_history_record['ref_item_status'] = (isset($sale_item_record['status'])) ? $sale_item_record['status'] : '';

                        $inventory_history_record['author_id'] = $user->id;
                        $inventory_history_record['author_name'] = $user->name;

                        $this->core_model->insert('inventory_history', $inventory_history_record);

                        // update inventory
                        $this->db->set('quantity', "quantity - {$order_item->quantity}", FALSE);
                        $this->db->where('location_id', $sale_record['location_id']);
                        $this->db->where('product_id', $product_id);
                        $this->core_model->update('inventory');

                        if ($arr_product_lookup[$product_id]->type == 'Package')
                        {
                            $arr_item = json_decode($arr_product_lookup[$product_id]->item);
                            $arr_product_item_id = $this->cms_function->extract_records($arr_item, 'product_id');
                            $arr_product_item_lookup = array();

                            $arr_product_item = $this->core_model->get('product', $arr_product_item_id);

                            foreach ($arr_product_item as $product_item)
                            {
                                $arr_product_item_lookup[$product_item->id] = clone $product_item;
                            }

                            foreach ($arr_item as $item)
                            {
                                $inventory_history_record = array();
                                $quantity = $order_item->quantity * $item->quantity;

                                $inventory_history_record['location_id'] = (isset($sale_record['location_id'])) ? $sale_record['location_id'] : 0;
                                $inventory_history_record['product_id'] = $item->product_id;

                                $inventory_history_record['ref_id'] = $sale_id;
                                $inventory_history_record['ref_item_id'] = $sale_item_id;

                                $inventory_history_record['type'] = 'Sale';
                                $inventory_history_record['name'] = 'Sale ' . $sale_record['number'];
                                $inventory_history_record['date'] = (isset($sale_record['date'])) ? $sale_record['date'] : 0;
                                $inventory_history_record['quantity'] = $quantity * -1;
                                $inventory_history_record['unit'] = (isset($arr_product_item_lookup[$item->product_id])) ? $arr_product_item_lookup[$item->product_id]->unit : 'PCS';

                                $inventory_history_record['location_type'] = (isset($sale_record['location_type'])) ? $sale_record['location_type'] : '';
                                $inventory_history_record['location_number'] = (isset($sale_record['location_number'])) ? $sale_record['location_number'] : '';
                                $inventory_history_record['location_name'] = (isset($sale_record['location_name'])) ? $sale_record['location_name'] : '';
                                $inventory_history_record['location_date'] = (isset($sale_record['location_date'])) ? $sale_record['location_date'] : 0;
                                $inventory_history_record['location_status'] = (isset($sale_record['location_status'])) ? $sale_record['location_status'] : '';

                                $inventory_history_record['product_type'] = (isset($arr_product_item_lookup[$item->product_id])) ? $arr_product_item_lookup[$item->product_id]->type : '';
                                $inventory_history_record['product_number'] = (isset($arr_product_item_lookup[$item->product_id])) ? $arr_product_item_lookup[$item->product_id]->number : '';
                                $inventory_history_record['product_name'] = (isset($arr_product_item_lookup[$item->product_id])) ? $arr_product_item_lookup[$item->product_id]->name : '';
                                $inventory_history_record['product_date'] = (isset($arr_product_item_lookup[$item->product_id])) ? $arr_product_item_lookup[$item->product_id]->date : 0;
                                $inventory_history_record['product_status'] = (isset($arr_product_item_lookup[$item->product_id])) ? $arr_product_item_lookup[$item->product_id]->status : '';

                                $inventory_history_record['ref_type'] = (isset($sale_record['type'])) ? $sale_record['type'] : '';
                                $inventory_history_record['ref_number'] = (isset($sale_record['number'])) ? $sale_record['number'] : '';
                                $inventory_history_record['ref_name'] = (isset($sale_record['name'])) ? $sale_record['name'] : '';
                                $inventory_history_record['ref_date'] = (isset($sale_record['date'])) ? $sale_record['date'] : 0;
                                $inventory_history_record['ref_status'] = (isset($sale_record['status'])) ? $sale_record['status'] : '';

                                $inventory_history_record['ref_item_type'] = (isset($sale_item_record['type'])) ? $sale_item_record['type'] : '';
                                $inventory_history_record['ref_item_number'] = (isset($sale_item_record['number'])) ? $sale_item_record['number'] : '';
                                $inventory_history_record['ref_item_name'] = (isset($sale_item_record['name'])) ? $sale_item_record['name'] : '';
                                $inventory_history_record['ref_item_date'] = (isset($sale_item_record['date'])) ? $sale_item_record['date'] : 0;
                                $inventory_history_record['ref_item_status'] = (isset($sale_item_record['status'])) ? $sale_item_record['status'] : '';

                                $inventory_history_record['author_id'] = $user->id;
                                $inventory_history_record['author_name'] = $user->name;

                                $this->core_model->insert('inventory_history', $inventory_history_record);

                                // update inventory
                                $this->db->set('quantity', "quantity - {$quantity}", FALSE);
                                $this->db->where('location_id', $sale_record['location_id']);
                                $this->db->where('product_id', $item->product_id);
                                $this->core_model->update('inventory');
                            }
                        }
                    }

                    // add transaction
                    $transaction_record = array();

                    $transaction_record['bank_id'] = (isset($sale_record['bank_id'])) ? $sale_record['bank_id'] : 0;
                    $transaction_record['customer_id'] = (isset($sale_record['customer_id'])) ? $sale_record['customer_id'] : 0;
                    $transaction_record['ref_id'] = $sale_id;

                    $transaction_record['type'] = 'Sale';
                    $transaction_record['name'] = (isset($sale_record['number'])) ? 'Payment for Sale ' . $sale_record['number'] : '';
                    $transaction_record['date'] = time();

                    $transaction_record['amount'] = $result->amount;

                    $transaction_record['bank_type'] = (isset($sale_record['bank_type'])) ? $sale_record['bank_type'] : '';
                    $transaction_record['bank_number'] = (isset($sale_record['bank_number'])) ? $sale_record['bank_number'] : '';
                    $transaction_record['bank_name'] = (isset($sale_record['bank_name'])) ? $sale_record['bank_name'] : '';
                    $transaction_record['bank_date'] = (isset($sale_record['bank_date'])) ? $sale_record['bank_date'] : 0;
                    $transaction_record['bank_status'] = (isset($sale_record['bank_status'])) ? $sale_record['bank_status'] : '';

                    $transaction_record['customer_type'] = (isset($sale_record['customer_type'])) ? $sale_record['customer_type'] : '';
                    $transaction_record['customer_number'] = (isset($sale_record['customer_number'])) ? $sale_record['customer_number'] : '';
                    $transaction_record['customer_name'] = (isset($sale_record['customer_name'])) ? $sale_record['customer_name'] : '';
                    $transaction_record['customer_date'] = (isset($sale_record['customer_date'])) ? $sale_record['customer_date'] : 0;
                    $transaction_record['customer_status'] = (isset($sale_record['customer_status'])) ? $sale_record['customer_status'] : '';

                    $transaction_record['ref_type'] = (isset($sale_record['type'])) ? $sale_record['type'] : '';
                    $transaction_record['ref_number'] = (isset($sale_record['number'])) ? $sale_record['number'] : '';
                    $transaction_record['ref_name'] = (isset($sale_record['name'])) ? $sale_record['name'] : '';
                    $transaction_record['ref_date'] = (isset($sale_record['date'])) ? $sale_record['date'] : 0;
                    $transaction_record['ref_status'] = (isset($sale_record['status'])) ? $sale_record['status'] : '';

                    $transaction_record['author_id'] = $user->id;
                    $transaction_record['author_name'] = $user->name;

                    $transaction_id = $this->core_model->insert('transaction', $transaction_record);
                }

                // insert order to webshop selestial
                $this->db->simple_query('USE webapps_2_eliocare');

                $this->db->where('payment_id', $result->external_id);
                $arr_order = $this->core_model->get('order');

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

                if (count($arr_order) > 0 && $result->status == 'PAID')
                {
                    $order = $arr_order[0];
                    $patient_email = '';
                    $discount_item = 0;

                    if ($order->patient_id > 0)
                    {
                        $patient = $this->core_model->get('patient', $order->patient_id);
                        $patient_email = strtolower($patient->email);
                    }

                    $this->db->where('order_id', $order->id);
                    $arr_order_item = $this->core_model->get('order_item');

                    foreach ($arr_order_item as $order_item)
                    {
                        $discount_item += $order_item->discount;
                    }

                    if (time() >= 1640970000)
                    {
                        $this->db->simple_query("USE `webshop_4_selestialbrands`");
                    }
                    else
                    {
                        $this->db->simple_query("USE `webshop_4_selestial`");
                    }

                    // check if customer exist
                    if ($order->patient_id > 0)
                    {
                        $this->db->where('email', $patient_email);
                        $count_customer = $this->core_model->count('customer');

                        if ($count_customer <= 0)
                        {
                            $customer_record = array();

                            $customer_record['number'] = $patient->number;
                            $customer_record['status'] = 'Active';
                            $customer_record['name'] = ucwords(strtolower($patient->name));
                            $customer_record['date'] = $patient->date;
                            $customer_record['email'] = strtolower($patient_email);
                            $customer_record['phone'] = $patient->phone;

                            $customer_id = $this->core_model->insert('customer', $customer_record);

                            $arr_customer_lookup[strtolower($patient_email)] = $customer_id;
                        }
                        else
                        {
                            $this->db->where('email', $patient_email);
                            $arr_customer = $this->core_model->get('customer');

                            if (count($arr_customer) > 0)
                            {
                                $arr_customer_lookup[strtolower($arr_customer[0]->email)] = $arr_customer[0]->id;
                            }
                        }
                    }
                    else
                    {
                        $this->db->where('email', $order->shipping_email);
                        $count_customer = $this->core_model->count('customer');

                        if ($count_customer <= 0)
                        {
                            $customer_record = array();

                            $customer_record['status'] = 'Active';
                            $customer_record['name'] = ucwords(strtolower($order->shipping_name));
                            $customer_record['date'] = $order->date;
                            $customer_record['email'] = $order->shipping_email;
                            $customer_record['phone'] = $order->shipping_phone;
                            $customer_id = $this->core_model->insert('customer', $customer_record);

                            $customer_record['number'] = '#GUEST' . str_pad($customer_id, 4, 0, STR_PAD_LEFT);
                            $this->core_model->update('customer', $customer_id, array('number' => $customer_record['number']));

                            $arr_customer_lookup[$order->email] = $customer_id;
                        }
                        else
                        {
                            $this->db->where('email', $order->shipping_email);
                            $arr_customer = $this->core_model->get('customer');

                            if (count($arr_customer) > 0)
                            {
                                $arr_customer_lookup[strtolower($arr_customer[0]->email)] = $arr_customer[0]->id;
                            }
                        }
                    }

                    $order->email = ($order->patient_id > 0) ? $patient->email : $order->shipping_email;

                    $sale_record = array();

                    $sale_record['bank_id'] = 2;
                    $sale_record['channel_id'] = ($user_type == 'Reseller') ? 6 : 2;
                    $sale_record['customer_id'] = $arr_customer_lookup[$order->email];
                    $sale_record['location_id'] = ($order->location == 'Haistar') ? 2 : 1;
                    $sale_record['method_id'] = 5;

                    $sale_record['number'] = $order->number;
                    $sale_record['date'] = $order->date;
                    $sale_record['payment_date'] = time();
                    $sale_record['status'] = 'Paid';
                    $sale_record['fulfillment_status'] = 'Pending';

                    $sale_record['subtotal'] = $order->subtotal;
                    $sale_record['shipping'] = $order->shipping;
                    $sale_record['discount_order'] = $order->discount - $discount_item;
                    $sale_record['discount_item'] = $discount_item;
                    $sale_record['total_discount'] = $sale_record['discount_order'] + $sale_record['discount_item'];
                    $sale_record['total'] = $order->grand_total;

                    $sale_record['shipping_name'] = $order->shipping_name;
                    $sale_record['shipping_phone'] = $order->shipping_phone;
                    $sale_record['shipping_email'] = $order->email;
                    $sale_record['shipping_address_line_1'] = $order->shipping_address_line_1;
                    $sale_record['shipping_address_line_2'] = $order->shipping_address_line_2;
                    $sale_record['shipping_address_line_3'] = $order->shipping_address_line_3;
                    $sale_record['shipping_postcode'] = $order->shipping_postcode;
                    $sale_record['shipping_city'] = $order->shipping_city;
                    $sale_record['shipping_province'] = $order->shipping_province;
                    $sale_record['shipping_district'] = $order->shipping_district;
                    $sale_record['airway_bill_number'] = $order->shipping_courier_tracking_id;

                    $sale_record = $this->cms_function->populate_foreign_field($sale_record['bank_id'], $sale_record, 'bank');
                    $sale_record = $this->cms_function->populate_foreign_field($sale_record['location_id'], $sale_record, 'location');
                    $sale_record = $this->cms_function->populate_foreign_field($sale_record['channel_id'], $sale_record, 'channel');
                    $sale_record = $this->cms_function->populate_foreign_field($sale_record['customer_id'], $sale_record, 'customer');
                    $sale_record = $this->cms_function->populate_foreign_field($sale_record['method_id'], $sale_record, 'method');

                    $sale_id = $this->core_model->insert('sale', $sale_record);

                    $arr_webshop_product = $this->core_model->get('product');
                    $arr_webshop_product_lookup = array();

                    foreach ($arr_webshop_product as $webshop_product)
                    {
                        $arr_webshop_product_lookup[$webshop_product->id] = clone $webshop_product;
                    }

                    // insert sale_item
                    foreach ($arr_order_item as $order_item)
                    {
                        $product_id = (isset($arr_webshop_product_id_lookup[$order_item->product_id])) ? $arr_webshop_product_id_lookup[$order_item->product_id] : 0;

                        $sale_item_record = array();

                        $sale_item_record['bank_id'] = (isset($sale_record['bank_id'])) ? $sale_record['bank_id'] : 0;
                        $sale_item_record['brand_id'] = (isset($arr_webshop_product_lookup[$product_id])) ? $arr_webshop_product_lookup[$product_id]->brand_id : 0;
                        $sale_item_record['location_id'] = (isset($sale_record['location_id'])) ? $sale_record['location_id'] : 0;
                        $sale_item_record['product_id'] = $product_id;
                        $sale_item_record['sale_id'] = $sale_id;
                        $sale_item_record['channel_id'] = (isset($sale_record['channel_id'])) ? $sale_record['channel_id'] : 0;
                        $sale_item_record['customer_id'] = (isset($sale_record['customer_id'])) ? $sale_record['customer_id'] : 0;
                        $sale_item_record['category_id'] = (isset($arr_webshop_product_lookup[$product_id])) ? $arr_webshop_product_lookup[$product_id]->category_id : 0;

                        $sale_item_record['quantity'] = $order_item->quantity;
                        $sale_item_record['price'] = $order_item->price;
                        $sale_item_record['discount'] = $order_item->discount;
                        $sale_item_record['total'] = ($order_item->quantity * $order_item->price) - $order_item->discount;
                        $sale_item_record['unit'] = (isset($arr_webshop_product_lookup[$product_id])) ? $arr_webshop_product_lookup[$product_id]->unit : 'PCS';

                        $sale_item_record['brand_type'] = (isset($arr_webshop_product_lookup[$product_id])) ? $arr_webshop_product_lookup[$product_id]->brand_type : 0;
                        $sale_item_record['brand_number'] = (isset($arr_webshop_product_lookup[$product_id])) ? $arr_webshop_product_lookup[$product_id]->brand_number : 0;
                        $sale_item_record['brand_name'] = (isset($arr_webshop_product_lookup[$product_id])) ? $arr_webshop_product_lookup[$product_id]->brand_name : 0;
                        $sale_item_record['brand_date'] = (isset($arr_webshop_product_lookup[$product_id])) ? $arr_webshop_product_lookup[$product_id]->brand_date : 0;
                        $sale_item_record['brand_status'] = (isset($arr_webshop_product_lookup[$product_id])) ? $arr_webshop_product_lookup[$product_id]->brand_status : 0;

                        $sale_item_record['bank_type'] = (isset($sale_record['bank_type'])) ? $sale_record['bank_type'] : '';
                        $sale_item_record['bank_number'] = (isset($sale_record['bank_number'])) ? $sale_record['bank_number'] : '';
                        $sale_item_record['bank_name'] = (isset($sale_record['bank_name'])) ? $sale_record['bank_name'] : '';
                        $sale_item_record['bank_date'] = (isset($sale_record['bank_date'])) ? $sale_record['bank_date'] : 0;
                        $sale_item_record['bank_status'] = (isset($sale_record['bank_status'])) ? $sale_record['bank_status'] : '';

                        $sale_item_record['category_type'] = (isset($arr_webshop_product_lookup[$product_id])) ? $arr_webshop_product_lookup[$product_id]->category_type : 0;
                        $sale_item_record['category_number'] = (isset($arr_webshop_product_lookup[$product_id])) ? $arr_webshop_product_lookup[$product_id]->category_number : 0;
                        $sale_item_record['category_name'] = (isset($arr_webshop_product_lookup[$product_id])) ? $arr_webshop_product_lookup[$product_id]->category_name : 0;
                        $sale_item_record['category_date'] = (isset($arr_webshop_product_lookup[$product_id])) ? $arr_webshop_product_lookup[$product_id]->category_date : 0;
                        $sale_item_record['category_status'] = (isset($arr_webshop_product_lookup[$product_id])) ? $arr_webshop_product_lookup[$product_id]->category_status : 0;

                        $sale_item_record['location_type'] = (isset($sale_record['location_type'])) ? $sale_record['location_type'] : '';
                        $sale_item_record['location_number'] = (isset($sale_record['location_number'])) ? $sale_record['location_number'] : '';
                        $sale_item_record['location_name'] = (isset($sale_record['location_name'])) ? $sale_record['location_name'] : '';
                        $sale_item_record['location_date'] = (isset($sale_record['location_date'])) ? $sale_record['location_date'] : 0;
                        $sale_item_record['location_status'] = (isset($sale_record['location_status'])) ? $sale_record['location_status'] : '';

                        $sale_item_record['product_type'] = (isset($arr_webshop_product_lookup[$product_id])) ? $arr_webshop_product_lookup[$product_id]->type : '';
                        $sale_item_record['product_number'] = (isset($arr_webshop_product_lookup[$product_id])) ? $arr_webshop_product_lookup[$product_id]->number : '';
                        $sale_item_record['product_name'] = (isset($arr_webshop_product_lookup[$product_id])) ? $arr_webshop_product_lookup[$product_id]->name : '';
                        $sale_item_record['product_date'] = (isset($arr_webshop_product_lookup[$product_id])) ? $arr_webshop_product_lookup[$product_id]->date : 0;
                        $sale_item_record['product_status'] = (isset($arr_webshop_product_lookup[$product_id])) ? $arr_webshop_product_lookup[$product_id]->status : '';

                        $sale_item_record['sale_type'] = (isset($sale_record['type'])) ? $sale_record['type'] : '';
                        $sale_item_record['sale_number'] = (isset($sale_record['number'])) ? $sale_record['number'] : '';
                        $sale_item_record['sale_name'] = (isset($sale_record['name'])) ? $sale_record['name'] : '';
                        $sale_item_record['sale_date'] = (isset($sale_record['date'])) ? $sale_record['date'] : 0;
                        $sale_item_record['sale_status'] = (isset($sale_record['status'])) ? $sale_record['status'] : '';

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

                        $sale_item_id = $this->core_model->insert('sale_item', $sale_item_record);
                    }

                    $transaction_record = array();

                    $transaction_record['bank_id'] = (isset($sale_record['bank_id'])) ? $sale_record['bank_id'] : 0;
                    $transaction_record['channel_id'] = (isset($sale_record['channel_id'])) ? $sale_record['channel_id'] : 0;
                    $transaction_record['customer_id'] = (isset($sale_record['customer_id'])) ? $sale_record['customer_id'] : 0;
                    $transaction_record['ref_id'] = $sale_id;

                    $transaction_record['type'] = 'Sale';
                    $transaction_record['name'] = (isset($sale_record['number'])) ? 'Payment for Sale ' . $sale_record['number'] : '';
                    $transaction_record['date'] = (isset($sale_record['payment_date'])) ? $sale_record['payment_date'] : time();

                    $transaction_record['amount'] = $sale_record['total'];

                    $transaction_record['bank_type'] = (isset($sale_record['bank_type'])) ? $sale_record['bank_type'] : '';
                    $transaction_record['bank_number'] = (isset($sale_record['bank_number'])) ? $sale_record['bank_number'] : '';
                    $transaction_record['bank_name'] = (isset($sale_record['bank_name'])) ? $sale_record['bank_name'] : '';
                    $transaction_record['bank_date'] = (isset($sale_record['bank_date'])) ? $sale_record['bank_date'] : 0;
                    $transaction_record['bank_status'] = (isset($sale_record['bank_status'])) ? $sale_record['bank_status'] : '';

                    $transaction_record['channel_type'] = (isset($sale_record['channel_type'])) ? $sale_record['channel_type'] : '';
                    $transaction_record['channel_number'] = (isset($sale_record['channel_number'])) ? $sale_record['channel_number'] : '';
                    $transaction_record['channel_name'] = (isset($sale_record['channel_name'])) ? $sale_record['channel_name'] : '';
                    $transaction_record['channel_date'] = (isset($sale_record['channel_date'])) ? $sale_record['channel_date'] : 0;
                    $transaction_record['channel_status'] = (isset($sale_record['channel_status'])) ? $sale_record['channel_status'] : '';

                    $transaction_record['customer_type'] = (isset($sale_record['customer_type'])) ? $sale_record['customer_type'] : '';
                    $transaction_record['customer_number'] = (isset($sale_record['customer_number'])) ? $sale_record['customer_number'] : '';
                    $transaction_record['customer_name'] = (isset($sale_record['customer_name'])) ? $sale_record['customer_name'] : '';
                    $transaction_record['customer_date'] = (isset($sale_record['customer_date'])) ? $sale_record['customer_date'] : 0;
                    $transaction_record['customer_status'] = (isset($sale_record['customer_status'])) ? $sale_record['customer_status'] : '';

                    $transaction_record['ref_type'] = (isset($sale_record['type'])) ? $sale_record['type'] : '';
                    $transaction_record['ref_number'] = (isset($sale_record['number'])) ? $sale_record['number'] : '';
                    $transaction_record['ref_name'] = (isset($sale_record['name'])) ? $sale_record['name'] : '';
                    $transaction_record['ref_date'] = (isset($sale_record['date'])) ? $sale_record['date'] : 0;
                    $transaction_record['ref_status'] = (isset($sale_record['status'])) ? $sale_record['status'] : '';

                    $transaction_id = $this->core_model->insert('transaction', $transaction_record);
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
    /* End Public Function Area */




    /* Ajax Area */
    /* End Ajax Area */




    /* Private Function Area */
    private function _get_signature()
    {
        $param = new stdClass();
        $param->apikey = $this->_api_key;
        $json_param = json_encode($param);

        $url =  $this->_api_endpoint_url . 'Api/getSignature/?apikey=' . $this->_api_key;
        $curl = curl_init($url);

        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'apikey: ' . $this->_api_key));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $json_param);

        $result = curl_exec($curl);
        curl_close($curl);

        $auth = json_decode($result);

        return $auth->Data->Signature;
    }
    /* End Private Function Area */
}
