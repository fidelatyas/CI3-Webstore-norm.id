<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller
{
    private $_user;
    private $_setting;

    public function __construct()
    {
        parent:: __construct();

        $this->_setting = $this->setting_model->load();

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
        $acl = $this->_acl;

        if (!isset($acl['setting']) || $acl['setting']->edit <= 0)
        {
            redirect(base_url());
        }

        $arr_data['title'] = 'Setting';
        $arr_data['nav'] = 'Setting';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;

        $this->load->view('setting', $arr_data);
    }

    public function company()
    {
        $acl = $this->_acl;

        if (!isset($acl['setting']) || $acl['setting']->edit <= 0)
        {
            redirect(base_url());
        }

        $arr_data['title'] = 'Setting';
        $arr_data['nav'] = 'Company';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;

        $this->load->view('company', $arr_data);
    }
    /* End Public Function Area */




    /* Ajax Area */
    public function ajax_update()
    {
        $json['status'] = 'success';

        try
        {
            $this->db->trans_start();

            if ($this->session->userdata('user_id') != $this->_user->id)
            {
                throw new Exception('Server Error. Please log out first.');
            }

            $acl = $this->_acl;

            if (!isset($acl['setting']) || $acl['setting']->edit <= 0)
            {
                throw new Exception('You have no access to update Website Setting. Please contact your administrator.');
            }

            $setting_record = array();

            foreach ($_POST as $k => $v)
            {
                $setting_record[$k] = $this->security->xss_clean($v);
            }

            $query = '';

            foreach ($setting_record as $name => $value)
            {
                $this->setting_model->set($name, $value);
                $query .= $this->db->last_query() . ";\n";
            }

            $setting_record['last_query'] = $query;

            // add Log
            $this->cms_function->add_log($this->_user, $setting_record, 'edit', 'setting');

            $this->db->trans_complete();
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
