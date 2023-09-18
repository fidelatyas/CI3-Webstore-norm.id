<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller
{
    private $_patient;
    private $_setting;
    private $_lang;

    public function __construct()
    {
        parent:: __construct();

        $this->_setting = $this->setting_model->load();

        // check language
        $this->_lang = (!$this->session->userdata('norm_lang')) ? 'ENG' : $this->session->userdata('norm_lang');

        // get signin data
        $patient_id = $this->session->userdata('patient_id');

        if ($patient_id > 0)
        {
            $this->_patient = $this->core_model->get('patient', $patient_id);
        }
    }




    /* Public Function Area */
    /* End Public Function Area */




    /* Ajax Area */
    public function ajax_add_to_cart()
    {
        $json['status'] = 'success';

        try
        {
            $product_id = $this->input->post('product_id');
            $category_id = $this->input->post('category_id');
            $quantity = $this->input->post('quantity');
            $discount = $this->input->post('discount');
            $price = $this->input->post('price');
            $total = $price * $quantity;
            $subtotal_cart = 0;
            $list_product_number = '';

            $arr_product_number = array();
            $arr_product_number[1] = 'NPRO-000001';
            $arr_product_number[3] = 'NPRO-000002';
            $arr_product_number[4] = 'NPRO-000003';
            $arr_product_number[11] = 'NKIT-000011';
            $arr_product_number[13] = 'NKIT-000012';
            $arr_product_number[16] = 'NPRO-000009';
            $arr_product_number[18] = 'NPRO-000015';
            $arr_product_number[19] = 'NPRO-000017';
            $arr_product_number[20] = 'NPRO-000016';
            $arr_product_number[21] = 'NPRO-000019';
            $arr_product_number[22] = 'NPRO-000018';
            $arr_product_number[23] = 'NKIT-000020';
            $arr_product_number[24] = 'NKIT-000021';
            $arr_product_number[25] = 'NKIT-000022';
            $arr_product_number[26] = 'NKIT-000043';
            $arr_product_number[27] = 'NKIT-000046';
            $arr_product_number[28] = 'NKIT-000047';
            $arr_product_number[29] = 'NKIT-000028';
            $arr_product_number[30] = 'NKIT-000029';
            $arr_product_number[31] = 'NKIT-000045';
            $arr_product_number[32] = 'NPRO-000044';
            $arr_product_number[33] = 'NKIT-000052';
            $arr_product_number[34] = 'NKIT-000053';
            $arr_product_number[35] = 'NPRO-000050';
            $arr_product_number[36] = 'NPRO-000051';
            $arr_product_number[37] = 'NKIT-000054';

            // get old_cart
            $arr_old_cart = ($this->session->userdata('arr_cart')) ? $this->session->userdata('arr_cart') : array();
            $found = 0;

            foreach ($arr_old_cart as $old_cart)
            {
                $new_cart = new stdClass();
                $new_cart = clone $old_cart;

                if ($old_cart->product_id == $product_id)
                {
                    $found += 1;

                    $new_cart->discount = $discount;
                    $new_cart->quantity = $quantity;
                    $new_cart->total = $price * $quantity;
                }

                $arr_cart[] = clone $new_cart;
                $subtotal_cart += $new_cart->total;

                if ($list_product_number == '')
                {
                    $list_product_number = '"' . $arr_product_number[$new_cart->product_id] . '"';
                }
                else
                {
                    $list_product_number .= ',"' . $arr_product_number[$new_cart->product_id] . '"';
                }
            }

            if ($found <= 0)
            {
                // add to Cart
                $new_cart = new stdClass();
                $new_cart->product_id = $product_id;
                $new_cart->category_id = $category_id;
                $new_cart->quantity = $quantity;
                $new_cart->discount = $discount;
                $new_cart->price = $price;
                $new_cart->total = $price * $quantity;

                $arr_cart[] = clone $new_cart;
                $subtotal_cart += $new_cart->total;

                if ($list_product_number == '')
                {
                    $list_product_number = '"' . $arr_product_number[$new_cart->product_id] . '"';
                }
                else
                {
                    $list_product_number .= ',"' . $arr_product_number[$new_cart->product_id] . '"';
                }
            }

            $this->session->set_userdata('arr_cart', $arr_cart);

            if ($this->_patient)
            {
                $this->db->where('patient_id',  $this->_patient->id);
                $this->core_model->delete('cart');

                $cart_record = array();
                $cart_record['patient_id'] = $this->_patient->id;
                $cart_record['date'] = time();
                $cart_record['cart'] = json_encode($arr_cart);
                $this->core_model->insert('cart', $cart_record);
            }

            $cart_record = $this->cms_function->generate_cart();
            $record['cart_record'] = $cart_record;

            $json['subtotal']  = $cart_record['subtotal_cart'];
            $json['subtotal_display']  = $cart_record['subtotal_cart_display'];
            $json['cart_list'] = $this->load->view('all_cart', $record, true);

            $this->load->library('user_agent');

            $ip_address = $this->cms_function->get_ip_address();
            $time = time() - 300;
            $event_id = md5($this->cms_function->generate_random_number('order', 20));
            $data = '[{"action_source":"website","event_id": "'. $event_id .'","event_name":"AddToCart","event_time":'. $time .',"opt_out":false,"custom_data":{"value":'. $subtotal_cart .',"currency":"IDR","content_ids":['. $list_product_number .']},"user_data":{"country":"3843971dcfdee5083e6289e1bbdbb003e538b5a8a668fc43ae4f19d415ac18a2","client_ip_address":"'. $ip_address .'","client_user_agent":"'. $this->agent->agent_string() .'"}}]';

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
        catch (Exception $e)
        {
            $json['message'] = $e->getMessage();
            $json['status'] = 'error';

            if ($json['message'] == '')
            {
                $json['message'] = 'Oops.. Server kami sedang mengalami gangguan. Silakan coba beberapa saat lagi.';
            }

            $error_log_record = array();
            $error_log_record['date'] = time();
            $error_log_record['function'] = 'ajax_add_to_cart';
            $error_log_record['url'] = current_url();
            $error_log_record['name'] = $json['message'];
            $this->core_model->insert('error_log', $error_log_record);
        }

        echo json_encode($json);
    }

    public function ajax_discreet_product()
    {
        $json['status'] = 'success';

        try
        {
            $this->session->set_userdata('view_popup', 1);
        }
        catch (Exception $e)
        {
            $json['message'] = $e->getMessage();
            $json['status'] = 'error';

            if ($json['message'] == '')
            {
                $json['message'] = 'Oops.. Server kami sedang mengalami gangguan. Silakan coba beberapa saat lagi.';
            }

            $error_log_record = array();
            $error_log_record['date'] = time();
            $error_log_record['function'] = 'ajax_discreet_product';
            $error_log_record['url'] = current_url();
            $error_log_record['name'] = $json['message'];
            $this->core_model->insert('error_log', $error_log_record);
        }

        echo json_encode($json);
    }

    public function ajax_get_address()
    {
        $json['status'] = 'success';

        try
        {
            $this->db->trans_start();

            $address_id = $this->input->post('address_id');

            $address = $this->core_model->get('address', $address_id);

            $patient = $this->core_model->get('patient', $address->patient_id);
            $address->email = ($address->email == '') ? $patient->email : $address->email;

            // get city
            $this->db->where('province_id', $address->province_id);
            $address->arr_city = $this->core_model->get('city');

            // get city
            $this->db->where('province_id', $address->province_id);
            $this->db->where('city_id', $address->city_id);
            $address->arr_district = $this->core_model->get('district');

            $json['address'] = $address;

            $this->db->trans_complete();
        }
        catch (Exception $e)
        {
            $json['message'] = $e->getMessage();
            $json['status'] = 'error';

            if ($json['message'] == '')
            {
                $json['message'] = 'Oops.. Server kami sedang mengalami gangguan. Silakan coba beberapa saat lagi.';
            }

            $error_log_record = array();
            $error_log_record['date'] = time();
            $error_log_record['function'] = 'ajax_get_address';
            $error_log_record['url'] = current_url();
            $error_log_record['name'] = $json['message'];
            $this->core_model->insert('error_log', $error_log_record);
        }

        echo json_encode($json);
    }

    public function ajax_get_city($province_id = 0)
    {
        $json['status'] = 'success';

        try
        {
            if ($province_id <= 0)
            {
                throw new Exception('Provinsi tidak ditemukan');
            }

            $this->db->where('province_id', $province_id);
            $this->db->order_by('name');
            $arr_city = $this->core_model->get('city');

            $json['arr_city'] = $arr_city;
        }
        catch (Exception $e)
        {
            $json['message'] = $e->getMessage();
            $json['status'] = 'error';

            if ($json['message'] == '')
            {
                $json['message'] = 'Oops.. Server kami sedang mengalami gangguan. Silakan coba beberapa saat lagi.';
            }

            $error_log_record = array();
            $error_log_record['date'] = time();
            $error_log_record['function'] = 'ajax_get_city';
            $error_log_record['url'] = current_url();
            $error_log_record['name'] = $json['message'];
            $this->core_model->insert('error_log', $error_log_record);
        }

        echo json_encode($json);
    }

    public function ajax_get_district($province_id = 0, $city_id = 0)
    {
        $json['status'] = 'success';

        try
        {
            if ($province_id <= 0 || $city_id <= 0)
            {
                throw new Exception('Provinsi / Kota tidak ditemukan');
            }

            $this->db->where('province_id', $province_id);
            $this->db->where('city_id', $city_id);
            $this->db->order_by('name');
            $arr_district = $this->core_model->get('district');

            $json['arr_district'] = $arr_district;
        }
        catch (Exception $e)
        {
            $json['message'] = $e->getMessage();
            $json['status'] = 'error';

            if ($json['message'] == '')
            {
                $json['message'] = 'Oops.. Server kami sedang mengalami gangguan. Silakan coba beberapa saat lagi.';
            }

            $error_log_record = array();
            $error_log_record['date'] = time();
            $error_log_record['function'] = 'ajax_get_district';
            $error_log_record['url'] = current_url();
            $error_log_record['name'] = $json['message'];
            $this->core_model->insert('error_log', $error_log_record);
        }

        echo json_encode($json);
    }

    public function ajax_get_order($order_id = 0)
    {
        $json['status'] = 'success';

        try
        {
            if ($order_id <= 0)
            {
                throw new Exception();
            }

            $order = $this->core_model->get('order', $order_id);
            $discount_item = 0;

            $this->db->where('order_id', $order->id);
            $order->arr_order_item = $this->core_model->get('order_item');

            foreach ($order->arr_order_item as $order_item)
            {
                $discount_item += $order_item->discount;

                $order_item->price_display = 'IDR ' . number_format($order_item->price, 0, ',', '.');
                $order_item->quantity_display = number_format($order_item->quantity, 0, '', '');
                $order_item->discount_display = 'IDR ' . number_format($order_item->discount, 0, ',', '.');

                $order_item->total_item = $order_item->price * $order_item->quantity;
                $order_item->total_item_display = 'IDR ' . number_format($order_item->total_item, 0, ',', '.');
                $order_item->total_display = 'IDR ' . number_format($order_item->total, 0, ',', '.');
            }

            $order->discount = $order->discount - $discount_item;
            $order->discount = ($order->discount <= 0) ? 0 : $order->discount;

            $order->subtotal = $order->subtotal - $discount_item;
            $order->subtotal_display = 'IDR ' . number_format($order->subtotal, 0, ',', '.');
            $order->shipping_display = 'IDR ' . number_format($order->shipping, 0, ',', '.');
            $order->discount_display = 'IDR ' . number_format($order->discount, 0, ',', '.');
            $order->grand_total_display = 'IDR ' . number_format($order->grand_total, 0, ',', '.');

            $record['order'] = $order;

            $json['order'] = $order;
            $json['order_list'] = $this->load->view('order_detail', $record, true);
        }
        catch (Exception $e)
        {
            $json['message'] = $e->getMessage();
            $json['status'] = 'error';

            if ($json['message'] == '')
            {
                $json['message'] = 'Oops.. Server kami sedang mengalami gangguan. Silakan coba beberapa saat lagi.';
            }

            $error_log_record = array();
            $error_log_record['date'] = time();
            $error_log_record['function'] = 'ajax_get_order';
            $error_log_record['url'] = current_url();
            $error_log_record['name'] = $json['message'];
            $this->core_model->insert('error_log', $error_log_record);
        }

        echo json_encode($json);
    }

    public function ajax_get_shipping($province_id = 0, $city_id = 0, $district_id = 0)
    {
        $json['status'] = 'success';

        try
        {
            $cart_record = $this->cms_function->generate_cart();

            if ($province_id <= 0 || $city_id <= 0 || $district_id <= 0)
            {
                throw new Exception();
            }

            $this->db->where('province_id', $province_id);
            $this->db->where('city_id', $city_id);
            $this->db->where('district_id', $district_id);
            $this->db->where('type !=', 'Anteraja');
            $this->db->where('type !=', 'SAP');
            $this->db->where('number !=', 'SD');
            $this->db->order_by('price');
            $arr_shipping = $this->core_model->get('shipping');

            foreach ($arr_shipping as $shipping)
            {
                $shipping->price = ($cart_record['weight'] < 1) ? $shipping->price : $shipping->price * $cart_record['weight'];

                $shipping->price_display = 'IDR ' . number_format($shipping->price, 0, ',', '.');
                $shipping->name = $shipping->type . ' ' . $shipping->name . ' ' . $shipping->price_display;
            }

            $json['arr_shipping'] = $arr_shipping;
        }
        catch (Exception $e)
        {
            $json['message'] = $e->getMessage();
            $json['status'] = 'error';

            if ($json['message'] == '')
            {
                $json['message'] = 'Oops.. Server kami sedang mengalami gangguan. Silakan coba beberapa saat lagi.';
            }

            $error_log_record = array();
            $error_log_record['date'] = time();
            $error_log_record['function'] = 'ajax_get_shipping';
            $error_log_record['url'] = current_url();
            $error_log_record['name'] = $json['message'];
            $this->core_model->insert('error_log', $error_log_record);
        }

        echo json_encode($json);
    }

    public function ajax_get_shipment($postcode)
    {
        $json['status'] = 'success';

        try
        {
            $this->db->where('postcode', $postcode);
            $this->db->where('name !=', 'Lion Parcel');
            // $this->db->where('name !=', 'Westbike Messenger');
            $this->db->order_by('name DESC');
            $arr_shipment = $this->core_model->get('shipment');

            foreach ($arr_shipment as $shipment)
            {
                $shipment->price_display = number_format($shipment->price, 0, '.', ',');

                if ($shipment->name == 'J&T Regular')
                {
                    $shipment->image = 'JNT.png';
                }
                else
                {
                    $shipment->image = 'westbike.png';
                }
            }

            $json['arr_shipping'] = $arr_shipment;
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

    public function ajax_google_signin($consultation = 0)
    {
        $json['status'] = 'success';

        try
        {
            $email = $this->input->post('email');
            $name = $this->input->post('name');

            $setup = 0;

            $this->db->trans_start();

            // check existing email
            $this->db->where('email', $email);
            $arr_patient = $this->core_model->get('patient');

            if (count($arr_patient) > 0)
            {
                // update patient data if google_id doesnt exist
                if ($arr_patient[0]->google_id == '')
                {
                    $patient_record = array();
                    $patient_record['google_id'] = $arr_patient[0]->id;
                    $patient_record['name'] = $name;

                    $this->core_model->update('patient', $arr_patient[0]->id, $patient_record);
                }

                if ($arr_patient[0]->gender == '' || $arr_patient[0]->phone == '' || $arr_patient[0]->birthdate <= 0)
                {
                    $setup = 1;
                }

                $patient_id = $arr_patient[0]->id;
                $patient_name = $arr_patient[0]->name;
            }
            else
            {
                // register patient data
                $patient_record['name'] = $name;
                $patient_record['email'] = $email;
                $patient_record['date'] = time();

                $patient_id = $this->core_model->insert('patient', $patient_record);

                $patient_record['number'] = '#PAT-' . str_pad($patient_id, 6, 0, STR_PAD_LEFT);
                $patient_record['google_id'] = $patient_id;
                $this->core_model->update('patient', $patient_id, array('number' => $patient_record['number']));

                $patient_name = $name;
                $setup = 1;

                // send email
                $record = array();
                $record['name'] = $patient_record['name'];

                $subject = 'Selamat datang di norm.id';
                $message = $this->load->view('email/welcome', $record, true);

                $this->cms_function->load_email_library($this->_setting, $patient_record['email'], array(), $subject, $message, 'html');
            }

            // set login session
            $this->session->set_userdata('patient_id', $patient_id);
            $this->session->set_userdata('patient_name', $patient_name);

            // insert consultation
            if ($consultation > 0)
            {
                $arr_questionaire = $this->session->userdata('questionaire_answer');
                $arr_answer = array();
                $category = '';

                foreach ($arr_questionaire as $key => $questionaires)
                {
                    foreach ($questionaires as $q)
                    {
                        $category = $q->category;
                        $arr_answer[] = clone $q;
                    }
                }

                $consultation_record = array();
                $consultation_record['patient_id'] = $patient_id;
                $consultation_record['category_id'] = ($category == 'hairgrowth') ? 5 : 11;

                $consultation_record['number'] = $this->cms_function->generate_random_number('consultation', 8);
                $consultation_record['date'] = time();
                $consultation_record['status'] = 'Pending';

                $consultation_record = $this->cms_function->populate_foreign_field($consultation_record['patient_id'], $consultation_record, 'patient');
                $consultation_record = $this->cms_function->populate_foreign_field($consultation_record['category_id'], $consultation_record, 'category');

                $consultation_id = $this->core_model->insert('consultation', $consultation_record);

                // insert consultation_questionaire
                foreach ($arr_answer as $answer)
                {
                    $consultation_questionaire_record = array();

                    $consultation_questionaire_record['patient_id'] = $consultation_record['patient_id'];
                    $consultation_questionaire_record['consultation_id'] = $consultation_id;

                    $consultation_questionaire_record['question'] = $answer->question;
                    $consultation_questionaire_record['name'] = $answer->answer;

                    $consultation_questionaire_record['patient_type'] = (isset($consultation_record['patient_type'])) ? $consultation_record['patient_type'] : '';
                    $consultation_questionaire_record['patient_number'] = (isset($consultation_record['patient_number'])) ? $consultation_record['patient_number'] : '';
                    $consultation_questionaire_record['patient_name'] = (isset($consultation_record['patient_name'])) ? $consultation_record['patient_name'] : '';
                    $consultation_questionaire_record['patient_date'] = (isset($consultation_record['patient_date'])) ? $consultation_record['patient_date'] : 0;
                    $consultation_questionaire_record['patient_status'] = (isset($consultation_record['patient_status'])) ? $consultation_record['patient_status'] : '';

                    $consultation_questionaire_record['consultation_type'] = (isset($consultation_record['consultation_type'])) ? $consultation_record['consultation_type'] : '';
                    $consultation_questionaire_record['consultation_number'] = (isset($consultation_record['consultation_number'])) ? $consultation_record['consultation_number'] : '';
                    $consultation_questionaire_record['consultation_name'] = (isset($consultation_record['consultation_name'])) ? $consultation_record['consultation_name'] : '';
                    $consultation_questionaire_record['consultation_date'] = (isset($consultation_record['consultation_date'])) ? $consultation_record['consultation_date'] : 0;
                    $consultation_questionaire_record['consultation_status'] = (isset($consultation_record['consultation_status'])) ? $consultation_record['consultation_status'] : '';

                    $this->core_model->insert('consultation_questionaire', $consultation_questionaire_record);
                }
            }

            $json['setup'] = $setup;

            $this->db->trans_complete();
        }
        catch (Exception $e)
        {
            $json['message'] = $e->getMessage();
            $json['status'] = 'error';

            if ($json['message'] == '')
            {
                $json['message'] = 'Oops.. Server kami sedang mengalami gangguan. Silakan coba beberapa saat lagi.';
            }

            $error_log_record = array();
            $error_log_record['date'] = time();
            $error_log_record['function'] = 'ajax_google_signin';
            $error_log_record['url'] = current_url();
            $error_log_record['name'] = $json['message'];
            $this->core_model->insert('error_log', $error_log_record);
        }

        echo json_encode($json);
    }

    public function ajax_login($consultation = 0)
    {
        $json['status'] = 'success';

        try
        {
            $this->load->helper('security');

            $email = $this->security->xss_clean($this->input->post('email'));
            $password = md5($this->security->xss_clean($this->input->post('password')));

            $category = $this->security->xss_clean($this->input->post('category'));

            $this->db->where('email', $email);
            $this->db->or_where('phone', $email);
            $this->db->where("BINARY password = '{$password}'", null, false);
            $arr_patient = $this->core_model->get('patient');

            if (count($arr_patient) <= 0)
            {
                throw new Exception('Email atau password yang anda masukkan salah.');
            }

            $this->session->set_userdata('patient_id', $arr_patient[0]->id);
            $this->session->set_userdata('patient_name', $arr_patient[0]->name);

            // check existing cart
            $arr_old_cart = ($this->session->userdata('arr_cart')) ? $this->session->userdata('arr_cart') : array();

            if (count($arr_old_cart) > 0)
            {
                $json_cart = json_encode($arr_old_cart);

                $this->db->where('patient_id', $arr_patient[0]->id);
                $this->core_model->delete('cart');

                $cart_record = array();
                $cart_record['patient_id'] = $arr_patient[0]->id;
                $cart_record['date'] = time();
                $cart_record['cart'] = $json_cart;
                $this->core_model->insert('cart', $cart_record);
            }
            else
            {
                $this->db->where('patient_id', $arr_patient[0]->id);
                $this->db->order_by('id DESC');
                $this->db->limit(1);
                $arr_cart = $this->core_model->get('cart');

                if (count($arr_cart) > 0)
                {
                    $new_cart = $arr_cart[0];
                    $arr_new_cart = json_decode($new_cart->cart);

                    $this->session->set_userdata('arr_cart', $arr_new_cart);
                }
            }

            // insert consultation
            if ($consultation > 0)
            {
                $arr_questionaire = $this->session->userdata('questionaire_answer');
                $arr_answer = array();
                $category = '';

                foreach ($arr_questionaire as $key => $questionaires)
                {
                    foreach ($questionaires as $q)
                    {
                        $category = $q->category;
                        $arr_answer[] = clone $q;
                    }
                }

                $consultation_record = array();
                $consultation_record['patient_id'] = $patient_id;
                $consultation_record['category_id'] = ($category == 'hairgrowth') ? 5 : 11;

                $consultation_record['number'] = $this->cms_function->generate_random_number('consultation', 8);
                $consultation_record['date'] = time();
                $consultation_record['status'] = 'Pending';

                $consultation_record = $this->cms_function->populate_foreign_field($consultation_record['patient_id'], $consultation_record, 'patient');
                $consultation_record = $this->cms_function->populate_foreign_field($consultation_record['category_id'], $consultation_record, 'category');

                $consultation_id = $this->core_model->insert('consultation', $consultation_record);

                // insert consultation_questionaire
                foreach ($arr_answer as $answer)
                {
                    $consultation_questionaire_record = array();

                    $consultation_questionaire_record['patient_id'] = $consultation_record['patient_id'];
                    $consultation_questionaire_record['consultation_id'] = $consultation_id;

                    $consultation_questionaire_record['question'] = $answer->question;
                    $consultation_questionaire_record['name'] = $answer->answer;

                    $consultation_questionaire_record['patient_type'] = (isset($consultation_record['patient_type'])) ? $consultation_record['patient_type'] : '';
                    $consultation_questionaire_record['patient_number'] = (isset($consultation_record['patient_number'])) ? $consultation_record['patient_number'] : '';
                    $consultation_questionaire_record['patient_name'] = (isset($consultation_record['patient_name'])) ? $consultation_record['patient_name'] : '';
                    $consultation_questionaire_record['patient_date'] = (isset($consultation_record['patient_date'])) ? $consultation_record['patient_date'] : 0;
                    $consultation_questionaire_record['patient_status'] = (isset($consultation_record['patient_status'])) ? $consultation_record['patient_status'] : '';

                    $consultation_questionaire_record['consultation_type'] = (isset($consultation_record['consultation_type'])) ? $consultation_record['consultation_type'] : '';
                    $consultation_questionaire_record['consultation_number'] = (isset($consultation_record['consultation_number'])) ? $consultation_record['consultation_number'] : '';
                    $consultation_questionaire_record['consultation_name'] = (isset($consultation_record['consultation_name'])) ? $consultation_record['consultation_name'] : '';
                    $consultation_questionaire_record['consultation_date'] = (isset($consultation_record['consultation_date'])) ? $consultation_record['consultation_date'] : 0;
                    $consultation_questionaire_record['consultation_status'] = (isset($consultation_record['consultation_status'])) ? $consultation_record['consultation_status'] : '';

                    $this->core_model->insert('consultation_questionaire', $consultation_questionaire_record);
                }
            }

            $json['patient'] = $arr_patient[0];
        }
        catch (Exception $e)
        {
            $json['message'] = $e->getMessage();
            $json['status'] = 'error';

            if ($json['message'] == '')
            {
                $json['message'] = 'Oops.. Server kami sedang mengalami gangguan. Silakan coba beberapa saat lagi.';
            }

            $error_log_record = array();
            $error_log_record['date'] = time();
            $error_log_record['function'] = 'ajax_login';
            $error_log_record['url'] = current_url();
            $error_log_record['name'] = $json['message'];
            $this->core_model->insert('error_log', $error_log_record);
        }

        echo json_encode($json);
    }

    public function ajax_register($consultation = 0)
    {
        $json['status'] = 'success';

        try
        {
            $this->db->trans_start();

            $this->load->helper('security');

            $patient_record = array();
            $image_id = 0;
            $category = '';

            foreach ($_POST as $k => $v)
            {
                if ($k == 'image_id')
                {
                    $image_id = $this->security->xss_clean($v);
                }
                elseif ($k == 'password')
                {
                    $patient_record[$k] = md5($this->security->xss_clean($v));
                }
                else
                {
                    $patient_record[$k] = ($k == 'date' || $k == 'birthdate') ? strtotime($this->security->xss_clean($v)) : $this->security->xss_clean($v);
                }
            }

            $patient_record['name'] = ucwords(strtolower($patient_record['name']));
            $patient_record['date'] = time();

            $this->_validate_add_patient($patient_record);

            $patient_id = $this->core_model->insert('patient', $patient_record);

            if (!isset($patient_record['number']) || (isset($patient_record['number']) && $patient_record['number'] == ''))
            {
                $patient_record['number'] = '#PAT-' . str_pad($patient_id, 6, 0, STR_PAD_LEFT);
                $this->core_model->update('patient', $patient_id, array('number' => $patient_record['number']));
            }

            $this->session->set_userdata('patient_id', $patient_id);
            $this->session->set_userdata('patient_name', $patient_record['name']);

            // insert consultation
            if ($consultation > 0)
            {
                $arr_questionaire = $this->session->userdata('questionaire_answer');
                $arr_answer = array();
                $category = '';

                foreach ($arr_questionaire as $key => $questionaires)
                {
                    foreach ($questionaires as $q)
                    {
                        $category = $q->category;
                        $arr_answer[] = clone $q;
                    }
                }

                $consultation_record = array();
                $consultation_record['patient_id'] = $patient_id;
                $consultation_record['category_id'] = ($category == 'hairgrowth') ? 5 : 11;

                $consultation_record['number'] = $this->cms_function->generate_random_number('consultation', 8);
                $consultation_record['date'] = time();
                $consultation_record['status'] = 'Pending';

                $consultation_record = $this->cms_function->populate_foreign_field($consultation_record['patient_id'], $consultation_record, 'patient');
                $consultation_record = $this->cms_function->populate_foreign_field($consultation_record['category_id'], $consultation_record, 'category');

                $consultation_id = $this->core_model->insert('consultation', $consultation_record);

                // insert consultation_questionaire
                foreach ($arr_answer as $answer)
                {
                    $consultation_questionaire_record = array();

                    $consultation_questionaire_record['patient_id'] = $consultation_record['patient_id'];
                    $consultation_questionaire_record['consultation_id'] = $consultation_id;

                    $consultation_questionaire_record['question'] = $answer->question;
                    $consultation_questionaire_record['name'] = $answer->answer;

                    $consultation_questionaire_record['patient_type'] = (isset($consultation_record['patient_type'])) ? $consultation_record['patient_type'] : '';
                    $consultation_questionaire_record['patient_number'] = (isset($consultation_record['patient_number'])) ? $consultation_record['patient_number'] : '';
                    $consultation_questionaire_record['patient_name'] = (isset($consultation_record['patient_name'])) ? $consultation_record['patient_name'] : '';
                    $consultation_questionaire_record['patient_date'] = (isset($consultation_record['patient_date'])) ? $consultation_record['patient_date'] : 0;
                    $consultation_questionaire_record['patient_status'] = (isset($consultation_record['patient_status'])) ? $consultation_record['patient_status'] : '';

                    $consultation_questionaire_record['consultation_type'] = (isset($consultation_record['consultation_type'])) ? $consultation_record['consultation_type'] : '';
                    $consultation_questionaire_record['consultation_number'] = (isset($consultation_record['consultation_number'])) ? $consultation_record['consultation_number'] : '';
                    $consultation_questionaire_record['consultation_name'] = (isset($consultation_record['consultation_name'])) ? $consultation_record['consultation_name'] : '';
                    $consultation_questionaire_record['consultation_date'] = (isset($consultation_record['consultation_date'])) ? $consultation_record['consultation_date'] : 0;
                    $consultation_questionaire_record['consultation_status'] = (isset($consultation_record['consultation_status'])) ? $consultation_record['consultation_status'] : '';

                    $this->core_model->insert('consultation_questionaire', $consultation_questionaire_record);
                }
            }

            // send email
            $record = array();
            $record['name'] = $patient_record['name'];

            $subject = 'Welcome to norm.id';
            $message = $this->load->view('email/welcome', $record, true);

            $this->cms_function->load_email_library($this->_setting, $patient_record['email'], array(), $subject, $message, 'html');

            $json['patient_id'] = $patient_id;

            $this->db->trans_complete();
        }
        catch (Exception $e)
        {
            $json['message'] = $e->getMessage();
            $json['status'] = 'error';

            if ($json['message'] == '')
            {
                $json['message'] = 'Oops.. Server kami sedang mengalami gangguan. Silakan coba beberapa saat lagi.';
            }

            $error_log_record = array();
            $error_log_record['date'] = time();
            $error_log_record['function'] = 'ajax_register';
            $error_log_record['url'] = current_url();
            $error_log_record['name'] = $json['message'];
            $this->core_model->insert('error_log', $error_log_record);
        }

        echo json_encode($json);
    }

    public function ajax_register_reseller()
    {
        $json['status'] = 'success';

        try
        {
            $this->db->trans_start();

            $this->load->helper('security');

            $user_record = array();
            $image_id = 0;

            foreach ($_POST as $k => $v)
            {
                if ($k == 'password')
                {
                    $user_record[$k] = md5($this->security->xss_clean($v));
                }
                else
                {
                    $user_record[$k] = ($k == 'date' || $k == 'birthdate') ? strtotime($this->security->xss_clean($v)) : $this->security->xss_clean($v);
                }
            }

            $user_record['position'] = 'Reseller';
            $user_record['status'] = 'Active';

            $this->_validate_add_user($user_record);

            // Insert Database
            $user_id = $this->core_model->insert('user', $user_record);

            // generate number
            if (!isset($user_record['number']) || (isset($user_record['number']) && $user_record['number'] == ''))
            {
                $user_record['number'] = str_pad($user_id, 4, 0, STR_PAD_LEFT);
                $this->core_model->update('user', $user_id, array('number' => $user_record['number']));
            }

            $reseller = new stdClass();
            $reseller->id = $user_id;
            $reseller->name = $user_record['name'];
            $reseller->phone = $user_record['phone'];
            $reseller->email = $user_record['email'];

            $this->session->set_userdata('reseller', $reseller);

            $this->db->trans_complete();
        }
        catch (Exception $e)
        {
            $json['message'] = $e->getMessage();
            $json['status'] = 'error';

            if ($json['message'] == '')
            {
                $json['message'] = 'Oops.. Server kami sedang mengalami gangguan. Silakan coba beberapa saat lagi.';
            }
        }

        echo json_encode($json);
    }

    public function ajax_register_influencer()
    {
        $json['status'] = 'success';

        try
        {
            $this->db->trans_start();

            $this->load->helper('security');

            $influencer_record = array();
            $image_id = 0;

            foreach ($_POST as $k => $v)
            {
                $influencer_record[$k] = ($k == 'date' || $k == 'birthdate') ? strtotime($this->security->xss_clean($v)) : $this->security->xss_clean($v);
            }

            $influencer_record['status'] = 'Pending Validation';

            $influencer_record = $this->cms_function->populate_foreign_field($influencer_record['province_id'], $influencer_record, 'province');
            $influencer_record = $this->cms_function->populate_foreign_field($influencer_record['city_id'], $influencer_record, 'city');
            $influencer_record = $this->cms_function->populate_foreign_field($influencer_record['district_id'], $influencer_record, 'district');

            $this->_validate_influencer($influencer_record);

            // Insert Database
            $influencer_id = $this->core_model->insert('influencer', $influencer_record);

            // generate number
            if (!isset($influencer_record['number']) || (isset($influencer_record['number']) && $influencer_record['number'] == ''))
            {
                $influencer_record['number'] = str_pad($influencer_id, 4, 0, STR_PAD_LEFT);
                $this->core_model->update('influencer', $influencer_id, array('number' => $influencer_record['number']));
            }

            $record = array();
            $record['name'] = $influencer_record['name'];

            $subject = 'Registrasi Community Influencer berhasil';
            $message = $this->load->view('email/welcome_influencer', $record, true);

            $this->cms_function->load_email_library($this->_setting, $influencer_record['email'], array(), $subject, $message, 'html');

            $this->db->trans_complete();
        }
        catch (Exception $e)
        {
            $json['message'] = $e->getMessage();
            $json['status'] = 'error';

            if ($json['message'] == '')
            {
                $json['message'] = 'Oops.. Server kami sedang mengalami gangguan. Silakan coba beberapa saat lagi.';
            }
        }

        echo json_encode($json);
    }

    public function ajax_remove_address()
    {
        $json['status'] = 'success';

        try
        {
            $this->db->trans_start();

            $address_id = $this->input->post('address_id');

            $this->core_model->delete('address', $address_id);

            $this->db->trans_complete();
        }
        catch (Exception $e)
        {
            $json['message'] = $e->getMessage();
            $json['status'] = 'error';

            if ($json['message'] == '')
            {
                $json['message'] = 'Oops.. Server kami sedang mengalami gangguan. Silakan coba beberapa saat lagi.';
            }

            $error_log_record = array();
            $error_log_record['date'] = time();
            $error_log_record['function'] = 'ajax_remove_address';
            $error_log_record['url'] = current_url();
            $error_log_record['name'] = $json['message'];
            $this->core_model->insert('error_log', $error_log_record);
        }

        echo json_encode($json);
    }

    public function ajax_save_address()
    {
        $json['status'] = 'success';

        try
        {
            $this->load->helper('security');
            $this->db->trans_start();

            $address_record = array();

            foreach ($_POST as $k => $v)
            {
                $address_record[$k] = ($k == 'date' || $k == 'birthdate') ? strtotime($this->security->xss_clean($v)) : $this->security->xss_clean($v);
            }

            $address_record['patient_id'] = $this->_patient->id;

            $address_record['patient_type'] = $this->_patient->type;
            $address_record['patient_number'] = $this->_patient->number;
            $address_record['patient_name'] = $this->_patient->name;
            $address_record['patient_date'] = $this->_patient->date;
            $address_record['patient_status'] = $this->_patient->status;

            $this->core_model->insert('address', $address_record);

            $this->db->trans_complete();
        }
        catch (Exception $e)
        {
            $json['message'] = $e->getMessage();
            $json['status'] = 'error';

            if ($json['message'] == '')
            {
                $json['message'] = 'Oops.. Server kami sedang mengalami gangguan. Silakan coba beberapa saat lagi.';
            }

            $error_log_record = array();
            $error_log_record['date'] = time();
            $error_log_record['function'] = 'ajax_save_address';
            $error_log_record['url'] = current_url();
            $error_log_record['name'] = $json['message'];
            $this->core_model->insert('error_log', $error_log_record);
        }

        echo json_encode($json);
    }

    public function ajax_save_consultation()
    {
        $json['status'] = 'success';

        try
        {
            $this->load->helper('security');
            $this->db->trans_start();

            $arr_questionaire = $this->session->userdata('questionaire_answer');
            $arr_answer = array();
            $category = '';

            foreach ($arr_questionaire as $key => $questionaires)
            {
                foreach ($questionaires as $q)
                {
                    $category = $q->category;
                    $arr_answer[] = clone $q;
                }
            }

            $consultation_record = array();
            $consultation_record['patient_id'] = $this->_patient->id;
            $consultation_record['category_id'] = ($category == 'hairgrowth') ? 5 : 11;

            $consultation_record['number'] = $this->cms_function->generate_random_number('consultation', 8);
            $consultation_record['date'] = time();
            $consultation_record['status'] = 'Pending';

            $consultation_record = $this->cms_function->populate_foreign_field($consultation_record['patient_id'], $consultation_record, 'patient');
            $consultation_record = $this->cms_function->populate_foreign_field($consultation_record['category_id'], $consultation_record, 'category');

            $consultation_id = $this->core_model->insert('consultation', $consultation_record);

            // insert consultation_questionaire
            foreach ($arr_answer as $answer)
            {
                $consultation_questionaire_record = array();

                $consultation_questionaire_record['patient_id'] = $consultation_record['patient_id'];
                $consultation_questionaire_record['consultation_id'] = $consultation_id;

                $consultation_questionaire_record['question'] = $answer->question;
                $consultation_questionaire_record['name'] = $answer->answer;

                $consultation_questionaire_record['patient_type'] = (isset($consultation_record['patient_type'])) ? $consultation_record['patient_type'] : '';
                $consultation_questionaire_record['patient_number'] = (isset($consultation_record['patient_number'])) ? $consultation_record['patient_number'] : '';
                $consultation_questionaire_record['patient_name'] = (isset($consultation_record['patient_name'])) ? $consultation_record['patient_name'] : '';
                $consultation_questionaire_record['patient_date'] = (isset($consultation_record['patient_date'])) ? $consultation_record['patient_date'] : 0;
                $consultation_questionaire_record['patient_status'] = (isset($consultation_record['patient_status'])) ? $consultation_record['patient_status'] : '';

                $consultation_questionaire_record['consultation_type'] = (isset($consultation_record['consultation_type'])) ? $consultation_record['consultation_type'] : '';
                $consultation_questionaire_record['consultation_number'] = (isset($consultation_record['consultation_number'])) ? $consultation_record['consultation_number'] : '';
                $consultation_questionaire_record['consultation_name'] = (isset($consultation_record['consultation_name'])) ? $consultation_record['consultation_name'] : '';
                $consultation_questionaire_record['consultation_date'] = (isset($consultation_record['consultation_date'])) ? $consultation_record['consultation_date'] : 0;
                $consultation_questionaire_record['consultation_status'] = (isset($consultation_record['consultation_status'])) ? $consultation_record['consultation_status'] : '';

                $this->core_model->insert('consultation_questionaire', $consultation_questionaire_record);
            }

            $this->db->trans_complete();
        }
        catch (Exception $e)
        {
            $json['message'] = $e->getMessage();
            $json['status'] = 'error';

            if ($json['message'] == '')
            {
                $json['message'] = 'Oops.. Server kami sedang mengalami gangguan. Silakan coba beberapa saat lagi.';
            }

            $error_log_record = array();
            $error_log_record['date'] = time();
            $error_log_record['function'] = 'ajax_save_consultation';
            $error_log_record['url'] = current_url();
            $error_log_record['name'] = $json['message'];
            $this->core_model->insert('error_log', $error_log_record);
        }

        echo json_encode($json);
    }

    public function ajax_save_order()
    {
        $json['status'] = 'success';

        try
        {
            $this->db->trans_start();

            $cart_record = $this->cms_function->generate_cart();
            $address_record = $this->session->userdata('address');

            $shipping = $this->core_model->get('shipment', $address_record['shipping_id']);

            $points = $this->input->post('points');
            $payment_method = $this->input->post('method');

            // insert order into database

            $order_record = array();
            $order_record['date'] = time();

            $order_record['status'] = 'Pending';
            $order_record['payment_status'] = 'Pending';

            $order_record['subtotal'] = $cart_record['subtotal'];
            $order_record['discount'] = $cart_record['discount'] + $cart_record['additional_discount'] + $cart_record['discount_item'];
            $order_record['points'] = $points;
            $order_record['shipping'] = $cart_record['shipping'];
            $order_record['grand_total'] = $cart_record['total'] - $points;

            $order_record['voucher'] = $cart_record['voucher_code'];

            $order_record['shipping_name'] = $address_record['shipping_name'];
            $order_record['shipping_email'] = $address_record['shipping_email'];
            $order_record['shipping_phone'] = $address_record['shipping_phone'];
            $order_record['shipping_address_line_1'] = $address_record['shipping_address_line_1'];
            $order_record['shipping_address_line_2'] = $address_record['shipping_address_line_2'];
            $order_record['shipping_address_line_3'] = $address_record['shipping_address_line_3'];
            $order_record['shipping_postcode'] = $address_record['shipping_postcode'];

            $order_record['shipping_province'] = $shipping->province;
            $order_record['shipping_city'] = $shipping->city;
            $order_record['shipping_district'] = $shipping->district;

            $order_record['shipping_city_type'] = $shipping->number;
            $order_record['shipping_district_code'] = $shipping->receiver_code;
            $order_record['shipping_courier'] = $shipping->name;
            $order_record['shipping_tlc'] = $shipping->number;

            $order_record['source'] = ($this->session->tempdata('utm_campaign')) ? $this->session->tempdata('utm_campaign') : '';

            if ($this->_patient)
            {
                $order_record['patient_id'] = $this->_patient->id;

                $order_record['patient_type'] = $this->_patient->type;
                $order_record['patient_number'] = $this->_patient->number;
                $order_record['patient_name'] = $this->_patient->name;
                $order_record['patient_date'] = $this->_patient->date;
                $order_record['patient_status'] = $this->_patient->status;
            }

            if ($this->session->userdata('reseller'))
            {
                $reseller = $this->session->userdata('reseller');

                $order_record['user_id'] = $reseller->user_id;
                $order_record['user_name'] = $reseller->name;
            }

            $order_id = $this->core_model->insert('order', $order_record);

            // insert order_item
            $arr_product_id = $this->cms_function->extract_records($cart_record['arr_cart'], 'product_id');
            $arr_product = $this->core_model->get('product', $arr_product_id);
            $arr_product_lookup = array();

            foreach ($arr_product as $product)
            {
                $arr_product_lookup[$product->id] = clone $product;
            }

            $location = 'Apotek Now';

            foreach ($cart_record['arr_cart'] as $cart)
            {
                if ($cart->product_id == 1 || $cart->product_id == 3 || $cart->product_id == 4 || $cart->product_id == 11 || $cart->product_id == 13 || $cart->product_id == 16)
                {
                    $location = 'Apotek Now';
                }

                if ($shipping->name == 'Westbike Messenger')
                {
                    $location = 'Apotek Now';
                }

                $order_item_record['order_id'] = $order_id;
                $order_item_record['product_id'] = $cart->product_id;

                $order_item_record['quantity'] = $cart->quantity;
                $order_item_record['price'] = $cart->price;
                $order_item_record['discount'] = $cart->discount;
                $order_item_record['total'] = ($cart->quantity * $cart->price) - $cart->discount;

                $order_item_record['order_type'] = (isset($order_record['type'])) ? $order_record['type'] : '';
                $order_item_record['order_number'] = (isset($order_record['number'])) ? $order_record['number'] : '';
                $order_item_record['order_name'] = (isset($order_record['name'])) ? $order_record['name'] : '';
                $order_item_record['order_date'] = (isset($order_record['date'])) ? $order_record['date'] : 0;
                $order_item_record['order_status'] = (isset($order_record['status'])) ? $order_record['status'] : '';

                $order_item_record['product_type'] = (isset($arr_product_lookup[$cart->product_id])) ? $arr_product_lookup[$cart->product_id]->type : '';
                $order_item_record['product_number'] = (isset($arr_product_lookup[$cart->product_id])) ? $arr_product_lookup[$cart->product_id]->number : '';
                $order_item_record['product_name'] = (isset($arr_product_lookup[$cart->product_id])) ? $arr_product_lookup[$cart->product_id]->name : '';
                $order_item_record['product_date'] = (isset($arr_product_lookup[$cart->product_id])) ? $arr_product_lookup[$cart->product_id]->date : '';
                $order_item_record['product_status'] = (isset($arr_product_lookup[$cart->product_id])) ? $arr_product_lookup[$cart->product_id]->type : '';

                $this->core_model->insert('order_item', $order_item_record);
            }

            $order_record['location'] = $location;
            $order_record['number'] = 'NORM' . date('Ym', time()) . str_pad($order_id, 6, 0, STR_PAD_LEFT);
            $order_record['payment_id'] = $order_record['number'];
            $order_record['shipping_courier_tracking_id'] = $order_record['number'];

            $order_record['payment_status'] = 'Pending';
            $this->core_model->update('order', $order_id, $order_record);

            // update point_history
            if ($points > 0)
            {
                $points_record = array();
                $points_record['order_id'] = $order_id;
                $points_record['patient_id'] = $this->_patient->id;

                $points_record['points'] = $points * -1;
                $points_record['description'] = 'Point used for order ' . $order_record['number'];
                $points_record['status'] = 'Approved';

                $points_record['order_type'] = (isset($order_record['type'])) ? $order_record['type'] : '';
                $points_record['order_number'] = (isset($order_record['number'])) ? $order_record['number'] : '';
                $points_record['order_name'] = (isset($order_record['name'])) ? $order_record['name'] : '';
                $points_record['order_date'] = (isset($order_record['date'])) ? $order_record['date'] : 0;
                $points_record['order_status'] = (isset($order_record['status'])) ? $order_record['status'] : '';

                $order_record['patient_type'] = $this->_patient->type;
                $order_record['patient_number'] = $this->_patient->number;
                $order_record['patient_name'] = $this->_patient->name;
                $order_record['patient_date'] = $this->_patient->date;
                $order_record['patient_status'] = $this->_patient->status;

                $points = $this->core_model->insert('points', $points_record);
            }

            // generate invoice based on payment_method
            $invoice = $this->_generate_invoice($order_id, $order_record, $payment_method, $cart_record);

            $this->_remove_session();

            // delete cart
            if ($this->_patient)
            {
                $this->db->where('patient_id', $this->_patient->id);
                $this->core_model->delete('cart');
            }

            $json['invoice'] = $invoice;
            $json['order_id'] = $order_id;

            // Send data to facebook
            $this->load->library('user_agent');

            $ip_address = $this->cms_function->get_ip_address();
            $time = time() - 300;
            $data = '[{"event_name": "AddPaymentInfo","event_time":'. $time .',"action_source": "website","opt_out": false,"user_data": {"client_ip_address": "'. $ip_address .'","client_user_agent": "'. $this->agent->agent_string() .'","country": ["3843971dcfdee5083e6289e1bbdbb003e538b5a8a668fc43ae4f19d415ac18a2"]},"custom_data": {"currency": "IDR","value": "'. $cart_record['subtotal'] .'","order_id": "'. $order_record['number'] .'"}}]';

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

            $json['response'] = $response;
            $json['data'] = $data;

            $this->db->trans_complete();
        }
        catch (Exception $e)
        {
            $json['message'] = $e->getMessage();
            $json['status'] = 'error';

            if ($json['message'] == '')
            {
                $json['message'] = 'Oops.. Server kami sedang mengalami gangguan. Silakan coba beberapa saat lagi.';
            }

            $error_log_record = array();
            $error_log_record['date'] = time();
            $error_log_record['function'] = 'ajax_save_order';
            $error_log_record['url'] = current_url();
            $error_log_record['name'] = $json['message'];
            $this->core_model->insert('error_log', $error_log_record);
        }

        echo json_encode($json);
    }

    public function ajax_set_address($login = 0)
    {
        $json['status'] = 'success';

        try
        {
            $this->load->helper('security');

            $address_record = array();

            if ($login <= 0)
            {
                foreach ($_POST as $k => $v)
                {
                    $address_record[$k] = ($k == 'date' || $k == 'birthdate') ? strtotime($this->security->xss_clean($v)) : $this->security->xss_clean($v);
                }

                $this->session->set_userdata('address', $address_record);
            }
            else
            {
                $address_id = $this->input->post('address_id');
                $shipping_id = $this->input->post('shipping_id');
                $price = $this->input->post('price');

                $address = $this->core_model->get('address', $address_id);
                $shipping = $this->core_model->get('shipment', $shipping_id);

                $address_record['shipping_name'] = $address->name;
                $address_record['shipping_phone'] = $address->phone;
                $address_record['shipping_email'] = ($address->email == '') ? $this->_patient->email : $address->email;
                $address_record['shipping_address_line_1'] = $address->address_line_1;
                $address_record['shipping_address_line_2'] = $address->address_line_2;
                $address_record['shipping_address_line_3'] = $address->address_line_3;
                $address_record['shipping_postcode'] = $address->postcode;
                $address_record['shipping_id'] = $shipping_id;
                $address_record['price'] = $price;

                $this->session->set_userdata('address', $address_record);
            }
        }
        catch (Exception $e)
        {
            $json['message'] = $e->getMessage();
            $json['status'] = 'error';

            if ($json['message'] == '')
            {
                $json['message'] = 'Oops.. Server kami sedang mengalami gangguan. Silakan coba beberapa saat lagi.';
            }

            $error_log_record = array();
            $error_log_record['date'] = time();
            $error_log_record['function'] = 'ajax_set_address';
            $error_log_record['url'] = current_url();
            $error_log_record['name'] = $json['message'];
            $this->core_model->insert('error_log', $error_log_record);
        }

        echo json_encode($json);
    }

    public function ajax_set_discount()
    {
        $json['status'] = 'success';

        try
        {
            $voucher = new stdClass();
            $voucher->code = $this->input->post('voucher_code');
            $voucher->discount = $this->input->post('discount');
            $voucher->shipping_discount = $this->input->post('shipping_discount');

            $this->session->set_userdata('voucher', $voucher);
        }
        catch (Exception $e)
        {
            $json['message'] = $e->getMessage();
            $json['status'] = 'error';

            if ($json['message'] == '')
            {
                $json['message'] = 'Oops.. Server kami sedang mengalami gangguan. Silakan coba beberapa saat lagi.';
            }

            $error_log_record = array();
            $error_log_record['date'] = time();
            $error_log_record['function'] = 'ajax_set_discount';
            $error_log_record['url'] = current_url();
            $error_log_record['name'] = $json['message'];
            $this->core_model->insert('error_log', $error_log_record);
        }

        echo json_encode($json);
    }

    public function ajax_set_language($lang)
    {
        $json['status'] = 'success';

        try
        {
            $this->session->set_userdata('norm_lang', $lang);
        }
        catch (Exception $e)
        {
            $json['message'] = $e->getMessage();
            $json['status'] = 'error';

            if ($json['message'] == '')
            {
                $json['message'] = 'Oops.. Server kami sedang mengalami gangguan. Silakan coba beberapa saat lagi.';
            }

            $error_log_record = array();
            $error_log_record['date'] = time();
            $error_log_record['function'] = 'ajax_set_language';
            $error_log_record['url'] = current_url();
            $error_log_record['name'] = $json['message'];
            $this->core_model->insert('error_log', $error_log_record);
        }

        echo json_encode($json);
    }

    public function ajax_subscribe_email()
    {
        $json['status'] = 'success';

        try
        {
            set_time_limit(0);

            $this->load->helper('security');
            $this->db->trans_start();

            $email = $this->input->post('email');

            // check existing email
            $this->db->where('email', $email);
            $arr_referral2 = $this->core_model->get('referral2');

            $referral2_id = ($this->session->userdata('ref_id')) ? $this->session->userdata('ref_id') : '';

            if (count($arr_referral2) > 0 && $referral2_id == '')
            {
                $json['code'] = $arr_referral2[0]->code;
            }
            else
            {
                // insert into referral2
                $referral2_record = array();
                $referral2_record['email'] = $email;
                $referral2_record['date'] = time();
                $referral2_record['validity'] = 1;
                $referral2_record['code'] = $this->cms_function->generate_random_number('referral2', 12);

                if ($referral2_id != '')
                {
                    $this->db->where('code', $referral2_id);
                    $arr_referral2 = $this->core_model->get('referral2');

                    if (count($arr_referral2) > 0)
                    {
                        $referral2_record['referral_id'] = $arr_referral2[0]->id;

                        $referral2_record['referral_type'] = $arr_referral2[0]->type;
                        $referral2_record['referral_number'] = $arr_referral2[0]->number;
                        $referral2_record['referral_name'] = $arr_referral2[0]->name;
                        $referral2_record['referral_date'] = $arr_referral2[0]->date;
                        $referral2_record['referral_status'] = $arr_referral2[0]->status;
                    }
                }

                $this->core_model->insert('referral2', $referral2_record);

                // send email voucher

                $json['code'] = $referral2_record['code'];
            }

            $this->db->trans_complete();
        }
        catch (Exception $e)
        {
            $json['message'] = $e->getMessage();
            $json['status'] = 'error';

            if ($json['message'] == '')
            {
                $json['message'] = 'Oops.. Server kami sedang mengalami gangguan. Silakan coba beberapa saat lagi.';
            }

            $error_log_record = array();
            $error_log_record['date'] = time();
            $error_log_record['function'] = 'ajax_subscribe_email';
            $error_log_record['url'] = current_url();
            $error_log_record['name'] = $json['message'];
            $this->core_model->insert('error_log', $error_log_record);
        }

        echo json_encode($json);
    }

    public function ajax_track_order()
    {
        $json['status'] = 'success';

        try
        {
            $order_number = $this->input->post('order_number');

            $this->db->where('number', $order_number);
            $arr_order = $this->core_model->get('order');

            if (count($arr_order) <= 0)
            {
                throw new Exception('Order tidak ditemukan.');
            }

            $order = $arr_order[0];
            $order->courier = 'SAP';

            if ($order->shipping_courier == 'REG' || $order->shipping_courier == 'ND' || $order->shipping_courier == 'SD')
            {
                $order->courier = 'Anteraja';
            }
            elseif ($order->shipping_courier == 'EZ')
            {
                $order->courier = 'JNT';
            }

            $order->courier = $order->courier . ' - ' . $order->shipping_courier;

            $arr_history = array();

            if ($order->status == 'Processing' || $order->status == 'Delivered')
            {
                if ($order->shipping_courier == 'EZ')
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

                    $arr_history = ($arr_history == null) ? array() : $arr_history;
                    $arr_history = (count($arr_history) > 0) ? array_reverse($arr_history) : $arr_history;
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

            $record['order'] = $order;
            $record['arr_history'] = $arr_history;
            $json['arr_history'] = $arr_history;

            $json['order_tracking'] = $this->load->view('order_tracking', $record, true);
        }
        catch (Exception $e)
        {
            $json['message'] = $e->getMessage();
            $json['status'] = 'error';

            if ($json['message'] == '')
            {
                $json['message'] = 'Oops.. Server kami sedang mengalami gangguan. Silakan coba beberapa saat lagi.';
            }

            $error_log_record = array();
            $error_log_record['date'] = time();
            $error_log_record['function'] = 'ajax_track_order';
            $error_log_record['url'] = current_url();
            $error_log_record['name'] = $json['message'];
            $this->core_model->insert('error_log', $error_log_record);
        }

        echo json_encode($json);
    }

    public function ajax_update_address($address_id = 0)
    {
        $json['status'] = 'success';

        try
        {
            if ($address_id <= '')
            {
                throw new Exception();
            }

            $this->load->helper('security');
            $this->db->trans_start();

            $address_record = array();

            foreach ($_POST as $k => $v)
            {
                $address_record[$k] = ($k == 'date' || $k == 'birthdate') ? strtotime($this->security->xss_clean($v)) : $this->security->xss_clean($v);
            }

            $address_record['patient_id'] = $this->_patient->id;

            $address_record['patient_type'] = $this->_patient->type;
            $address_record['patient_number'] = $this->_patient->number;
            $address_record['patient_name'] = $this->_patient->name;
            $address_record['patient_date'] = $this->_patient->date;
            $address_record['patient_status'] = $this->_patient->status;

            $this->core_model->update('address', $address_id, $address_record);

            $this->db->trans_complete();
        }
        catch (Exception $e)
        {
            $json['message'] = $e->getMessage();
            $json['status'] = 'error';

            if ($json['message'] == '')
            {
                $json['message'] = 'Oops.. Server kami sedang mengalami gangguan. Silakan coba beberapa saat lagi.';
            }

            $error_log_record = array();
            $error_log_record['date'] = time();
            $error_log_record['function'] = 'ajax_save_address';
            $error_log_record['url'] = current_url();
            $error_log_record['name'] = $json['message'];
            $this->core_model->insert('error_log', $error_log_record);
        }

        echo json_encode($json);
    }

    public function ajax_update_cart()
    {
        $json['status'] = 'success';

        try
        {
            $arr_cart = json_decode($this->input->post('arr_cart'));

            if ($this->_patient)
            {
                $this->db->where('patient_id',  $this->_patient->id);
                $this->core_model->delete('cart');

                $cart_record = array();
                $cart_record['patient_id'] = $this->_patient->id;
                $cart_record['date'] = time();
                $cart_record['cart'] = $this->input->post('arr_cart');
                $this->core_model->insert('cart', $cart_record);
            }

            $this->session->set_userdata('arr_cart', $arr_cart);
        }
        catch (Exception $e)
        {
            $json['message'] = $e->getMessage();
            $json['status'] = 'error';

            if ($json['message'] == '')
            {
                $json['message'] = 'Oops.. Server kami sedang mengalami gangguan. Silakan coba beberapa saat lagi.';
            }

            $error_log_record = array();
            $error_log_record['date'] = time();
            $error_log_record['function'] = 'ajax_update_cart';
            $error_log_record['url'] = current_url();
            $error_log_record['name'] = $json['message'];
            $this->core_model->insert('error_log', $error_log_record);
        }

        echo json_encode($json);
    }

    public function ajax_update_profile($patient_id)
    {
        $json['status'] = 'success';

        try
        {
            $this->db->trans_start();

            // get record from views
            foreach ($_POST as $k => $v)
            {
                $v = $this->security->xss_clean(trim($v));

                $patient_record[$k] = ($k == 'date' || $k == 'birthdate') ? strtotime($v) : $v;
            }

            if (isset($patient_record['password']))
            {
                $patient_record['password'] = ($patient_record['password'] != '') ? md5($patient_record['password']) : '';

                if ($patient_record['password'] == '')
                {
                    unset($patient_record['password']);
                }
            }

            // Update Database
            $this->core_model->update('patient', $patient_id, $patient_record);

            $this->db->trans_complete();
        }
        catch (Exception $e)
        {
            $json['message'] = $e->getMessage();
            $json['status'] = 'error';

            if ($json['message'] == '')
            {
                $json['message'] = 'Oops.. Server kami sedang mengalami gangguan. Silakan coba beberapa saat lagi.';
            }

            $error_log_record = array();
            $error_log_record['date'] = time();
            $error_log_record['function'] = 'ajax_update_profile';
            $error_log_record['url'] = current_url();
            $error_log_record['name'] = $json['message'];
            $this->core_model->insert('error_log', $error_log_record);
        }

        echo json_encode($json);
    }
    /* End Ajax Area */




    /* Private Function Area */
    private function _generate_invoice($order_id, $order_record, $payment_method, $cart_record)
    {
        $arr_product_name = array();
        $arr_product_name[1] = 'Hair Growth Capsule';
        $arr_product_name[3] = 'Hair Tonic';
        $arr_product_name[4] = 'Anti DHT Shampoo';
        $arr_product_name[11] = 'Starter Hair Growth Kit';
        $arr_product_name[13] = 'Complete Hair Growth Kit';
        $arr_product_name[16] = 'Stamina Cream';
        $arr_product_name[18] = 'Hydra Cleansing Face Wash';
        $arr_product_name[19] = 'Deep Exfoliating Face Scrub';
        $arr_product_name[20] = 'Daily Defense Moisturizer';
        $arr_product_name[21] = 'Pure Performance Shampoo';
        $arr_product_name[22] = 'Fortifying Body Wash';
        $arr_product_name[23] = 'Ultimate Gentleman Set';
        $arr_product_name[24] = 'Complete Maintenance Set';
        $arr_product_name[25] = 'Complete Shower Set';
        $arr_product_name[26] = 'Ultimate Gentleman Set + Utility Bag';
        $arr_product_name[27] = 'Complete Maintenance Set + Utility Bag';
        $arr_product_name[28] = 'Complete Shower Set + Utility Bag';
        $arr_product_name[29] = 'Starter Maintenance Set';
        $arr_product_name[30] = 'Daily Maintenance Set';
        $arr_product_name[31] = 'Aging Maintenance Set';
        $arr_product_name[32] = 'Water Resistant Utility Bag';

        if ($payment_method != 'kredivo')
        {
            $payment_id = $order_record['payment_id'];
            $end_point = $this->_setting->setting__webshop_xendit_base_url . 'v2/invoices';

            $data = array();
            $data['external_id'] = $payment_id;
            $data['amount'] = (int)$order_record['grand_total'];
            $data['payer_email'] = ($this->_patient) ? $this->_patient->email : $order_record['shipping_email'];
            $data['description'] = 'Norm Payment';
            $data['should_send_email'] = true;
            $data['success_redirect_url'] = base_url() . 'checkout/thankyou/' . $order_id . '/';

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

            $this->session->set_userdata('invoice_url', $response_object['invoice_url']);

            // update payment_url
            $this->core_model->update('order', $order_id, array('payment_url' => $response_object['invoice_url']));

            return $response_object;
        }
        else
        {
            $payment_id = $order_record['payment_id'];
            $end_point = $this->_setting->setting__webshop_xendit_base_url . 'cardless-credit';

            $arr_items = array();

            foreach ($cart_record['arr_cart'] as $cart)
            {
                $cart->product_name = $arr_product_name[$cart->product_id];

                $arr_items[] = [
                    'id' => $cart->product_id,
                    'name' => $cart->product_name,
                    'price' => $cart->price,
                    'type' => 'Norm Product',
                    'url' => 'https://www.norm.id/',
                    'quantity' => $cart->quantity,
                ];
            }

            $data = [
                'cardless_credit_type' => 'KREDIVO',
                'external_id' => $payment_id,
                'amount' => (int)$order_record['grand_total'],
                'payment_type' => '3_months',
                'items' => $arr_items,
                'customer_details' => [
                    'first_name' => $order_record['shipping_name'],
                    'last_name' => '.',
                    'email' => $order_record['shipping_email'],
                    'phone' => $order_record['shipping_phone']
                ],
                'shipping_address' => [
                    'first_name' => $order_record['shipping_name'],
                    'last_name' => '.',
                    'address' => $order_record['shipping_address_line_1'],
                    'city' => $order_record['shipping_city'],
                    'postal_code' => $order_record['shipping_postcode'],
                    'phone' => $order_record['shipping_phone'],
                    'country_code' => 'IDN'
                ],
                'redirect_url' => base_url() . 'checkout/thankyou/' . $order_id . '/',
                'callback_url' => 'https://www.norm.id/api/xendit/kredivo/',
            ];

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
            $response_object['invoice_url'] = $response_object['redirect_url'];

            $this->session->set_userdata('invoice_url', $response_object['invoice_url']);

            // update payment_url
            $this->core_model->update('order', $order_id, array('payment_url' => $response_object['invoice_url']));

            return $response_object;
        }
    }

    private function _remove_session()
    {
        $this->session->unset_userdata('arr_cart');
        $this->session->unset_userdata('address');
        $this->session->unset_userdata('voucher');
    }

    private function _validate_add_patient($patient_record)
    {
        $this->db->where('email', $patient_record['email']);
        $count_patient = $this->core_model->count('patient');

        if ($count_patient > 0)
        {
            throw new Exception('Email sudah terdaftar.');
        }

        $this->db->where('phone', $patient_record['phone']);
        $count_patient = $this->core_model->count('patient');

        if ($count_patient > 0)
        {
            throw new Exception('No. Telepon sudah terdaftar.');
        }

        // check birthdate
        $age = floor((time() - $patient_record['birthdate']) / 31556926);

        if ($age < 18)
        {
            throw new Exception('Anda harus berumur 18 tahun untuk mendaftar sebagai pelanggan Norm.');
        }
    }

    private function _validate_add_user($record)
    {
        // check email
        $this->db->where('email', $record['email']);
        $count_user = $this->core_model->count('user');

        if ($count_user > 0)
        {
            throw new Exception('Email already exist');
        }
    }

    private function _validate_influencer($record)
    {
        // check phone
        $this->db->where('phone', $record['phone']);
        $count_influencer = $this->core_model->count('influencer');

        if ($count_influencer > 0)
        {
            throw new Exception('No. Telp sudah terdaftar');
        }

        // check email
        $this->db->where('email', $record['email']);
        $count_influencer = $this->core_model->count('influencer');

        if ($count_influencer > 0)
        {
            throw new Exception('Email sudah terdaftar');
        }
    }
    /* End Private Function Area */
}
