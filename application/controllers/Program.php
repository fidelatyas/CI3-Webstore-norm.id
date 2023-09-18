<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Program extends CI_Controller
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

        $campaign = (isset($_GET['utm_campaign'])) ? $_GET['utm_campaign'] : '';

        if ($campaign == '')
        {
            $campaign = (isset($_GET['utm_source'])) ? $_GET['utm_source'] : '';
        }

        if ($campaign != '')
        {
            $this->session->set_tempdata('utm_campaign', $campaign, 2592000);
        }
    }




    /* Public Function Area */
    public function hairgrowth()
    {
        $arr_data = array();

        $metatag = new stdClass();
        $metatag->title = 'Hair Growth Program - Norm';
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
        $arr_data['count_consultation_product'] = $this->_count_consultation_product(5);

        $arr_data['login_routes'] = 'medical-grade';

        $arr_data['metatag'] = $metatag;

        $this->load->view('program_hairgrowth', $arr_data);
    }

    public function staminasystem()
    {
        $arr_data = array();

        $metatag = new stdClass();
        $metatag->title = 'Stamina System Program - Norm';
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
        $arr_data['count_consultation_product'] = $this->_count_consultation_product(11);

        $arr_data['login_routes'] = 'medical-grade';

        $arr_data['metatag'] = $metatag;

        $this->load->view('program_staminasystem', $arr_data);
    }
    /* End Public Function Area */




    /* Ajax Area */
    /* End Ajax Area */




    /* Private Function Area */
    private function _count_consultation_product($category_id)
    {
        $arr_product_id = array();

        if ($this->_patient)
        {
            $this->db->select('id');
            $this->db->where('status', 'Finish');
            $this->db->where('patient_id', $this->_patient->id);
            $this->db->where('category_id', $category_id);
            $arr_consultation = $this->core_model->get('consultation');
            $arr_consultation_id = $this->cms_function->extract_records($arr_consultation, 'id');

            if (count($arr_consultation_id) > 0)
            {
                $this->db->where_in('consultation_id', $arr_consultation_id);
                $arr_consultation_product = $this->core_model->get('consultation_product');

                foreach ($arr_consultation_product as $consultation_product)
                {
                    $arr_product_id[$consultation_product->product_id] = $consultation_product->product_id;
                }
            }
        }

        return count($arr_product_id);
    }
    /* End Private Function Area */
}