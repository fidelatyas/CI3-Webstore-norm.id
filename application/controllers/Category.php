<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller
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
    public function all()
    {
        $arr_data = array();
        $arr_product_id = array();

        $metatag = new stdClass();
        $metatag->title = 'Perawatan khusus pria dengan bahan alami | Norm';
        $metatag->description = 'Produk perawatan khusus pria yang mengandung bahan alami dan didukung oleh para ahli dibidangnya.';
        $metatag->robot = 'all, notranslate';
        $metatag->googlebot = 'all, notranslate';
        $metatag->og_type = 'website';
        $metatag->og_image = '';
        $metatag->og_url = base_url();
        $metatag->og_site_name = 'norm.id';
        $metatag->twitter_image = '';
        $metatag->twitter_site = '@norm.id';
        $metatag->twitter_creator = '@norm.id';

        // get consultation_product
        if ($this->_patient)
        {
            $this->db->select('id');
            $this->db->where('status', 'Finish');
            $this->db->where('patient_id', $this->_patient->id);
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

        $arr_data['title'] = $metatag->title;
        $arr_data['setting'] = $this->_setting;
        $arr_data['account'] = $this->_patient;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['page'] = 'home';
        $arr_data['lang'] = $this->_lang;
        $arr_data['navbar'] = 'black';
        $arr_data['cart_record'] = $this->cms_function->generate_cart();
        $arr_data['arr_product_id'] = $arr_product_id;

        $arr_data['metatag'] = $metatag;

        $this->load->view('all_product', $arr_data);
    }

    public function fragrance()
    {
        $arr_data = array();

        $metatag = new stdClass();
        $metatag->title = 'Parfum mewah dengan sensasi kesegaran | Norm';
        $metatag->description = 'Parfum mewah dengan memberikan sensasi aroma kesegaran untuk menunjang penampilan dan membuat aktivitas semakin produktif.';
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

        $this->load->view('fragrance', $arr_data);
    }

    public function hairbody()
    {
        $arr_data = array();
        $arr_product_id = array();

        $metatag = new stdClass();
        $metatag->title = 'Merawat kulit dan mencegah kerontokan | Norm';
        $metatag->description = 'Perawatan kulit tubuh dan mencegah kerontokan rambut yang sudah didukung oleh ahli dermatologis.';
        $metatag->robot = 'all, notranslate';
        $metatag->googlebot = 'all, notranslate';
        $metatag->og_type = 'website';
        $metatag->og_image = '';
        $metatag->og_url = base_url();
        $metatag->og_site_name = 'norm.id';
        $metatag->twitter_image = '';
        $metatag->twitter_site = '@norm.id';
        $metatag->twitter_creator = '@norm.id';

        // get consultation_product
        if ($this->_patient)
        {
            $this->db->select('id');
            $this->db->where('category_id', 5);
            $this->db->where('patient_id', $this->_patient->id);
            $this->db->where('status', 'Finish');
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

        $arr_data['title'] = $metatag->title;
        $arr_data['setting'] = $this->_setting;
        $arr_data['account'] = $this->_patient;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['page'] = 'home';
        $arr_data['lang'] = $this->_lang;
        $arr_data['navbar'] = 'black';
        $arr_data['cart_record'] = $this->cms_function->generate_cart();
        $arr_data['arr_product_id'] = $arr_product_id;

        $arr_data['metatag'] = $metatag;

        $this->load->view('hairbody', $arr_data);
    }

    public function merchandise()
    {
        $arr_data = array();

        $metatag = new stdClass();
        $metatag->title = 'Tas modern dan praktis | Norm';
        $metatag->description = 'Tas dengan design modern dan praktis yang dapat dibawa saat berpergian jauh.';
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

        $this->load->view('merchandise', $arr_data);
    }

    public function performance()
    {
        $arr_data = array();
        $arr_product_id = array();

        $metatag = new stdClass();
        $metatag->title = 'Menjaga durasi yang tahan lama saat berhubungan seksual | Norm';
        $metatag->description = 'Produk yang direkomendasi oleh ahli urologis untuk menjaga durasi tahan lama saat berhubungan seksual.';
        $metatag->robot = 'all, notranslate';
        $metatag->googlebot = 'all, notranslate';
        $metatag->og_type = 'website';
        $metatag->og_image = '';
        $metatag->og_url = base_url();
        $metatag->og_site_name = 'norm.id';
        $metatag->twitter_image = '';
        $metatag->twitter_site = '@norm.id';
        $metatag->twitter_creator = '@norm.id';

        // get consultation_product
        if ($this->_patient)
        {
            $this->db->select('id');
            $this->db->where('category_id', 11);
            $this->db->where('patient_id', $this->_patient->id);
            $this->db->where('status', 'Finish');
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

        $arr_data['title'] = $metatag->title;
        $arr_data['setting'] = $this->_setting;
        $arr_data['account'] = $this->_patient;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['page'] = 'home';
        $arr_data['lang'] = $this->_lang;
        $arr_data['navbar'] = 'black';
        $arr_data['cart_record'] = $this->cms_function->generate_cart();
        $arr_data['arr_product_id'] = $arr_product_id;

        $arr_data['metatag'] = $metatag;

        $this->load->view('performance', $arr_data);
    }

    public function prescription()
    {
        $arr_data = array();
        $arr_product_id = array();

        $metatag = new stdClass();
        $metatag->title = 'Medical Grade Product - Norm';
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

        // get consultation_product
        if ($this->_patient)
        {
            $this->db->select('id');
            $this->db->where('status', 'Finish');
            $this->db->where('patient_id', $this->_patient->id);
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

        $arr_data['title'] = $metatag->title;
        $arr_data['setting'] = $this->_setting;
        $arr_data['account'] = $this->_patient;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['page'] = 'home';
        $arr_data['lang'] = $this->_lang;
        $arr_data['navbar'] = 'black';
        $arr_data['cart_record'] = $this->cms_function->generate_cart();
        $arr_data['arr_product_id'] = $arr_product_id;

        $arr_data['metatag'] = $metatag;

        $this->load->view('medical_grade', $arr_data);
    }

    public function skincare()
    {
        $arr_data = array();

        $metatag = new stdClass();
        $metatag->title = 'Perawatan kulit wajah untuk pria | Norm';
        $metatag->description = 'Rangkaian perawatan kulit wajah untuk menghilangkan jerawat, kulit berminyak, dan mengangkat sel kulit kulit mati.';
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

        $this->load->view('skincare', $arr_data);
    }
    /* End Public Function Area */




    /* Ajax Area */
    /* End Ajax Area */




    /* Private Function Area */
    /* End Private Function Area */
}