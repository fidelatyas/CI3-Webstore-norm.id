<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller
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
        /* BUNDLE AREA */
            public function aging_set()
            {
                $arr_data = array();

                $metatag = new stdClass();
                $metatag->title = 'Starter Maintenance Set - Norm';
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

                $arr_data['referrer_url'] = $this->_generate_referrer('all-product');

                $arr_data['metatag'] = $metatag;

                $this->load->view('product_bundle_aging_set', $arr_data);
            }

            public function complete()
            {
                $arr_data = array();

                $metatag = new stdClass();
                $metatag->title = 'Pilihan tepat untuk untuk tingkatkan kepercayaan diri | Norm';
                $metatag->description = 'Pilihan tepat untuk mempunyai tampilan yang lebih maksimal, ganteng, harum dan percaya diri. ';
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

                $arr_data['referrer_url'] = $this->_generate_referrer('all-product');

                $arr_data['metatag'] = $metatag;

                $this->load->view('product_bundle_complete', $arr_data);
            }

            public function complete_plus_bag()
            {
                $arr_data = array();

                $metatag = new stdClass();
                $metatag->title = 'Pilihan tepat untuk untuk tingkatkan kepercayaan diri | Norm';
                $metatag->description = 'Pilihan tepat untuk mempunyai tampilan yang lebih maksimal, ganteng, harum dan percaya diri. ';
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

                $arr_data['referrer_url'] = $this->_generate_referrer('all-product');

                $arr_data['metatag'] = $metatag;

                $this->load->view('product_bundle_complete_bag', $arr_data);
            }

            public function daily_set()
            {
                $arr_data = array();

                $metatag = new stdClass();
                $metatag->title = 'Perawatan harian untuk kulit wajah | Norm';
                $metatag->description = 'Rangkaian perawatan harian untuk membantu wajah bebas dari jerawat, melembabkan kulit, dan mencegah penuaan dini.';
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

                $arr_data['referrer_url'] = $this->_generate_referrer('all-product');

                $arr_data['metatag'] = $metatag;

                $this->load->view('product_bundle_daily_set', $arr_data);
            }

            public function maintenance()
            {
                $arr_data = array();

                $metatag = new stdClass();
                $metatag->title = 'Perawatan rutin untuk kulit wajah | Norm';
                $metatag->description = 'Perawatan rutin wajah supaya mendapatkan kulit yang bersih, sehat, dan segar.';
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

                $arr_data['referrer_url'] = $this->_generate_referrer('skincare');

                $arr_data['metatag'] = $metatag;

                $this->load->view('product_bundle_maintenance', $arr_data);
            }

            public function maintenance_plus_bag()
            {
                $arr_data = array();

                $metatag = new stdClass();
                $metatag->title = 'Perawatan rutin untuk kulit wajah | Norm';
                $metatag->description = 'Perawatan rutin wajah supaya mendapatkan kulit yang bersih, sehat, dan segar.';
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

                $arr_data['referrer_url'] = $this->_generate_referrer('skincare');

                $arr_data['metatag'] = $metatag;

                $this->load->view('product_bundle_maintenance_bag', $arr_data);
            }

            public function shower()
            {
                $arr_data = array();

                $metatag = new stdClass();
                $metatag->title = 'Pelengkap perawatan rutinitas | Norm';
                $metatag->description = 'Melengkapi perawatan rutinitas yang dilakukan sebelum dan sesudah beraktivitas agar kulit tubuh tetap sehat dan rambut jadi tebal.';
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

                $arr_data['referrer_url'] = $this->_generate_referrer('hair-body');

                $arr_data['metatag'] = $metatag;

                $this->load->view('product_bundle_shower', $arr_data);
            }

            public function shower_plus_bag()
            {
                $arr_data = array();

                $metatag = new stdClass();
                $metatag->title = 'Pelengkap perawatan rutinitas | Norm';
                $metatag->description = 'Melengkapi perawatan rutinitas yang dilakukan sebelum dan sesudah beraktivitas agar kulit tubuh tetap sehat dan rambut jadi tebal.';
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

                $arr_data['referrer_url'] = $this->_generate_referrer('hair-body');

                $arr_data['metatag'] = $metatag;

                $this->load->view('product_bundle_shower_bag', $arr_data);
            }

            public function spectrum_set()
            {
                $arr_data = array();

                $metatag = new stdClass();
                $metatag->title = 'Parfum mewah dan aromanya yang segar | Norm';
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

                $arr_data['referrer_url'] = $this->_generate_referrer('all-product');

                $arr_data['metatag'] = $metatag;

                $this->load->view('product_bundle_spectrum', $arr_data);
            }

            public function starter_set()
            {
                $arr_data = array();

                $metatag = new stdClass();
                $metatag->title = 'Langkah awal melakukan perawatan | Norm';
                $metatag->description = 'Langkah awal rangkaian perawatan wajah untuk mendapatkan wajah yang bersih dan cerah.';
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

                $arr_data['referrer_url'] = $this->_generate_referrer('all-product');

                $arr_data['metatag'] = $metatag;

                $this->load->view('product_bundle_starter_set', $arr_data);
            }

            public function ultimate_gift()
            {
                $arr_data = array();

                $metatag = new stdClass();
                $metatag->title = 'Hadiah untuk orang terdekat | Norm';
                $metatag->description = 'Pilihan yang tepat sebagai pemberian hadiah ke orang terdekat dan tersayang. ';
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

                $arr_data['referrer_url'] = $this->_generate_referrer('all-product');

                $arr_data['metatag'] = $metatag;

                $this->load->view('product_bundle_ultimate_gift', $arr_data);
            }

            public function ultimate_gift_bag()
            {
                $arr_data = array();

                $metatag = new stdClass();
                $metatag->title = 'Hadiah untuk orang terdekat | Norm';
                $metatag->description = 'Pilihan yang tepat sebagai pemberian hadiah ke orang terdekat dan tersayang. ';
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

                $arr_data['referrer_url'] = $this->_generate_referrer('all-product');

                $arr_data['metatag'] = $metatag;

                $this->load->view('product_bundle_ultimate_gift_bag', $arr_data);
            }
        /* END BUNDLE AREA */

        /* HAIR & BODY AREA */
            public function bodywash()
            {
                $arr_data = array();

                $metatag = new stdClass();
                $metatag->title = 'membersihkan kulit dari kuman dan keringat | Norm';
                $metatag->description = 'Membersihkan kulit tubuh dari kuman dan keringat setelah beraktivitas seharian dan menjaga kulit tubuh tetap segar sehingga bebas dari jerawat.';
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

                $arr_data['referrer_url'] = $this->_generate_referrer('hair-body');

                $arr_data['metatag'] = $metatag;

                $this->load->view('product_bodywash', $arr_data);
            }

            public function shampoo()
            {
                $arr_data = array();

                $metatag = new stdClass();
                $metatag->title = 'Mencegah kerontokan rambut dan menguatkan akar rambut | Norm';
                $metatag->description = 'Menguatkan akar rambut untuk mencegah masalah kerontokan rambut pada pria.';
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

                $arr_data['referrer_url'] = $this->_generate_referrer('hair-body');

                $arr_data['metatag'] = $metatag;

                $this->load->view('product_shampoo', $arr_data);
            }
        /* END HAIR & BODY AREA */

        /* MERCHANDISE AREA */
            public function utility_bag()
            {
                $arr_data = array();

                $metatag = new stdClass();
                $metatag->title = 'Tas serbaguna yang modern dan praktis | Norm';
                $metatag->description = 'Bag serbaguna yang modern dan praktis yang bisa dibawa saat berpergian.';
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

                $arr_data['referrer_url'] = $this->_generate_referrer('hair-body');

                $arr_data['metatag'] = $metatag;

                $this->load->view('product_bag', $arr_data);
            }
        /* END MERCHANDISE AREA */

        /* FRAGRANCE AREA */
            public function summer_sol()
            {
                $arr_data = array();

                $metatag = new stdClass();
                $metatag->title = 'Parfum dengan aroma kesegaran | Norm';
                $metatag->description = 'Parfum yang memberikan aroma kesegaran untuk menaikan mood dan menemani aktivitas di siang hari.';
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

                $arr_data['referrer_url'] = $this->_generate_referrer('fragrance');

                $arr_data['metatag'] = $metatag;

                $this->load->view('product_summer_sol', $arr_data);
            }

            public function white_night()
            {
                $arr_data = array();

                $metatag = new stdClass();
                $metatag->title = 'Karakter maskulinitas dari aromanya yang mewah | Norm';
                $metatag->description = 'Aromanya yang mewah memberikan karakter maskulinitas dan meningkatkan kepercayaan diri. ';
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

                $arr_data['referrer_url'] = $this->_generate_referrer('fragrance');

                $arr_data['metatag'] = $metatag;

                $this->load->view('product_white_night', $arr_data);
            }
        /* END FRAGRANCE AREA */

        /* PRESCRIPTION AREA */
            public function complete_hair_growth()
            {
                if (!$this->_patient)
                {
                    redirect(base_url() . 'all-product/');
                }

                $arr_data = array();

                $metatag = new stdClass();
                $metatag->title = 'Complete Hair Growth Kit - Norm';
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

                $arr_data['referrer_url'] = $this->_generate_referrer('hair-body');

                $arr_data['metatag'] = $metatag;

                $this->load->view('product_complete_hairgrowth', $arr_data);
            }

            public function dht_shampoo()
            {
                if (!$this->_patient)
                {
                    redirect(base_url() . 'all-product/');
                }

                $arr_data = array();

                $metatag = new stdClass();
                $metatag->title = 'Anti DHT Shampoo - Norm';
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

                $arr_data['referrer_url'] = $this->_generate_referrer('hair-body');

                $arr_data['metatag'] = $metatag;

                $this->load->view('product_dht_shampoo', $arr_data);
            }

            public function hair_growth_capsule()
            {
                if (!$this->_patient)
                {
                    redirect(base_url() . 'all-product/');
                }

                $arr_data = array();

                $metatag = new stdClass();
                $metatag->title = 'Hair Growth Capsule - Norm';
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

                $arr_data['referrer_url'] = $this->_generate_referrer('hair-body');

                $arr_data['metatag'] = $metatag;

                $this->load->view('product_hairgrowth_capsule', $arr_data);
            }

            public function hair_tonic()
            {
                if (!$this->_patient)
                {
                    redirect(base_url() . 'all-product/');
                }

                $arr_data = array();

                $metatag = new stdClass();
                $metatag->title = 'Hair Growth Capsule - Norm';
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

                $arr_data['referrer_url'] = $this->_generate_referrer('hair-body');

                $arr_data['metatag'] = $metatag;

                $this->load->view('product_hair_tonic', $arr_data);
            }

            public function stamina_cream()
            {
                if (!$this->_patient)
                {
                    redirect(base_url() . 'all-product/');
                }

                $arr_data = array();

                $metatag = new stdClass();
                $metatag->title = 'Hair Growth Capsule - Norm';
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

                $arr_data['referrer_url'] = $this->_generate_referrer('performance');

                $arr_data['metatag'] = $metatag;

                $this->load->view('product_stamina_cream', $arr_data);
            }

            public function starter_hair_growth()
            {
                if (!$this->_patient)
                {
                    redirect(base_url() . 'all-product/');
                }

                $arr_data = array();

                $metatag = new stdClass();
                $metatag->title = 'Starter Hair Growth Kit - Norm';
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

                $arr_data['referrer_url'] = $this->_generate_referrer('hair-body');

                $arr_data['metatag'] = $metatag;

                $this->load->view('product_starter_hairgrowth', $arr_data);
            }
        /* END PRESCRIPTION AREA */

        /* SKINCARE AREA */
            public function facescrub()
            {
                $arr_data = array();

                $metatag = new stdClass();
                $metatag->title = 'Mengeksfoliasi kulit untuk dapatkan wajah yang cerah | Norm';
                $metatag->description = 'Mengeksfoliasi kulit wajah dengan meregenerasi sel kulit mati untuk mendapatkan wajah yang cerah.';
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

                $arr_data['referrer_url'] = $this->_generate_referrer('skincare');

                $arr_data['metatag'] = $metatag;

                $this->load->view('product_facescrub', $arr_data);
            }

            public function facewash()
            {
                $arr_data = array();

                $metatag = new stdClass();
                $metatag->title = 'Bagian penting dalam membersihkan kotoran di wajah | Norm';
                $metatag->description = 'Bagian yang paling penting untuk membersihkan segala kotoran yang menempel pada wajah. ';
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

                $arr_data['referrer_url'] = $this->_generate_referrer('skincare');

                $arr_data['metatag'] = $metatag;

                $this->load->view('product_facewash', $arr_data);
            }

            public function moisturizer()
            {
                $arr_data = array();

                $metatag = new stdClass();
                $metatag->title = 'Menghidrasi kulit dan melindungi kulit dari sinar UV | Norm';
                $metatag->description = 'Menghidrasi kulit wajah agar kelembaban kulit tetap terjaga dan melindungi kulit dari bahaya sinar UV. ';
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

                $arr_data['referrer_url'] = $this->_generate_referrer('skincare');

                $arr_data['metatag'] = $metatag;

                $this->load->view('product_moisturizer', $arr_data);
            }
        /* END SKINCARE AREA*/
    /* End Public Function Area */




    /* Ajax Area */
    /* End Ajax Area */




    /* Private Function Area */
    private function _generate_referrer($category)
    {
        $referrer = (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : '';

        if (strpos($referrer, 'all-product') !== false)
        {
            $referrer_url = $referrer;
        }
        else
        {
            $referrer_url = base_url() . $category . '/';
        }

        return $referrer_url;
    }
    /* End Private Function Area */
}