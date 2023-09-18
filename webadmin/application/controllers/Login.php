<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    private $_setting;

    public function __construct()
    {
        parent:: __construct();

        $this->_setting = $this->setting_model->load();
    }




    /* Public Function Area */
    public function index()
    {
        $arr_data = array();

        $arr_data['title'] = 'Login';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();

        $this->load->view('login', $arr_data);
    }
    /* End Public Function Area */




    /* Ajax Area */
    public function ajax_login()
    {
        $json['status'] = 'success';

        try
        {
            $username = $this->security->xss_clean($this->input->post('username'));
            $password = md5($this->security->xss_clean($this->input->post('password')));

            $this->db->select('id, type, number, name, date, status');
            $this->db->where("BINARY username = '{$username}'", null, false);
            $this->db->where("BINARY password = '{$password}'", null, false);
            $this->db->where('status != ', 'Resign / Drop Out');
            $arr_user = $this->core_model->get('user');

            if (count($arr_user) > 0)
            {
                $this->session->set_userdata('user_id', $arr_user[0]->id);
                $this->session->set_userdata('user_name', $arr_user[0]->name);

                $ip_address = $this->cms_function->get_ip_address();

                // update user history
                $user_history_record = array();
                $user_history_record['user_id'] = $arr_user[0]->id;

                $user_history_record['date'] = time();
                $user_history_record['type'] = 'Login';
                $user_history_record['description'] = 'Successfully logged in with ip address ' . $ip_address . ' at ' . date('d F Y H:i:s', time());
                $user_history_record['ip_address'] = $ip_address;

                $user_history_record['user_type'] = $arr_user[0]->type;
                $user_history_record['user_number'] = $arr_user[0]->number;
                $user_history_record['user_name'] = $arr_user[0]->name;
                $user_history_record['user_date'] = $arr_user[0]->date;
                $user_history_record['user_status'] = $arr_user[0]->status;
                $this->core_model->insert('user_history', $user_history_record);
            }
            else
            {
                throw new Exception('Wrong Username or Password.');
            }

            $json['user'] = $arr_user[0];
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