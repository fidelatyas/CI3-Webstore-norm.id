<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Code extends CI_Controller
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
        $category = 'all';

        $metatag = new stdClass();
        $metatag->title = 'Artikel tentang seputar perawatan | Norm';
        $metatag->description = 'Portal yang berisikan artikel/blog yang membahas seputar perawatan rambut, kulit, lifestyle, dan seksual. ';
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

        $arr_data['arr_blog'] = $this->_get_blog($category);
        $arr_data['category'] = $category;

        $this->load->view('code', $arr_data);
    }

    public function category($category = '')
    {
        if ($category == '')
        {
            redirect(base_url() . 'code/');
        }

        $arr_data = array();

        $metatag = new stdClass();
        $metatag->title = 'Artikel tentang seputar perawatan | Norm';
        $metatag->description = 'Portal yang berisikan artikel/blog yang membahas seputar perawatan rambut, kulit, lifestyle, dan seksual.';
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

        $arr_data['arr_blog'] = $this->_get_blog(ucwords($category));
        $arr_data['category'] = $category;

        $this->load->view('code', $arr_data);
    }

    public function detail($url_name = '')
    {
        if ($url_name == '')
        {
            redirect(base_url() . 'code/');
        }

        $arr_blog = $this->cms_data->generate_blog();
        $selected_blog;

        foreach ($arr_blog as $blog)
        {
            if ($blog->url_name == $url_name)
            {
                $selected_blog = clone $blog;
            }
        }

        $metatag = new stdClass();
        $metatag->title = $selected_blog->name;
        $metatag->description = $selected_blog->subtitle;
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
        $arr_data['selected_blog'] = $selected_blog;

        $this->load->view('code_detail', $arr_data);
    }

    public function media()
    {
        $arr_data = array();
        $category = 'media';

        $metatag = new stdClass();
        $metatag->title = 'Norm Code - Semua Hal Tentang Kesehatan dan Lifestyle Pria';
        $metatag->description = 'Pria berhak mendapatkan hidup lebih baik! Temukan berbagai artikel terkini seputar kesehatan dan perawatan diri pria di sini.';
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

        $arr_data['arr_media'] = $this->_get_media();
        $arr_data['category'] = $category;

        $this->load->view('media', $arr_data);
    }

    public function video()
    {
        $arr_data = array();
        $category = 'video';

        $metatag = new stdClass();
        $metatag->title = 'Norm Code - Semua Hal Tentang Kesehatan dan Lifestyle Pria';
        $metatag->description = 'Pria berhak mendapatkan hidup lebih baik! Temukan berbagai artikel terkini seputar kesehatan dan perawatan diri pria di sini.';
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

        $arr_data['arr_video'] = $this->_get_video();
        $arr_data['category'] = $category;

        $this->load->view('video', $arr_data);
    }
    /* End Public Function Area */




    /* Ajax Area */
    public function ajax_load_article()
    {
        $json['status'] = 'success';

        try
        {
            $page = $this->input->post('page');
            $category = $this->input->post('category');

            $record['arr_blog'] = $this->_load_blog($page, $category);

            $json['count_blog'] = count($record['arr_blog']);
            $json['all_blog'] = $this->load->view('all_blog', $record, true);
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

    public function ajax_load_media()
    {
        $json['status'] = 'success';

        try
        {
            $page = $this->input->post('page');

            $record['arr_media'] = $this->_load_media($page);

            $json['count_media'] = count($record['arr_media']);
            $json['all_media'] = $this->load->view('all_media', $record, true);
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

    public function ajax_load_video()
    {
        $json['status'] = 'success';

        try
        {
            $page = $this->input->post('page');

            $record['arr_video'] = $this->_load_video($page);

            $json['count_video'] = count($record['arr_video']);
            $json['all_video'] = $this->load->view('all_video', $record, true);
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
    private function _get_blog($category, $title = '')
    {
        $all_blog = $this->cms_data->generate_blog();
        $arr_blog = array();

        foreach ($all_blog as $blog)
        {
            if ($category != 'all' && $blog->category != $category)
            {
                continue;
            }

            if ($blog->name == $title)
            {
                continue;
            }

            $arr_blog[] = clone $blog;

            if (count($arr_blog) >= 6)
            {
                break;
            }
        }

        return $arr_blog;
    }

    private function _get_media()
    {
        $all_media = $this->cms_data->generate_media();
        $arr_media = array();

        foreach ($all_media as $media)
        {
            $arr_media[] = clone $media;

            if (count($arr_media) >= 6)
            {
                break;
            }
        }

        return $arr_media;
    }

    private function _get_video()
    {
        $all_video = $this->cms_data->generate_video();
        $arr_video = array();

        foreach ($all_video as $video)
        {
            $arr_video[] = clone $video;

            if (count($arr_video) >= 7)
            {
                break;
            }
        }

        return $arr_video;
    }

    private function _load_blog($page, $category)
    {
        $all_blog = $this->cms_data->generate_blog();
        $arr_blog = array();

        $start = (($page - 1) * 6) - 1;
        $end  = ($page * 6) - 1;
        $count = -1;

        foreach ($all_blog as $key => $blog)
        {
            if ($category != 'all' && strtolower($blog->category) != $category)
            {
                continue;
            }

            $count += 1;

            if ($count <= $start)
            {
                continue;
            }

            if ($count > $end)
            {
                break;
            }

            $blog->category = ucwords($blog->category);
            $arr_blog[] = clone $blog;
        }

        return $arr_blog;
    }

    private function _load_media($page)
    {
        $all_media = $this->cms_data->generate_media();
        $arr_media = array();

        $start = (($page - 1) * 6) - 1;
        $end  = ($page * 6) - 1;
        $count = -1;

        foreach ($all_media as $key => $media)
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

            $arr_media[] = clone $media;
        }

        return $arr_media;
    }

    private function _load_video($page)
    {
        $all_video = $this->cms_data->generate_video();
        $arr_video = array();

        $start = (($page - 1) * 6);
        $end  = ($page * 6) + 1;
        $count = -1;

        foreach ($all_video as $key => $video)
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

            $arr_video[] = clone $video;
        }

        return $arr_video;
    }
    /* End Private Function Area */
}