<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{
    private $_user;
    private $_setting;

    public function __construct()
    {
        parent:: __construct();

        $user_id = $this->session->userdata('user_id');

        if ($user_id > 0)
        {
            $this->_user = $this->core_model->get('user', $user_id);
            $this->_setting = $this->setting_model->load();
            $this->_acl = $this->cms_function->generate_acl($this->_user->id, $this->_setting);
        }
        else
        {
            redirect(base_url() . 'login/');
        }
    }




    /* Public Function Area */
    public function index()
    {
        $arr_data = array();
        $acl = $this->_acl;

        $hour = date('H', time());
        $message = 'Good Morning';

        if ($hour > 0 && $hour <= 9)
        {
            $message = 'Good Morning';
        }
        elseif ($hour > 9 && $hour <= 14)
        {
            $message = 'Good Afternoon';
        }
        elseif ($hour > 14 && $hour <= 19)
        {
            $message = 'Good Evening';
        }
        else
        {
            $message = 'Good Night';
        }

        $arr_data['title'] = 'Dashboard';
        $arr_data['nav'] = 'Dashboard';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;
        $arr_data['time'] = time();
        $arr_data['time_display'] = date('H:i:s');

        $arr_data['message'] = $message;
        $arr_data['today'] = date('l, d F Y', time());

        $arr_data['dashboard_record'] = $this->_generate_dashboard_demographic();
        $arr_data['referral_record'] = $this->_generate_referral();

        $this->load->view('index', $arr_data);
    }
    /* End Public Function Area */




    /* Ajax Area */
    /* End Ajax Area */




    /* Private Function Area */
    private function _generate_dashboard_demographic()
    {
        $record = array();

        $date_start = strtotime(date('Y-m-1 00:00:00', time()));
        $date_end = strtotime(date('Y-m-d 23:59:59', time()));

        // generate paid order
        $this->db->where('date >=', $date_start);
        $this->db->where('date <=', $date_end);
        $this->db->where('payment_status', 'Paid');
        $record['count_paid_order'] = $this->core_model->count('order');

        // generate expired order
        $this->db->where('date >=', $date_start);
        $this->db->where('date <=', $date_end);
        $this->db->where('payment_status', 'EXPIRED');
        $record['count_expired_order'] = $this->core_model->count('order');

        // generate pending order
        $this->db->where('date >=', $date_start);
        $this->db->where('date <=', $date_end);
        $this->db->where('payment_status', 'Pending');
        $record['count_pending_order'] = $this->core_model->count('order');

        // sum gross sale
        $this->db->where('date >=', $date_start);
        $this->db->where('date <=', $date_end);
        $this->db->where('payment_status', 'Paid');
        $arr_order = $this->core_model->get('order');

        $record['total_gross_sale'] = 0;
        $record['shipping'] = 0;
        $record['discount'] = 0;
        $record['total_net_sale'] = 0;

        foreach ($arr_order as $order)
        {
            $record['total_gross_sale'] += $order->subtotal + $order->shipping;
            $record['shipping'] += $order->shipping;
            $record['discount'] += $order->discount;
            $record['total_net_sale'] += $order->subtotal - $order->discount;
        }

        $record['total_gross_sale_display'] = 'IDR ' . number_format($record['total_gross_sale'], 0, ',', '.');
        $record['shipping_display'] = 'IDR ' . number_format($record['shipping'], 0, ',', '.');
        $record['discount_display'] = 'IDR ' . number_format($record['discount'], 0, ',', '.');
        $record['total_net_sale_display'] = 'IDR ' . number_format($record['total_net_sale'], 0, ',', '.');

        // get CRM data
        $this->db->where('date >=', $date_start);
        $this->db->where('date <=', $date_end);
        $this->db->where('status', 'Resolve');
        $arr_crm = $this->core_model->get('crm');

        $arr_crm_lookup = array();

        foreach ($arr_crm as $crm)
        {
            $arr_crm_lookup[$crm->type][] = clone $crm;
        }

        $record['arr_crm_lookup'] = $arr_crm_lookup;

        // get consultation data
        $this->db->where('date >=', $date_start);
        $this->db->where('date <=', $date_end);
        $arr_consultation = $this->core_model->get('consultation');

        $arr_consultation_count = array();
        $arr_consultation_count['total_submission'] = 0;
        $arr_consultation_count['total_approve'] = 0;
        $arr_consultation_count['total_reject'] = 0;
        $arr_consultation_count['total_incomplete'] = 0;
        $arr_consultation_count['total_pending'] = 0;

        foreach ($arr_consultation as $consultation)
        {
            $arr_consultation_count['total_submission'] += 1;

            if ($consultation->status == 'Pending')
            {
                $arr_consultation_count['total_pending'] += 1;
            }

            if ($consultation->status == 'Finish')
            {
                $arr_consultation_count['total_approve'] += 1;
            }

            if ($consultation->status == 'Incomplete')
            {
                $arr_consultation_count['total_incomplete'] += 1;
            }

            if ($consultation->status == 'Reject')
            {
                $arr_consultation_count['total_reject'] += 1;
            }
        }

        $record['arr_consultation_count'] = $arr_consultation_count;

        return $record;
    }

    private function _generate_referral()
    {
        $record = array();

        $this->db->where('id >', 21140);
        $record['count_referral'] = $this->core_model->count('referral');

        return $record;
    }
    /* End Private Function Area */
}