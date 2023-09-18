<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller
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
    public function consultation($date_start = '', $date_end = '')
    {
        $arr_data = array();
        $acl = $this->_acl;

        if (!isset($acl['report_consultation']) || $acl['report_consultation']->view <= 0)
        {
            redirect(base_url());
        }

        $date_start = ($date_start != '') ? strtotime($date_start . ' 00:00:00') : strtotime(date('Y-m-1 00:00:00', time()));
        $date_end = ($date_end != '') ? strtotime($date_end . ' 23:59:59') : strtotime(date('Y-m-d 23:59:59', time()));

        $arr_data['title'] = 'Report';
        $arr_data['nav'] = 'Report Consultation';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;
        $arr_data['date_start'] = date('Y-m-d', $date_start);
        $arr_data['date_end'] = date('Y-m-d', $date_end);
        $arr_data['consultation_record'] = $this->_consultation($date_start, $date_end);

        $this->load->view('report_consultation', $arr_data);
    }

    public function crm($date_start = '', $date_end = '')
    {
        $arr_data = array();
        $acl = $this->_acl;

        if (!isset($acl['report_crm']) || $acl['report_crm']->view <= 0)
        {
            redirect(base_url());
        }

        $date_start = ($date_start != '') ? strtotime($date_start . ' 00:00:00') : strtotime(date('Y-m-1 00:00:00', time()));
        $date_end = ($date_end != '') ? strtotime($date_end . ' 23:59:59') : strtotime(date('Y-m-d 23:59:59', time()));

        $arr_data['title'] = 'Report';
        $arr_data['nav'] = 'Report CRM';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;
        $arr_data['date_start'] = date('Y-m-d', $date_start);
        $arr_data['date_end'] = date('Y-m-d', $date_end);
        $arr_data['crm_record'] = $this->_crm($date_start, $date_end);

        $this->load->view('report_crm', $arr_data);
    }

    public function reseller($date_start = '', $date_end = '')
    {
        $arr_data = array();
        $acl = $this->_acl;

        if (!isset($acl['report_sales']) || $acl['report_sales']->view <= 0)
        {
            redirect(base_url());
        }

        $date_start = ($date_start != '') ? strtotime($date_start . ' 00:00:00') : strtotime(date('Y-m-1 00:00:00', time()));
        $date_end = ($date_end != '') ? strtotime($date_end . ' 23:59:59') : strtotime(date('Y-m-d 23:59:59', time()));

        $arr_data['title'] = 'Report';
        $arr_data['nav'] = 'Report Sales';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;
        $arr_data['date_start'] = date('Y-m-d', $date_start);
        $arr_data['date_end'] = date('Y-m-d', $date_end);
        $arr_data['sales_record'] = $this->_reseller($date_start, $date_end);

        $this->load->view('report_reseller', $arr_data);
    }

    public function sales($date_start = '', $date_end = '')
    {
        $arr_data = array();
        $acl = $this->_acl;

        if (!isset($acl['report_sales']) || $acl['report_sales']->view <= 0)
        {
            redirect(base_url());
        }

        $date_start = ($date_start != '') ? strtotime($date_start . ' 00:00:00') : strtotime(date('Y-m-1 00:00:00', time()));
        $date_end = ($date_end != '') ? strtotime($date_end . ' 23:59:59') : strtotime(date('Y-m-d 23:59:59', time()));

        $arr_data['title'] = 'Report';
        $arr_data['nav'] = 'Report Sales';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;
        $arr_data['date_start'] = date('Y-m-d', $date_start);
        $arr_data['date_end'] = date('Y-m-d', $date_end);
        $arr_data['sales_record'] = $this->_sales($date_start, $date_end);

        $this->load->view('report_sales', $arr_data);
    }
    /* End Public Function Area */




    /* Ajax Area */
    public function export_consultation($date_start = '', $date_end = '')
    {
        $this->load->library('cms_excel');

        $acl = $this->_acl;

        if (!isset($acl['report_consultation']) || $acl['report_consultation']->view <= 0)
        {
            redirect(base_url());
        }

        $date_start = ($date_start != '') ? strtotime($date_start . ' 00:00:00') : strtotime(date('Y-m-1 00:00:00', time()));
        $date_end = ($date_end != '') ? strtotime($date_end . ' 23:59:59') : strtotime(date('Y-m-d 23:59:59', time()));
        $consultation_record = $this->_consultation($date_start, $date_end);

        $title = 'Report CRM';
        $objPHPExcel = $this->cms_excel->create_excel($title);
        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'Report CRM');
        $objPHPExcel->getActiveSheet()->setCellValue('A2', 'Periode: ' . date('d F Y', $date_start) . ' - ' . date('d F Y', $date_end));
        $this->cms_excel->setbold($objPHPExcel, array('A1', 'A2'));
        $this->cms_excel->setmerge($objPHPExcel, array('A1:F1', 'A2:F2'));
        $this->cms_excel->setautosize($objPHPExcel, array('A', 'B', 'C', 'D', 'E', 'F'));

        $row = 4;

        if (count($consultation_record['arr_consultation']) > 0)
        {
            $objPHPExcel->getActiveSheet()->setCellValueExplicit("A{$row}", 'Number');
            $objPHPExcel->getActiveSheet()->setCellValue("B{$row}", 'Name');
            $objPHPExcel->getActiveSheet()->setCellValue("C{$row}", 'Date');
            $objPHPExcel->getActiveSheet()->setCellValue("D{$row}", 'Category');
            $objPHPExcel->getActiveSheet()->setCellValue("E{$row}", 'Status');
            $objPHPExcel->getActiveSheet()->setCellValue("F{$row}", 'Doctor');
            $this->cms_excel->setborder($objPHPExcel, "A{$row}", "F{$row}", '#000');
            $this->cms_excel->setbold($objPHPExcel, array("A{$row}", "B{$row}", "C{$row}", "D{$row}", "E{$row}", "F{$row}"));

            $row += 1;

            foreach ($consultation_record['arr_consultation'] as $consultation)
            {
                $objPHPExcel->getActiveSheet()->setCellValue("A{$row}", $consultation->number);
                $objPHPExcel->getActiveSheet()->setCellValue("B{$row}", $consultation->patient_name);
                $objPHPExcel->getActiveSheet()->setCellValue("C{$row}", PHPExcel_Shared_Date::PHPToExcel($consultation->date));
                $objPHPExcel->getActiveSheet()->setCellValue("D{$row}", $consultation->category_name);
                $objPHPExcel->getActiveSheet()->setCellValue("E{$row}", $consultation->status);
                $objPHPExcel->getActiveSheet()->setCellValue("F{$row}", 'Dr. Rahmaputri Maharani');
                $this->cms_excel->setdateformat($objPHPExcel, array("C{$row}"));
                $this->cms_excel->setborder($objPHPExcel, "A{$row}", "F{$row}", '#000');

                $row += 1;
            }
        }
        else
        {
            $objPHPExcel->getActiveSheet()->setCellValue("A{$row}", 'No Data.');
        }

        $this->cms_excel->download_excel($objPHPExcel, $title);
    }

    public function export_crm($date_start = '', $date_end = '')
    {
        $this->load->library('cms_excel');

        $acl = $this->_acl;

        if (!isset($acl['report_crm']) || $acl['report_crm']->view <= 0)
        {
            redirect(base_url());
        }

        $date_start = ($date_start != '') ? strtotime($date_start . ' 00:00:00') : strtotime(date('Y-m-1 00:00:00', time()));
        $date_end = ($date_end != '') ? strtotime($date_end . ' 23:59:59') : strtotime(date('Y-m-d 23:59:59', time()));
        $crm_record = $this->_crm($date_start, $date_end);

        $title = 'Report CRM';
        $objPHPExcel = $this->cms_excel->create_excel($title);
        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'Report CRM');
        $objPHPExcel->getActiveSheet()->setCellValue('A2', 'Periode: ' . date('d F Y', $date_start) . ' - ' . date('d F Y', $date_end));
        $this->cms_excel->setbold($objPHPExcel, array('A1', 'A2'));
        $this->cms_excel->setmerge($objPHPExcel, array('A1:I1', 'A2:I2'));
        $this->cms_excel->setautosize($objPHPExcel, array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I'));

        $row = 4;

        if (count($crm_record['arr_crm']) > 0)
        {
            $objPHPExcel->getActiveSheet()->setCellValueExplicit("A{$row}", 'Number');
            $objPHPExcel->getActiveSheet()->setCellValue("B{$row}", 'Name');
            $objPHPExcel->getActiveSheet()->setCellValue("C{$row}", 'Date');
            $objPHPExcel->getActiveSheet()->setCellValue("D{$row}", 'Type');
            $objPHPExcel->getActiveSheet()->setCellValue("E{$row}", 'Question');
            $objPHPExcel->getActiveSheet()->setCellValue("F{$row}", 'Answer');
            $objPHPExcel->getActiveSheet()->setCellValue("G{$row}", 'Status');
            $objPHPExcel->getActiveSheet()->setCellValue("H{$row}", 'Resolve Date');
            $objPHPExcel->getActiveSheet()->setCellValue("I{$row}", 'Author');
            $this->cms_excel->setborder($objPHPExcel, "A{$row}", "I{$row}", '#000');
            $this->cms_excel->setbold($objPHPExcel, array("A{$row}", "B{$row}", "C{$row}", "D{$row}", "E{$row}", "F{$row}", "G{$row}", "H{$row}", "I{$row}"));

            $row += 1;

            foreach ($crm_record['arr_crm'] as $crm)
            {
                $objPHPExcel->getActiveSheet()->setCellValue("A{$row}", $crm->number);
                $objPHPExcel->getActiveSheet()->setCellValue("B{$row}", $crm->patient_name);
                $objPHPExcel->getActiveSheet()->setCellValue("C{$row}", PHPExcel_Shared_Date::PHPToExcel($crm->date));
                $objPHPExcel->getActiveSheet()->setCellValue("D{$row}", $crm->type);
                $objPHPExcel->getActiveSheet()->setCellValue("E{$row}", $crm->question);
                $objPHPExcel->getActiveSheet()->setCellValue("F{$row}", $crm->answer);
                $objPHPExcel->getActiveSheet()->setCellValue("G{$row}", $crm->status);

                if ($crm->resolve_date > 0)
                {
                    $objPHPExcel->getActiveSheet()->setCellValue("H{$row}", PHPExcel_Shared_Date::PHPToExcel($crm->resolve_date));
                    $this->cms_excel->setdateformat($objPHPExcel, array("H{$row}"));
                }
                else
                {
                    $objPHPExcel->getActiveSheet()->setCellValue("H{$row}", $crm->resolve_date_display);
                }

                $objPHPExcel->getActiveSheet()->setCellValue("I{$row}", $crm->author_name);

                $this->cms_excel->setdateformat($objPHPExcel, array("C{$row}"));
                $this->cms_excel->setborder($objPHPExcel, "A{$row}", "I{$row}", '#000');

                $row += 1;
            }
        }
        else
        {
            $objPHPExcel->getActiveSheet()->setCellValue("A{$row}", 'No Data.');
        }

        $this->cms_excel->download_excel($objPHPExcel, $title);
    }

    public function export_reseller($date_start = '', $date_end = '')
    {
        $this->load->library('cms_excel');

        $acl = $this->_acl;

        if (!isset($acl['report_sales']) || $acl['report_sales']->view <= 0)
        {
            redirect(base_url());
        }

        $date_start = ($date_start != '') ? strtotime($date_start . ' 00:00:00') : strtotime(date('Y-m-1 00:00:00', time()));
        $date_end = ($date_end != '') ? strtotime($date_end . ' 23:59:59') : strtotime(date('Y-m-d 23:59:59', time()));
        $reseller_record = $this->_reseller($date_start, $date_end);

        $title = 'Report Sales';
        $objPHPExcel = $this->cms_excel->create_excel($title);
        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'Report Sales');
        $objPHPExcel->getActiveSheet()->setCellValue('A2', 'Periode: ' . date('d F Y', $date_start) . ' - ' . date('d F Y', $date_end));
        $this->cms_excel->setbold($objPHPExcel, array('A1', 'A2'));
        $this->cms_excel->setmerge($objPHPExcel, array('A1:W1', 'A2:W2'));
        $this->cms_excel->setautosize($objPHPExcel, array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W'));

        $row = 4;

        if (count($reseller_record['arr_order']) > 0)
        {
            $objPHPExcel->getActiveSheet()->setCellValue("A{$row}", 'Number');
            $objPHPExcel->getActiveSheet()->setCellValue("B{$row}", 'Name');
            $objPHPExcel->getActiveSheet()->setCellValue("C{$row}", 'Phone');
            $objPHPExcel->getActiveSheet()->setCellValue("D{$row}", 'Email');
            $objPHPExcel->getActiveSheet()->setCellValue("E{$row}", 'Date');
            $objPHPExcel->getActiveSheet()->setCellValue("F{$row}", 'Status');
            $objPHPExcel->getActiveSheet()->setCellValue("G{$row}", 'Payment Status');
            $objPHPExcel->getActiveSheet()->setCellValue("H{$row}", 'Payment Date');
            $objPHPExcel->getActiveSheet()->setCellValue("I{$row}", 'processed Date');
            $objPHPExcel->getActiveSheet()->setCellValue("J{$row}", 'Delivered Date');
            $objPHPExcel->getActiveSheet()->setCellValue("K{$row}", 'Subtotal');
            $objPHPExcel->getActiveSheet()->setCellValue("L{$row}", '- Discount');
            $objPHPExcel->getActiveSheet()->setCellValue("M{$row}", '- Discount Item');
            $objPHPExcel->getActiveSheet()->setCellValue("N{$row}", '+ Shipping');
            $objPHPExcel->getActiveSheet()->setCellValue("O{$row}", 'Total');
            $objPHPExcel->getActiveSheet()->setCellValue("P{$row}", 'Comission');
            $objPHPExcel->getActiveSheet()->setCellValue("Q{$row}", 'Points');
            $objPHPExcel->getActiveSheet()->setCellValue("R{$row}", 'Province');
            $objPHPExcel->getActiveSheet()->setCellValue("S{$row}", 'Courier');
            $objPHPExcel->getActiveSheet()->setCellValue("T{$row}", 'Category');
            $objPHPExcel->getActiveSheet()->setCellValue("U{$row}", 'Location');
            $objPHPExcel->getActiveSheet()->setCellValue("V{$row}", 'Source');
            $objPHPExcel->getActiveSheet()->setCellValue("W{$row}", 'Author');
            $this->cms_excel->setborder($objPHPExcel, "A{$row}", "W{$row}", '#000');
            $this->cms_excel->setbold($objPHPExcel, array("A{$row}", "B{$row}", "C{$row}", "D{$row}", "E{$row}", "F{$row}", "G{$row}", "H{$row}", "I{$row}", "J{$row}", "K{$row}", "L{$row}", "M{$row}", "N{$row}", "O{$row}", "P{$row}", "Q{$row}", "R{$row}", "S{$row}", "T{$row}", "U{$row}", "V{$row}", "W{$row}"));

            $row += 1;

            foreach ($reseller_record['arr_order'] as $order)
            {
                $objPHPExcel->getActiveSheet()->setCellValue("A{$row}", $order->number);
                $objPHPExcel->getActiveSheet()->setCellValue("B{$row}", $order->patient_name);
                $objPHPExcel->getActiveSheet()->setCellValueExplicit("C{$row}", $order->patient_phone);
                $objPHPExcel->getActiveSheet()->setCellValue("D{$row}", $order->patient_email);
                $objPHPExcel->getActiveSheet()->setCellValue("E{$row}", PHPExcel_Shared_Date::PHPToExcel($order->date));
                $objPHPExcel->getActiveSheet()->setCellValue("F{$row}", $order->status);
                $objPHPExcel->getActiveSheet()->setCellValue("G{$row}", $order->payment_status);

                if ($order->payment_date > 0)
                {
                    $objPHPExcel->getActiveSheet()->setCellValue("H{$row}", PHPExcel_Shared_Date::PHPToExcel($order->payment_date));
                    $this->cms_excel->setdateformat($objPHPExcel, array("H{$row}"));
                }
                else
                {
                    $objPHPExcel->getActiveSheet()->setCellValue("H{$row}", $order->payment_date);
                }

                if ($order->processed_date > 0)
                {
                    $objPHPExcel->getActiveSheet()->setCellValue("I{$row}", PHPExcel_Shared_Date::PHPToExcel($order->processed_date));
                    $this->cms_excel->setdateformat($objPHPExcel, array("I{$row}"));
                }
                else
                {
                    $objPHPExcel->getActiveSheet()->setCellValue("I{$row}", $order->processed_date);
                }

                if ($order->delivered_date > 0)
                {
                    $objPHPExcel->getActiveSheet()->setCellValue("J{$row}", PHPExcel_Shared_Date::PHPToExcel($order->delivered_date));
                    $this->cms_excel->setdateformat($objPHPExcel, array("J{$row}"));
                }
                else
                {
                    $objPHPExcel->getActiveSheet()->setCellValue("J{$row}", $order->delivered_date);
                }

                $objPHPExcel->getActiveSheet()->setCellValue("K{$row}", $order->subtotal);
                $objPHPExcel->getActiveSheet()->setCellValue("L{$row}", $order->discount);
                $objPHPExcel->getActiveSheet()->setCellValue("M{$row}", $order->discount_item);
                $objPHPExcel->getActiveSheet()->setCellValue("N{$row}", $order->shipping);
                $objPHPExcel->getActiveSheet()->setCellValue("O{$row}", $order->grand_total);
                $objPHPExcel->getActiveSheet()->setCellValue("P{$row}", $order->comission);
                $objPHPExcel->getActiveSheet()->setCellValue("Q{$row}", $order->points);
                $objPHPExcel->getActiveSheet()->setCellValue("R{$row}", $order->shipping_province);
                $objPHPExcel->getActiveSheet()->setCellValue("S{$row}", $order->courier);
                $objPHPExcel->getActiveSheet()->setCellValue("T{$row}", $order->category);
                $objPHPExcel->getActiveSheet()->setCellValue("U{$row}", $order->location);
                $objPHPExcel->getActiveSheet()->setCellValue("V{$row}", $order->source);
                $objPHPExcel->getActiveSheet()->setCellValue("W{$row}", $order->author_name);

                $this->cms_excel->setdateformat($objPHPExcel, array("E{$row}"));
                $this->cms_excel->setnumberformat($objPHPExcel, array("K{$row}", "L{$row}", "M{$row}", "N{$row}", "O{$row}", "P{$row}"));
                $this->cms_excel->setborder($objPHPExcel, "A{$row}", "W{$row}", '#000');

                $row += 1;
            }
        }
        else
        {
            $objPHPExcel->getActiveSheet()->setCellValue("A{$row}", 'No Data.');
        }

        $this->cms_excel->download_excel($objPHPExcel, $title);
    }

    public function export_sales($date_start = '', $date_end = '')
    {
        $this->load->library('cms_excel');

        $acl = $this->_acl;

        if (!isset($acl['report_sales']) || $acl['report_sales']->view <= 0)
        {
            redirect(base_url());
        }

        $date_start = ($date_start != '') ? strtotime($date_start . ' 00:00:00') : strtotime(date('Y-m-1 00:00:00', time()));
        $date_end = ($date_end != '') ? strtotime($date_end . ' 23:59:59') : strtotime(date('Y-m-d 23:59:59', time()));
        $sales_record = $this->_sales($date_start, $date_end);

        $title = 'Report Sales';
        $objPHPExcel = $this->cms_excel->create_excel($title);
        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'Report Sales');
        $objPHPExcel->getActiveSheet()->setCellValue('A2', 'Periode: ' . date('d F Y', $date_start) . ' - ' . date('d F Y', $date_end));
        $this->cms_excel->setbold($objPHPExcel, array('A1', 'A2'));
        $this->cms_excel->setmerge($objPHPExcel, array('A1:V1', 'A2:V2'));
        $this->cms_excel->setautosize($objPHPExcel, array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V'));

        $row = 4;

        if (count($sales_record['arr_order']) > 0)
        {
            $objPHPExcel->getActiveSheet()->setCellValue("A{$row}", 'Number');
            $objPHPExcel->getActiveSheet()->setCellValue("B{$row}", 'Name');
            $objPHPExcel->getActiveSheet()->setCellValue("C{$row}", 'Phone');
            $objPHPExcel->getActiveSheet()->setCellValue("D{$row}", 'Email');
            $objPHPExcel->getActiveSheet()->setCellValue("E{$row}", 'Date');
            $objPHPExcel->getActiveSheet()->setCellValue("F{$row}", 'Status');
            $objPHPExcel->getActiveSheet()->setCellValue("G{$row}", 'Payment Status');
            $objPHPExcel->getActiveSheet()->setCellValue("H{$row}", 'Payment Date');
            $objPHPExcel->getActiveSheet()->setCellValue("I{$row}", 'processed Date');
            $objPHPExcel->getActiveSheet()->setCellValue("J{$row}", 'Delivered Date');
            $objPHPExcel->getActiveSheet()->setCellValue("K{$row}", 'Subtotal');
            $objPHPExcel->getActiveSheet()->setCellValue("L{$row}", '- Discount');
            $objPHPExcel->getActiveSheet()->setCellValue("M{$row}", '- Discount Item');
            $objPHPExcel->getActiveSheet()->setCellValue("N{$row}", '+ Shipping');
            $objPHPExcel->getActiveSheet()->setCellValue("O{$row}", 'Total');
            $objPHPExcel->getActiveSheet()->setCellValue("P{$row}", 'Points');
            $objPHPExcel->getActiveSheet()->setCellValue("Q{$row}", 'Province');
            $objPHPExcel->getActiveSheet()->setCellValue("R{$row}", 'Courier');
            $objPHPExcel->getActiveSheet()->setCellValue("S{$row}", 'Category');
            $objPHPExcel->getActiveSheet()->setCellValue("T{$row}", 'Location');
            $objPHPExcel->getActiveSheet()->setCellValue("U{$row}", 'Source');
            $objPHPExcel->getActiveSheet()->setCellValue("V{$row}", 'Author');
            $this->cms_excel->setborder($objPHPExcel, "A{$row}", "V{$row}", '#000');
            $this->cms_excel->setbold($objPHPExcel, array("A{$row}", "B{$row}", "C{$row}", "D{$row}", "E{$row}", "F{$row}", "G{$row}", "H{$row}", "I{$row}", "J{$row}", "K{$row}", "L{$row}", "M{$row}", "N{$row}", "O{$row}", "P{$row}", "Q{$row}", "R{$row}", "S{$row}", "T{$row}", "U{$row}", "v{$row}"));

            $row += 1;

            foreach ($sales_record['arr_order'] as $order)
            {
                $objPHPExcel->getActiveSheet()->setCellValue("A{$row}", $order->number);
                $objPHPExcel->getActiveSheet()->setCellValue("B{$row}", $order->patient_name);
                $objPHPExcel->getActiveSheet()->setCellValue("C{$row}", $order->patient_phone);
                $objPHPExcel->getActiveSheet()->setCellValue("D{$row}", $order->patient_email);
                $objPHPExcel->getActiveSheet()->setCellValue("E{$row}", PHPExcel_Shared_Date::PHPToExcel($order->date));
                $objPHPExcel->getActiveSheet()->setCellValue("F{$row}", $order->status);
                $objPHPExcel->getActiveSheet()->setCellValue("G{$row}", $order->payment_status);

                if ($order->payment_date > 0)
                {
                    $objPHPExcel->getActiveSheet()->setCellValue("H{$row}", PHPExcel_Shared_Date::PHPToExcel($order->payment_date));
                    $this->cms_excel->setdateformat($objPHPExcel, array("H{$row}"));
                }
                else
                {
                    $objPHPExcel->getActiveSheet()->setCellValue("H{$row}", $order->payment_date);
                }

                if ($order->processed_date > 0)
                {
                    $objPHPExcel->getActiveSheet()->setCellValue("I{$row}", PHPExcel_Shared_Date::PHPToExcel($order->processed_date));
                    $this->cms_excel->setdateformat($objPHPExcel, array("I{$row}"));
                }
                else
                {
                    $objPHPExcel->getActiveSheet()->setCellValue("I{$row}", $order->processed_date);
                }

                if ($order->delivered_date > 0)
                {
                    $objPHPExcel->getActiveSheet()->setCellValue("J{$row}", PHPExcel_Shared_Date::PHPToExcel($order->delivered_date));
                    $this->cms_excel->setdateformat($objPHPExcel, array("J{$row}"));
                }
                else
                {
                    $objPHPExcel->getActiveSheet()->setCellValue("J{$row}", $order->delivered_date);
                }

                $objPHPExcel->getActiveSheet()->setCellValue("K{$row}", $order->subtotal);
                $objPHPExcel->getActiveSheet()->setCellValue("L{$row}", $order->discount);
                $objPHPExcel->getActiveSheet()->setCellValue("M{$row}", $order->discount_item);
                $objPHPExcel->getActiveSheet()->setCellValue("N{$row}", $order->shipping);
                $objPHPExcel->getActiveSheet()->setCellValue("O{$row}", $order->grand_total);
                $objPHPExcel->getActiveSheet()->setCellValue("P{$row}", $order->points);
                $objPHPExcel->getActiveSheet()->setCellValue("Q{$row}", $order->shipping_province);
                $objPHPExcel->getActiveSheet()->setCellValue("R{$row}", $order->courier);
                $objPHPExcel->getActiveSheet()->setCellValue("S{$row}", $order->category);
                $objPHPExcel->getActiveSheet()->setCellValue("T{$row}", $order->location);
                $objPHPExcel->getActiveSheet()->setCellValue("U{$row}", $order->source);
                $objPHPExcel->getActiveSheet()->setCellValue("V{$row}", $order->author_name);

                $this->cms_excel->setdateformat($objPHPExcel, array("E{$row}"));
                $this->cms_excel->setnumberformat($objPHPExcel, array("K{$row}", "L{$row}", "M{$row}", "N{$row}", "O{$row}", "P{$row}"));
                $this->cms_excel->setborder($objPHPExcel, "A{$row}", "V{$row}", '#000');

                $row += 1;
            }
        }
        else
        {
            $objPHPExcel->getActiveSheet()->setCellValue("A{$row}", 'No Data.');
        }

        $this->cms_excel->download_excel($objPHPExcel, $title);
    }

    public function ajax_print_prescription($consultation_id)
    {
        $json['status'] = 'success';

        try
        {
            if ($consultation_id <= 0)
            {
                throw new Exception();
            }

            $consultation = $this->core_model->get('consultation', $consultation_id);

            $this->db->where('consultation_id', $consultation->id);
            $this->db->where_not_in('product_id', array(5, 9, 10, 11, 12, 13, 17));
            $consultation->arr_consultation_product = $this->core_model->get('consultation_product');

            foreach ($consultation->arr_consultation_product as $consultation_product)
            {
                $consultation_product->product_name = ($consultation_product->product_id == 1) ? 'Finasteride 1mg' : $consultation_product->product_name;
                $consultation_product->product_name = ($consultation_product->product_id == 3) ? 'Minoxidil 5% 30ml' : $consultation_product->product_name;
                $consultation_product->product_name = ($consultation_product->product_id == 4) ? 'Ketoconazole 2% 120ml' : $consultation_product->product_name;
                $consultation_product->product_name = ($consultation_product->product_id == 6) ? 'Benzoil Peroxide 5g' : $consultation_product->product_name;
                $consultation_product->product_name = ($consultation_product->product_id == 7) ? 'Tretinoin 0,1% 12g' : $consultation_product->product_name;
                $consultation_product->product_name = ($consultation_product->product_id == 8) ? 'Tretinoin 0,1%' : $consultation_product->product_name;
                $consultation_product->product_name = ($consultation_product->product_id == 16) ? 'Estesia Cream 10g' : $consultation_product->product_name;
            }

            $consultation->date_display = date('d F Y', $consultation->date);
            $consultation->prescription_validity = number_format($consultation->prescription_validity, 0, '', '');

            $patient = $this->core_model->get('patient', $consultation->patient_id);
            $difference = time() - $patient->birthdate;
            $patient->age = floor($difference / 31556926);

            $this->db->where('patient_id', $patient->id);
            $arr_address = $this->core_model->get('address');

            $address = $arr_address[0];

            // update iteration
            $consultation->iteration = ($consultation->iteration + 1 > 12) ? 12 : $consultation->iteration + 1;
            $this->core_model->update('consultation', $consultation->id, array('iteration' => $consultation->iteration));

            $record['setting'] = $this->_setting;
            $record['account'] = $this->_user;
            $record['csrf'] = $this->cms_function->generate_csrf();
            $record['consultation'] =  $consultation;
            $record['patient'] = $patient;
            $record['address'] = $address;

            $json['prescription_view'] = $this->load->view('print/prescription', $record, true);
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
    private function _consultation($date_start, $date_end)
    {
        $record = array();

        $this->db->where('date >=', $date_start);
        $this->db->where('date <=', $date_end);
        $arr_consultation = $this->core_model->get('consultation');
        $arr_patient_id = $this->cms_function->extract_records($arr_consultation, 'patient_id');

        $arr_patient = $this->core_model->get('patient', $arr_patient_id);
        $arr_patient_lookup = array();

        foreach ($arr_patient as $patient)
        {
            $arr_patient_lookup[$patient->id] = clone $patient;
        }

        foreach ($arr_consultation as $consultation)
        {
            $consultation->date_display = date('d F Y', $consultation->date);

            $consultation->patient_name = (isset($arr_patient_lookup[$consultation->patient_id])) ? $arr_patient_lookup[$consultation->patient_id]->name : '';
            $consultation->patient_number = (isset($arr_patient_lookup[$consultation->patient_id])) ? $arr_patient_lookup[$consultation->patient_id]->number : '';
            $consultation->patient_phone = (isset($arr_patient_lookup[$consultation->patient_id])) ? $arr_patient_lookup[$consultation->patient_id]->phone : '';
            $consultation->patient_email = (isset($arr_patient_lookup[$consultation->patient_id])) ? $arr_patient_lookup[$consultation->patient_id]->email : '';
        }

        $record['arr_consultation'] = $arr_consultation;

        return $record;
    }

    private function _crm($date_start, $date_end)
    {
        $record = array();

        $this->db->where('date >=', $date_start);
        $this->db->where('date <=', $date_end);
        $arr_crm = $this->core_model->get('crm');
        $arr_patient_id = $this->cms_function->extract_records($arr_crm, 'patient_id');

        $arr_patient = $this->core_model->get('patient', $arr_patient_id);
        $arr_patient_lookup = array();

        foreach ($arr_patient as $patient)
        {
            $arr_patient_lookup[$patient->id] = clone $patient;
        }

        foreach ($arr_crm as $crm)
        {
            $crm->date_display = date('d F Y', $crm->date);
            $crm->resolve_date_display = ($crm->resolve_date > 0) ? date('d F Y', $crm->date) : '';

            $crm->patient_name = (isset($arr_patient_lookup[$crm->patient_id])) ? $arr_patient_lookup[$crm->patient_id]->name : '';
            $crm->patient_number = (isset($arr_patient_lookup[$crm->patient_id])) ? $arr_patient_lookup[$crm->patient_id]->number : '';
            $crm->patient_phone = (isset($arr_patient_lookup[$crm->patient_id])) ? $arr_patient_lookup[$crm->patient_id]->phone : '';
            $crm->patient_email = (isset($arr_patient_lookup[$crm->patient_id])) ? $arr_patient_lookup[$crm->patient_id]->email : '';
        }

        $record['arr_crm'] = $arr_crm;

        return $record;
    }

    private function _reseller($date_start, $date_end)
    {
        $record = array();

        // reseller user_id
        $this->db->where('position', 'Reseller');
        $arr_user = $this->core_model->get('user');
        $arr_user_id = $this->cms_function->extract_records($arr_user, 'id');

        $this->db->where('date >=', $date_start);
        $this->db->where('date <=', $date_end);
        $this->db->where_in('author_id', $arr_user_id);
        $arr_order = $this->core_model->get('order');
        $arr_order_id = $this->cms_function->extract_records($arr_order, 'id');
        $arr_patient_id = $this->cms_function->extract_records($arr_order, 'patient_id');
        $arr_order_item_lookup = array();
        $arr_order_lookup = array();

        $arr_patient = $this->core_model->get('patient', $arr_patient_id);
        $arr_patient_lookup = array();

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
                $category = '';

                if (isset($arr_order_item_lookup[$order_item->order_id]['discount']))
                {
                    $arr_order_item_lookup[$order_item->order_id]['discount'] += $order_item->discount;
                }
                else
                {
                    $arr_order_item_lookup[$order_item->order_id]['discount'] = $order_item->discount;
                }

                if ($order_item->product_id == 1 || $order_item->product_id == 3 || $order_item->product_id == 4 || $order_item->product_id == 11 || $order_item->product_id == 13)
                {
                    $category = 'Hair Loss';
                }
                elseif ($order_item->product_id == 5 || $order_item->product_id == 6 || $order_item->product_id == 7 || $order_item->product_id == 8 || $order_item->product_id == 9 || $order_item->product_id == 10 || $order_item->product_id == 12)
                {
                    $category = 'Acne';
                }
                elseif ($order_item->product_id == 14 || $order_item->product_id == 15)
                {
                    $category = 'ED';
                }
                elseif ($order_item->product_id == 16)
                {
                    $category = 'PE';
                }
                elseif ($order_item->product_id == 18 || $order_item->product_id == 19 || $order_item->product_id == 20 || $order_item->product_id == 24 || $order_item->product_id == 27 || $order_item->product_id == 29 || $order_item->product_id == 30 || $order_item->product_id == 31)
                {
                    $category = 'Skincare';
                }
                elseif ($order_item->product_id == 21 || $order_item->product_id == 22 || $order_item->product_id == 25 || $order_item->product_id == 28 )
                {
                    $category = 'Hair & Body';
                }
                elseif ($order_item->product_id == 32)
                {
                    $category = 'Merchandise';
                }
                elseif ($order_item->product_id == 23 || $order_item->product_id == 26)
                {
                    $category = 'Full Bundle';
                }

                if (!isset($arr_order_lookup[$order_item->order_id]))
                {
                    $arr_order_lookup[$order_item->order_id] = $category;
                }
                else
                {
                    if ($arr_order_lookup[$order_item->order_id] != $category)
                    {
                        $arr_order_lookup[$order_item->order_id] = 'Combined';
                    }
                }
            }
        }

        foreach ($arr_order as $order)
        {
            $order->date_display = date('d F Y', $order->date);
            $order->processed_date_display = ($order->processed_date > 0) ? date('d F Y', $order->processed_date) : '';
            $order->payment_date_display = ($order->payment_date > 0) ? date('d F Y', $order->payment_date): '';
            $order->delivered_date_display = ($order->delivered_date > 0) ? date('d F Y', $order->delivered_date) : '';
            $order->discount_item = (isset($arr_order_item_lookup[$order->id]['discount'])) ? $arr_order_item_lookup[$order->id]['discount'] : 0;
            $order->category = (isset($arr_order_lookup[$order->id])) ? $arr_order_lookup[$order->id] : '';
            $order->discount = $order->discount - $order->discount_item;
            $order->comission = ($order->subtotal - $order->discount) * .15;

            $order->subtotal_display = 'IDR ' . number_format($order->subtotal, 0, ',', '.');
            $order->discount_display = 'IDR ' . number_format($order->discount, 0, ',', '.');
            $order->discount_item_display = 'IDR ' . number_format($order->discount_item, 0, ',', '.');
            $order->points_display = 'IDR ' . number_format($order->points, 0, ',', '.');
            $order->shipping_display = 'IDR ' . number_format($order->shipping, 0, ',', '.');
            $order->grand_total_display = 'IDR ' . number_format($order->grand_total, 0, ',', '.');
            $order->comission_display = 'IDR ' . number_format($order->comission, 0, ',', '.');

            $order->patient_name = (isset($arr_patient_lookup[$order->patient_id])) ? $arr_patient_lookup[$order->patient_id]->name : $order->shipping_name;
            $order->patient_number = (isset($arr_patient_lookup[$order->patient_id])) ? $arr_patient_lookup[$order->patient_id]->number : '';
            $order->patient_phone = (isset($arr_patient_lookup[$order->patient_id])) ? $arr_patient_lookup[$order->patient_id]->phone : $order->shipping_phone;
            $order->patient_email = (isset($arr_patient_lookup[$order->patient_id])) ? $arr_patient_lookup[$order->patient_id]->email : $order->shipping_email;

            $order->courier = 'SAP';

            if ($order->shipping_courier == 'EZ')
            {
                $order->courier = 'JNT';
            }
            elseif ($order->shipping_courier == 'REG' || $order->shipping_courier == 'ND' || $order->shipping_courier == 'SD')
            {
                $order->courier = 'Anteraja';
            }

            $order->courier = $order->courier . ' - ' . $order->shipping_courier;
        }

        $record['arr_order'] = $arr_order;

        return $record;
    }

    private function _sales($date_start, $date_end)
    {
        $record = array();

        $this->db->where('date >=', $date_start);
        $this->db->where('date <=', $date_end);
        // $this->db->where('payment_status', 'Paid');
        $arr_order = $this->core_model->get('order');
        $arr_order_id = $this->cms_function->extract_records($arr_order, 'id');
        $arr_patient_id = $this->cms_function->extract_records($arr_order, 'patient_id');
        $arr_order_item_lookup = array();
        $arr_order_lookup = array();

        $arr_patient = $this->core_model->get('patient', $arr_patient_id);
        $arr_patient_lookup = array();

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
                $category = '';

                if (isset($arr_order_item_lookup[$order_item->order_id]['discount']))
                {
                    $arr_order_item_lookup[$order_item->order_id]['discount'] += $order_item->discount;
                }
                else
                {
                    $arr_order_item_lookup[$order_item->order_id]['discount'] = $order_item->discount;
                }

                if ($order_item->product_id == 1 || $order_item->product_id == 3 || $order_item->product_id == 4 || $order_item->product_id == 11 || $order_item->product_id == 13)
                {
                    $category = 'Hair Loss';
                }
                elseif ($order_item->product_id == 5 || $order_item->product_id == 6 || $order_item->product_id == 7 || $order_item->product_id == 8 || $order_item->product_id == 9 || $order_item->product_id == 10 || $order_item->product_id == 12)
                {
                    $category = 'Acne';
                }
                elseif ($order_item->product_id == 14 || $order_item->product_id == 15)
                {
                    $category = 'ED';
                }
                elseif ($order_item->product_id == 16)
                {
                    $category = 'PE';
                }
                elseif ($order_item->product_id == 18 || $order_item->product_id == 19 || $order_item->product_id == 20 || $order_item->product_id == 24 || $order_item->product_id == 27 || $order_item->product_id == 29 || $order_item->product_id == 30 || $order_item->product_id == 31)
                {
                    $category = 'Skincare';
                }
                elseif ($order_item->product_id == 21 || $order_item->product_id == 22 || $order_item->product_id == 25 || $order_item->product_id == 28 )
                {
                    $category = 'Hair & Body';
                }
                elseif ($order_item->product_id == 32)
                {
                    $category = 'Merchandise';
                }
                elseif ($order_item->product_id == 23 || $order_item->product_id == 26)
                {
                    $category = 'Full Bundle';
                }

                if (!isset($arr_order_lookup[$order_item->order_id]))
                {
                    $arr_order_lookup[$order_item->order_id] = $category;
                }
                else
                {
                    if ($arr_order_lookup[$order_item->order_id] != $category)
                    {
                        $arr_order_lookup[$order_item->order_id] = 'Combined';
                    }
                }
            }
        }

        foreach ($arr_order as $order)
        {
            $order->date_display = date('d F Y', $order->date);
            $order->processed_date_display = ($order->processed_date > 0) ? date('d F Y', $order->processed_date) : '';
            $order->payment_date_display = ($order->payment_date > 0) ? date('d F Y', $order->payment_date): '';
            $order->delivered_date_display = ($order->delivered_date > 0) ? date('d F Y', $order->delivered_date) : '';
            $order->discount_item = (isset($arr_order_item_lookup[$order->id]['discount'])) ? $arr_order_item_lookup[$order->id]['discount'] : 0;
            $order->category = (isset($arr_order_lookup[$order->id])) ? $arr_order_lookup[$order->id] : '';
            // $order->discount = $order->discount - $order->discount_item;

            $order->subtotal_display = 'IDR ' . number_format($order->subtotal, 0, ',', '.');
            $order->discount_display = 'IDR ' . number_format($order->discount, 0, ',', '.');
            $order->discount_item_display = 'IDR ' . number_format($order->discount_item, 0, ',', '.');
            $order->points_display = 'IDR ' . number_format($order->points, 0, ',', '.');
            $order->shipping_display = 'IDR ' . number_format($order->shipping, 0, ',', '.');
            $order->grand_total_display = 'IDR ' . number_format($order->grand_total, 0, ',', '.');

            $order->patient_name = (isset($arr_patient_lookup[$order->patient_id])) ? $arr_patient_lookup[$order->patient_id]->name : $order->shipping_name;
            $order->patient_number = (isset($arr_patient_lookup[$order->patient_id])) ? $arr_patient_lookup[$order->patient_id]->number : '';
            $order->patient_phone = (isset($arr_patient_lookup[$order->patient_id])) ? $arr_patient_lookup[$order->patient_id]->phone : $order->shipping_phone;
            $order->patient_email = (isset($arr_patient_lookup[$order->patient_id])) ? $arr_patient_lookup[$order->patient_id]->email : $order->shipping_email;

            $order->courier = 'SAP';

            if ($order->shipping_courier == 'EZ')
            {
                $order->courier = 'JNT';
            }
            elseif ($order->shipping_courier == 'REG' || $order->shipping_courier == 'ND' || $order->shipping_courier == 'SD')
            {
                $order->courier = 'Anteraja';
            }

            $order->courier = $order->courier . ' - ' . $order->shipping_courier;
        }

        $record['arr_order'] = $arr_order;

        return $record;
    }
    /* End Private Function Area */
}