<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cron extends CI_Controller
{
    private $_user;
    private $_setting;

    private $_unsubscribe;

    public function __construct()
    {
        parent:: __construct();

        $this->_setting = $this->setting_model->load();

        $this->_unsubscribe = array('medsos2006@gmail.com', 'sereyordan76n@gmail.com', 'kevinamrulloh@gmail.com', 'william.toron@gmail.com', 'mahyudin.purwanto@gmail.com', 'ha_suryo@yahoo.co.id', 'yhsin183@gmail.com', 'tantri.roy@gmail.com', 'gatot.trihartanto93@gmail.com', 'Fais_3003@yahoo.com', 'dendymohammad13@gmail', 'hnd.supermoto@gmail.com', 'patrickedward_@hotmail.com', 'u_kusuma@yahoo.com', 'Rinaldoraiv@gmail.com', 'aqim82@gmail.com', 'anandakukuh5@gmail.com', 'wawahadiputraa@gmail.com', 'nnajeeb@rocketmail.com', 'fznmf@yahoo.com', 'ichsanalviano@gmail.com', 'jefnaga@gmail.com', 'Livia.kan@gmail.com', 'alifyanuarious@gmail.com', 'Alfikrifathin@gmail.com', 'edichahyadi@gmail.com', 'muhamadfikrinugraha12@gmail.com', 'just99otna@gmail.com', 'sunartomo007@gmail.com', 'yusranyunus88@gmail.com', 'ryantoegy@gmail.com', 'medsos2006@gmail.com', 'clemens.clement@gmail.com', 'soetjipto.n@gmail.com', 'ridwanyunus8@gmail.com', 'kayelf25@icloud.com', 'dedy.yugo.purwanto@gmail.com', 'Dhityaslo@yahoo.com', 'Ashc_trumph@yahoo.com', 'moh.ikhsan24@gmail.com', 'handian.hutabarat@gmail.com', 'rexigreg@gmail.com', 'chandra.wiedjaja@gmail.com', 'Febriandaputra7@gmail.com', 'rama870@gmail.com', 'mfadhiladha92@gmail.com', 'hermanoemar@yahoo.com', 'Dinandyzikra@gmail.com', 'w4hyudiherm4n@gmail.com', 'wahyudi.fery17@yahoo.com', 'viscodps@yahoo.com', 'yoganisme@gmail.com', 'Dinandyzikra@gmail.com', 'Raden.mitsubishi@gmail.com', 'hendrawan4869@gmail.com', 'jinyen.yap@gmail.com', 'qisthi_aufa@yahoo.com', 'Rikiadrianus@yahoo.co.id', 'ab_owen@hotmail.com', 'yohannachristie@yahoo.com', 'teravirginiawan@gmail.com', 'virgavidiana@gmail.com', 'Edhyjail@yahoo.co.id', 'norman_ka84@hotmail.com', 'azelkw@gmail.com', 'azelkw@gmail.com', 'deanbangkit@gmail.com', 'Andrian_hoffman@yahoo.com', 'rivalzulfikar@yahoo.com', 'syafaatuludhma1@yahoo.com', 'M11nk@yahoo.com', 'valentine.hadeli@gmail.com', 'suryanata.prima22@gmail.com', 'Ihsanlahibda@gmail.com', 'rmondw@icloud.com');
    }




    /* Public Function Area */
    /* End Public Function Area */




    /* Ajax Area */
    // SEND ABANDON EMAIL 1
    // schedule: every 30 min
    public function ajax_send_abandon_email_1()
    {
        $json['status'] = 'success';

        try
        {
            set_time_limit(0);

            $start = time() - 3600;
            $count_send = 0;

            $this->db->where('reminder_1 <=', 0);
            $arr_cart = $this->core_model->get('cart');

            foreach ($arr_cart as $cart)
            {
                if (time() - $cart->date > 3600 && time() - $cart->date <= 7200)
                {
                    // update reminder_1
                    $this->core_model->update('cart', $cart->id, array('reminder_1' => '1'));

                    $patient = $this->core_model->get('patient', $cart->patient_id);

                    $record = array();
                    $record['name'] = $patient->name;
                    $record['patient_id'] = $patient->id;
                    $record['arr_cart'] = json_decode($cart->cart);

                    $subject = 'Ayo selesaikan pemesananmu';
                    $message = $this->load->view('email/abandon_1', $record, true);

                    $this->cms_function->load_email_library($this->_setting, $patient->email, array(), $subject, $message, 'html');
                }
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

    // SEND ABANDON EMAIL 2
    // schedule: every 30 min
    public function ajax_send_abandon_email_2()
    {
        $json['status'] = 'success';

        try
        {
            set_time_limit(0);

            $start = time() - 86400;
            $count_send = 0;

            $this->db->where('reminder_2 <=', 0);
            $arr_cart = $this->core_model->get('cart');

            foreach ($arr_cart as $cart)
            {
                if (time() - $cart->date > 86400 && time() - $cart->date <= 90000)
                {
                    // update reminder_2
                    $this->core_model->update('cart', $cart->id, array('reminder_2' => '1'));

                    $patient = $this->core_model->get('patient', $cart->patient_id);

                    $record = array();
                    $record['name'] = $patient->name;
                    $record['patient_id'] = $patient->id;
                    $record['arr_cart'] = json_decode($cart->cart);

                    $subject = 'Ayo selesaikan pemesananmu';
                    $message = $this->load->view('email/abandon_2', $record, true);

                    $this->cms_function->load_email_library($this->_setting, $patient->email, array(), $subject, $message, 'html');
                }
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

    public function ajax_send_abandon_payment()
    {
        $json['status'] = 'success';

        try
        {
            set_time_limit(0);

            $start = time() - 86400;

            $this->db->where('reminder <=', 0);
            $this->db->where('payment_status', 'Pending');
            $arr_order = $this->core_model->get('order');

            foreach ($arr_order as $order)
            {
                if (time() - $order->date > (3600 * 4) && time() - $order->date <= (3600 * 5))
                {
                    // update reminder
                    $this->core_model->update('order', $order->id, array('reminder' => '1'));

                    $patient = $this->core_model->get('patient', $order->patient_id);
                    $order->patient_name = $patient->name;

                    $this->db->where('order_id', $order->id);
                    $order->arr_order_item = $this->core_model->get('order_item');

                    $record['order'] = $order;

                    $subject = 'Selangkah lagi untuk selesaikan pemesananmu';
                    $message = $this->load->view('email/abandon_payment', $record, true);

                    $this->cms_function->load_email_library($this->_setting, $patient->email, array(), $subject, $message, 'html');
                }
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

    // SEND WHAT THEY SAY
    // scheddule: every 1 hour
    public function ajax_send_review_email()
    {
        $json['status'] = 'success';

        try
        {
            set_time_limit(0);

            $start = time() - 86400;
            $count_send = 0;

            $this->db->where('send_email_2 <=', 0);
            $arr_patient = $this->core_model->get('patient');

            $arr_record = array();

            foreach ($arr_patient as $patient)
            {
                if (time() - $patient->date > (86400 * 3) && time() - $patient->date <= ((86400 * 3) + 3600))
                {
                    // update send_email_1
                    $this->core_model->update('patient', $patient->id, array('send_email_2' => '1'));

                    $subject = "What They Say";
                    $message = $this->load->view('email/review', $arr_record, true);

                    $this->cms_function->load_email_library($this->_setting, $sent_to, array(), $subject, $message, 'html');
                }
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

    // SEND REASONS TO LOVE NORM
    // scheddule: every 1 hour
    public function ajax_send_welcome_email()
    {
        $json['status'] = 'success';

        try
        {
            set_time_limit(0);

            $start = time() - 86400;
            $count_send = 0;

            $this->db->where('send_email_1 <=', 0);
            $arr_patient = $this->core_model->get('patient');

            $arr_record = array();

            foreach ($arr_patient as $patient)
            {
                if (time() - $patient->date > 86400 && time() - $patient->date <= 90000)
                {
                    // update send_email_1
                    $this->core_model->update('patient', $patient->id, array('send_email_1' => '1'));

                    $subject = "Reasons to Love Norm";
                    $message = $this->load->view('email/why_norm', $arr_record, true);

                    $this->cms_function->load_email_library($this->_setting, $sent_to, array(), $subject, $message, 'html');
                }
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

    // SEND 21 June 2021 10:00:00
    public function ajax_send_referral()
    {
        $json['status'] = 'success';

        try
        {
            set_time_limit(0);

            $this->db->where('id >', 10453);
            $arr_referral = $this->core_model->get('referral');

            foreach ($arr_referral as $referral)
            {
                $arr_record = array();
                $arr_record['code'] = $referral->code;
                $arr_record['url'] = 'https://www.norm.id/referral/?ref_id='. $referral->code;
                $arr_record['email'] = $referral->email;

                $subject = "Suka yang gratisan ya?";
                $message = $this->load->view('email/referral/intro', $arr_record, true);

                $this->cms_function->load_email_library($this->_setting, $referral->email, array(), $subject, $message, 'html');
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

    // SEND 16 June 2021 10:00:00
    public function ajax_send_teaser_email()
    {
        $json['status'] = 'success';

        try
        {
            $arr_patient = $this->core_model->get('patient');

            $arr_unsubscribe_lookup = array();
            $arr_record = array();

            foreach ($this->_unsubscribe as $unsubscribe)
            {
                $arr_unsubscribe_lookup[$unsubscribe] = $unsubscribe;
            }

            foreach ($arr_patient as $patient)
            {
                if (isset($arr_unsubscribe_lookup[$patient->email]))
                {
                    continue;
                }

                $subject = "DROPPING SOON 7.7.21";
                $message = $this->load->view('email/teaser', $arr_record, true);

                $this->cms_function->load_email_library($this->_setting, $patient->email, array(), $subject, $message, 'html');
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

    // SEND 18 June 2021 8:00:00
    public function ajax_send_weekend_flash_sale()
    {
        $json['status'] = 'success';

        try
        {
            $arr_patient = $this->core_model->get('patient');

            $arr_unsubscribe_lookup = array();
            $arr_record = array();

            foreach ($this->_unsubscribe as $unsubscribe)
            {
                $arr_unsubscribe_lookup[$unsubscribe] = $unsubscribe;
            }

            foreach ($arr_patient as $patient)
            {
                if (isset($arr_unsubscribe_lookup[$patient->email]))
                {
                    continue;
                }

                $arr_record = array();
                $arr_record['name'] = $patient->name;

                $subject = "WEEKEND FLASH SALE EXPIRES TODAY | 20% OFF ALL PRODUCTS PLUS FREE ONGKIR";
                $message = $this->load->view('email/promo/weekend_flash_sale_2', $arr_record, true);

                $this->cms_function->load_email_library($this->_setting, $patient->email, array(), $subject, $message, 'html');
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




    public function ajax_send_promo_payday_june()
    {
        $json['status'] = 'success';

        try
        {
            $arr_patient = $this->core_model->get('patient');

            // get all order within 30 days
            $date = strtotime('2021-05-29 00:00:00');

            $this->db->select('patient_id');
            $this->db->where('payment_status', 'Paid');
            $this->db->where('date >=', $date);
            $arr_order = $this->core_model->get('order');
            $arr_order_lookup = array();

            foreach ($arr_order as $order)
            {
                $arr_order_lookup[$order->patient_id] = $order->patient_id;
            }

            $arr_unsubscribe_lookup = array();
            $arr_record = array();

            foreach ($this->_unsubscribe as $unsubscribe)
            {
                $arr_unsubscribe_lookup[$unsubscribe] = $unsubscribe;
            }

            $arr_email = array();

            foreach ($arr_patient as $patient)
            {
                if (isset($arr_unsubscribe_lookup[$patient->email]))
                {
                    continue;
                }

                if (isset($arr_order_lookup[$patient->id]))
                {
                    continue;
                }

                $arr_email[] = $patient->email;

                if (count($arr_email) > 50)
                {
                    $arr_record = array();

                    $subject = "Hari Terakhir Promo | 20% Off All product plus Free Ongkir";
                    $message = $this->load->view('email/promo/payday_promo_june', array(), true);

                    $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                    $arr_email = array();
                }
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




    public function ajax_send_launching_email()
    {
        $json['status'] = 'success';

        try
        {
            $arr_referral = $this->core_model->get('referral');

            $arr_unsubscribe_lookup = array();
            $arr_record = array();

            foreach ($this->_unsubscribe as $unsubscribe)
            {
                $arr_unsubscribe_lookup[$unsubscribe] = $unsubscribe;
            }

            $arr_email = array();

            foreach ($arr_referral as $referral)
            {
                if (isset($arr_unsubscribe_lookup[$referral->email]))
                {
                    continue;
                }

                $arr_email[] = $referral->email;

                if (count($arr_email) > 100)
                {
                    $arr_record = array();

                    $subject = "We Are Live! #UpgradeYourself dengan Norm";
                    $message = $this->load->view('email/prelaunch/launching', $arr_record, true);

                    $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                    $arr_email = array();
                }
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

    public function ajax_send_apologize_email()
    {
        $json['status'] = 'success';

        try
        {
            $this->db->where('payment_status', 'Paid');
            $this->db->where('location', 'Haistar');
            $arr_order = $this->core_model->get('order');

            $arr_email = array('sugi@selestialbrands.com');

            foreach ($arr_order as $order)
            {
                $arr_email[] = $order->shipping_email;
            }

            if (count($arr_email) > 0)
            {
                $arr_record = array();

                $subject = "Kami mohon maaf..";
                $message = $this->load->view('email/sorry', $arr_record, true);

                $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                $arr_email = array();
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

    public function ajax_send_ads_skincare()
    {
        $json['status'] = 'success';

        try
        {
            $this->db->select('order_id');
            $this->db->where_in('product_id', array(18, 19, 20, 23, 24, 26, 27, 29, 30, 31));
            $arr_order_item = $this->core_model->get('order_item');
            $arr_order_id = $this->cms_function->extract_records($arr_order_item, 'order_id');

            $this->db->select('patient_id');
            $this->db->where('payment_status', 'Paid');
            $arr_order = $this->core_model->get('order', $arr_order_id);

            $arr_patient_lookup = array();

            foreach ($arr_order as $order)
            {
                $arr_patient_lookup[$order->patient_id] = $order->patient_id;
            }

            $arr_patient = $this->core_model->get('patient');
            $arr_email = array('sugi@selestialbrands.com');

            foreach ($arr_patient as $patient)
            {
                if (isset($arr_order_lookup[$patient->id]))
                {
                    continue;
                }

                $arr_email[] = $patient->email;

                if (count($arr_email) > 100)
                {
                    $arr_record = array();

                    $subject = "Penampilan Terbaikmu Dalam 1 Klik! (Promo Spesial Khusus)";
                    $message = $this->load->view('email/ads/skincare', $arr_record, true);

                    $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                    $arr_email = array();
                }
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

    public function ajax_send_shopee_promo_20210724()
    {
        $json['status'] = 'success';

        try
        {
            $arr_referral = $this->core_model->get('referral');
            $arr_email = array('sugi@selestialbrands.com');

            foreach ($arr_referral as $referral)
            {
                $arr_email[] = $referral->email;

                if (count($arr_email) > 120)
                {
                    $arr_record = array();

                    $subject = 'Ada diskon hari ini! 10% off all prodcts + free ongkir';
                    $message = $this->load->view('email/promo/shopee_promo_20210724', $arr_record, true);

                    $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                    $arr_email = array();
                }
            }

            if (count($arr_email) > 0)
            {
                $arr_record = array();

                $subject = 'Ada diskon hari ini! 10% off all prodcts + free ongkir';
                $message = $this->load->view('email/promo/shopee_promo_20210724', $arr_record, true);

                $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                $arr_email = array();
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

    public function ajax_send_shopee_promo_20210731()
    {
        $json['status'] = 'success';

        try
        {
            $arr_referral = $this->core_model->get('referral');
            $arr_email = array('sugi@selestialbrands.com');

            foreach ($arr_referral as $referral)
            {
                if ($referral->email == '')
                {
                    continue;
                }

                $arr_email[] = $referral->email;

                if (count($arr_email) > 150)
                {
                    $arr_record = array();

                    $subject = 'PPKM Berakhir! PPKM = Promo Penampilan KerenMu';
                    $message = $this->load->view('email/promo/promo_flash_sale_20210728', $arr_record, true);

                    $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                    $arr_email = array();
                }
            }

            if (count($arr_email) > 0)
            {
                $arr_record = array();

                $subject = 'PPKM Berakhir! PPKM = Promo Penampilan KerenMu';
                $message = $this->load->view('email/promo/promo_flash_sale_20210728', $arr_record, true);

                $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                $arr_email = array();
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

    public function ajax_send_promo_88_intro()
    {
        $json['status'] = 'success';

        try
        {
            $arr_referral = $this->core_model->get('referral');
            $arr_email = array('sugi@selestialbrands.com');

            foreach ($arr_referral as $referral)
            {
                if ($referral->email == '')
                {
                    continue;
                }

                $arr_email[] = $referral->email;

                if (count($arr_email) > 150)
                {
                    $arr_record = array();

                    $subject = 'Yuk ikutan pesta diskon Norm 8.8 Sale.';
                    $message = $this->load->view('email/promo/promo_88_intro', $arr_record, true);

                    $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                    $arr_email = array();
                }
            }

            if (count($arr_email) > 0)
            {
                $arr_record = array();

                $subject = 'Yuk ikutan pesta diskon Norm 8.8 Sale.';
                $message = $this->load->view('email/promo/promo_88_intro', $arr_record, true);

                $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                $arr_email = array();
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

    public function ajax_send_promo_merdeka()
    {
        $json['status'] = 'success';

        try
        {
            $arr_referral = $this->core_model->get('referral');
            $arr_email = array('sugi@selestialbrands.com');

            foreach ($arr_referral as $referral)
            {
                if ($referral->email == '')
                {
                    continue;
                }

                $arr_email[] = $referral->email;

                if (count($arr_email) > 150)
                {
                    $arr_record = array();

                    $subject = 'Waktunya Belanja Tanpa Beban. Diskon 20% semua produk!';
                    $message = $this->load->view('email/promo/merdeka', $arr_record, true);

                    $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                    $arr_email = array();
                }
            }

            if (count($arr_email) > 0)
            {
                $arr_record = array();

                $subject = 'Waktunya Belanja Tanpa Beban. Diskon 20% semua produk!';
                $message = $this->load->view('email/promo/merdeka', $arr_record, true);

                $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                $arr_email = array();
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

    public function ajax_send_payday_august()
    {
        $json['status'] = 'success';

        try
        {
            $arr_referral = $this->core_model->get('referral');
            $arr_email = array('sugi@selestialbrands.com');

            foreach ($arr_referral as $referral)
            {
                if ($referral->email == '')
                {
                    continue;
                }

                $arr_email[] = $referral->email;

                if (count($arr_email) > 200)
                {
                    $arr_record = array();

                    $subject = 'Payday Sale BERAKHIR HARI INI! Buruan belanja sekarang';
                    $message = $this->load->view('email/promo/payday_august', $arr_record, true);

                    $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                    $arr_email = array();
                }
            }

            if (count($arr_email) > 0)
            {
                $arr_record = array();

                $subject = 'Payday Sale BERAKHIR HARI INI! Buruan belanja sekarang';
                $message = $this->load->view('email/promo/payday_august', $arr_record, true);

                $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                $arr_email = array();
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

    public function ajax_send_reseller()
    {
        $json['status'] = 'success';

        try
        {
            $arr_referral = $this->core_model->get('referral');
            $arr_email = array('sugi@selestialbrands.com');

            foreach ($arr_referral as $referral)
            {
                if ($referral->email == '')
                {
                    continue;
                }

                $arr_email[] = $referral->email;

                if (count($arr_email) > 200)
                {
                    $arr_record = array();

                    $subject = 'Mau punya penghasilan tambahan? Join reseller Norm aja!';
                    $message = $this->load->view('email/reseller', $arr_record, true);

                    $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                    $arr_email = array();
                }
            }

            if (count($arr_email) > 0)
            {
                $arr_record = array();

                $subject = 'Mau punya penghasilan tambahan? Join reseller Norm aja!';
                $message = $this->load->view('email/reseller', $arr_record, true);

                $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                $arr_email = array();
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

    public function ajax_send_promo99()
    {
        $json['status'] = 'success';

        try
        {
            $arr_referral = $this->core_model->get('referral');
            $arr_email = array('sugi@selestialbrands.com');

            foreach ($arr_referral as $referral)
            {
                if ($referral->email == '')
                {
                    continue;
                }

                $arr_email[] = $referral->email;

                if (count($arr_email) > 200)
                {
                    $arr_record = array();

                    $subject = 'Cuma hari ini! Ramaikan pesta Promo 9.9 Sale 20% Plus Free Ongkir';
                    $message = $this->load->view('email/promo/promo99', $arr_record, true);

                    $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                    $arr_email = array();
                }
            }

            if (count($arr_email) > 0)
            {
                $arr_record = array();

                $subject = 'Cuma hari ini! Ramaikan pesta Promo 9.9 Sale 20% Plus Free Ongkir';
                $message = $this->load->view('email/promo/promo99', $arr_record, true);

                $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                $arr_email = array();
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

    public function ajax_send_savetember()
    {
        $json['status'] = 'success';

        try
        {
            $arr_referral = $this->core_model->get('referral');
            $arr_email = array('sugi@selestialbrands.com');

            foreach ($arr_referral as $referral)
            {
                if ($referral->email == '')
                {
                    continue;
                }

                $arr_email[] = $referral->email;

                if (count($arr_email) > 200)
                {
                    $arr_record = array();

                    $subject = 'Pesta spesial Promo SAVETEMBER DEALS 20% semua produk Norm';
                    $message = $this->load->view('email/promo/savetember', $arr_record, true);

                    $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                    $arr_email = array();
                }
            }

            if (count($arr_email) > 0)
            {
                $arr_record = array();

                $subject = 'Pesta spesial Promo SAVETEMBER DEALS 20% semua produk Norm';
                $message = $this->load->view('email/promo/savetember', $arr_record, true);

                $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                $arr_email = array();
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

    public function ajax_send_promo_1010()
    {
        set_time_limit(0);
        $json['status'] = 'success';

        try
        {
            $arr_referral = $this->core_model->get('referral');
            $arr_email = array('sugi@selestialbrands.com');

            foreach ($arr_referral as $referral)
            {
                if ($referral->email == '')
                {
                    continue;
                }

                $arr_email[] = $referral->email;

                if (count($arr_email) > 200)
                {
                    $arr_record = array();

                    $subject = '10.10 SALE! FIX WAKTUNYA CHECKOUT BRO';
                    $message = $this->load->view('email/promo/promo_1010', $arr_record, true);

                    $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                    $arr_email = array();
                }
            }

            if (count($arr_email) > 0)
            {
                $arr_record = array();

                $subject = '10.10 SALE! FIX WAKTUNYA CHECKOUT BRO';
                $message = $this->load->view('email/promo/promo_1010', $arr_record, true);

                $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                $arr_email = array();
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

    public function ajax_send_shopeelive()
    {
        set_time_limit(0);
        $json['status'] = 'success';

        try
        {
            $arr_referral = $this->core_model->get('referral');
            $arr_email = array('sugi@selestialbrands.com');

            foreach ($arr_referral as $referral)
            {
                if ($referral->email == '')
                {
                    continue;
                }

                $arr_email[] = $referral->email;

                if (count($arr_email) > 200)
                {
                    $arr_record = array();

                    $subject = 'Cuma Hari Ini! Siapin Gaji Kamu di Diskon Gajian 20%';
                    $message = $this->load->view('email/promo/shopeelive', $arr_record, true);

                    $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                    $arr_email = array();
                }
            }

            if (count($arr_email) > 0)
            {
                $arr_record = array();

                $subject = 'Cuma Hari Ini! Siapin Gaji Kamu di Diskon Gajian 20%';
                $message = $this->load->view('email/promo/shopeelive', $arr_record, true);

                $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                $arr_email = array();
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

    public function ajax_send_pemudasale()
    {
        set_time_limit(0);
        $json['status'] = 'success';

        try
        {
            $arr_referral = $this->core_model->get('referral');
            $arr_email = array('sugi@selestialbrands.com');

            foreach ($arr_referral as $referral)
            {
                if ($referral->email == '')
                {
                    continue;
                }

                $arr_email[] = $referral->email;

                if (count($arr_email) > 200)
                {
                    $arr_record = array();

                    $subject = '[Last Minute] Waktunya checkout sekarang juga!';
                    $message = $this->load->view('email/promo/pemudasale', $arr_record, true);

                    $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                    $arr_email = array();
                }
            }

            if (count($arr_email) > 0)
            {
                $arr_record = array();

                $subject = '[Last Minute] Waktunya checkout sekarang juga!';
                $message = $this->load->view('email/promo/pemudasale', $arr_record, true);

                $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                $arr_email = array();
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

    public function ajax_send_promo_1111()
    {
        set_time_limit(0);
        $json['status'] = 'success';

        try
        {
            $arr_referral = $this->core_model->get('referral');
            $arr_email = array('sugi@selestialbrands.com');

            foreach ($arr_referral as $referral)
            {
                if ($referral->email == '')
                {
                    continue;
                }

                if ($referral->email  == 'octora.gary@yahoo.co.id' || $referral->email == 'gary@selestialbrands.com')
                {
                    continue;
                }

                $arr_email[] = $referral->email;

                if (count($arr_email) > 200)
                {
                    $arr_record = array();

                    $subject = 'Diskon Mantap! Belanja Hemat Puas Abisss';
                    $message = $this->load->view('email/promo/promo_1111', $arr_record, true);

                    $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                    $arr_email = array();
                }
            }

            if (count($arr_email) > 0)
            {
                $arr_record = array();

                $subject = 'Diskon Mantap! Belanja Hemat Puas Abisss';
                $message = $this->load->view('email/promo/promo_1111', $arr_record, true);

                $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                $arr_email = array();
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

    public function ajax_send_greetings()
    {
        set_time_limit(0);
        $json['status'] = 'success';

        try
        {
            $arr_referral = $this->core_model->get('referral');
            $arr_email = array('sugi@selestialbrands.com');

            foreach ($arr_referral as $referral)
            {
                if ($referral->email == '')
                {
                    continue;
                }

                if ($referral->email  == 'octora.gary@yahoo.co.id' || $referral->email == 'gary@selestialbrands.com')
                {
                    continue;
                }

                $arr_email[] = $referral->email;

                if (count($arr_email) > 200)
                {
                    $arr_record = array();

                    $subject = 'Sekali Review Langsung Diskon!';
                    $message = $this->load->view('email/promo/greetings', $arr_record, true);

                    $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                    $arr_email = array();
                }
            }

            if (count($arr_email) > 0)
            {
                $arr_record = array();

                $subject = 'Sekali Review Langsung Diskon!';
                $message = $this->load->view('email/promo/greetings', $arr_record, true);

                $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                $arr_email = array();
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

    public function ajax_send_promo_mens_day()
    {
        set_time_limit(0);
        $json['status'] = 'success';

        try
        {
            $arr_referral = $this->core_model->get('referral');
            $arr_email = array('sugi@selestialbrands.com');

            foreach ($arr_referral as $referral)
            {
                if ($referral->email == '')
                {
                    continue;
                }

                $arr_email[] = $referral->email;

                if (count($arr_email) > 200)
                {
                    $arr_record = array();

                    $subject = "Crazy Sale 25% off All Product";
                    $message = $this->load->view('email/promo/promo_mens_day', $arr_record, true);

                    $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                    $arr_email = array();
                }
            }

            if (count($arr_email) > 0)
            {
                $arr_record = array();

                $subject = "Crazy Sale 25% off All Product";
                $message = $this->load->view('email/promo/promo_mens_day', $arr_record, true);

                $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                $arr_email = array();
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

    public function ajax_send_normvember()
    {
        set_time_limit(0);
        $json['status'] = 'success';

        try
        {
            $arr_referral = $this->core_model->get('referral');
            $arr_email = array('sugi@selestialbrands.com');

            foreach ($arr_referral as $referral)
            {
                if ($referral->email == '')
                {
                    continue;
                }

                $arr_email[] = $referral->email;

                if (count($arr_email) > 200)
                {
                    $arr_record = array();

                    $subject = "[Last Day] Buat harimu jadi lebih Good Day!";
                    $message = $this->load->view('email/promo/normvember', $arr_record, true);

                    $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                    $arr_email = array();
                }
            }

            if (count($arr_email) > 0)
            {
                $arr_record = array();

                $subject = "[Last Day] Buat harimu jadi lebih Good Day!";
                $message = $this->load->view('email/promo/normvember', $arr_record, true);

                $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                $arr_email = array();
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

    public function ajax_send_fragrance()
    {
        set_time_limit(0);
        $json['status'] = 'success';

        try
        {
            $arr_referral = $this->core_model->get('referral');
            $arr_email = array('sugi@selestialbrands.com');

            foreach ($arr_referral as $referral)
            {
                if ($referral->email == '')
                {
                    continue;
                }

                $arr_email[] = $referral->email;

                if (count($arr_email) > 200)
                {
                    $arr_record = array();

                    $subject = "Ada yang baru nih bro!";
                    $message = $this->load->view('email/promo/fragrance', $arr_record, true);

                    $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                    $arr_email = array();
                }
            }

            if (count($arr_email) > 0)
            {
                $arr_record = array();

                $subject = "Ada yang baru nih bro!";
                $message = $this->load->view('email/promo/fragrance', $arr_record, true);

                $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                $arr_email = array();
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

    public function ajax_send_promo1212()
    {
        set_time_limit(0);
        $json['status'] = 'success';

        try
        {
            $arr_referral = $this->core_model->get('referral');
            $arr_email = array('sugi@selestialbrands.com');

            $arr_sent_email = array();

            foreach ($arr_referral as $referral)
            {
                if (isset($arr_sent_email[$referral->email]))
                {
                    continue;
                }

                if ($referral->email == '')
                {
                    continue;
                }

                $arr_email[] = $referral->email;
                $arr_sent_email[$referral->email] = $referral->email;

                if (count($arr_email) > 200)
                {
                    $arr_record = array();

                    $subject = "[PUNCAK 12.12 SALE] Buka Hp dan Chekout Sekarang!";
                    $message = $this->load->view('email/promo/promo1212', $arr_record, true);

                    $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                    $arr_email = array();
                }
            }

            if (count($arr_email) > 0)
            {
                $arr_record = array();

                $subject = "[PUNCAK 12.12 SALE] Buka Hp dan Chekout Sekarang!";
                $message = $this->load->view('email/promo/promo1212', $arr_record, true);

                $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                $arr_email = array();
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

    public function ajax_send_desamber()
    {
        set_time_limit(0);
        $json['status'] = 'success';

        try
        {
            $arr_referral = $this->core_model->get('referral');
            $arr_email = array('sugi@selestialbrands.com');

            $arr_sent_email = array();

            foreach ($arr_referral as $referral)
            {
                if (isset($arr_sent_email[$referral->email]))
                {
                    continue;
                }

                if ($referral->email == '')
                {
                    continue;
                }

                $arr_email[] = $referral->email;
                $arr_sent_email[$referral->email] = $referral->email;

                if (count($arr_email) > 200)
                {
                    $arr_record = array();

                    $subject = "EXTENDED!! Diskon UP TO 50% MURAH ABISSS!!!";
                    $message = $this->load->view('email/promo/desamber', $arr_record, true);

                    $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                    $arr_email = array();
                }
            }

            if (count($arr_email) > 0)
            {
                $arr_record = array();

                $subject = "EXTENDED!! Diskon UP TO 50% MURAH ABISSS!!!";
                $message = $this->load->view('email/promo/desamber', $arr_record, true);

                $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                $arr_email = array();
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

    public function ajax_send_clearence()
    {
        set_time_limit(0);
        $json['status'] = 'success';

        try
        {
            $arr_referral = $this->core_model->get('referral');
            $arr_email = array('sugi@selestialbrands.com');

            $arr_sent_email = array();

            foreach ($arr_referral as $referral)
            {
                if (isset($arr_sent_email[$referral->email]))
                {
                    continue;
                }

                if ($referral->email == '')
                {
                    continue;
                }

                $arr_email[] = $referral->email;
                $arr_sent_email[$referral->email] = $referral->email;

                if (count($arr_email) > 200)
                {
                    $arr_record = array();

                    $subject = "Resolusi Terbaik di Tahun Baru";
                    $message = $this->load->view('email/promo/clearence', $arr_record, true);

                    $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                    $arr_email = array();
                }
            }

            if (count($arr_email) > 0)
            {
                $arr_record = array();

                $subject = "Resolusi Terbaik di Tahun Baru";
                $message = $this->load->view('email/promo/clearence', $arr_record, true);

                $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                $arr_email = array();
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

    public function ajax_send_limited()
    {
        set_time_limit(0);
        $json['status'] = 'success';

        try
        {
            $arr_referral = $this->core_model->get('referral');
            $arr_email = array('sugi@selestialbrands.com');

            $arr_sent_email = array();

            foreach ($arr_referral as $referral)
            {
                if (isset($arr_sent_email[$referral->email]))
                {
                    continue;
                }

                if ($referral->email == '')
                {
                    continue;
                }

                $arr_email[] = $referral->email;
                $arr_sent_email[$referral->email] = $referral->email;

                if (count($arr_email) > 200)
                {
                    $arr_record = array();

                    $subject = "Rambut Tebal? Its My Dream Bro!";
                    $message = $this->load->view('email/promo/limited', $arr_record, true);

                    $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                    $arr_email = array();
                }
            }

            if (count($arr_email) > 0)
            {
                $arr_record = array();

                $subject = "Rambut Tebal? Its My Dream Bro!";
                $message = $this->load->view('email/promo/limited', $arr_record, true);

                $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                $arr_email = array();
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

    public function ajax_send_topselling()
    {
        set_time_limit(0);
        $json['status'] = 'success';

        try
        {
            $arr_referral = $this->core_model->get('referral');
            $arr_email = array('sugi@selestialbrands.com');

            $arr_sent_email = array();

            foreach ($arr_referral as $referral)
            {
                if (isset($arr_sent_email[$referral->email]))
                {
                    continue;
                }

                if ($referral->email == '')
                {
                    continue;
                }

                $arr_email[] = $referral->email;
                $arr_sent_email[$referral->email] = $referral->email;

                if (count($arr_email) > 200)
                {
                    $arr_record = array();

                    $subject = "BALIK LAGI!!! Diskon 50% + Gratis Ongkir Koleksi Top Selling";
                    $message = $this->load->view('email/promo/topselling', $arr_record, true);

                    $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                    $arr_email = array();
                }
            }

            if (count($arr_email) > 0)
            {
                $arr_record = array();

                $subject = "BALIK LAGI!!! Diskon 50% + Gratis Ongkir Koleksi Top Selling";
                $message = $this->load->view('email/promo/topselling', $arr_record, true);

                $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                $arr_email = array();
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

    public function ajax_send_imlek()
    {
        set_time_limit(0);
        $json['status'] = 'success';

        try
        {
            $arr_referral = $this->core_model->get('referral');
            $arr_email = array('sugi@selestialbrands.com');

            $arr_sent_email = array();

            foreach ($arr_referral as $referral)
            {
                if (isset($arr_sent_email[$referral->email]))
                {
                    continue;
                }

                if ($referral->email == '')
                {
                    continue;
                }

                $arr_email[] = $referral->email;
                $arr_sent_email[$referral->email] = $referral->email;

                if (count($arr_email) > 200)
                {
                    $arr_record = array();

                    $subject = "Weekend Hot Deal 25% Off! Grab It Fast";
                    $message = $this->load->view('email/promo/imlek', $arr_record, true);

                    $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                    $arr_email = array();
                }
            }

            if (count($arr_email) > 0)
            {
                $arr_record = array();

                $subject = "Weekend Hot Deal 25% Off! Grab It Fast";
                $message = $this->load->view('email/promo/imlek', $arr_record, true);

                $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                $arr_email = array();
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

    public function ajax_send_nft()
    {
        set_time_limit(0);
        $json['status'] = 'success';

        try
        {
            $arr_referral = $this->core_model->get('referral');
            $arr_email = array('sugi@selestialbrands.com');

            $arr_sent_email = array();

            foreach ($arr_referral as $referral)
            {
                if (isset($arr_sent_email[$referral->email]))
                {
                    continue;
                }

                if ($referral->email == '')
                {
                    continue;
                }

                $arr_email[] = $referral->email;
                $arr_sent_email[$referral->email] = $referral->email;

                if (count($arr_email) > 200)
                {
                    $arr_record = array();

                    $subject = "Weekend Sale Up To 60% + 10% Voucher";
                    $message = $this->load->view('email/promo/nft', $arr_record, true);

                    $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                    $arr_email = array();
                }
            }

            if (count($arr_email) > 0)
            {
                $arr_record = array();

                $subject = "Weekend Sale Up To 60% + 10% Voucher";
                $message = $this->load->view('email/promo/nft', $arr_record, true);

                $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                $arr_email = array();
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

    public function ajax_send_riliv()
    {
        set_time_limit(0);
        $json['status'] = 'success';

        try
        {
            $arr_referral = $this->core_model->get('referral');
            $arr_email = array('sugi@selestialbrands.com');

            $arr_sent_email = array();

            foreach ($arr_referral as $referral)
            {
                if (isset($arr_sent_email[$referral->email]))
                {
                    continue;
                }

                if ($referral->email == '')
                {
                    continue;
                }

                $arr_email[] = $referral->email;
                $arr_sent_email[$referral->email] = $referral->email;

                if (count($arr_email) > 200)
                {
                    $arr_record = array();

                    $subject = "Cuma nanya langsung dapet Body Wash! Stay Tune IG Live Norm 17.00 WIB";
                    $message = $this->load->view('email/promo/riliv', $arr_record, true);

                    $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                    $arr_email = array();
                }
            }

            if (count($arr_email) > 0)
            {
                $arr_record = array();

                $subject = "Cuma nanya langsung dapet Body Wash! Stay Tune IG Live Norm 17.00 WIB";
                $message = $this->load->view('email/promo/riliv', $arr_record, true);

                $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                $arr_email = array();
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

    public function ajax_send_smartsale()
    {
        set_time_limit(0);
        $json['status'] = 'success';

        try
        {
            $arr_referral = $this->core_model->get('referral');
            $arr_email = array('sugi@selestialbrands.com');

            $arr_sent_email = array();

            foreach ($arr_referral as $referral)
            {
                if (isset($arr_sent_email[$referral->email]))
                {
                    continue;
                }

                if ($referral->email == '')
                {
                    continue;
                }

                $arr_email[] = $referral->email;
                $arr_sent_email[$referral->email] = $referral->email;

                if (count($arr_email) > 200)
                {
                    $arr_record = array();

                    $subject = "SALE ALERT!! DISKON 25% OFF";
                    $message = $this->load->view('email/promo/smartsale', $arr_record, true);

                    $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                    $arr_email = array();
                }
            }

            if (count($arr_email) > 0)
            {
                $arr_record = array();

                $subject = "SALE ALERT!! DISKON 25% OFF";
                $message = $this->load->view('email/promo/smartsale', $arr_record, true);

                $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');

                $arr_email = array();
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