<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Referral extends CI_Controller
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
        $arr_data = array();

        $referral_id = (isset($_GET['ref_id'])) ? $_GET['ref_id'] : '';

        if ($referral_id != '')
        {
            // check existing referral id
            $this->db->where('code', $referral_id);
            $count_referral = $this->core_model->count('referral2');

            if ($count_referral > 0)
            {
                $this->session->set_userdata('ref_id', $referral_id);
            }
        }

        $metatag = new stdClass();
        $metatag->title = '#UpgradeYourself Referral Program - Norm';
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

        $this->load->view('referral_program', $arr_data);
    }

    public function code($code = '')
    {
        $arr_data = array();

        if ($code == '')
        {
            redirect(base_url() . 'referral/');
        }

        $metatag = new stdClass();
        $metatag->title = '#UpgradeYourself Referral Program - Norm';
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

        // check code
        $this->db->where('code', $code);
        $arr_referral = $this->core_model->get('referral2');

        if (count($arr_referral) <= 0)
        {
            redirect(base_url());
        }

        $referral = $arr_referral[0];
        $referral->url = base_url() . 'referral/?ref_id='. $referral->code;

        // count referral
        $this->db->where('referral_id', $referral->id);
        $referral->count_referral = $this->core_model->count('referral2');

        $arr_data['title'] = $metatag->title;
        $arr_data['setting'] = $this->_setting;
        $arr_data['account'] = $this->_patient;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['page'] = 'home';
        $arr_data['lang'] = $this->_lang;
        $arr_data['navbar'] = 'black';
        $arr_data['cart_record'] = $this->cms_function->generate_cart();

        $arr_data['metatag'] = $metatag;
        $arr_data['referral'] = $referral;

        $this->load->view('referral', $arr_data);
    }




    public function export_referral_result()
    {

    }
    /* End Public Function Area */




    /* Ajax Area */
    public function ajax_get_referral_result()
    {
        $json['status'] = 'success';

        try
        {
            $arr_referral = $this->core_model->get('referral2');
            $arr_referral_lookup = array();
            $arr_referral_email_lookup = array();

            foreach ($arr_referral as $referral)
            {
                if ($referral->referral_id > 0)
                {
                    $arr_referral_lookup[$referral->referral_id][] = $referral->email;
                }
            }

            foreach ($arr_referral as $key => $referral)
            {
                if (!isset($arr_referral_lookup[$referral->id]))
                {
                    unset($arr_referral[$key]);

                    continue;
                }

                $referral->count_referral = count($arr_referral_lookup[$referral->id]);

                echo  $referral->email . ' -> ' . $referral->count_referral . '<br>';
            }
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