<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Questionaire extends CI_Controller
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
    public function stop($category = 'hairgrowth', $page = 1)
    {
        $arr_data = array();

        $metatag = new stdClass();
        $metatag->title = 'Questionaire - Norm';
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
        $arr_data['category'] = $category;
        $arr_data['page'] = $page;

        $this->load->view('questionaire_stop', $arr_data);
    }

    public function hairgrowth($number = 1)
    {
        if ($number == 1)
        {
            $this->session->unset_userdata('questionaire_answer');
        }

        $arr_data = array();
        $total = 11;
        $percentage = ($number / $total) * 100;

        $arr_answer = ($this->session->userdata('questionaire_answer')) ? $this->session->userdata('questionaire_answer') : array();
        $arr_answered = (isset($arr_answer[$number])) ? $arr_answer[$number] : array();

        $metatag = new stdClass();
        $metatag->title = 'Questionaire - Norm';
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
        $arr_data['percentage'] = floor($percentage);
        $arr_data['number'] = $number;
        $arr_data['arr_answered'] = $arr_answered;

        $this->load->view('questionaire_hairgrowth_' . $number, $arr_data);
    }

    public function stamina($number = 1)
    {
        if ($number == 1)
        {
            $this->session->unset_userdata('questionaire_answer');
        }

        $arr_data = array();
        $total = 10;
        $percentage = ($number / $total) * 100;

        $arr_answer = ($this->session->userdata('questionaire_answer')) ? $this->session->userdata('questionaire_answer') : array();
        $arr_answered = (isset($arr_answer[$number])) ? $arr_answer[$number] : array();

        $metatag = new stdClass();
        $metatag->title = 'Questionaire - Norm';
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
        $arr_data['percentage'] = floor($percentage);
        $arr_data['number'] = $number;
        $arr_data['arr_answered'] = $arr_answered;

        $this->load->view('questionaire_stamina_' . $number, $arr_data);
    }
    /* End Public Function Area */




    /* Ajax Area */
    public function ajax_save_answer()
    {
        $json['status'] = 'success';

        try
        {
            $arr_questionaire = json_decode($this->input->post('arr_questionaire'));
            $page = $this->input->post('page');

            $arr_answer = $this->session->userdata('questionaire_answer');
            $arr_answer[$page] = array();

            foreach ($arr_questionaire as $questionaire)
            {
                $arr_answer[$page][] = clone $questionaire;
            }

            $this->session->set_userdata('questionaire_answer', $arr_answer);
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
    /* End Private Function Area */
}