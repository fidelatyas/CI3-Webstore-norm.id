<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Review extends CI_Controller
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

        $this->load->library('cms_data');
    }




    /* Public Function Area */
    public function index()
    {
        $arr_data = array();

        $metatag = new stdClass();
        $metatag->title = 'Reviews - Norm';
        $metatag->description = 'Apa pendapat customer tentang produk dan layanan Norm? Temukan ulasan dari pelanggan mengenai pengalaman mereka dengan produk dan layanan Norm di sini.';
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
        $arr_data['navbar'] = 'white';
        $arr_data['cart_record'] = $this->cms_function->generate_cart();

        $arr_data['metatag'] = $metatag;
        $arr_data['arr_review'] = $this->_get_review();

        $this->load->view('review', $arr_data);
    }
    /* End Public Function Area */




    /* Ajax Area */
    public function ajax_load_review()
    {
        $json['status'] = 'success';

        try
        {
            $page = $this->input->post('page');

            $record['arr_review'] = $this->_load_review($page);

            $json['count_review'] = count($record['arr_review']);
            $json['all_review'] = $this->load->view('all_review', $record, true);
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
    private function _get_review()
    {
        $all_review = $this->cms_data->generate_reviews();
        $arr_review = array();

        foreach ($all_review as $review)
        {
            $arr_review[] = clone $review;

            if (count($arr_review) >= 10)
            {
                break;
            }
        }

        return $arr_review;
    }

    private function _load_review($page)
    {
        $all_review = $this->cms_data->generate_reviews();
        $arr_review = array();

        $start = (($page - 1) * 10) - 1;
        $end  = ($page * 10) - 1;
        $count = -1;

        foreach ($all_review as $key => $review)
        {
            $count += 1;

            if ($count <= $start)
            {
                continue;
            }

            if ($count > $end)
            {
                break;
            }

            $arr_review[] = clone $review;
        }

        return $arr_review;
    }
    /* End Private Function Area */
}