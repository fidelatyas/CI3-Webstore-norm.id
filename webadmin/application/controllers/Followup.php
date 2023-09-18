<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Followup extends CI_Controller
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




    /* Public Function Export Area */
    public function export_consultation()
    {
        $this->load->library('cms_excel');

        $acl = $this->_acl;

        if (!isset($acl['report_consultation']) || $acl['report_consultation']->view <= 0)
        {
            redirect(base_url());
        }

        $this->db->where('status', 'Finish');
        $this->db->where('date >', 1601485200);
        $this->db->order_by('date DESC');
        $arr_consultation = $this->core_model->get('consultation');
        $arr_patient_id = $this->cms_function->extract_records($arr_consultation, 'patient_id');
        $arr_consultation_id = $this->cms_function->extract_records($arr_consultation, 'id');

        $arr_patient = $this->core_model->get('patient', $arr_patient_id);
        $arr_patient_lookup = array();

        $this->db->where_in('consultation_id', $arr_consultation_id);
        $arr_consultation_product = $this->core_model->get('consultation_product');
        $arr_prescription_lookup = array();

        foreach ($arr_consultation_product as $consultation_product)
        {
            $arr_prescription_lookup[$consultation_product->consultation_id][] = clone $consultation_product;
        }

        $this->db->where_in('patient_id', $arr_patient_id);
        $this->db->where('payment_status', 'Paid');
        $arr_order = $this->core_model->get('order');
        $arr_order_lookup = array();

        foreach ($arr_order as $order)
        {
            $arr_order_lookup[$order->patient_id] = clone $order;
        }

        foreach ($arr_patient as $patient)
        {
            $arr_patient_lookup[$patient->id] = clone $patient;
        }

        foreach ($arr_consultation as $consultation)
        {
            $consultation->has_order = (isset($arr_order_lookup[$consultation->patient_id]) && (isset($arr_prescription_lookup[$consultation->id]) && count($arr_prescription_lookup[$consultation->id]) > 0)) ? 1 : 0;

            $consultation->status = ($consultation->status == 'Finish') ? 'Approved' : $consultation->status;
            $consultation->date_display = date('F d, Y, H:i:s', $consultation->date);
            $consultation->date_follow_up_display = ($consultation->date_follow_up > 0) ? date('F d, Y, H:i:s', $consultation->date_follow_up) : '';

            $pending_time = ($consultation->status == 'Pending') ? time() - $consultation->date : $consultation->date_consultation_start - $consultation->date;
            $hour_pending = floor($pending_time / 3600);
            $minutes_pending = (floor(($pending_time - ($hour_pending * 3600)) / 60));
            $consultation->hour_pending_count = $hour_pending . 'H ' . $minutes_pending . 'M';
            $consultation->hour_pending = $hour_pending;

            $consultation->hour_consultation_count = '';

            if ($consultation->date_consultation_end > 0)
            {
                $consultation_time = $consultation->date_consultation_end - $consultation->date_consultation_start;
                $hour_consultation = floor($consultation_time / 3600);
                $minutes_consultation = (floor(($consultation_time - ($hour_consultation * 3600)) / 60));
                $consultation->hour_consultation_count = $hour_consultation . 'H ' . $minutes_consultation . 'M';
                $consultation->hour_consultation = $hour_consultation;
            }

            $consultation->patient_name = (isset($arr_patient_lookup[$consultation->patient_id])) ? $arr_patient_lookup[$consultation->patient_id]->name : '';
            $consultation->patient_number = (isset($arr_patient_lookup[$consultation->patient_id])) ? $arr_patient_lookup[$consultation->patient_id]->number : '';
            $consultation->patient_email = (isset($arr_patient_lookup[$consultation->patient_id])) ? $arr_patient_lookup[$consultation->patient_id]->email : '';
            $consultation->patient_phone = (isset($arr_patient_lookup[$consultation->patient_id])) ? $arr_patient_lookup[$consultation->patient_id]->phone : '';
            $consultation->patient_phone = preg_replace('/^0/', '62', $consultation->patient_phone);
        }

        $title = 'Report Consultation';
        $objPHPExcel = $this->cms_excel->create_excel($title);
        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'Report Consultation');
        $this->cms_excel->setbold($objPHPExcel, array('A1'));
        $this->cms_excel->setmerge($objPHPExcel, array('A1:J1'));
        $this->cms_excel->setautosize($objPHPExcel, array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'));

        $row = 3;

        if (count($arr_consultation) > 0)
        {
            $objPHPExcel->getActiveSheet()->setCellValueExplicit("A{$row}", 'Number');
            $objPHPExcel->getActiveSheet()->setCellValue("B{$row}", 'Name');
            $objPHPExcel->getActiveSheet()->setCellValue("C{$row}", 'Date');
            $objPHPExcel->getActiveSheet()->setCellValue("D{$row}", 'Category');
            $objPHPExcel->getActiveSheet()->setCellValue("E{$row}", 'Status');
            $objPHPExcel->getActiveSheet()->setCellValue("F{$row}", 'Doctor');
            $objPHPExcel->getActiveSheet()->setCellValue("G{$row}", 'Patient Number');
            $objPHPExcel->getActiveSheet()->setCellValue("H{$row}", 'Patient Name');
            $objPHPExcel->getActiveSheet()->setCellValue("I{$row}", 'Email');
            $objPHPExcel->getActiveSheet()->setCellValue("J{$row}", 'Phone');
            $this->cms_excel->setborder($objPHPExcel, "A{$row}", "J{$row}", '#000');
            $this->cms_excel->setbold($objPHPExcel, array("A{$row}", "B{$row}", "C{$row}", "D{$row}", "E{$row}", "F{$row}", "G{$row}", "H{$row}", "I{$row}", "J{$row}"));

            $row += 1;

            foreach ($arr_consultation as $consultation)
            {
                $objPHPExcel->getActiveSheet()->setCellValue("A{$row}", $consultation->number);
                $objPHPExcel->getActiveSheet()->setCellValue("B{$row}", $consultation->patient_name);
                $objPHPExcel->getActiveSheet()->setCellValue("C{$row}", PHPExcel_Shared_Date::PHPToExcel($consultation->date));
                $objPHPExcel->getActiveSheet()->setCellValue("D{$row}", $consultation->category_name);
                $objPHPExcel->getActiveSheet()->setCellValue("E{$row}", $consultation->status);
                $objPHPExcel->getActiveSheet()->setCellValue("F{$row}", 'Dr. Rahmaputri Maharani');
                $objPHPExcel->getActiveSheet()->setCellValue("G{$row}", $consultation->patient_number);
                $objPHPExcel->getActiveSheet()->setCellValue("H{$row}", $consultation->patient_name);
                $objPHPExcel->getActiveSheet()->setCellValue("I{$row}", $consultation->patient_email);
                $objPHPExcel->getActiveSheet()->setCellValueExplicit("J{$row}", $consultation->patient_phone);
                $this->cms_excel->setdateformat($objPHPExcel, array("C{$row}"));
                $this->cms_excel->setborder($objPHPExcel, "A{$row}", "J{$row}", '#000');

                $row += 1;
            }
        }
        else
        {
            $objPHPExcel->getActiveSheet()->setCellValue("A{$row}", 'No Data.');
        }

        $this->cms_excel->download_excel($objPHPExcel, $title);
    }
    /* End Public Function Export Area */




    /* Public Function Area */
    public function consultation($page = 1)
    {
        $arr_data = array();
        $acl = $this->_acl;

        $this->db->where('status', 'Finish');
        $this->db->where('date >', 1601485200);
        $this->db->limit($this->_setting->setting__limit_page, ($page - 1) * $this->_setting->setting__limit_page);
        $this->db->order_by('date DESC');
        $arr_consultation = $this->core_model->get('consultation');
        $arr_patient_id = $this->cms_function->extract_records($arr_consultation, 'patient_id');
        $arr_consultation_id = $this->cms_function->extract_records($arr_consultation, 'id');

        $arr_patient = $this->core_model->get('patient', $arr_patient_id);
        $arr_patient_lookup = array();

        $this->db->where_in('consultation_id', $arr_consultation_id);
        $arr_consultation_product = $this->core_model->get('consultation_product');
        $arr_prescription_lookup = array();

        foreach ($arr_consultation_product as $consultation_product)
        {
            $arr_prescription_lookup[$consultation_product->consultation_id][] = clone $consultation_product;
        }

        $this->db->where_in('patient_id', $arr_patient_id);
        $this->db->where('payment_status', 'Paid');
        $arr_order = $this->core_model->get('order');
        $arr_order_lookup = array();

        foreach ($arr_order as $order)
        {
            $arr_order_lookup[$order->patient_id] = clone $order;
        }

        foreach ($arr_patient as $patient)
        {
            $arr_patient_lookup[$patient->id] = clone $patient;
        }

        foreach ($arr_consultation as $consultation)
        {
            $consultation->has_order = (isset($arr_order_lookup[$consultation->patient_id]) && (isset($arr_prescription_lookup[$consultation->id]) && count($arr_prescription_lookup[$consultation->id]) > 0)) ? 1 : 0;

            $consultation->status = ($consultation->status == 'Finish') ? 'Approved' : $consultation->status;
            $consultation->date_display = date('F d, Y, H:i:s', $consultation->date);
            $consultation->date_follow_up_display = ($consultation->date_follow_up > 0) ? date('F d, Y, H:i:s', $consultation->date_follow_up) : '';

            $pending_time = ($consultation->status == 'Pending') ? time() - $consultation->date : $consultation->date_consultation_start - $consultation->date;
            $hour_pending = floor($pending_time / 3600);
            $minutes_pending = (floor(($pending_time - ($hour_pending * 3600)) / 60));
            $consultation->hour_pending_count = $hour_pending . 'H ' . $minutes_pending . 'M';
            $consultation->hour_pending = $hour_pending;

            $consultation->hour_consultation_count = '';

            if ($consultation->date_consultation_end > 0)
            {
                $consultation_time = $consultation->date_consultation_end - $consultation->date_consultation_start;
                $hour_consultation = floor($consultation_time / 3600);
                $minutes_consultation = (floor(($consultation_time - ($hour_consultation * 3600)) / 60));
                $consultation->hour_consultation_count = $hour_consultation . 'H ' . $minutes_consultation . 'M';
                $consultation->hour_consultation = $hour_consultation;
            }

            $consultation->patient_name = (isset($arr_patient_lookup[$consultation->patient_id])) ? $arr_patient_lookup[$consultation->patient_id]->name : '';
            $consultation->patient_number = (isset($arr_patient_lookup[$consultation->patient_id])) ? $arr_patient_lookup[$consultation->patient_id]->number : '';
            $consultation->patient_phone = (isset($arr_patient_lookup[$consultation->patient_id])) ? $arr_patient_lookup[$consultation->patient_id]->phone : '';
            $consultation->patient_phone = preg_replace('/^0/', '62', $consultation->patient_phone);
        }

        $this->db->where('status', 'Finish');
        $this->db->where('date >', 1601485200);
        $count_consultation = $this->core_model->count('consultation');
        $count_page = ceil($count_consultation / $this->_setting->setting__limit_page);

        $arr_data['title'] = 'Order';
        $arr_data['nav'] = 'Consultation FU';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;
        $arr_data['page'] = $page;
        $arr_data['count_page'] = $count_page;

        $arr_data['arr_consultation'] = $arr_consultation;

        $this->load->view('fu_consultation', $arr_data);
    }

    public function custom($type = '', $page = 1)
    {
        $arr_data = array();
        $acl = $this->_acl;

        $this->db->where('type', $type);
        $this->db->limit($this->_setting->setting__limit_page, ($page - 1) * $this->_setting->setting__limit_page);
        $arr_survey = $this->core_model->get('survey');

        foreach ($arr_survey as $survey)
        {
            $survey->date_display = ($survey->date > 0) ? date('d F Y H:i:s', $survey->date) : '';
            $survey->message = '';
            $arr_name = explode(' ', $survey->name);

            if ($survey->type == 'best20')
            {
                $survey->message = 'Selamat%20siang%20' . $arr_name[0] . ',%20saya%20Anya%20dari%20Norm%20🙂%20Semoga%20Kakak%20sehat%20selalu.%0A%0AAgar%20dapat%20terus%20meningkatkan%20pelayanan%20Norm,%20apakah%20Kakak%20terbuka%20untuk%20memberikan%20feedback%20kepada%20kami?%0A%0ASurvei%20ini%20*hanya%20  1%20pertanyaan*%20dan%20akan%20ada%20hadiah%20*voucher%20spesial*%20khusus%20untukmu.%0A%0AApakah%20Kakak%20tertarik%20untuk%20join?';
                $survey->phone = substr_replace($survey->phone, "62", 0, 1);
            }
            elseif ($survey->type == 'hairloss-fu')
            {
                $survey->message = 'Hi%20kak,%0A%0AAnya%20mau%20kasih%20penawaran%20hair%20loss%20program%20treatment%20khusus%20untuk%20kamu😎%0A%0AHair%20loss%20program%20treatment%20ini%20efektif%20dan%20teruji%20dalam%20mengatasi%20kerontokan,%20penipisan%20dan%20kebotakan%20pada%20rambut.%20Treatment%20ini%20biasanya%20butuh%20waktu%206-12%20bulan%20pemakaian%20untuk%20hasil%20yang%20maksimal%20dan%20permanen.%0A%0A*Hairloss%20program%20treatment%20Complete%20Hair%20Loss%20Kit%20(Anti-DHT%20Shampoo,%20Hair%20Tonic,%20Finasteride):*%0A%0A*1.%203-bulan%20Complete%20Hair%20Loss%20Kit:*%20Diskon%2010%+10%%0A*2.%206-bulan%20Complete%20Hair%20Loss%20Kit:*%20Diskon%2010%%20+%20Free%20Starter%20Hair%20Loss%20Kit%0A*3.%2012-bulan%20Complete%20Hair%20Loss%20Kit:*%20Hanya%20bayar%2011%20paket%20Complete%20Hair%20Loss%20Kit%0A%0A*Hairloss%20program%20treatment%20Starter%20Hair%20Loss%20Kit%20(Anti-DHT%20Shampoo,%20Hair%20Tonic):*%0A%0A*1.%203-bulan%20Starter%20Hair%20Loss%20Kit:*%20Diskon%2010%+10%%0A*2.%206-bulan%20Starter%20Hair%20Loss%20Kit:*%20Hanya%20bayar%205%20paket%20Starter%20Hair%20Loss%20Kit%0A*3.%2012-bulan%20Starter%20Hair%20Loss%20Kit:*%20Hanya%20bayar%20harga%2011%20paket%20Starter%20Hair%20Loss%20Kit%0A%0APemakaian%20produk%20secara%20konsisten%20itu%20kunci%20keberhasilan%20untuk%20miliki%20tampilan%20rambut%20terbaik%20dan%20hasilnya%20permanen.%0A%0AYuk,%20kak%20JoinTheNorm%20dengan%20gabung%20ke%20hair%20loss%20treatment%20program%20ini.%20🤙';
            }
            elseif ($survey->type == 'pe-fu')
            {
                $survey->message = 'Hi%20kak,%0A%0AAnya%20mau%20kasih%20penawaran%20treatment%20ejakulasi%20dini%20khusus%20untuk%20kamu%20😎%0A%0AProgram%20treatment%20ejakulasi%20dini%20ini%20efektif%20dan%20teruji%20dalam%20mengatasi%20ejakulasi%20dini%20sehingga%20membuat%20kamu%20memiliki%20durasi%20yang%20lebih%20lama%20dalam%20berhubungan.%0A%0AStamina%20cream%20program%20treatment%0A%0A1.%203-bulan%20Stamina%20cream:%20Diskon%2010%%20+%2010%%0A2.%206-bulan%20Stamina%20cream:%20Hanya%20bayar%205pcs%20Stamina%20cream%0A3.%2012-bulan%20Stamina%20cream:%20Hanya%20bayar%20harga%2011pcs%20Stamina%20cream%0A%0APemakaian%20produk%20bisa%20bertahan%20selama%201-3%20jam%20setelah%20pengaplikasian%20dan%20mengurangi%20sensitivitas%20penis%20sehingga%20dapat%20berhubungan%20lebih%20lama.%0A%0AYuk,%20kak%20JoinTheNorm%20dengan%20gabung%20ke%20Stamina%20cream%20treatment%20dan%20miliki%20performa%20hubungan%20yang%20lebih%20baik%20🤙';
            }
            elseif ($survey->type == 'TrawlBens')
            {
                $survey->message = 'Halo%20kak,%0APunya%20masalah%20dengan%20rambut%20rontok%20atau%20kesehatan%20seksual?%0A%0AAku%20Anya%20dari%20Norm,%20brand%20khusus%20pria%20yang%20menawarkan%20solusi%20untuk%20masalah%20kesehatan%20dan%20penampilan%20pria%20secara%20efektif,%20praktis,%20dan%20terjangkau.%0A%0ANorm%20memiliki%20rangkaian%20produk%20untuk%20masalah%20kamu,%20seperti%20:%0A1.%20Hair%20Loss%20Kit%20:%20mengatasi%20rambut%20rontok%20dan%20mencegah%20kebotakan%0A%0A2.%20Stamina%20Cream%20:%20membantu%20meningkatkan%20durasi%20berhubungan%20lebih%20lama%0A%0ASilakan%20cek%20melalui%20website%20di%20norm.id%20atau%20aku%20bantu%20untuk%20pemesanan%20dan%20pertanyaan%20produk%20di%20nomor%20081210779710.%0A%0AStay%20health%20and%20stay%20safe%20kak%20😊';
            }
        }

        $this->db->where('type', $type);
        $count_survey = $this->core_model->count('survey');
        $count_page = ceil($count_survey / $this->_setting->setting__limit_page);

        $arr_data['title'] = 'Order';
        $arr_data['nav'] = $type;
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;
        $arr_data['page'] = $page;
        $arr_data['count_page'] = $count_page;

        $arr_data['type'] = $type;
        $arr_data['arr_survey'] = $arr_survey;

        $this->load->view('fu_custom', $arr_data);
    }

    public function expired_order($page = 1)
    {
        $arr_data = array();
        $acl = $this->_acl;

        $start_date = time();

        $this->db->where('date <=', $start_date);
        $this->db->where('patient_id >', 0);
        $this->db->where('payment_status', 'Expired');
        $this->db->limit($this->_setting->setting__limit_page, ($page - 1) * $this->_setting->setting__limit_page);
        $this->db->order_by('date DESC');
        $arr_order = $this->core_model->get('order');

        $arr_patient_id = $this->cms_function->extract_records($arr_order, 'patient_id');
        $arr_order_id = $this->cms_function->extract_records($arr_order, 'id');
        $arr_patient_id = array();
        $arr_order_item_lookup = array();

        $arr_patient = $this->core_model->get('patient', $arr_patient_id);

        foreach ($arr_patient as $patient)
        {
            $arr_patient_lookup[$patient->id] = clone $patient;
        }

        foreach ($arr_order as $key => $order)
        {
            $order->date_display = date('d F Y', $order->date);
            $order->grand_total_display = $this->_setting->setting__webshop_currency . ' ' . number_format($order->grand_total, 0, '.', ',');
            $order->patient_name = (isset($arr_patient_lookup[$order->patient_id])) ? ucwords(strtolower($arr_patient_lookup[$order->patient_id]->name)) : $order->patient_name;

            $order->patient_phone = (isset($arr_patient_lookup[$order->patient_id])) ? $arr_patient_lookup[$order->patient_id]->phone : $order->shipping_phone;
            $order->patient_email = (isset($arr_patient_lookup[$order->patient_id])) ? $arr_patient_lookup[$order->patient_id]->email : $order->shipping_email;
            $order->patient_phone = substr_replace($order->patient_phone, "62", 0, 1);
            $order->patient_name = ($order->patient_id <= 0) ? $order->shipping_name : $order->patient_name;
            $order->item_list = (isset($arr_order_item_lookup[$order->id])) ? $arr_order_item_lookup[$order->id] : '';
            $order->source = (isset($arr_patient_lookup[$order->patient_id])) ? $arr_patient_lookup[$order->patient_id]->source : '';

            $order->count_day = round((time() - $order->date) / 86400);
        }

        $this->db->where('date <=', $start_date);
        $this->db->where('patient_id >', 0);
        $this->db->where('payment_status', 'Paid');
        $count_order = $this->core_model->count('order');
        $count_page = ceil($count_order / $this->_setting->setting__limit_page);

        $arr_data['title'] = 'Order';
        $arr_data['nav'] = 'Consultation FU';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;
        $arr_data['page'] = $page;
        $arr_data['count_page'] = $count_page;

        $arr_data['arr_order'] = $arr_order;

        $this->load->view('fu_expired_order', $arr_data);
    }

    public function order($page = 1)
    {
        $arr_data = array();
        $acl = $this->_acl;

        $start_date = time() - (86400 * 21);
        $end_date = 1609434000;//time() - (86400 * 90);

        // chaeck order
        $this->db->where('date >', time());
        $arr_new_order = $this->core_model->get('order');
        $arr_reorder_patient_id = $this->cms_function->extract_records($arr_new_order, 'patient_id');

        $this->db->where('date <=', $start_date);
        $this->db->where('date >=', $end_date);
        $this->db->where('patient_id >', 0);
        $this->db->where('payment_status', 'Paid');

        if (count($arr_reorder_patient_id) > 0)
        {
            $this->db->where_not_in('patient_id', $arr_reorder_patient_id);
        }

        $this->db->limit($this->_setting->setting__limit_page, ($page - 1) * $this->_setting->setting__limit_page);
        $this->db->order_by('date DESC');
        $arr_order = $this->core_model->get('order');

        $arr_patient_id = $this->cms_function->extract_records($arr_order, 'patient_id');
        $arr_order_id = $this->cms_function->extract_records($arr_order, 'id');
        $arr_patient_id = array();
        $arr_order_item_lookup = array();

        $arr_patient = $this->core_model->get('patient', $arr_patient_id);

        foreach ($arr_patient as $patient)
        {
            $arr_patient_lookup[$patient->id] = clone $patient;
        }

        foreach ($arr_order as $key => $order)
        {
            $order->date_display = date('d F Y', $order->date);
            $order->date_follow_up_display = ($order->date_follow_up > 0) ? date('d F Y H:i:s', $order->date_follow_up) : '';
            $order->grand_total_display = $this->_setting->setting__webshop_currency . ' ' . number_format($order->grand_total, 0, '.', ',');
            $order->patient_name = (isset($arr_patient_lookup[$order->patient_id])) ? ucwords(strtolower($arr_patient_lookup[$order->patient_id]->name)) : $order->patient_name;

            $order->patient_phone = (isset($arr_patient_lookup[$order->patient_id])) ? $arr_patient_lookup[$order->patient_id]->phone : $order->shipping_phone;
            $order->patient_email = (isset($arr_patient_lookup[$order->patient_id])) ? $arr_patient_lookup[$order->patient_id]->email : $order->shipping_email;
            $order->patient_phone = substr_replace($order->patient_phone, "62", 0, 1);
            $order->patient_name = ($order->patient_id <= 0) ? $order->shipping_name : $order->patient_name;
            $order->item_list = (isset($arr_order_item_lookup[$order->id])) ? $arr_order_item_lookup[$order->id] : '';
            $order->source = (isset($arr_patient_lookup[$order->patient_id])) ? $arr_patient_lookup[$order->patient_id]->source : '';

            $order->count_day = round((time() - $order->date) / 86400);
        }

        $this->db->where('date <=', $start_date);
        $this->db->where('date >=', $end_date);
        $this->db->where('patient_id >', 0);
        $this->db->where('payment_status', 'Paid');

        if (count($arr_reorder_patient_id) > 0)
        {
            $this->db->where_not_in('patient_id', $arr_reorder_patient_id);
        }

        $count_order = $this->core_model->count('order');
        $count_page = ceil($count_order / $this->_setting->setting__limit_page);

        $arr_data['title'] = 'Order';
        $arr_data['nav'] = 'Order FU';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;
        $arr_data['page'] = $page;
        $arr_data['count_page'] = $count_page;

        $arr_data['arr_order'] = $arr_order;

        $this->load->view('fu_order', $arr_data);
    }

    public function review($page = 1)
    {
        $arr_data = array();
        $acl = $this->_acl;

        // chaeck order

        $this->db->where('date >=', 1625590800);
        $this->db->where('payment_status', 'Paid');

        $this->db->limit($this->_setting->setting__limit_page, ($page - 1) * $this->_setting->setting__limit_page);
        $this->db->order_by('date ASC');
        $arr_order = $this->core_model->get('order');

        $arr_patient_id = $this->cms_function->extract_records($arr_order, 'patient_id');
        $arr_order_id = $this->cms_function->extract_records($arr_order, 'id');
        $arr_patient_id = array();
        $arr_order_item_lookup = array();

        $arr_patient = $this->core_model->get('patient', $arr_patient_id);

        foreach ($arr_patient as $patient)
        {
            $arr_patient_lookup[$patient->id] = clone $patient;
        }

        foreach ($arr_order as $key => $order)
        {
            $order->date_display = date('d F Y', $order->date);
            $order->date_follow_up_display = ($order->date_follow_up > 0) ? date('d F Y H:i:s', $order->date_follow_up) : '';
            $order->grand_total_display = $this->_setting->setting__webshop_currency . ' ' . number_format($order->grand_total, 0, '.', ',');
            $order->patient_name = (isset($arr_patient_lookup[$order->patient_id])) ? ucwords(strtolower($arr_patient_lookup[$order->patient_id]->name)) : $order->patient_name;

            $order->patient_phone = (isset($arr_patient_lookup[$order->patient_id])) ? $arr_patient_lookup[$order->patient_id]->phone : $order->shipping_phone;
            $order->patient_email = (isset($arr_patient_lookup[$order->patient_id])) ? $arr_patient_lookup[$order->patient_id]->email : $order->shipping_email;
            $order->patient_phone = substr_replace($order->patient_phone, "62", 0, 1);
            $order->patient_name = ($order->patient_id <= 0) ? $order->shipping_name : $order->patient_name;
            $order->item_list = (isset($arr_order_item_lookup[$order->id])) ? $arr_order_item_lookup[$order->id] : '';
            $order->source = (isset($arr_patient_lookup[$order->patient_id])) ? $arr_patient_lookup[$order->patient_id]->source : '';

            $order->count_day = round((time() - $order->date) / 86400);
        }

        $this->db->where('date >=', 1625590800);
        $this->db->where('payment_status', 'Paid');
        $count_order = $this->core_model->count('order');
        $count_page = ceil($count_order / $this->_setting->setting__limit_page);

        $arr_data['title'] = 'Order';
        $arr_data['nav'] = 'Review FU';
        $arr_data['setting'] = $this->_setting;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['acl'] = $acl;
        $arr_data['account'] = $this->_user;
        $arr_data['page'] = $page;
        $arr_data['count_page'] = $count_page;

        $arr_data['arr_order'] = $arr_order;

        $this->load->view('fu_review', $arr_data);
    }
    /* End Public Function Area */




    /* Ajax Area */
    public function ajax_update_consultation($consultation_id)
    {
        $json['status'] = 'success';

        try
        {
            $this->db->trans_start();

            if ($consultation_id <= 0)
            {
                throw new Exception();
            }

            if ($this->session->userdata('user_id') != $this->_user->id)
            {
                throw new Exception('Server Error. Please log out first.');
            }

            $acl = $this->_acl;

            $old_consultation = $this->core_model->get('consultation', $consultation_id);

            $old_consultation_record = array();

            foreach ($old_consultation as $key => $value)
            {
                $old_consultation_record[$key] = $value;
            }

            $consultation_record = array();

            foreach ($_POST as $k => $v)
            {
                $consultation_record[$k] = ($k == 'date') ? strtotime($v) : $v;
            }

            if (isset($consultation_record['follow_up']))
            {
                $consultation_record['date_follow_up'] = time();
            }

            if (isset($consultation_record['follow_up_unbuy']))
            {
                $consultation_record['follow_up_unbuy_date'] = time();
            }

            $this->core_model->update('consultation', $consultation_id, $consultation_record);
            $consultation_record['id'] = $consultation_id;
            $consultation_record['last_query'] = $this->db->last_query();

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

    public function ajax_update_order($order_id)
    {
        $json['status'] = 'success';

        try
        {
            $this->db->trans_start();

            if ($order_id <= 0)
            {
                throw new Exception();
            }

            if ($this->session->userdata('user_id') != $this->_user->id)
            {
                throw new Exception('Server Error. Please log out first.');
            }

            $acl = $this->_acl;

            $old_order = $this->core_model->get('order', $order_id);

            $old_order_record = array();

            foreach ($old_order as $key => $value)
            {
                $old_order_record[$key] = $value;
            }

            $order_record = array();

            foreach ($_POST as $k => $v)
            {
                $order_record[$k] = ($k == 'date') ? strtotime($v) : $v;
            }

            if (isset($order_record['follow_up']))
            {
                $order_record['date_follow_up'] = time();
            }

            $this->core_model->update('order', $order_id, $order_record);
            $order_record['id'] = $order_id;
            $order_record['last_query'] = $this->db->last_query();

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

    public function ajax_update_survey($survey_id)
    {
        $json['status'] = 'success';

        try
        {
            $this->db->trans_start();

            if ($survey_id <= 0)
            {
                throw new Exception();
            }

            if ($this->session->userdata('user_id') != $this->_user->id)
            {
                throw new Exception('Server Error. Please log out first.');
            }

            $acl = $this->_acl;

            $old_survey = $this->core_model->get('survey', $survey_id);

            $old_survey_record = array();

            foreach ($old_survey as $key => $value)
            {
                $old_survey_record[$key] = $value;
            }

            $survey_record = array();

            foreach ($_POST as $k => $v)
            {
                $survey_record[$k] = ($k == 'date') ? strtotime($v) : $v;
            }

            if (isset($survey_record['notification']))
            {
                $survey_record['date'] = time();
            }

            $this->core_model->update('survey', $survey_id, $survey_record);
            $survey_record['id'] = $survey_id;
            $survey_record['last_query'] = $this->db->last_query();

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