<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor extends CI_Controller
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
    public function add()
    {
        $arr_data = array();
        $acl = $this->_acl;

        if (!isset($acl['doctor']) || $acl['doctor']->add <= 0)
        {
            redirect(base_url());
        }

        $arr_data['title'] = 'Data';
        $arr_data['nav'] = 'Doctor Add';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;
        $arr_data['arr_category'] = $this->_generate_category();

        $this->load->view('doctor_add', $arr_data);
    }

    public function all($page = 1, $sort = 'ASC', $row = 'number', $query = '')
    {
        $arr_data = array();
        $acl = $this->_acl;

        if (!isset($acl['doctor']) || $acl['doctor']->list <= 0)
        {
            redirect(base_url());
        }

        $query = urldecode($query);

        // get all doctor
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
        $arr_doctor = $this->core_model->get('doctor');

        foreach ($arr_doctor as $doctor)
        {
            $doctor->date_display = date('d F Y', $doctor->date);
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

        $count_doctor = $this->core_model->count('doctor');
        $count_page = ceil($count_doctor / $this->_setting->setting__limit_page);

        $arr_data['title'] = 'Data';
        $arr_data['nav'] = 'Doctor List';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;

        $arr_data['page'] = $page;
        $arr_data['sort'] = $sort;
        $arr_data['row'] = $row;
        $arr_data['query'] = $query;

        $arr_data['arr_doctor'] = $arr_doctor;
        $arr_data['count_page'] = $count_page;

        $this->load->view('doctor', $arr_data);
    }

    public function edit($doctor_id = 0)
    {
        $arr_data = array();
        $acl = $this->_acl;

        if (!isset($acl['doctor']) || $acl['doctor']->edit <= 0)
        {
            redirect(base_url());
        }

        $doctor = $this->core_model->get('doctor', $doctor_id);
        $doctor->date_display = date('Y-m-d', $doctor->date);

        $this->db->select('category_id');
        $this->db->where('doctor_id', $doctor->id);
        $arr_doctor_category = $this->core_model->get('doctor_category');
        $arr_category_id = $this->cms_function->extract_records($arr_doctor_category, 'category_id');

        $doctor->arr_category_id = $arr_category_id;

        $arr_data['title'] = 'Data';
        $arr_data['nav'] = 'Doctor Edit';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;

        $arr_data['doctor'] = $doctor;
        $arr_data['arr_category'] = $this->_generate_category();

        $this->load->view('doctor_edit', $arr_data);
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

            if (!isset($acl['doctor']) || $acl['doctor']->add <= 0)
            {
                throw new Exception('You have no access to add Administrator.');
            }

            $doctor_record = array();
            $arr_category_id = array();

            // get record from views
            foreach ($_POST as $k => $v)
            {
                if ($k == 'category_category')
                {
                    $arr_category_id = $v;
                }
                else
                {
                    $v = $this->security->xss_clean(trim($v));

                    $doctor_record[$k] = ($k == 'date' || $k == 'birthdate') ? strtotime($v) : $v;
                }
            }

            $this->_validate_add($doctor_record);

            // Insert Database
            $doctor_id = $this->core_model->insert('doctor', $doctor_record);
            $doctor_record['id'] = $doctor_id;
            $doctor_record['last_query'] = $this->db->last_query();

            // generate number
            if (!isset($doctor_record['number']) || (isset($doctor_record['number']) && $doctor_record['number'] == ''))
            {
                $doctor_record['number'] = str_pad($doctor_id, 4, 0, STR_PAD_LEFT);
                $this->core_model->update('doctor', $doctor_id, array('number' => $doctor_record['number']));
            }

            // add doctor_category
            $this->_update_doctor_category($doctor_id, $doctor_record, $arr_category_id);

            // add history
            $this->cms_function->add_log($this->_user, $doctor_record, 'add', 'doctor');

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

    public function ajax_delete($doctor_id = 0)
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

            if (!isset($acl['doctor']) || $acl['doctor']->delete <= 0)
            {
                throw new Exception('You have no access to delete Administrator.');
            }

            if ($doctor_id <= 0)
            {
                throw new Exception();
            }

            $doctor = $this->core_model->get('doctor', $doctor_id);
            $updated = $_POST['updated'];
            $doctor_record = array();

            foreach ($doctor as $k => $v)
            {
                $doctor_record[$k] = $v;

                if ($k == 'updated' && $v != $updated)
                {
                    throw new Exception('This data has been updated by another doctor. Please refresh the page.');
                }
            }

            $this->_validate_delete($doctor_id);

            $this->core_model->delete('doctor', $doctor_id);
            $doctor_record['id'] = $doctor->id;
            $doctor_record['name'] = $doctor->name;
            $doctor_record['last_query'] = $this->db->last_query();

            // delete doctor_category
            $this->_delete_doctor_category($doctor_id);

            // add history
            $this->cms_function->add_log($this->_user, $doctor_record, 'delete', 'doctor');

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

    public function ajax_edit($doctor_id = 0)
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

            if (!isset($acl['doctor']) || $acl['doctor']->edit <= 0)
            {
                throw new Exception('You have no access to edit Administrator.');
            }

            if ($doctor_id <= 0)
            {
                throw new Exception();
            }

            $doctor_record = array();
            $arr_category_id = array();

            $old_doctor = $this->core_model->get('doctor', $doctor_id);

            foreach ($old_doctor as $key => $value)
            {
                $old_doctor_record[$key] = $value;
            }

            // get record from views
            foreach ($_POST as $k => $v)
            {
                if ($k == 'updated' && $v != $old_doctor_record['updated'])
                {
                    throw new Exception('This doctor data has been updated by another account. Please refresh this page.');
                }
                elseif ($k == 'category_category')
                {
                    $arr_category_id = $v;
                }
                else
                {
                    $v = $this->security->xss_clean(trim($v));

                    $doctor_record[$k] = ($k == 'date' || $k == 'birthdate') ? strtotime($v) : $v;
                }
            }

            $this->_validate_edit($doctor_id, $doctor_record);

            // Insert Database
            $this->core_model->update('doctor', $doctor_id, $doctor_record);
            $doctor_record['id'] = $doctor_id;
            $doctor_record['last_query'] = $this->db->last_query();

            // populate foreign field
            // if any
            $arr_table = array();
            $this->cms_function->update_foreign_field($arr_table, $doctor_record, 'doctor');

            // add doctor_category
            $this->_update_doctor_category($doctor_id, $doctor_record, $arr_category_id);

            // add user_history
            $this->cms_function->add_log($this->_user, $doctor_record, 'edit', 'doctor');

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
    private function _delete_doctor_category($doctor_id)
    {
        $this->db->where('doctor_id', $doctor_id);
        $this->core_model->delete('doctor_category');
    }

    private function _generate_category()
    {
        $this->db->where('category_id >', 0);
        return $this->core_model->get('category');
    }

    private function _update_doctor_category($doctor_id, $doctor_record, $arr_category_id)
    {
        $this->_delete_doctor_category($doctor_id);

        $arr_category = $this->core_model->get('category', $arr_category_id);

        foreach ($arr_category as $category)
        {
            $doctor_category_record = array();
            $doctor_category_record['category_id'] = $category->id;
            $doctor_category_record['doctor_id'] = $doctor_id;

            $doctor_category_record['category_type'] = $category->type;
            $doctor_category_record['category_number'] = $category->number;
            $doctor_category_record['category_name'] = $category->name;
            $doctor_category_record['category_date'] = $category->date;
            $doctor_category_record['category_status'] = $category->status;

            $doctor_category_record['doctor_type'] = (isset($doctor_record['type'])) ? $doctor_record['type'] : '';
            $doctor_category_record['doctor_number'] = (isset($doctor_record['number'])) ? $doctor_record['number'] : '';
            $doctor_category_record['doctor_name'] = (isset($doctor_record['name'])) ? $doctor_record['name'] : '';
            $doctor_category_record['doctor_date'] = (isset($doctor_record['date'])) ? $doctor_record['date'] : 0;
            $doctor_category_record['doctor_status'] = (isset($doctor_record['status'])) ? $doctor_record['status'] : '';

            $this->core_model->insert('doctor_category', $doctor_category_record);
        }
    }

    private function _validate_add($record)
    {
    }

    private function _validate_delete($doctor_id)
    {
        $this->db->where('deletable <=', 0);
        $this->db->where('id', $doctor_id);
        $count_doctor = $this->core_model->count('doctor');

        if ($count_doctor > 0)
        {
            throw new Exception('Data cannot be deleted.');
        }
    }

    private function _validate_edit($doctor_id, $record)
    {
        // check editable
        $this->db->where('editable <=', 0);
        $this->db->where('id', $doctor_id);
        $count_doctor = $this->core_model->count('doctor');

        if ($count_doctor > 0)
        {
            throw new Exception('Data cannot be updated.');
        }
    }
    /* End Private Function Area */
}