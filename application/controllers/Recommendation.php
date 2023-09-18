<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Recommendation extends CI_Controller
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
    public function hairgrowth($page = '')
    {
        $arr_data = array();

        $metatag = new stdClass();
        $metatag->title = 'Hair Growth Recommendation - Norm';
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

        if ($page == 'loading')
        {
            $this->load->view('recommendation_hairgrowth_loading', $arr_data);
        }
        else
        {
            $this->load->view('recommendation_hairgrowth', $arr_data);
        }
    }

    public function login($category = 'hairgrowth')
    {
        $arr_data = array();

        $metatag = new stdClass();
        $metatag->title = 'Login - Norm';
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

        $arr_questionaire = $this->session->userdata('questionaire_answer');
        $arr_answer = array();

        foreach ($arr_questionaire as $key => $questionaires)
        {
            foreach ($questionaires as $q)
            {
                if ($q->category == $category)
                {
                    $arr_answer[] = clone $q;
                }
            }
        }

        $arr_data['title'] = $metatag->title;
        $arr_data['setting'] = $this->_setting;
        $arr_data['account'] = $this->_patient;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['page'] = 'home';
        $arr_data['lang'] = $this->_lang;
        $arr_data['navbar'] = 'black';
        $arr_data['cart_record'] = $this->cms_function->generate_cart();
        $arr_data['arr_answer'] = json_encode($arr_answer);

        $arr_data['metatag'] = $metatag;

        $this->load->view('recommendation_login', $arr_data);
    }

    public function register($category = 'hairgrowth')
    {
        $arr_data = array();

        $metatag = new stdClass();
        $metatag->title = 'Register - Norm';
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

        $arr_questionaire = $this->session->userdata('questionaire_answer');
        $arr_answer = array();

        foreach ($arr_questionaire as $key => $questionaires)
        {
            foreach ($questionaires as $q)
            {
                if ($q->category == $category)
                {
                    $arr_answer[] = clone $q;
                }
            }
        }

        $arr_data['title'] = $metatag->title;
        $arr_data['setting'] = $this->_setting;
        $arr_data['account'] = $this->_patient;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['page'] = 'home';
        $arr_data['lang'] = $this->_lang;
        $arr_data['navbar'] = 'black';
        $arr_data['cart_record'] = $this->cms_function->generate_cart();
        $arr_data['arr_answer'] = json_encode($arr_answer);

        $arr_data['metatag'] = $metatag;

        $this->load->view('recommendation_register', $arr_data);
    }

    public function stamina($page = '')
    {
        $arr_data = array();

        $metatag = new stdClass();
        $metatag->title = 'Stamina Recommendation - Norm';
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

        if ($page == 'loading')
        {
            $this->load->view('recommendation_stamina_loading', $arr_data);
        }
        else
        {
            $this->load->view('recommendation_stamina', $arr_data);
        }
    }
    /* End Public Function Area */




    /* Ajax Area */
    /* End Ajax Area */




    /* Private Function Area */
    /* End Private Function Area */
}