<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller
{
    private $_user;
    private $_setting;

    public function __construct()
    {
        parent:: __construct();

        $this->_setting = $this->setting_model->load();
    }




    /* Public Function Area */
    public function abandon_1()
    {
        $cart = '[{"discount":0,"product_id":"11","category_id":"5","quantity":2,"price":469000,"total":938000}]';
        $arr_cart = json_decode($cart);
        $arr_record['name'] = 'Aurelius Sugianto';
        $arr_record['arr_cart'] = $arr_cart;

        $this->load->view('email/abandon_1', $arr_record);
    }

    public function abandon_2()
    {
        $cart = '[{"discount":0,"product_id":"11","category_id":"5","quantity":2,"price":469000,"total":938000}]';
        $arr_cart = json_decode($cart);
        $arr_record['name'] = 'Aurelius Sugianto';
        $arr_record['arr_cart'] = $arr_cart;

        $this->load->view('email/abandon_2', $arr_record);
    }

    public function abandon_payment()
    {
        $order_id = 14110;

        $order = $this->core_model->get('order', $order_id);

        $this->db->where('order_id', $order->id);
        $order->arr_order_item = $this->core_model->get('order_item');

        $arr_record['order'] = $order;

        $this->load->view('email/abandon_payment', $arr_record);
    }

    public function ads_skincare()
    {
        $arr_record['name'] = 'Aurelius Sugianto';

        $this->load->view('email/ads/skincare', $arr_record);
    }

    public function launching_norm_2()
    {
        $arr_record['name'] = 'Aurelius Sugianto';

        $this->load->view('email/prelaunch/launching', $arr_record);
    }

    public function payday_june()
    {
        $arr_record['name'] = 'Aurelius Sugianto';

        $this->load->view('email/promo/payday_promo_june', $arr_record);
    }

    public function prelaunch_bodywash()
    {
        $arr_record['name'] = 'Aurelius Sugianto';

        $this->load->view('email/prelaunch/bodywash', $arr_record);
    }

    public function prelaunch_facewash()
    {
        $arr_record['name'] = 'Aurelius Sugianto';

        $this->load->view('email/prelaunch/facewash', $arr_record);
    }

    public function prelaunch_shampoo()
    {
        $arr_record['name'] = 'Aurelius Sugianto';

        $this->load->view('email/prelaunch/shampoo', $arr_record);
    }

    public function referral()
    {
        $referral = $this->core_model->get('referral', 5062);

        $arr_record = array();
        $arr_record['code'] = $referral->code;
        $arr_record['url'] = base_url() . 'referral/?ref_id='. $referral->code;
        $arr_record['email'] = $referral->email;

        $this->load->view('email/referral/intro', $arr_record);
    }

    public function review()
    {
        $arr_record['name'] = 'Aurelius Sugianto';

        $this->load->view('email/review', $arr_record);
    }

    public function shopee_promo_20210724()
    {
        $arr_record['name'] = 'Aurelius Sugianto';

        $this->load->view('email/promo/shopee_promo_20210724', $arr_record);
    }

    public function shopee_promo_20210728()
    {
        $arr_record['name'] = 'Aurelius Sugianto';

        $this->load->view('email/promo/promo_flash_sale_20210728', $arr_record);
    }

    public function payday_august()
    {
        $arr_record['name'] = 'Aurelius Sugianto';

        $this->load->view('email/promo/payday_august', $arr_record);
    }

    public function promo_88_intro()
    {
        $arr_record['name'] = 'Aurelius Sugianto';

        $this->load->view('email/promo/promo_88_intro', $arr_record);
    }

    public function sorry()
    {
        $arr_record['name'] = 'Aurelius Sugianto';

        $this->load->view('email/sorry', $arr_record);
    }

    public function thankyou_purchase()
    {
        $order = $this->core_model->get('order', 8676);
        $discount_item = 0;

        $this->db->where('order_id', $order->id);
        $arr_order_item = $this->core_model->get('order_item');

        foreach ($arr_order_item as $order_item)
        {
            $order_item->quantity_display = number_format($order_item->quantity, 0, '', '');
            $order_item->price_display = 'IDR ' . number_format($order_item->price, 0, ',', '.');
            $order_item->discount_display = 'IDR ' . number_format($order_item->discount, 0, ',', '.');
            $order_item->total_display = 'IDR ' . number_format($order_item->total, 0, ',', '.');

            $order_item->total_item = $order_item->price * $order_item->quantity;
            $order_item->total_item_display = 'IDR ' . number_format($order_item->total_item, 0, ',', '.');

            $discount_item += $order_item->discount;
        }

        $order->discount = $order->discount - $discount_item;
        $order->discount = ($order->discount <= 0) ? 0 : $order->discount;
        $order->subtotal = $order->subtotal - $discount_item;

        $order->subtotal_display = 'IDR ' . number_format($order->subtotal, 0, ',', '.');
        $order->discount_display = 'IDR ' . number_format($order->discount, 0, ',', '.');
        $order->shipping_display = 'IDR ' . number_format($order->shipping, 0, ',', '.');
        $order->grand_total_display = 'IDR ' . number_format($order->grand_total, 0, ',', '.');

        $arr_record['order'] = $order;
        $arr_record['arr_order_item'] = $arr_order_item;

        $this->load->view('email/thankyou_purchase', $arr_record);
    }

    public function teaser()
    {
        $arr_record['name'] = 'Aurelius Sugianto';

        $this->load->view('email/teaser', $arr_record);
    }

    public function voucher()
    {
        $arr_record['name'] = 'Aurelius Sugianto';

        $this->load->view('email/voucher', $arr_record);
    }

    public function weekend_flash_sale()
    {
        $arr_record['name'] = 'Aurelius Sugianto';

        $this->load->view('email/promo/weekend_flash_sale', $arr_record);
    }

    public function welcome_email()
    {
        $arr_record['name'] = 'Aurelius Sugianto';

        $this->load->view('email/welcome', $arr_record);
    }

    public function why_norm()
    {
        $arr_record['name'] = 'Aurelius Sugianto';

        $this->load->view('email/why_norm', $arr_record);
    }

    public function merdeka()
    {
        $arr_record['name'] = 'Aurelius Sugianto';

        $this->load->view('email/promo/merdeka', $arr_record);
    }

    public function reseller()
    {
        $arr_record['name'] = 'Aurelius Sugianto';

        $this->load->view('email/reseller', $arr_record);
    }

    public function promo99()
    {
        $arr_record['name'] = 'Aurelius Sugianto';

        $this->load->view('email/promo/promo99', $arr_record);
    }

    public function savetember()
    {
        $arr_record['name'] = 'Aurelius Sugianto';

        $this->load->view('email/promo/savetember', $arr_record);
    }

    public function promo_1010()
    {
        $arr_record['name'] = 'Aurelius Sugianto';

        $this->load->view('email/promo/promo_1010', $arr_record);
    }

    public function shopeelive()
    {
        $arr_record['name'] = 'Aurelius Sugianto';

        $this->load->view('email/promo/shopeelive', $arr_record);
    }

    public function pemudasale()
    {
        $arr_record['name'] = 'Aurelius Sugianto';

        $this->load->view('email/promo/pemudasale', $arr_record);
    }

    public function promo1111()
    {
        $arr_record['name'] = 'Aurelius Sugianto';

        $this->load->view('email/promo/promo_1111', $arr_record);
    }

    public function greetings()
    {
        $arr_record['name'] = 'Aurelius Sugianto';

        $this->load->view('email/promo/greetings', $arr_record);
    }

    public function promo_mens_day()
    {
        $arr_record['name'] = 'Aurelius Sugianto';

        $this->load->view('email/promo/promo_mens_day', $arr_record);
    }

    public function normvember()
    {
        $arr_record['name'] = 'Aurelius Sugianto';

        $this->load->view('email/promo/normvember', $arr_record);
    }

    public function fragrance()
    {
        $arr_record['name'] = 'Aurelius Sugianto';

        $this->load->view('email/promo/fragrance', $arr_record);
    }

    public function promo1212()
    {
        $arr_record['name'] = 'Aurelius Sugianto';

        $this->load->view('email/promo/promo1212', $arr_record);
    }

    public function desamber()
    {
        $arr_record['name'] = 'Aurelius Sugianto';

        $this->load->view('email/promo/desamber', $arr_record);
    }

    public function clearence()
    {
        $arr_record['name'] = 'Aurelius Sugianto';

        $this->load->view('email/promo/clearence', $arr_record);
    }

    public function limited()
    {
        $arr_record['name'] = 'Aurelius Sugianto';

        $this->load->view('email/promo/limited', $arr_record);
    }

    public function topselling()
    {
        $arr_record['name'] = 'Aurelius Sugianto';

        $this->load->view('email/promo/topselling', $arr_record);
    }

    public function imlek()
    {
        $arr_record['name'] = 'Aurelius Sugianto';

        $this->load->view('email/promo/imlek', $arr_record);
    }

    public function nft()
    {
        $arr_record['name'] = 'Aurelius Sugianto';

        $this->load->view('email/promo/nft', $arr_record);
    }

    public function riliv()
    {
        $arr_record['name'] = 'Aurelius Sugianto';

        $this->load->view('email/promo/riliv', $arr_record);
    }

    public function smartsale()
    {
        $arr_record['name'] = 'Aurelius Sugianto';

        $this->load->view('email/promo/smartsale', $arr_record);
    }
    /* End Public Function Area */




    /* Ajax Area */
    public function ajax_send_email()
    {
        $json['status'] = 'success';

        try
        {
            $arr_email = array('sugi@selestialbrands.com');

            $arr_record['name'] = 'Aurelius Sugianto';

            $subject = 'Norm 8.8 Sale? Serbu!!';
            $message = $this->load->view('email/promo/promo_88_intro', $arr_record, true);

            $this->cms_function->load_email_library($this->_setting, '', $arr_email, $subject, $message, 'html');
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