<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
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
    public function access($user_id)
    {
        $acl = $this->_acl;

        if ($user_id <= 1)
        {
            redirect(base_url());
        }

        if (!isset($acl['user_access']) || $acl['user_access']->list <= 0)
        {
            redirect(base_url());
        }

        $user = $this->core_model->get('user', $user_id);

        $this->db->where('user_id', $user->id);
        $arr_user_access = $this->core_model->get('user_access');
        $arr_user_access_lookup = array();

        foreach ($arr_user_access as $user_access)
        {
            $arr_user_access_lookup[$user_access->module_id] = clone $user_access;
        }

        // get module
        $this->db->order_by('number, sort');
        $this->db->where('enabled >', 0);
        $arr_module = $this->core_model->get('module');
        $arr_module_lookup = array();

        foreach ($arr_module as $module)
        {
            $module->user_add = (isset($arr_user_access_lookup[$module->id])) ? $arr_user_access_lookup[$module->id]->add : 0;
            $module->user_edit = (isset($arr_user_access_lookup[$module->id])) ? $arr_user_access_lookup[$module->id]->edit : 0;
            $module->user_delete = (isset($arr_user_access_lookup[$module->id])) ? $arr_user_access_lookup[$module->id]->delete : 0;
            $module->user_list = (isset($arr_user_access_lookup[$module->id])) ? $arr_user_access_lookup[$module->id]->list : 0;
            $module->user_view = (isset($arr_user_access_lookup[$module->id])) ? $arr_user_access_lookup[$module->id]->view : 0;

            $arr_module_lookup[$module->type][] = clone $module;
        }

        $arr_data['title'] = 'User';
        $arr_data['nav'] = 'User Edit';
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['setting'] = $this->_setting;
        $arr_data['account'] = $this->_user;
        $arr_data['acl'] = $this->_acl;
        $arr_data['user'] = $user;
        $arr_data['arr_user_access'] = $arr_user_access;
        $arr_data['arr_module_lookup'] = $arr_module_lookup;

        $arr_data['user'] = $user;

        $this->load->view('user_access', $arr_data);
    }

    public function add()
    {
        $arr_data = array();
        $acl = $this->_acl;

        if (!isset($acl['user']) || $acl['user']->add <= 0)
        {
            redirect(base_url());
        }

        $arr_data['title'] = 'User';
        $arr_data['nav'] = 'User Add';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;

        $this->load->view('user_add', $arr_data);
    }

    public function all($page = 1, $sort = 'ASC', $row = 'number', $query = '')
    {
        $arr_data = array();
        $acl = $this->_acl;

        if (!isset($acl['user']) || $acl['user']->list <= 0)
        {
            redirect(base_url());
        }

        $query = urldecode($query);

        // get all user
        if ($query != '')
        {
            $this->db->like('type', $query);
            $this->db->or_like('number', $query);
            $this->db->or_like('name', $query);
            $this->db->or_like('date', $query);
            $this->db->or_like('status', $query);
            $this->db->or_like('position', $query);
            $this->db->or_like('address', $query);
            $this->db->or_like('phone', $query);
            $this->db->or_like('email', $query);
            $this->db->or_like('username', $query);
        }

        $this->db->order_by($row, $sort);
        $this->db->limit($this->_setting->setting__limit_page, ($page - 1) * $this->_setting->setting__limit_page);
        $arr_user = $this->core_model->get('user');

        foreach ($arr_user as $user)
        {
            $user->phone = preg_replace('/^0/', '62', $user->phone);
        }

        // count page
        if ($query != '')
        {
            $this->db->like('type', $query);
            $this->db->or_like('number', $query);
            $this->db->or_like('name', $query);
            $this->db->or_like('date', $query);
            $this->db->or_like('status', $query);
            $this->db->or_like('position', $query);
            $this->db->or_like('address', $query);
            $this->db->or_like('phone', $query);
            $this->db->or_like('email', $query);
            $this->db->or_like('username', $query);
        }

        $count_user = $this->core_model->count('user');
        $count_page = ceil($count_user / $this->_setting->setting__limit_page);

        // default salary range
        $calculate_date_start = date('Y-m-1', time());
        $calculate_date_end = date('Y-m-d', time());

        $arr_data['title'] = 'User';
        $arr_data['nav'] = 'User List';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;

        $arr_data['page'] = $page;
        $arr_data['sort'] = $sort;
        $arr_data['row'] = $row;
        $arr_data['query'] = $query;

        $arr_data['arr_user'] = $arr_user;
        $arr_data['count_page'] = $count_page;
        $arr_data['calculate_date_start'] = $calculate_date_start;
        $arr_data['calculate_date_end'] = $calculate_date_end;

        $this->load->view('user', $arr_data);
    }

    public function edit($user_id = 0)
    {
        $arr_data = array();
        $acl = $this->_acl;

        if (!isset($acl['user']) || $acl['user']->edit <= 0)
        {
            redirect(base_url());
        }

        $user = $this->core_model->get('user', $user_id);
        $user->date_display = date('Y-m-d', $user->date);

        $arr_data['title'] = 'User';
        $arr_data['nav'] = 'User Edit';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;

        $arr_data['user'] = $user;

        $this->load->view('user_edit', $arr_data);
    }
    /* End Public Function Area */




    /* Ajax Area */
    public function ajax_add()
    {
        $json['status'] = 'success';

        try
        {
            $this->db->trans_start();

            $acl = $this->_acl;

            if ($this->session->userdata('user_id') != $this->_user->id)
            {
                throw new Exception('Session Expired. Please log out first.');
            }

            if (!isset($acl['user']) || $acl['user']->add <= 0)
            {
                throw new Exception('You have no access to add Administrator.');
            }

            $user_record = array();
            $arr_user_salary = array();

            // get record from views
            foreach ($_POST as $k => $v)
            {
                $v = $this->security->xss_clean(trim($v));

                $user_record[$k] = ($k == 'date' || $k == 'birthdate' || $k == 'resign_date') ? strtotime($v) : $v;
            }

            // generate password
            $user_record['password'] = md5($user_record['password']);

            $this->_validate_add($user_record);

            // Insert Database
            $user_id = $this->core_model->insert('user', $user_record);
            $user_record['id'] = $user_id;
            $user_record['last_query'] = $this->db->last_query();

            // generate number
            if (!isset($user_record['number']) || (isset($user_record['number']) && $user_record['number'] == ''))
            {
                $user_record['number'] = str_pad($user_id, 4, 0, STR_PAD_LEFT);
                $this->core_model->update('user', $user_id, array('number' => $user_record['number']));
            }

            // add user_history
            $this->cms_function->add_log($this->_user, $user_record, 'add', 'user');

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

    public function ajax_delete($user_id = 0)
    {
        $json['status'] = 'success';

        try
        {
            $this->db->trans_start();

            $acl = $this->_acl;

            if ($this->session->userdata('user_id') != $this->_user->id)
            {
                throw new Exception('Session Expired. Please log out first.');
            }

            if (!isset($acl['user']) || $acl['user']->delete <= 0)
            {
                throw new Exception('You have no access to delete Administrator.');
            }

            if ($user_id <= 0)
            {
                throw new Exception();
            }

            $user = $this->core_model->get('user', $user_id);
            $updated = $_POST['updated'];
            $user_record = array();

            foreach ($user as $k => $v)
            {
                $user_record[$k] = $v;

                if ($k == 'updated' && $v != $updated)
                {
                    throw new Exception('This data has been updated by another user. Please refresh the page.');
                }
            }

            $this->_validate_delete($user_id);

            $this->core_model->delete('user', $user_id);
            $user_record['id'] = $user->id;
            $user_record['name'] = $user->name;
            $user_record['last_query'] = $this->db->last_query();

            $this->cms_function->add_log($this->_user, $user_record, 'delete', 'user');

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

    public function ajax_edit($user_id = 0)
    {
        $json['status'] = 'success';

        try
        {
            $this->db->trans_start();

            $acl = $this->_acl;

            if ($this->session->userdata('user_id') != $this->_user->id)
            {
                throw new Exception('Session Expired. Please log out first.');
            }

            if (!isset($acl['user']) || $acl['user']->edit <= 0)
            {
                throw new Exception('You have no access to edit Administrator.');
            }

            if ($user_id <= 0)
            {
                throw new Exception();
            }

            $user_record = array();
            $arr_user_salary = array();
            $old_user_record = array();

            $old_user = $this->core_model->get('user', $user_id);

            foreach ($old_user as $key => $value)
            {
                $old_user_record[$key] = $value;
            }

            // get record from views
            foreach ($_POST as $k => $v)
            {
                $v = $this->security->xss_clean(trim($v));

                if ($k == 'updated' && $v != $old_user_record['updated'])
                {
                    throw new Exception('This user data has been updated by another account. Please refresh this page.');
                }
                else
                {
                    $user_record[$k] = ($k == 'date' || $k == 'birthdate' || $k == 'resign_date') ? strtotime($v) : $v;
                }
            }

            // generate password
            $user_record['password'] = ($user_record['password'] != '') ? md5($user_record['password']) : $old_user_record['password'];

            $this->_validate_edit($user_id, $user_record);

            // Insert Database
            $this->core_model->update('user', $user_id, $user_record);
            $user_record['id'] = $user_id;
            $user_record['last_query'] = $this->db->last_query();

            // populate foreign field
            // if any
            $arr_table = array();
            $this->cms_function->update_foreign_field($arr_table, $user_record, 'user');

            // add user_history
            $this->cms_function->add_log($this->_user, $user_record, 'edit', 'user');

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

    public function ajax_update($user_id = 0)
    {
        $json['status'] = 'success';

        try
        {
            $this->db->trans_start();

            $acl = $this->_acl;

            if ($user_id <= 0)
            {
                throw new Exception();
            }

            if ($this->session->userdata('user_id') != $this->_user->id)
            {
                throw new Exception('Session Expired. Please log out first.');
            }

            if (!isset($acl['user_access']) || $acl['user_access']->edit <= 0)
            {
                throw new Exception('You have no access to edit User Access.');
            }

            $arr_new_user_access = json_decode($_POST['user_access_user_access']);

            // get user
            $user = $this->core_model->get('user', $user_id);

            // get all module
            $arr_module = $this->core_model->get('module');
            $arr_module_lookup = array();

            foreach ($arr_module as $module)
            {
                $arr_module_lookup[$module->id] = clone $module;
            }

            // remove old user access
            $this->db->where('user_id', $user->id);
            $this->core_model->delete('user_access');

            foreach ($arr_new_user_access as $new_user_access)
            {
                $user_access_record = array();

                $user_access_record['module_id'] = $new_user_access->module_id;
                $user_access_record['user_id'] = $user->id;

                $user_access_record['add'] = $new_user_access->add;
                $user_access_record['delete'] = $new_user_access->delete;
                $user_access_record['edit'] = $new_user_access->edit;
                $user_access_record['list'] = $new_user_access->list;
                $user_access_record['view'] = $new_user_access->view;

                $user_access_record['user_type'] = $user->type;
                $user_access_record['user_number'] = $user->number;
                $user_access_record['user_name'] = $user->name;
                $user_access_record['user_date'] = $user->date;
                $user_access_record['user_status'] = $user->status;

                $user_access_record['module_type'] = (isset($arr_module_lookup[$new_user_access->module_id])) ? $arr_module_lookup[$new_user_access->module_id]->type : '';
                $user_access_record['module_number'] = (isset($arr_module_lookup[$new_user_access->module_id])) ? $arr_module_lookup[$new_user_access->module_id]->number : '';
                $user_access_record['module_name'] = (isset($arr_module_lookup[$new_user_access->module_id])) ? $arr_module_lookup[$new_user_access->module_id]->name : '';
                $user_access_record['module_date'] = (isset($arr_module_lookup[$new_user_access->module_id])) ? $arr_module_lookup[$new_user_access->module_id]->date : 0;
                $user_access_record['module_status'] = (isset($arr_module_lookup[$new_user_access->module_id])) ? $arr_module_lookup[$new_user_access->module_id]->status : '';

                $this->core_model->insert('user_access', $user_access_record);
            }

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
    private function _validate_add($record)
    {
        // check email
        $this->db->where('email', $record['email']);
        $count_user = $this->core_model->count('user');

        if ($count_user > 0)
        {
            throw new Exception('Email already exist');
        }
    }

    private function _validate_delete($user_id)
    {
        $this->db->where('deletable <=', 0);
        $this->db->where('id', $user_id);
        $count_user = $this->core_model->count('user');

        if ($count_user > 0)
        {
            throw new Exception('Data cannot be deleted.');
        }
    }

    private function _validate_edit($user_id, $record)
    {
        // check editable
        $this->db->where('editable <=', 0);
        $this->db->where('id', $user_id);
        $count_user = $this->core_model->count('user');

        if ($count_user > 0)
        {
            throw new Exception('Data cannot be updated.');
        }

        // check email
        $this->db->where('email', $record['email']);
        $this->db->where('id !=', $user_id);
        $count_user = $this->core_model->count('user');

        if ($count_user > 0)
        {
            throw new Exception('Email already exist');
        }
    }
    /* End Private Function Area */
}