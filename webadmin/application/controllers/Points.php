<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Points extends CI_Controller
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

        if (!isset($acl['points']) || $acl['points']->add <= 0)
        {
            redirect(base_url());
        }

        if ($patient_id <= 0)
        {
            redirect(base_url() . 'patient/all/');
        }

        $arr_data['title'] = 'Data';
        $arr_data['nav'] = 'Points Add';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;
        $arr_data['patient'] = $this->core_model->get('patient', $patient_id);

        $this->load->view('points_add', $arr_data);
    }

    public function all($patient_id = 0, $page = 1, $sort = 'DESC', $row = 'date', $query = '')
    {
        $arr_data = array();
        $acl = $this->_acl;

        if (!isset($acl['points']) || $acl['points']->list <= 0)
        {
            redirect(base_url());
        }

        if ($patient_id <= 0)
        {
            redirect(base_url() . 'patient/all/');
        }

        $query = urldecode($query);

        // get all points
        $this->db->where('patient_id', $patient_id);

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
        $arr_points = $this->core_model->get('points');
        $total_points = 0;

        foreach ($arr_points as $points)
        {
            $points->date_display = date('d F Y', $points->date);
            $points->points_display = number_format($points->points, 0, '.', ',');

            $total_points += $points->points;
        }

        $total_points_display = number_format($total_points, 0, ',', '.');

        // count page
        $this->db->where('patient_id', $patient_id);

        if ($query != '')
        {
            $this->db->like('type', $query);
            $this->db->or_like('number', $query);
            $this->db->or_like('name', $query);
            $this->db->or_like('date', $query);
            $this->db->or_like('status', $query);
        }

        $count_points = $this->core_model->count('points');
        $count_page = ceil($count_points / $this->_setting->setting__limit_page);

        $arr_data['title'] = 'Data';
        $arr_data['nav'] = 'Points List';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;

        $arr_data['page'] = $page;
        $arr_data['sort'] = $sort;
        $arr_data['row'] = $row;
        $arr_data['query'] = $query;

        $arr_data['arr_points'] = $arr_points;
        $arr_data['total_points'] = $total_points;
        $arr_data['total_points_display'] = $total_points_display;
        $arr_data['count_page'] = $count_page;
        $arr_data['patient'] = $this->core_model->get('patient', $patient_id);

        $this->load->view('points', $arr_data);
    }

    public function edit($points_id = 0)
    {
        $arr_data = array();
        $acl = $this->_acl;

        if (!isset($acl['points']) || $acl['points']->edit <= 0)
        {
            redirect(base_url());
        }

        $points = $this->core_model->get('points', $points_id);
        $points->date_display = date('Y-m-d', $points->date);
        $points->points_display = number_format($points->points, 0, '', '');

        $arr_data['title'] = 'Data';
        $arr_data['nav'] = 'Points Edit';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;

        $arr_data['points'] = $points;
        $arr_data['patient'] = $this->core_model->get('patient', $points->patient_id);

        $this->load->view('points_edit', $arr_data);
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

            if (!isset($acl['points']) || $acl['points']->add <= 0)
            {
                throw new Exception('You have no access to add Administrator.');
            }

            $points_record = array();
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

                    $points_record[$k] = ($k == 'date' || $k == 'birthdate') ? strtotime($v) : $v;
                }
            }

            $points_record['date'] = time();
            $points_record = $this->cms_function->populate_foreign_field($points_record['patient_id'], $points_record, 'patient');

            $this->_validate_add($points_record);

            // Insert Database
            $points_id = $this->core_model->insert('points', $points_record);
            $points_record['id'] = $points_id;
            $points_record['last_query'] = $this->db->last_query();

            // generate number
            if (!isset($points_record['number']) || (isset($points_record['number']) && $points_record['number'] == ''))
            {
                $points_record['number'] = str_pad($points_id, 4, 0, STR_PAD_LEFT);
                $this->core_model->update('points', $points_id, array('number' => $points_record['number']));
            }

            // add history
            $this->cms_function->add_log($this->_user, $points_record, 'add', 'points');

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

    public function ajax_delete($points_id = 0)
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

            if (!isset($acl['points']) || $acl['points']->delete <= 0)
            {
                throw new Exception('You have no access to delete Administrator.');
            }

            if ($points_id <= 0)
            {
                throw new Exception();
            }

            $points = $this->core_model->get('points', $points_id);
            $updated = $_POST['updated'];
            $points_record = array();

            foreach ($points as $k => $v)
            {
                $points_record[$k] = $v;

                if ($k == 'updated' && $v != $updated)
                {
                    throw new Exception('This data has been updated by another points. Please refresh the page.');
                }
            }

            $this->_validate_delete($points_id);

            $this->core_model->delete('points', $points_id);
            $points_record['id'] = $points->id;
            $points_record['name'] = $points->name;
            $points_record['last_query'] = $this->db->last_query();

            // add history
            $this->cms_function->add_log($this->_user, $points_record, 'delete', 'points');

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

    public function ajax_edit($points_id = 0)
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

            if (!isset($acl['points']) || $acl['points']->edit <= 0)
            {
                throw new Exception('You have no access to edit Administrator.');
            }

            if ($points_id <= 0)
            {
                throw new Exception();
            }

            $points_record = array();
            $arr_category_id = array();

            $old_points = $this->core_model->get('points', $points_id);

            foreach ($old_points as $key => $value)
            {
                $old_points_record[$key] = $value;
            }

            // get record from views
            foreach ($_POST as $k => $v)
            {
                if ($k == 'updated' && $v != $old_points_record['updated'])
                {
                    throw new Exception('This points data has been updated by another account. Please refresh this page.');
                }
                elseif ($k == 'category_category')
                {
                    $arr_category_id = $v;
                }
                else
                {
                    $v = $this->security->xss_clean(trim($v));

                    $points_record[$k] = ($k == 'date' || $k == 'birthdate') ? strtotime($v) : $v;
                }
            }

            $this->_validate_edit($points_id, $points_record);

            // Insert Database
            $this->core_model->update('points', $points_id, $points_record);
            $points_record['id'] = $points_id;
            $points_record['last_query'] = $this->db->last_query();

            // populate foreign field
            // if any
            $arr_table = array();
            $this->cms_function->update_foreign_field($arr_table, $points_record, 'points');

            // add user_history
            $this->cms_function->add_log($this->_user, $points_record, 'edit', 'points');

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

    private function _validate_delete($points_id)
    {
        $this->db->where('deletable <=', 0);
        $this->db->where('id', $points_id);
        $count_points = $this->core_model->count('points');

        if ($count_points > 0)
        {
            throw new Exception('Data cannot be deleted.');
        }
    }

    private function _validate_edit($points_id, $record)
    {
        // check editable
        $this->db->where('editable <=', 0);
        $this->db->where('id', $points_id);
        $count_points = $this->core_model->count('points');

        if ($count_points > 0)
        {
            throw new Exception('Data cannot be updated.');
        }
    }
    /* End Private Function Area */
}