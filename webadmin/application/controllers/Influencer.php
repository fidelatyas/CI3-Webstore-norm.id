<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Influencer extends CI_Controller
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
    public function add($patient_id = 0)
    {
        $arr_data = array();
        $acl = $this->_acl;

        if ($patient_id <= 0)
        {
        	redirect(base_url() . 'patient/all/');
        }

        $arr_data['title'] = 'Data';
        $arr_data['nav'] = 'Influencer Add';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;

        $arr_data['patient'] = $this->core_model->get('patient', $patient_id);
        $arr_data['today'] = date('Y-m-d', time());

        $this->load->view('influencer_add', $arr_data);
    }

    public function all($page = 1, $sort = 'ASC', $row = 'number', $query = '')
    {
        $arr_data = array();
        $acl = $this->_acl;

        $query = urldecode($query);

        // get all influencer
        if ($query != '')
        {
            $this->db->like('type', $query);
            $this->db->or_like('number', $query);
            $this->db->or_like('name', $query);
            $this->db->or_like('date', $query);
            $this->db->or_like('status', $query);
            $this->db->or_like('gender', $query);
            $this->db->or_like('instagram_url', $query);
            $this->db->or_like('tiktok_url', $query);
        }

        $this->db->order_by($row, $sort);
        $this->db->limit($this->_setting->setting__limit_page, ($page - 1) * $this->_setting->setting__limit_page);
        $arr_influencer = $this->core_model->get('influencer');

        foreach ($arr_influencer as $influencer)
        {
            $influencer->date_display = date('d F Y', $influencer->date);
            $influencer->wa_phone = preg_replace('/^0/', '62', $influencer->phone);
        }

        // count page
        if ($query != '')
        {
            $this->db->like('type', $query);
            $this->db->or_like('number', $query);
            $this->db->or_like('name', $query);
            $this->db->or_like('date', $query);
            $this->db->or_like('status', $query);
            $this->db->or_like('gender', $query);
            $this->db->or_like('instagram_url', $query);
            $this->db->or_like('tiktok_url', $query);
        }

        $count_influencer = $this->core_model->count('influencer');
        $count_page = ceil($count_influencer / $this->_setting->setting__limit_page);

        $arr_data['title'] = 'Data';
        $arr_data['nav'] = 'Influencer List';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;

        $arr_data['page'] = $page;
        $arr_data['sort'] = $sort;
        $arr_data['row'] = $row;
        $arr_data['query'] = $query;

        $arr_data['arr_influencer'] = $arr_influencer;
        $arr_data['count_page'] = $count_page;

        $this->load->view('influencer', $arr_data);
    }

    public function edit($influencer_id = 0)
    {
        $arr_data = array();
        $acl = $this->_acl;

        $influencer = $this->core_model->get('influencer', $influencer_id);
        $influencer->date_display = date('Y-m-d', $influencer->date);

        $arr_data['title'] = 'Data';
        $arr_data['nav'] = 'Influencer Edit';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;

        $arr_data['influencer'] = $influencer;
        $arr_data['patient'] = $this->core_model->get('patient', $influencer->patient_id);

        $this->load->view('influencer_edit', $arr_data);
    }

    public function profile($patient_id = 0)
    {
    	$arr_data = array();
        $acl = $this->_acl;

        if ($patient_id <= 0)
        {
        	redirect(base_url() . 'patient/all/');
        }

        $patient = $this->core_model->get('patient', $patient_id);
        $patient->date_display = date('Y-m-d', $patient->date);
        $patient->birthdate_display = date('d F Y', $patient->birthdate);

        $patient->age = time() - $patient->birthdate;
        $patient->age = floor($patient->age / 86400 / 365.25);

        $this->db->where('patient_id', $patient_id);
        $patient->arr_influencer = $this->core_model->get('influencer');

        foreach ($patient->arr_influencer as $influencer)
        {
        	$influencer->date_display = date('d F Y', $influencer->date);
        }

        $arr_data['title'] = 'Data';
        $arr_data['nav'] = 'Influencer Add';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;

        $arr_data['patient'] = $patient;

        $this->load->view('influencer_profile', $arr_data);
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

            $influencer_record = array();
            $arr_category_id = array();

            // get record from views
            foreach ($_POST as $k => $v)
            {
                // $v = $this->security->xss_clean(trim($v));

                $influencer_record[$k] = ($k == 'date' || $k == 'birthdate') ? strtotime($v) : $v;
            }

            $influencer_record['resolve_date'] = (isset($influencer_record['status']) && $influencer_record['status'] == 'Resolve') ? time() : 0;
            $influencer_record = $this->cms_function->populate_foreign_field($influencer_record['patient_id'], $influencer_record, 'patient');

            $this->_validate_add($influencer_record);

            // Insert Database
            $influencer_id = $this->core_model->insert('influencer', $influencer_record);
            $influencer_record['id'] = $influencer_id;
            $influencer_record['last_query'] = $this->db->last_query();

            // generate number
            if (!isset($influencer_record['number']) || (isset($influencer_record['number']) && $influencer_record['number'] == ''))
            {
                $influencer_record['number'] = 'Influencer' . str_pad($influencer_id, 6, 0, STR_PAD_LEFT);
                $this->core_model->update('influencer', $influencer_id, array('number' => $influencer_record['number']));
            }

            // add history
            $this->cms_function->add_log($this->_user, $influencer_record, 'add', 'influencer');

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

    public function ajax_delete($influencer_id = 0)
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

            if ($influencer_id <= 0)
            {
                throw new Exception();
            }

            $influencer = $this->core_model->get('influencer', $influencer_id);
            $updated = $_POST['updated'];
            $influencer_record = array();

            foreach ($influencer as $k => $v)
            {
                $influencer_record[$k] = $v;

                if ($k == 'updated' && $v != $updated)
                {
                    throw new Exception('This data has been updated by another influencer. Please refresh the page.');
                }
            }

            $this->_validate_delete($influencer_id);

            $this->core_model->delete('influencer', $influencer_id);
            $influencer_record['id'] = $influencer->id;
            $influencer_record['name'] = $influencer->name;
            $influencer_record['last_query'] = $this->db->last_query();

            // add history
            $this->cms_function->add_log($this->_user, $influencer_record, 'delete', 'influencer');

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

    public function ajax_edit($influencer_id = 0)
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

            if ($influencer_id <= 0)
            {
                throw new Exception();
            }

            $influencer_record = array();

            $old_influencer = $this->core_model->get('influencer', $influencer_id);

            foreach ($old_influencer as $key => $value)
            {
                $old_influencer_record[$key] = $value;
            }

            // get record from views
            foreach ($_POST as $k => $v)
            {
                if ($k == 'updated' && $v != $old_influencer_record['updated'])
                {
                    throw new Exception('This influencer data has been updated by another account. Please refresh this page.');
                }
                else
                {
                    // $v = $this->security->xss_clean(trim($v));

                    $influencer_record[$k] = ($k == 'date' || $k == 'birthdate') ? strtotime($v) : $v;
                }
            }

            $influencer_record['resolve_date'] = (isset($influencer_record['status']) && $influencer_record['status'] == 'Resolve') ? time() : 0;
            $influencer_record = $this->cms_function->populate_foreign_field($influencer_record['patient_id'], $influencer_record, 'patient');

            $this->_validate_edit($influencer_id, $influencer_record);

            // Insert Database
            $this->core_model->update('influencer', $influencer_id, $influencer_record);
            $influencer_record['id'] = $influencer_id;
            $influencer_record['last_query'] = $this->db->last_query();

            // populate foreign field
            // if any
            $arr_table = array();
            $this->cms_function->update_foreign_field($arr_table, $influencer_record, 'influencer');

            // add user_history
            $this->cms_function->add_log($this->_user, $influencer_record, 'edit', 'influencer');

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
    }

    private function _validate_delete($influencer_id)
    {
        $this->db->where('deletable <=', 0);
        $this->db->where('id', $influencer_id);
        $count_influencer = $this->core_model->count('influencer');

        if ($count_influencer > 0)
        {
            throw new Exception('Data cannot be deleted.');
        }
    }

    private function _validate_edit($influencer_id, $record)
    {
        // check editable
        $this->db->where('editable <=', 0);
        $this->db->where('id', $influencer_id);
        $count_influencer = $this->core_model->count('influencer');

        if ($count_influencer > 0)
        {
            throw new Exception('Data cannot be updated.');
        }
    }
    /* End Private Function Area */
}