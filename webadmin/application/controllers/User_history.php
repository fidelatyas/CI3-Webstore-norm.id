<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_history extends CI_Controller
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
    public function all($user_id = 0, $page = 1, $sort = 'ASC', $row = 'date')
    {
        $arr_data = array();
        $acl = $this->_acl;

        if (!isset($acl['user_history']) || $acl['user_history']->list <= 0)
        {
            redirect(base_url());
        }

        if ($user_id <= 0)
        {
            redirect(base_url() . 'user/all/');
        }

        // get all user_history
        $this->db->where('user_id', $user_id);
        $this->db->order_by($row, $sort);
        $this->db->limit($this->_setting->setting__limit_page, ($page - 1) * $this->_setting->setting__limit_page);
        $arr_user_history = $this->core_model->get('user_history');

        foreach ($arr_user_history as $user_history)
        {
            $user_history->date_display = date('d F Y H:i:s', $user_history->date);
        }

        // count page
        $this->db->where('user_id', $user_id);
        $count_user_history = $this->core_model->count('user_history');
        $count_page = ceil($count_user_history / $this->_setting->setting__limit_page);

        $user = $this->core_model->get('user', $user_id);

        $arr_data['title'] = 'User';
        $arr_data['nav'] = 'User History List';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;

        $arr_data['page'] = $page;
        $arr_data['sort'] = $sort;
        $arr_data['row'] = $row;

        $arr_data['arr_user_history'] = $arr_user_history;
        $arr_data['count_page'] = $count_page;
        $arr_data['user'] = $user;

        $this->load->view('user_history', $arr_data);
    }
    /* End Public Function Area */




    /* Ajax Area */
    /* End Ajax Area */




    /* Private Function Area */
    /* End Private Function Area */
}