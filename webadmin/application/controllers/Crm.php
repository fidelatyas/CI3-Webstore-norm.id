<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Crm extends CI_Controller
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

        if (!isset($acl['crm']) || $acl['crm']->add <= 0)
        {
            redirect(base_url());
        }

        if ($patient_id <= 0)
        {
        	redirect(base_url() . 'patient/all/');
        }

        $arr_data['title'] = 'Data';
        $arr_data['nav'] = 'Crm Add';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;

        $arr_data['patient'] = $this->core_model->get('patient', $patient_id);
        $arr_data['today'] = date('Y-m-d', time());

        $this->load->view('crm_add', $arr_data);
    }

    public function all($page = 1, $sort = 'ASC', $row = 'number', $query = '')
    {
        $arr_data = array();
        $acl = $this->_acl;

        if (!isset($acl['crm']) || $acl['crm']->list <= 0)
        {
            redirect(base_url());
        }

        $query = urldecode($query);

        // get all crm
        if ($query != '')
        {
            $this->db->like('type', $query);
            $this->db->or_like('number', $query);
            $this->db->or_like('name', $query);
            $this->db->or_like('date', $query);
            $this->db->or_like('status', $query);
        }

        $this->db->order_by($row, $sort);
        $this->db->limit($this->_setting->setting__limit_page, ($page - 1) * $this->_setting->setting__limit_page);
        $arr_crm = $this->core_model->get('crm');

        foreach ($arr_crm as $crm)
        {
            $crm->date_display = date('d F Y', $crm->date);
        }

        // count page
        if ($query != '')
        {
            $this->db->like('type', $query);
            $this->db->or_like('number', $query);
            $this->db->or_like('name', $query);
            $this->db->or_like('date', $query);
            $this->db->or_like('status', $query);
        }

        $count_crm = $this->core_model->count('crm');
        $count_page = ceil($count_crm / $this->_setting->setting__limit_page);

        $arr_data['title'] = 'Data';
        $arr_data['nav'] = 'Crm List';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;

        $arr_data['page'] = $page;
        $arr_data['sort'] = $sort;
        $arr_data['row'] = $row;
        $arr_data['query'] = $query;

        $arr_data['arr_crm'] = $arr_crm;
        $arr_data['count_page'] = $count_page;

        $this->load->view('crm', $arr_data);
    }

    public function edit($crm_id = 0)
    {
        $arr_data = array();
        $acl = $this->_acl;

        if (!isset($acl['crm']) || $acl['crm']->edit <= 0)
        {
            redirect(base_url());
        }

        $crm = $this->core_model->get('crm', $crm_id);
        $crm->date_display = date('Y-m-d', $crm->date);

        $arr_data['title'] = 'Data';
        $arr_data['nav'] = 'Crm Edit';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;

        $arr_data['crm'] = $crm;
        $arr_data['patient'] = $this->core_model->get('patient', $crm->patient_id);

        $this->load->view('crm_edit', $arr_data);
    }

    public function profile($patient_id = 0)
    {
    	$arr_data = array();
        $acl = $this->_acl;

        if (!isset($acl['crm']) || $acl['crm']->add <= 0)
        {
            redirect(base_url());
        }

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
        $patient->arr_crm = $this->core_model->get('crm');

        foreach ($patient->arr_crm as $crm)
        {
        	$crm->date_display = date('d F Y', $crm->date);
        }

        $arr_data['title'] = 'Data';
        $arr_data['nav'] = 'Crm Add';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;

        $arr_data['patient'] = $patient;

        $this->load->view('crm_profile', $arr_data);
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

            if (!isset($acl['crm']) || $acl['crm']->add <= 0)
            {
                throw new Exception('You have no access to add Administrator.');
            }

            $crm_record = array();
            $arr_category_id = array();

            // get record from views
            foreach ($_POST as $k => $v)
            {
                // $v = $this->security->xss_clean(trim($v));

                $crm_record[$k] = ($k == 'date' || $k == 'birthdate') ? strtotime($v) : $v;
            }

            $crm_record['resolve_date'] = (isset($crm_record['status']) && $crm_record['status'] == 'Resolve') ? time() : 0;
            $crm_record = $this->cms_function->populate_foreign_field($crm_record['patient_id'], $crm_record, 'patient');

            $this->_validate_add($crm_record);

            // Insert Database
            $crm_id = $this->core_model->insert('crm', $crm_record);
            $crm_record['id'] = $crm_id;
            $crm_record['last_query'] = $this->db->last_query();

            // generate number
            if (!isset($crm_record['number']) || (isset($crm_record['number']) && $crm_record['number'] == ''))
            {
                $crm_record['number'] = 'CRM' . str_pad($crm_id, 6, 0, STR_PAD_LEFT);
                $this->core_model->update('crm', $crm_id, array('number' => $crm_record['number']));
            }

            // add history
            $this->cms_function->add_log($this->_user, $crm_record, 'add', 'crm');

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

    public function ajax_delete($crm_id = 0)
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

            if (!isset($acl['crm']) || $acl['crm']->delete <= 0)
            {
                throw new Exception('You have no access to delete Administrator.');
            }

            if ($crm_id <= 0)
            {
                throw new Exception();
            }

            $crm = $this->core_model->get('crm', $crm_id);
            $updated = $_POST['updated'];
            $crm_record = array();

            foreach ($crm as $k => $v)
            {
                $crm_record[$k] = $v;

                if ($k == 'updated' && $v != $updated)
                {
                    throw new Exception('This data has been updated by another crm. Please refresh the page.');
                }
            }

            $this->_validate_delete($crm_id);

            $this->core_model->delete('crm', $crm_id);
            $crm_record['id'] = $crm->id;
            $crm_record['name'] = $crm->name;
            $crm_record['last_query'] = $this->db->last_query();

            // add history
            $this->cms_function->add_log($this->_user, $crm_record, 'delete', 'crm');

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

    public function ajax_edit($crm_id = 0)
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

            if (!isset($acl['crm']) || $acl['crm']->edit <= 0)
            {
                throw new Exception('You have no access to edit Administrator.');
            }

            if ($crm_id <= 0)
            {
                throw new Exception();
            }

            $crm_record = array();

            $old_crm = $this->core_model->get('crm', $crm_id);

            foreach ($old_crm as $key => $value)
            {
                $old_crm_record[$key] = $value;
            }

            // get record from views
            foreach ($_POST as $k => $v)
            {
                if ($k == 'updated' && $v != $old_crm_record['updated'])
                {
                    throw new Exception('This crm data has been updated by another account. Please refresh this page.');
                }
                else
                {
                    // $v = $this->security->xss_clean(trim($v));

                    $crm_record[$k] = ($k == 'date' || $k == 'birthdate') ? strtotime($v) : $v;
                }
            }

            $crm_record['resolve_date'] = (isset($crm_record['status']) && $crm_record['status'] == 'Resolve') ? time() : 0;
            $crm_record = $this->cms_function->populate_foreign_field($crm_record['patient_id'], $crm_record, 'patient');

            $this->_validate_edit($crm_id, $crm_record);

            // Insert Database
            $this->core_model->update('crm', $crm_id, $crm_record);
            $crm_record['id'] = $crm_id;
            $crm_record['last_query'] = $this->db->last_query();

            // populate foreign field
            // if any
            $arr_table = array();
            $this->cms_function->update_foreign_field($arr_table, $crm_record, 'crm');

            // add user_history
            $this->cms_function->add_log($this->_user, $crm_record, 'edit', 'crm');

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

    private function _validate_delete($crm_id)
    {
        $this->db->where('deletable <=', 0);
        $this->db->where('id', $crm_id);
        $count_crm = $this->core_model->count('crm');

        if ($count_crm > 0)
        {
            throw new Exception('Data cannot be deleted.');
        }
    }

    private function _validate_edit($crm_id, $record)
    {
        // check editable
        $this->db->where('editable <=', 0);
        $this->db->where('id', $crm_id);
        $count_crm = $this->core_model->count('crm');

        if ($count_crm > 0)
        {
            throw new Exception('Data cannot be updated.');
        }
    }
    /* End Private Function Area */
}