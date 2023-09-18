<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller
{
    private $_patient;
    private $_setting;
    private $_lang;

    public function __construct()
    {
        parent:: __construct();

        if (strpos(current_url(), '103.56.206.146') !== false)
        {
            $url = str_replace('http://103.56.206.146/eliocare/norm/2.1/', 'https://www.norm.id/', current_url());
            $url = str_replace('index.php', '', $url);


            redirect($url);
        }

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
    public function index()
    {
        // check arr_cart
        $cart_record = $this->cms_function->generate_cart();

        if (!$cart_record || count($cart_record['arr_cart']) <= 0)
        {
            redirect(base_url());
        }

        if ($this->_patient)
        {
            redirect(base_url() . 'checkout/address/');
        }

        $arr_data = array();

        $metatag = new stdClass();
        $metatag->title = 'Checkout - Norm';
        $metatag->description = 'Temukan jawaban seputar produk dan layanan dari Norm nya di sini.';
        $metatag->robot = 'all, notranslate';
        $metatag->googlebot = 'all, notranslate';
        $metatag->og_type = 'website';
        $metatag->og_image = '';
        $metatag->og_url = base_url();
        $metatag->og_site_name = 'norm.id';
        $metatag->twitter_image = '';
        $metatag->twitter_site = '@norm.id';
        $metatag->twitter_creator = '@norm.id';

        $reseller = $this->session->userdata('reseller');

        // Send data to facebook
        $this->load->library('user_agent');

        $ip_address = $this->cms_function->get_ip_address();
        $event_id = md5($this->cms_function->generate_random_number('order', 20));
        $time = time() - 300;
        $data = '[{"event_name": "InitiateCheckout","event_time":'. $time .',"action_source": "website","event_id": "'. $event_id .'","opt_out": false,"user_data": {"client_ip_address": "'. $ip_address .'","client_user_agent": "'. $this->agent->agent_string() .'","country": ["3843971dcfdee5083e6289e1bbdbb003e538b5a8a668fc43ae4f19d415ac18a2"]},"custom_data": {"currency": "IDR","value": "'. $cart_record['subtotal'] .'"}}]';

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

        $arr_data['title'] = $metatag->title;
        $arr_data['setting'] = $this->_setting;
        $arr_data['account'] = $this->_patient;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['page'] = 'home';
        $arr_data['lang'] = $this->_lang;
        $arr_data['navbar'] = 'black';
        $arr_data['checkout'] = 1;
        $arr_data['cart_record'] = $cart_record;
        $arr_data['reseller'] = $reseller;

        $arr_data['arr_province'] = $this->cms_function->generate_province();

        $arr_data['metatag'] = $metatag;

        $this->load->view('checkout', $arr_data);
    }




    public function address()
    {
        // check arr_cart
        $cart_record = $this->cms_function->generate_cart();

        if (!$cart_record || count($cart_record['arr_cart']) <= 0)
        {
            redirect(base_url());
        }

        $arr_data = array();

        $metatag = new stdClass();
        $metatag->title = 'Checkout - Norm';
        $metatag->description = 'Temukan jawaban seputar produk dan layanan dari Norm nya di sini.';
        $metatag->robot = 'all, notranslate';
        $metatag->googlebot = 'all, notranslate';
        $metatag->og_type = 'website';
        $metatag->og_image = '';
        $metatag->og_url = base_url();
        $metatag->og_site_name = 'norm.id';
        $metatag->twitter_image = '';
        $metatag->twitter_site = '@norm.id';
        $metatag->twitter_creator = '@norm.id';

        // get address
        $this->db->where('patient_id', $this->_patient->id);
        $arr_address = $this->core_model->get('address');

        $arr_shipping = array();

        if (count($arr_address) > 0)
        {
            $this->db->where('postcode', $arr_address[0]->postcode);
            $this->db->where('name !=', 'Lion Parcel');
            // $this->db->where('name !=', 'Westbike Messenger');
            $this->db->order_by('name DESC');
            $arr_shipping = $this->core_model->get('shipment');

            $voucher = $this->session->userdata('voucher');

            foreach ($arr_shipping as $shipping)
            {
                $shipping->price = ($cart_record['weight'] < 1) ? $shipping->price : $shipping->price * $cart_record['weight'];

                if ($voucher)
                {
                    $shipping->price = ($shipping->price - $voucher->shipping_discount <= 0) ? 0 : $shipping->price - $voucher->shipping_discount;
                }

                $shipping->price_display = number_format($shipping->price, 0, '.', ',');

                if ($shipping->name == 'J&T Regular')
                {
                    $shipping->image = 'JNT.png';
                }
                else
                {
                    $shipping->image = 'westbike.png';
                }
            }
        }

        // generate points
        $this->db->select('SUM(points) as sum_points');
        $this->db->where('patient_id', $this->_patient->id);
        $arr_points = $this->core_model->get('points');

        $accumulated_points = ($arr_points[0]->sum_points == null) ? 0 : $arr_points[0]->sum_points;

        $max_use_points = (0.3 * $cart_record['subtotal'] > $accumulated_points) ? $accumulated_points : 0.3 * $cart_record['subtotal'];

        $accumulated_points_display = number_format($accumulated_points, 0, ',', '.');
        $max_use_points_display = number_format($max_use_points, 0, ',', '.');

        $arr_voucher = array();

        if ($this->_patient)
        {
            $arr_voucher = $this->_generate_voucher($cart_record);
        }

        // Send data to facebook
        $this->load->library('user_agent');

        $ip_address = $this->cms_function->get_ip_address();
        $time = time() - 300;
        $data = '[{"event_name": "InitiateCheckout","event_time":'. $time .',"action_source": "website","opt_out": false,"user_data": {"client_ip_address": "'. $ip_address .'","client_user_agent": "'. $this->agent->agent_string() .'","country": ["3843971dcfdee5083e6289e1bbdbb003e538b5a8a668fc43ae4f19d415ac18a2"]},"custom_data": {"currency": "IDR","value": "'. $cart_record['subtotal'] .'"}}]';

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

        $arr_data['title'] = $metatag->title;
        $arr_data['setting'] = $this->_setting;
        $arr_data['account'] = $this->_patient;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['page'] = 'home';
        $arr_data['lang'] = $this->_lang;
        $arr_data['navbar'] = 'black';
        $arr_data['checkout'] = 1;
        $arr_data['cart_record'] = $cart_record;

        $arr_data['arr_province'] = $this->cms_function->generate_province();
        $arr_data['arr_address'] = $arr_address;
        $arr_data['arr_shipping'] = $arr_shipping;
        $arr_data['accumulated_points'] = $accumulated_points;
        $arr_data['max_use_points'] = $max_use_points;
        $arr_data['accumulated_points_display'] = $accumulated_points_display;
        $arr_data['max_use_points_display'] = $max_use_points_display;
        $arr_data['arr_voucher'] = $arr_voucher;

        $arr_data['metatag'] = $metatag;

        $this->load->view('checkout_address', $arr_data);
    }

    public function payment()
    {
        // check arr_cart
        $cart_record = $this->cms_function->generate_cart();

        if (!$cart_record || count($cart_record['arr_cart']) <= 0)
        {
            redirect(base_url());
        }

        $arr_data = array();

        $metatag = new stdClass();
        $metatag->title = 'Checkout - Norm';
        $metatag->description = 'Temukan jawaban seputar produk dan layanan dari Norm nya di sini.';
        $metatag->robot = 'all, notranslate';
        $metatag->googlebot = 'all, notranslate';
        $metatag->og_type = 'website';
        $metatag->og_image = '';
        $metatag->og_url = base_url();
        $metatag->og_site_name = 'norm.id';
        $metatag->twitter_image = '';
        $metatag->twitter_site = '@norm.id';
        $metatag->twitter_creator = '@norm.id';

        $address_record = $this->session->userdata('address');

        $shipping = $this->core_model->get('shipment', $address_record['shipping_id']);
        $shipping->price = $address_record['price'];
        $shipping->price_display = 'IDR ' . number_format($shipping->price, 0, ',', '.');

        // generate points
        $accumulated_points = 0;
        $max_use_points = 0;
        $accumulated_points_display = '';
        $max_use_points_display = '';

        if ($this->_patient)
        {
            $this->db->select('SUM(points) as sum_points');
            $this->db->where('patient_id', $this->_patient->id);
            $arr_points = $this->core_model->get('points');

            $accumulated_points = ($arr_points[0]->sum_points == null) ? 0 : $arr_points[0]->sum_points;

            $max_use_points = (0.3 * $cart_record['subtotal'] > $accumulated_points) ? $accumulated_points : 0.3 * $cart_record['subtotal'];

            $accumulated_points_display = number_format($accumulated_points, 0, ',', '.');
            $max_use_points_display = number_format($max_use_points, 0, ',', '.');
        }

        $arr_voucher = array();

        $arr_voucher = $this->_generate_voucher($cart_record);

        $arr_data['title'] = $metatag->title;
        $arr_data['setting'] = $this->_setting;
        $arr_data['account'] = $this->_patient;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['page'] = 'home';
        $arr_data['lang'] = $this->_lang;
        $arr_data['navbar'] = 'black';
        $arr_data['checkout'] = 1;
        $arr_data['cart_record'] = $cart_record;
        $arr_data['address_record'] = $address_record;
        $arr_data['shipping'] = $shipping;

        $arr_data['accumulated_points'] = $accumulated_points;
        $arr_data['max_use_points'] = $max_use_points;
        $arr_data['accumulated_points_display'] = $accumulated_points_display;
        $arr_data['max_use_points_display'] = $max_use_points_display;
        $arr_data['arr_voucher'] = $arr_voucher;

        $arr_data['metatag'] = $metatag;

        $this->load->view('checkout_payment', $arr_data);
    }

    public function thankyou($order_id = 0)
    {
        $arr_data = array();

        $metatag = new stdClass();
        $metatag->title = 'Thankyou - Norm';
        $metatag->description = 'Temukan jawaban seputar produk dan layanan dari Norm nya di sini.';
        $metatag->robot = 'all, notranslate';
        $metatag->googlebot = 'all, notranslate';
        $metatag->og_type = 'website';
        $metatag->og_image = '';
        $metatag->og_url = base_url();
        $metatag->og_site_name = 'norm.id';
        $metatag->twitter_image = '';
        $metatag->twitter_site = '@norm.id';
        $metatag->twitter_creator = '@norm.id';

        $arr_data['title'] = $metatag->title;
        $arr_data['setting'] = $this->_setting;
        $arr_data['account'] = $this->_patient;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['page'] = 'home';
        $arr_data['lang'] = $this->_lang;
        $arr_data['navbar'] = 'black';
        $arr_data['cart_record'] = $this->cms_function->generate_cart();

        $arr_data['metatag'] = $metatag;

        $this->load->view('thankyou', $arr_data);
    }
    /* End Public Function Area */




    /* Ajax Area */
    /* End Ajax Area */




    /* Private Function Area */
    private function _generate_voucher($cart_record)
    {
        $address_record = $this->session->userdata('address');

        $this->db->where('status', 'Active');
        $arr_voucher = $this->core_model->get('voucher');

        // check eligibility
        foreach ($arr_voucher as $key => $voucher)
        {
            if ($voucher->date > 0 && $voucher->date > time())
            {
                unset($arr_voucher[$key]);
            }

            if ($voucher->date_end > 0 && $voucher->date_end <= time())
            {
                unset($arr_voucher[$key]);
            }

            $voucher->eligibility = 1;
            $voucher->total_discount = $cart_record['subtotal'] * ($voucher->discount / 100);

            $voucher->total_discount_display = 'IDR ' . number_format($voucher->total_discount, 0, ',', '.');
            $voucher->max_discount_display = 'IDR ' . number_format($voucher->max_discount, 0, ',', '.');
            $voucher->shipping_display = 'IDR ' . number_format($voucher->shipping, 0, ',', '.');

            $voucher->date_end_display = ($voucher->date_end > 0) ? date('d F Y H:i:s', $voucher->date_end) : '';

            if ($voucher->code == 'NORMAFF2021')
            {
                $utm_campaign = $this->session->tempdata('utm_campaign');

                if (!$utm_campaign || $utm_campaign == '')
                {
                    unset($arr_voucher[$key]);
                }
            }

            if ($voucher->code == 'NORMPEM20' || $voucher->code == 'NORM11' || $voucher->code == 'NORMENS25')
            {
                $subtotal = 0;

                // check subtotal
                foreach ($cart_record['arr_cart'] as $cart)
                {
                    if ($cart->product_id == 33 || $cart->product_id == 34)
                    {
                        continue;
                    }

                    $subtotal += $cart->total;
                }

                if ($subtotal <= 150000)
                {
                    $voucher->eligibility = 0;
                }
            }

            if ($voucher->code == 'NORM88')
            {
                // check first time order
                if ($this->_patient)
                {
                    $this->db->where('patient_id', $this->_patient->id);
                }
                else
                {
                    $this->db->where('shipping_email', $address_record['shipping_email']);
                }

                $this->db->where_in('payment_status', array('Pending', 'Paid'));
                $count_order = $this->core_model->count('order');

                if ($count_order > 0)
                {
                    unset($arr_voucher[$key]);
                }
            }

            if ($voucher->code == 'WINNER')
            {
                $arr_email = json_decode($voucher->bind_email);
                $arr_email_lookup = array();

                foreach ($arr_email as $email)
                {
                    $arr_email_lookup[strtolower($email)] = strtolower($email);
                }

                if ($this->_patient)
                {
                    if (!isset($arr_email_lookup[strtolower($this->_patient->email)]))
                    {
                        unset($arr_voucher[$key]);
                    }
                }
                else
                {
                    if (!isset($arr_email_lookup[strtolower($address_record['shipping_email'])]))
                    {
                        unset($arr_voucher[$key]);
                    }
                }

                $voucher->eligibility = 0;

                // check cart
                foreach ($cart_record['arr_cart'] as $cart)
                {
                    if ($cart->product_id == 26)
                    {
                        $voucher->eligibility = 1;
                    }
                }

                // check order
                if ($this->_patient)
                {
                    $this->db->where('patient_id', $this->_patient->id);
                }
                else
                {
                    $this->db->where('shipping_email', $address_record['shipping_email']);
                }

                $this->db->where_in('payment_status', array('Pending', 'Paid'));
                $this->db->where('voucher', 'WINNER');
                $count_order = $this->core_model->count('order');

                if ($count_order > 0)
                {
                    unset($arr_voucher[$key]);
                }
            }

            if ($voucher->code == 'GOODVIBE30' || $voucher->code == 'STAFFDISCOUNT')
            {
                $arr_email = json_decode($voucher->bind_email);
                $arr_email_lookup = array();

                foreach ($arr_email as $email)
                {
                    $arr_email_lookup[strtolower($email)] = strtolower($email);
                }

                if ($this->_patient)
                {
                    if (!isset($arr_email_lookup[strtolower($this->_patient->email)]))
                    {
                        unset($arr_voucher[$key]);
                    }
                }
                else
                {
                    if (!isset($arr_email_lookup[strtolower($address_record['shipping_email'])]))
                    {
                        unset($arr_voucher[$key]);
                    }
                }
            }

            if ($voucher->code == 'SORRY10')
            {
                $arr_email = json_decode($voucher->bind_email);
                $arr_email_lookup = array();

                foreach ($arr_email as $email)
                {
                    $arr_email_lookup[strtolower($email)] = strtolower($email);
                }

                if ($this->_patient)
                {
                    if (!isset($arr_email_lookup[strtolower($this->_patient->email)]))
                    {
                        unset($arr_voucher[$key]);
                    }
                }
                else
                {
                    if (!isset($arr_email_lookup[strtolower($address_record['shipping_email'])]))
                    {
                        unset($arr_voucher[$key]);
                    }
                }

                // check order
                if ($this->_patient)
                {
                    $this->db->where('shipping_email', $this->_patient->email);
                }
                else
                {
                    $this->db->where('shipping_email', $address_record['shipping_email']);
                }

                $this->db->where_in('payment_status', array('Pending', 'Paid'));
                $this->db->where('voucher', 'SORRY10');
                $count_order = $this->core_model->count('order');

                if ($count_order > 0)
                {
                    unset($arr_voucher[$key]);
                }
            }

            if ($voucher->code == 'WELCOME10')
            {
                // check referral
                if ($this->_patient)
                {
                    $this->db->where('email', $this->_patient->email);
                }
                else
                {
                    $this->db->where('email', $address_record['shipping_email']);
                }

                $count_referral = $this->core_model->count('referral');

                if ($count_referral <= 0)
                {
                    unset($arr_voucher[$key]);
                }

                // check first time order
                if ($this->_patient)
                {
                    $this->db->where('patient_id', $this->_patient->id);
                }
                else
                {
                    $this->db->where('shipping_email', $address_record['shipping_email']);
                }

                $this->db->where_in('payment_status', array('Pending', 'Paid'));
                $count_order = $this->core_model->count('order');

                if ($count_order > 0)
                {
                    unset($arr_voucher[$key]);
                }
            }
        }

        return $arr_voucher;
    }
    /* End Private Function Area */
}