<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Referral extends CI_Controller
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

        if (!isset($acl['referral']) || $acl['referral']->add <= 0)
        {
            redirect(base_url());
        }

        $arr_data['title'] = 'Data';
        $arr_data['nav'] = 'Referral Add';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;
        $arr_data['arr_category'] = $this->_generate_category();

        $this->load->view('referral_add', $arr_data);
    }

    public function all($page = 1, $sort = 'ASC', $row = 'number', $query = '')
    {
        $arr_data = array();
        $acl = $this->_acl;

        if (!isset($acl['referral']) || $acl['referral']->list <= 0)
        {
            redirect(base_url());
        }

        $query = urldecode($query);

        // get all referral
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
        $arr_referral = $this->core_model->get('referral');

        foreach ($arr_referral as $referral)
        {
            $referral->date_display = date('d F Y', $referral->date);
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

        $count_referral = $this->core_model->count('referral');
        $count_page = ceil($count_referral / $this->_setting->setting__limit_page);

        $arr_data['title'] = 'Data';
        $arr_data['nav'] = 'Referral List';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;

        $arr_data['page'] = $page;
        $arr_data['sort'] = $sort;
        $arr_data['row'] = $row;
        $arr_data['query'] = $query;

        $arr_data['arr_referral'] = $arr_referral;
        $arr_data['count_page'] = $count_page;

        $this->load->view('referral', $arr_data);
    }

    public function edit($referral_id = 0)
    {
        $arr_data = array();
        $acl = $this->_acl;

        if (!isset($acl['referral']) || $acl['referral']->edit <= 0)
        {
            redirect(base_url());
        }

        $referral = $this->core_model->get('referral', $referral_id);
        $referral->date_display = date('Y-m-d', $referral->date);

        $this->db->select('category_id');
        $this->db->where('referral_id', $referral->id);
        $arr_referral_category = $this->core_model->get('referral_category');
        $arr_category_id = $this->cms_function->extract_records($arr_referral_category, 'category_id');

        $referral->arr_category_id = $arr_category_id;

        $arr_data['title'] = 'Data';
        $arr_data['nav'] = 'Referral Edit';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;

        $arr_data['referral'] = $referral;
        $arr_data['arr_category'] = $this->_generate_category();

        $this->load->view('referral_edit', $arr_data);
    }

    public function export_referral_result()
    {
        $this->load->library('cms_excel');

        $arr_referral = $this->core_model->get('referral');
        $arr_referral_lookup = array();

        foreach ($arr_referral as $referral)
        {
            $arr_referral_lookup[$referral->id] = $referral->email;
        }

        foreach ($arr_referral as $key => $referral)
        {
            $referral->referral_email = (isset($arr_referral_lookup[$referral->referral_id])) ? $arr_referral_lookup[$referral->referral_id] : '';
        }

        $title = 'Report referral';
        $objPHPExcel = $this->cms_excel->create_excel($title);
        $objPHPExcel->getActiveSheet()->setCellValue('A1', $title);

        $this->cms_excel->setbold($objPHPExcel, array('A1'));
        $this->cms_excel->setmerge($objPHPExcel, array('A1:B1'));
        $this->cms_excel->setautosize($objPHPExcel, array('A', 'B'));

        $row = 3;

        $objPHPExcel->getActiveSheet()->setCellValue("A{$row}", 'Email');
        $objPHPExcel->getActiveSheet()->setCellValue("B{$row}", 'Email Referral');

        $row += 1;

        foreach ($arr_referral as $referral)
        {
            $objPHPExcel->getActiveSheet()->setCellValue("A{$row}", $referral->email);
            $objPHPExcel->getActiveSheet()->setCellValue("B{$row}", $referral->referral_email);

            $row += 1;

        }

        $this->cms_excel->download_excel($objPHPExcel, $title);
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

            if (!isset($acl['referral']) || $acl['referral']->add <= 0)
            {
                throw new Exception('You have no access to add Administrator.');
            }

            $referral_record = array();
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

                    $referral_record[$k] = ($k == 'date' || $k == 'birthdate') ? strtotime($v) : $v;
                }
            }

            $this->_validate_add($referral_record);

            // Insert Database
            $referral_id = $this->core_model->insert('referral', $referral_record);
            $referral_record['id'] = $referral_id;
            $referral_record['last_query'] = $this->db->last_query();

            // generate number
            if (!isset($referral_record['number']) || (isset($referral_record['number']) && $referral_record['number'] == ''))
            {
                $referral_record['number'] = str_pad($referral_id, 4, 0, STR_PAD_LEFT);
                $this->core_model->update('referral', $referral_id, array('number' => $referral_record['number']));
            }

            // add history
            $this->cms_function->add_log($this->_user, $referral_record, 'add', 'referral');

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

    public function ajax_delete($referral_id = 0)
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

            if (!isset($acl['referral']) || $acl['referral']->delete <= 0)
            {
                throw new Exception('You have no access to delete Administrator.');
            }

            if ($referral_id <= 0)
            {
                throw new Exception();
            }

            $referral = $this->core_model->get('referral', $referral_id);
            $updated = $_POST['updated'];
            $referral_record = array();

            foreach ($referral as $k => $v)
            {
                $referral_record[$k] = $v;

                if ($k == 'updated' && $v != $updated)
                {
                    throw new Exception('This data has been updated by another referral. Please refresh the page.');
                }
            }

            $this->_validate_delete($referral_id);

            $this->core_model->delete('referral', $referral_id);
            $referral_record['id'] = $referral->id;
            $referral_record['name'] = $referral->name;
            $referral_record['last_query'] = $this->db->last_query();

            // add history
            $this->cms_function->add_log($this->_user, $referral_record, 'delete', 'referral');

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

    public function ajax_edit($referral_id = 0)
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

            if (!isset($acl['referral']) || $acl['referral']->edit <= 0)
            {
                throw new Exception('You have no access to edit Administrator.');
            }

            if ($referral_id <= 0)
            {
                throw new Exception();
            }

            $referral_record = array();
            $arr_category_id = array();

            $old_referral = $this->core_model->get('referral', $referral_id);

            foreach ($old_referral as $key => $value)
            {
                $old_referral_record[$key] = $value;
            }

            // get record from views
            foreach ($_POST as $k => $v)
            {
                if ($k == 'updated' && $v != $old_referral_record['updated'])
                {
                    throw new Exception('This referral data has been updated by another account. Please refresh this page.');
                }
                elseif ($k == 'category_category')
                {
                    $arr_category_id = $v;
                }
                else
                {
                    $v = $this->security->xss_clean(trim($v));

                    $referral_record[$k] = ($k == 'date' || $k == 'birthdate') ? strtotime($v) : $v;
                }
            }

            $this->_validate_edit($referral_id, $referral_record);

            // Insert Database
            $this->core_model->update('referral', $referral_id, $referral_record);
            $referral_record['id'] = $referral_id;
            $referral_record['last_query'] = $this->db->last_query();

            // populate foreign field
            // if any
            $arr_table = array();
            $this->cms_function->update_foreign_field($arr_table, $referral_record, 'referral');

            // add user_history
            $this->cms_function->add_log($this->_user, $referral_record, 'edit', 'referral');

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

    public function ajax_register()
    {
        $json['status'] = 'success';

        try
        {
            $this->db->trans_start();

            // get email
            // sample_email = developer@norm.id

            $email = 'sugi@norm.id'; // $this->input->post('email');
            $referral_code = 'mrjpamyu'; // $this->input->post('referral_code');

            // check referral_code
            $referral_record = array();
            $referral_record['email'] = $email;
            $referral_record['date'] = time();
            $referral_record['validity'] = 0;
            $referral_record['code'] = $this->cms_function->generate_random_number('referral', 8);

            if ($referral_code != '')
            {
                $this->db->where('code', $referral_code);
                $arr_referral = $this->core_model->get('referral');

                if (count($arr_referral) > 0)
                {
                    $referral_record['referral_id'] = $arr_referral[0]->id;

                    $referral_record['referral_type'] = $arr_referral[0]->type;
                    $referral_record['referral_number'] = $arr_referral[0]->number;
                    $referral_record['referral_name'] = $arr_referral[0]->name;
                    $referral_record['referral_date'] = $arr_referral[0]->date;
                    $referral_record['referral_status'] = $arr_referral[0]->status;
                }
            }

            $this->core_model->insert('referral', $referral_record);

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

    private function _validate_delete($referral_id)
    {
        $this->db->where('deletable <=', 0);
        $this->db->where('id', $referral_id);
        $count_referral = $this->core_model->count('referral');

        if ($count_referral > 0)
        {
            throw new Exception('Data cannot be deleted.');
        }
    }

    private function _validate_edit($referral_id, $record)
    {
        // check editable
        $this->db->where('editable <=', 0);
        $this->db->where('id', $referral_id);
        $count_referral = $this->core_model->count('referral');

        if ($count_referral > 0)
        {
            throw new Exception('Data cannot be updated.');
        }
    }
    /* End Private Function Area */
}