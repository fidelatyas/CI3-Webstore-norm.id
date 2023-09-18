<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{
    private $_patient;
    private $_setting;
    private $_lang;
    private $_view_popup;

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
        $this->_view_popup = (!$this->session->userdata('view_popup')) ? 0 : $this->session->userdata('view_popup');

        // get signin data
        $patient_id = $this->session->userdata('patient_id');

        if ($patient_id > 0)
        {
            $this->_patient = $this->core_model->get('patient', $patient_id);
        }

        $this->load->library('cms_data');

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
    public function index()
    {
        $arr_data = array();
        $launching_date = 1625590800;
        $remaining_date = 1625590800 - time();

        $metatag = new stdClass();
        $metatag->title = 'Perawatan terbaik bagi pria | Norm';
        $metatag->description = 'Perawatan diri terbaik bagi pria yang di formulasikan dengan premium natural ingredients untuk meningkatkan kepercayaan diri.';
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
        $arr_data['arr_blog'] = $this->_get_blog();

        $arr_data['remaining_date'] = $remaining_date;

        $arr_data['metatag'] = $metatag;
        $arr_data['view_popup'] = $this->_view_popup;

        $this->load->view('index', $arr_data);
    }
    /* End Public Function Area */




    /* Ajax Area */
    /* End Ajax Area */




    /* Private Function Area */
    private function _get_blog()
    {
        $all_blog = $this->cms_data->generate_blog();
        $arr_blog = array();

        foreach ($all_blog as $blog)
        {
            $blog->category = ($blog->category == 'Other') ? 'Lifestyle' : $blog->category;
            $arr_blog[] = clone $blog;

            if (count($arr_blog) >= 10)
            {
                break;
            }
        }

        return $arr_blog;
    }
    /* End Private Function Area */
}