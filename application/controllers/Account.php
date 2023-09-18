<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller
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
            $this->_patient->birthdate_display = ($this->_patient->birthdate > 0) ? date('Y-m-d', $this->_patient->birthdate) : '';
        }
        else
        {
            redirect(base_url());
        }
    }




    /* Public Function Area */
    public function index()
    {
        $arr_data = array();

        $metatag = new stdClass();
        $metatag->title = 'My Account - Norm';
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

        $this->load->view('account', $arr_data);
    }




    public function history()
    {
        $arr_data = array();

        $metatag = new stdClass();
        $metatag->title = 'Order History - Norm';
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

        // get all order
        $this->db->where('patient_id', $this->_patient->id);
        $this->db->order_by('date DESC');
        $arr_order = $this->core_model->get('order');

        foreach ($arr_order as $order)
        {
            $order->date_display = date('d F Y H:i:s', $order->date);
            $order->grand_total_display = 'IDR ' . number_format($order->grand_total, 0, '.', ',');
        }

        $arr_data['title'] = $metatag->title;
        $arr_data['setting'] = $this->_setting;
        $arr_data['account'] = $this->_patient;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['page'] = 'home';
        $arr_data['lang'] = $this->_lang;
        $arr_data['navbar'] = 'black';
        $arr_data['cart_record'] = $this->cms_function->generate_cart();

        $arr_data['arr_order'] = $arr_order;

        $arr_data['metatag'] = $metatag;

        $this->load->view('history', $arr_data);
    }

    public function recommendation()
    {
        $arr_data = array();

        $metatag = new stdClass();
        $metatag->title = 'My Recommendation - Norm';
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

        // generate consultation
        $this->db->where('patient_id', $this->_patient->id);
        $this->db->where_in('category_id', array(5, 11));
        $arr_consultation = $this->core_model->get('consultation');
        $arr_consultation_id = $this->cms_function->extract_records($arr_consultation, 'id');
        $arr_consultation_product_lookup = array();

        if (count($arr_consultation_id) > 0)
        {
            $this->db->where_in('consultation_id', $arr_consultation_id);
            $arr_consultation_product = $this->core_model->get('consultation_product');

            foreach ($arr_consultation_product as $consultation_product)
            {
                $arr_consultation_product_lookup[$consultation_product->consultation_id][] = $consultation_product->product_id;
            }
        }

        foreach ($arr_consultation as $consultation)
        {
            $consultation->arr_product = (isset($arr_consultation_product_lookup[$consultation->id])) ? $arr_consultation_product_lookup[$consultation->id] : array();
        }

        $arr_data['title'] = $metatag->title;
        $arr_data['setting'] = $this->_setting;
        $arr_data['account'] = $this->_patient;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['page'] = 'home';
        $arr_data['lang'] = $this->_lang;
        $arr_data['navbar'] = 'black';
        $arr_data['cart_record'] = $this->cms_function->generate_cart();
        $arr_data['arr_consultation'] = $arr_consultation;

        $arr_data['metatag'] = $metatag;

        $this->load->view('recommendation', $arr_data);
    }
    /* End Public Function Area */




    /* Ajax Area */
    /* End Ajax Area */




    /* Private Function Area */
    /* End Private Function Area */
}