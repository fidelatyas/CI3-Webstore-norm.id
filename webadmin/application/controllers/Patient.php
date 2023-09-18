<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends CI_Controller
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
    public function export()
    {
        $this->load->library('cms_excel');

        // get patient
        $this->db->order_by("number, name");
        $arr_patient = $this->core_model->get('patient');

        $title = 'Patient List';
        $objPHPExcel = $this->cms_excel->create_excel($title);
        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'Patient List');
        $objPHPExcel->getActiveSheet()->setCellValue('A2', 'Exported Date: ' . date('d F Y', time()));
        $this->cms_excel->setbold($objPHPExcel, array('A1', 'A2'));
        $this->cms_excel->setmerge($objPHPExcel, array('A1:G1', 'A2:G2'));
        $this->cms_excel->setautosize($objPHPExcel, array('A', 'B', 'C', 'D', 'E', 'F', 'G'));

        $row = 4;

        if (count($arr_patient) > 0)
        {
            $objPHPExcel->getActiveSheet()->setCellValue("A{$row}", 'Number');
            $objPHPExcel->getActiveSheet()->setCellValue("B{$row}", 'Name');
            $objPHPExcel->getActiveSheet()->setCellValue("C{$row}", 'Phone');
            $objPHPExcel->getActiveSheet()->setCellValue("D{$row}", 'Email');
            $objPHPExcel->getActiveSheet()->setCellValue("E{$row}", 'Gender');
            $objPHPExcel->getActiveSheet()->setCellValue("F{$row}", 'Register Date');
            $objPHPExcel->getActiveSheet()->setCellValue("G{$row}", 'Author');
            $this->cms_excel->setbold($objPHPExcel, array("A{$row}", "B{$row}", "C{$row}", "D{$row}", "E{$row}", "F{$row}", "G{$row}"));
            $this->cms_excel->setborder($objPHPExcel, "A{$row}", "G{$row}", '#000');

            $row += 1;

            foreach ($arr_patient as $patient)
            {
                $objPHPExcel->getActiveSheet()->setCellValueExplicit("A{$row}", $patient->number);
                $objPHPExcel->getActiveSheet()->setCellValue("B{$row}", $patient->name);
                $objPHPExcel->getActiveSheet()->setCellValue("C{$row}", $patient->phone);
                $objPHPExcel->getActiveSheet()->setCellValue("D{$row}", $patient->email);
                $objPHPExcel->getActiveSheet()->setCellValue("E{$row}", $patient->gender);
                $objPHPExcel->getActiveSheet()->setCellValue("F{$row}", PHPExcel_Shared_Date::PHPToExcel($patient->date));
                $objPHPExcel->getActiveSheet()->setCellValue("G{$row}", $patient->author_name);
                $this->cms_excel->setdateformat($objPHPExcel, array("F{$row}"));
                $this->cms_excel->setborder($objPHPExcel, "A{$row}", "G{$row}", '#000');

                $row += 1;
            }
        }
        else
        {
            $objPHPExcel->getActiveSheet()->setCellValue("A{$row}", 'No Data.');
        }

        $this->cms_excel->download_excel($objPHPExcel, $title);
    }




    public function add()
    {
        $arr_data = array();
        $acl = $this->_acl;

        if (!isset($acl['patient']) || $acl['patient']->add <= 0)
        {
            redirect(base_url());
        }

        $arr_data['title'] = 'Data';
        $arr_data['nav'] = 'Patient Add';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;

        $this->load->view('patient_add', $arr_data);
    }

    public function all($page = 1, $sort = 'ASC', $row = 'number', $query = '')
    {
        $arr_data = array();
        $acl = $this->_acl;

        if (!isset($acl['patient']) || $acl['patient']->list <= 0)
        {
            redirect(base_url());
        }

        $query = urldecode($query);

        // get all patient
        if ($query != '')
        {
            $this->db->like('type', $query);
            $this->db->or_like('number', $query);
            $this->db->or_like('name', $query);
            $this->db->or_like('date', $query);
            $this->db->or_like('status', $query);
            $this->db->or_like('phone', $query);
            $this->db->or_like('email', $query);
        }

        $this->db->order_by($row, $sort);
        $this->db->limit($this->_setting->setting__limit_page, ($page - 1) * $this->_setting->setting__limit_page);
        $arr_patient = $this->core_model->get('patient');
        $arr_patient_id = $this->cms_function->extract_records($arr_patient, 'id');

        $arr_consultation_lookup = array();

        if (count($arr_patient_id) > 0)
        {
            $this->db->select('id, patient_id');
            $this->db->where_in('patient_id', $arr_patient_id);
            $arr_consultation = $this->core_model->get('consultation');

            foreach ($arr_consultation as $consultation)
            {
                if (isset($arr_consultation_lookup[$consultation->patient_id]))
                {
                    $arr_consultation_lookup[$consultation->patient_id] += 1;

                    continue;
                }

                $arr_consultation_lookup[$consultation->patient_id] = 1;
            }
        }

        foreach ($arr_patient as $patient)
        {
            $patient->date_display = date('d F Y', $patient->date);
            $patient->birthdate_display = date('d F Y', $patient->birthdate);

            $patient->consultation_status = (isset($arr_consultation_lookup[$patient->id]) && $arr_consultation_lookup[$patient->id] > 0) ? 'Existing' : 'New';
        }

        // count page
        if ($query != '')
        {
            $this->db->like('type', $query);
            $this->db->or_like('number', $query);
            $this->db->or_like('name', $query);
            $this->db->or_like('date', $query);
            $this->db->or_like('status', $query);
            $this->db->or_like('phone', $query);
            $this->db->or_like('email', $query);
        }

        $count_patient = $this->core_model->count('patient');
        $count_page = ceil($count_patient / $this->_setting->setting__limit_page);

        $arr_data['title'] = 'Data';
        $arr_data['nav'] = 'Patient List';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;

        $arr_data['page'] = $page;
        $arr_data['sort'] = $sort;
        $arr_data['row'] = $row;
        $arr_data['query'] = $query;

        $arr_data['arr_patient'] = $arr_patient;
        $arr_data['count_page'] = $count_page;

        $this->load->view('patient', $arr_data);
    }

    public function edit($patient_id = 0)
    {
        $arr_data = array();
        $acl = $this->_acl;

        if (!isset($acl['patient']) || $acl['patient']->edit <= 0)
        {
            redirect(base_url());
        }

        $patient = $this->core_model->get('patient', $patient_id);
        $patient->date_display = date('Y-m-d', $patient->date);
        $patient->birthdate_display = date('Y-m-d', $patient->birthdate);

        $arr_data['title'] = 'Data';
        $arr_data['nav'] = 'Patient Edit';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;

        $arr_data['patient'] = $patient;

        $this->load->view('patient_edit', $arr_data);
    }

    public function order($patient_id = 0, $page = 1, $sort = 'ASC', $row = 'status', $query = '')
    {
        $arr_data = array();
        $acl = $this->_acl;

        if (!isset($acl['order']) || $acl['order']->list <= 0)
        {
            redirect(base_url());
        }

        if ($patient_id <= 0)
        {
            redirect(base_url() . 'patient/all/');
        }

        $query = urldecode($query);

        // get all order
        $this->db->where('patient_id', $patient_id);

        if ($query != '')
        {
            $this->db->like('type', $query);
            $this->db->or_like('number', $query);
            $this->db->or_like('name', $query);
            $this->db->or_like('date', $query);
            $this->db->or_like('status', $query);
        }

        if ($row == 'status' || $row == 'payment_status')
        {
            if ($sort == 'ASC')
            {
                $this->db->order_by("FIELD(payment_status, 'Paid', 'Pending', 'expire', 'EXPIRED', 'FREE', 'deny', 'Refund', ''), FIELD(status, 'Pending', 'Processing', 'Shipped', 'Delivered', 'Cancelled'), date DESC, id DESC");
            }
            else
            {
                $this->db->order_by("FIELD(payment_status, 'Refund', 'deny', 'FREE', 'EXPIRED', 'expire', 'Pending', 'Paid', ''), FIELD(status, 'Processing', 'Pending', 'Shipped', 'Delivered', 'Cancelled'), date DESC, id DESC");
            }
        }
        else
        {
            $this->db->order_by($row, $sort);
        }

        $this->db->limit($this->_setting->setting__limit_page, ($page - 1) * $this->_setting->setting__limit_page);
        $arr_order = $this->core_model->get('order');
        $arr_consultation_id = $this->cms_function->extract_records($arr_order, 'consultation_id');
        $arr_patient_id = $this->cms_function->extract_records($arr_order, 'patient_id');
        $arr_order_id = $this->cms_function->extract_records($arr_order, 'id');
        $arr_consultation_lookup = array();
        $arr_patient_id = array();
        $arr_order_item_lookup = array();

        $arr_consultation = $this->core_model->get('consultation', $arr_consultation_id);

        foreach ($arr_consultation as $consultation)
        {
            $arr_consultation_lookup[$consultation->id] = clone $consultation;
        }

        $arr_patient = $this->core_model->get('patient', $arr_patient_id);

        foreach ($arr_patient as $patient)
        {
            $arr_patient_lookup[$patient->id] = clone $patient;
        }

        if (count($arr_order_id) > 0)
        {
            $this->db->where_in('order_id', $arr_order_id);
            $arr_order_item = $this->core_model->get('order_item');

            foreach ($arr_order_item as $order_item)
            {
                $order_item->quantity_display = number_format($order_item->quantity, 0, '', '');

                if (isset($arr_order_item_lookup[$order_item->order_id]))
                {
                    $arr_order_item_lookup[$order_item->order_id] .= ", {$order_item->quantity_display} {$order_item->product_name}";

                    continue;
                }

                $arr_order_item_lookup[$order_item->order_id] = "{$order_item->quantity_display} {$order_item->product_name}";
            }
        }

        foreach ($arr_order as $key => $order)
        {
            $order->date_display = date('d F Y', $order->date);
            $order->total_display = number_format($order->grand_total, 0, '.', ',');

            $order->patient_name = (isset($arr_patient_lookup[$order->patient_id])) ? ucwords(strtolower($arr_patient_lookup[$order->patient_id]->name)) : $order->patient_name;
            $order->category_name = (isset($arr_consultation_lookup[$order->consultation_id])) ? $arr_consultation_lookup[$order->consultation_id]->category_name : '';
            $order->consultation_status = (isset($arr_consultation_lookup[$order->consultation_id])) ? $arr_consultation_lookup[$order->consultation_id]->status : '';

            $order->patient_phone = (isset($arr_patient_lookup[$order->patient_id])) ? $arr_patient_lookup[$order->patient_id]->phone : $order->shipping_phone;
            $order->patient_email = (isset($arr_patient_lookup[$order->patient_id])) ? $arr_patient_lookup[$order->patient_id]->email : $order->shipping_email;
            $order->patient_phone = substr_replace($order->patient_phone, "62", 0, 1);
            $order->patient_name = ($order->patient_id <= 0) ? $order->shipping_name : $order->patient_name;
            $order->item_list = (isset($arr_order_item_lookup[$order->id])) ? $arr_order_item_lookup[$order->id] : '';
            $order->source = (isset($arr_patient_lookup[$order->patient_id])) ? $arr_patient_lookup[$order->patient_id]->source : '';

            $order->courier = 'SAP';

            if ($order->shipping_courier == 'REG' || $order->shipping_courier == 'ND' || $order->shipping_courier == 'SD')
            {
                $order->courier = 'Anteraja';
            }
            elseif ($order->shipping_courier == 'EZ')
            {
                $order->courier = 'JNT';
            }

            $order->courier = $order->courier . ' - ' . $order->shipping_courier;
        }

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

        $count_order = $this->core_model->count('order');
        $count_page = ceil($count_order / $this->_setting->setting__limit_page);

        $arr_data['title'] = 'Data';
        $arr_data['nav'] = 'patient List';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;

        $arr_data['page'] = $page;
        $arr_data['sort'] = $sort;
        $arr_data['row'] = $row;
        $arr_data['query'] = $query;

        $arr_data['arr_order'] = $arr_order;
        $arr_data['count_page'] = $count_page;
        $arr_data['patient'] = $this->core_model->get('patient', $patient_id);

        $this->load->view('patient_order', $arr_data);
    }

    public function profile($patient_id = 0)
    {
        $arr_data = array();
        $acl = $this->_acl;

        if (!isset($acl['patient']) || $acl['patient']->view <= 0)
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

        // get consultation history
        $this->db->where('patient_id', $patient->id);
        $this->db->order_by('date DESC');
        $patient->arr_consultation = $this->core_model->get('consultation');
        $arr_consultation_id = $this->cms_function->extract_records($patient->arr_consultation, 'id');

        $arr_consultation_lookup = array();

        foreach ($patient->arr_consultation as $consultation)
        {
            $consultation->date_display = date('d F Y', $consultation->date);

            $arr_consultation_lookup[$consultation->id] = clone $consultation;
        }

        // get medication
        $patient->arr_consultation_product = array();

        if (count($arr_consultation_id) > 0)
        {
            $this->db->where_in('consultation_id', $arr_consultation_id);
            $this->db->group_by('product_id');
            $patient->arr_consultation_product = $this->core_model->get('consultation_product');
        }

        $arr_product = $this->core_model->get('product');
        $arr_product_lookup = array();

        foreach ($arr_product as $product)
        {
            $arr_product_lookup[$product->id] = clone $product;
        }

        foreach ($patient->arr_consultation_product as $consultation_product)
        {
            $consultation_product->product_name = (isset($arr_product_lookup[$consultation_product->product_id])) ? $arr_product_lookup[$consultation_product->product_id] : '';
            $consultation_product->product_name = (isset($arr_product_lookup[$consultation_product->product_id])) ? $arr_product_lookup[$consultation_product->product_id]->name . ' ' . $arr_product_lookup[$consultation_product->product_id]->strength : '';
            $consultation_product->amount = (isset($arr_product_lookup[$consultation_product->product_id])) ? $arr_product_lookup[$consultation_product->product_id]->amount : '';

            $consultation_product->method = (isset($arr_product_lookup[$consultation_product->product_id])) ? $arr_product_lookup[$consultation_product->product_id]->method : '';
            $consultation_product->dosage = (isset($arr_product_lookup[$consultation_product->product_id])) ? $arr_product_lookup[$consultation_product->product_id]->dosage : '';
            $consultation_product->timing = (isset($arr_product_lookup[$consultation_product->product_id])) ? $arr_product_lookup[$consultation_product->product_id]->timing : '';

            $consultation_product->doctor_name = (isset($arr_consultation_lookup[$consultation_product->consultation_id])) ? $arr_consultation_lookup[$consultation_product->consultation_id]->doctor_name : '';

            $consultation_product->prescription_validity = (isset($arr_consultation_lookup[$consultation_product->consultation_id])) ? $arr_consultation_lookup[$consultation_product->consultation_id]->prescription_validity : '';
        }

        // get order history
        $this->db->where('patient_id', $patient->id);
        $this->db->order_by('date DESC');
        $patient->arr_order = $this->core_model->get('order');
        $arr_order_id = $this->cms_function->extract_records($patient->arr_order, 'id');
        $arr_order_item_lookup = array();

        if (count($arr_order_id) > 0)
        {
            $this->db->where_in('order_id', $arr_order_id);
            $arr_order_item = $this->core_model->get('order_item');

            foreach ($arr_order_item as $order_item)
            {
                $order_item->quantity_display = number_format($order_item->quantity, 0, '', '');

                if (isset($arr_order_item_lookup[$order_item->order_id]))
                {
                    $arr_order_item_lookup[$order_item->order_id] .= ", {$order_item->quantity_display} {$order_item->product_name}";

                    continue;
                }

                $arr_order_item_lookup[$order_item->order_id] = "{$order_item->quantity_display} {$order_item->product_name}";
            }
        }

        foreach ($patient->arr_order as $order)
        {
            $order->date_display = date('d F Y', $order->date);
            $order->grand_total_display = number_format($order->grand_total, 0, '.', ',');

            $order->item_list = (isset($arr_order_item_lookup[$order->id])) ? $arr_order_item_lookup[$order->id] : '';
            $order->patient_phone = (preg_match("/^(?:0|00)\d+$/", $patient->phone)) ? substr_replace($patient->phone, "62", 0, 1) : $patient->phone;
            $order->patient_phone = substr_replace($patient->phone, "62", 0, 1);
            $order->patient_email = $patient->email;
        }

        // calculate points
        $this->db->select('SUM(points) as sum_points');
        $this->db->where('patient_id', $patient->id);
        $this->db->where('status', 'Approve');
        $this->db->order_by('date DESC');
        $arr_points = $this->core_model->get('points');

        $points = (count($arr_points) > 0) ? $arr_points[0]->sum_points : 0;
        $patient->points = number_format($points, 0, '.', ',');

        // get CRM
        $this->db->where('patient_id', $patient_id);
        $this->db->order_by('date DESC');
        $patient->count_crm = $this->core_model->count('crm');

        $arr_data['title'] = 'Data';
        $arr_data['nav'] = 'Patient Edit';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;

        $arr_data['patient'] = $patient;

        $this->load->view('patient_profile', $arr_data);
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

            if (!isset($acl['patient']) || $acl['patient']->add <= 0)
            {
                throw new Exception('You have no access to add Administrator.');
            }

            $patient_record = array();

            // get record from views
            foreach ($_POST as $k => $v)
            {
                $v = $this->security->xss_clean(trim($v));

                $patient_record[$k] = ($k == 'date' || $k == 'birthdate') ? strtotime($v) : $v;
            }

            $this->_validate_add($patient_record);

            // Insert Database
            $patient_id = $this->core_model->insert('patient', $patient_record);
            $patient_record['id'] = $patient_id;
            $patient_record['last_query'] = $this->db->last_query();

            // generate number
            if (!isset($patient_record['number']) || (isset($patient_record['number']) && $patient_record['number'] == ''))
            {
                $patient_record['number'] = '#PAT-' . str_pad($patient_id, 6, 0, STR_PAD_LEFT);
                $this->core_model->update('patient', $patient_id, array('number' => $patient_record['number']));
            }

            // add history
            $this->cms_function->add_log($this->_user, $patient_record, 'add', 'patient');

            $json['patient_id'] = $patient_id;

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

    public function ajax_delete($patient_id = 0)
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

            if (!isset($acl['patient']) || $acl['patient']->delete <= 0)
            {
                throw new Exception('You have no access to delete Administrator.');
            }

            if ($patient_id <= 0)
            {
                throw new Exception();
            }

            $patient = $this->core_model->get('patient', $patient_id);
            $updated = $_POST['updated'];
            $patient_record = array();

            foreach ($patient as $k => $v)
            {
                $patient_record[$k] = $v;

                if ($k == 'updated' && $v != $updated)
                {
                    throw new Exception('This data has been updated by another patient. Please refresh the page.');
                }
            }

            $this->_validate_delete($patient_id);

            $this->core_model->delete('patient', $patient_id);
            $patient_record['id'] = $patient->id;
            $patient_record['name'] = $patient->name;
            $patient_record['last_query'] = $this->db->last_query();

            $this->cms_function->add_log($this->_user, $patient_record, 'delete', 'patient');

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

    public function ajax_edit($patient_id = 0)
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

            if (!isset($acl['patient']) || $acl['patient']->edit <= 0)
            {
                throw new Exception('You have no access to edit Administrator.');
            }

            if ($patient_id <= 0)
            {
                throw new Exception();
            }

            $patient_record = array();

            $old_patient = $this->core_model->get('patient', $patient_id);

            foreach ($old_patient as $key => $value)
            {
                $old_patient_record[$key] = $value;
            }

            // get record from views
            foreach ($_POST as $k => $v)
            {
                $v = $this->security->xss_clean(trim($v));

                if ($k == 'updated' && $v != $old_patient_record['updated'])
                {
                    throw new Exception('This patient data has been updated by another account. Please refresh this page.');
                }
                else
                {
                    $patient_record[$k] = ($k == 'date' || $k == 'birthdate') ? strtotime($v) : $v;
                }
            }

            $this->_validate_edit($patient_id, $patient_record);

            // Insert Database
            $this->core_model->update('patient', $patient_id, $patient_record);
            $patient_record['id'] = $patient_id;
            $patient_record['last_query'] = $this->db->last_query();

            // populate foreign field
            // if any
            $arr_table = array();
            $this->cms_function->update_foreign_field($arr_table, $patient_record, 'patient');

            // add user_history
            $this->cms_function->add_log($this->_user, $patient_record, 'edit', 'patient');

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

    public function ajax_renew_consultation($consultation_id = 0)
    {
        $json['status'] = 'success';

        try
        {
            if ($consultation_id <= 0)
            {
                throw new Exception();
            }

            if ($this->session->userdata('user_id') != $this->_user->id)
            {
                throw new Exception('Server Error. Please log out first.');
            }

            $acl = $this->_acl;

            $consultation = $this->core_model->get('consultation', $consultation_id);

            if ($consultation->type == 'Pending' || $consultation->type == 'On Review' || $consultation->type == 'Finish')
            {
                throw new Exception();
            }

            // update consultation to Pending
            $consultation_record = array();
            $consultation_record['status'] = 'Pending';
            $consultation_record['date_consultation_start'] = 0;
            $consultation_record['date_consultation_end'] = 0;
            $consultation_record['response'] = '';
            $consultation_record['response_reason'] = '';
            $consultation_record['doctor_id'] = 0;
            $consultation_record['doctor_type'] = '';
            $consultation_record['doctor_number'] = '';
            $consultation_record['doctor_name'] = '';
            $consultation_record['doctor_date'] = '';
            $consultation_record['doctor_status'] = '';

            $this->core_model->update('consultation', $consultation->id, $consultation_record);

            // add history
            $consultation_history_record = array();
            $consultation_history_record['consultation_id'] = $consultation->id;
            $consultation_history_record['patient_id'] = $consultation->patient_id;
            $consultation_history_record['name'] = 'Renew Consultation by ' . $this->_user->name;
            $consultation_history_record['date'] = time();

            $consultation_history_record['consultation_type'] = $consultation->type;
            $consultation_history_record['consultation_number'] = $consultation->number;
            $consultation_history_record['consultation_name'] = $consultation->name;
            $consultation_history_record['consultation_date'] = $consultation->date;
            $consultation_history_record['consultation_status'] = $consultation->status;
            $consultation_history_record['patient_type'] = $consultation->patient_type;
            $consultation_history_record['patient_number'] = $consultation->patient_number;
            $consultation_history_record['patient_name'] = $consultation->patient_name;
            $consultation_history_record['patient_date'] = $consultation->patient_date;
            $consultation_history_record['patient_status'] = $consultation->patient_status;
            $this->core_model->insert('consultation_history', $consultation_history_record);
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

    private function _validate_delete($patient_id)
    {
        $this->db->where('deletable <=', 0);
        $this->db->where('id', $patient_id);
        $count_patient = $this->core_model->count('patient');

        if ($count_patient > 0)
        {
            throw new Exception('Data cannot be deleted.');
        }
    }

    private function _validate_edit($patient_id, $record)
    {
        // check editable
        $this->db->where('editable <=', 0);
        $this->db->where('id', $patient_id);
        $count_patient = $this->core_model->count('patient');

        if ($count_patient > 0)
        {
            throw new Exception('Data cannot be updated.');
        }
    }
    /* End Private Function Area */
}