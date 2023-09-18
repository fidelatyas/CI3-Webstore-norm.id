<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cron extends CI_Controller
{
    private $_user;
    private $_setting;

    public function __construct()
    {
        parent:: __construct();

        $this->_setting = $this->setting_model->load();
    }




    /* Public Function Area */
    /* End Public Function Area */




    /* Ajax Area */
    public function ajax_sync_courier()
    {
        $json['status'] = 'success';

        try
        {
            set_time_limit(0);

            $this->db->trans_start();

            // update JNT order
            $this->db->where('shipping_courier', 'EZ');
            $this->db->where('status', 'Processing');
            $arr_order = $this->core_model->get('order');

            foreach ($arr_order as $order)
            {
                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => "http://interchange.jet.co.id:22268/jandt-order-web/track/trackAction!tracking.action",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_POSTFIELDS =>"{\"awb\":\"{$order->number}\",\"eccompanyid\":\"NORM\",\"method\":\"2\"}",
                    CURLOPT_HTTPHEADER => array(
                        "Authorization: Basic Tk9STTpSOW9iR2VEM3F1Mmo=",
                        "Content-Type: text/plain"
                    ),
                ));

                $response = curl_exec($curl);

                curl_close($curl);

                $obj_shipping = json_decode($response);
                $arr_history = (isset($obj_shipping->error_id)) ? array() : array_reverse($obj_shipping->history);

                if (count($arr_history) > 0 && strtolower($arr_history[0]->status) == strtolower('Paket telah diterima'))
                {
                    $order_record = array();
                    $order_record['status'] = 'Delivered';
                    $order_record['delivered_date'] = strtotime($arr_history[0]->date_time);

                    $this->core_model->update('order', $order->id, $order_record);

                    $patient = $this->core_model->get('patient', $order->patient_id);

                    $subject = "[norm] Pesanan {$order->number} kamu sudah selesai.";
                    $message = $this->load->view('print/delivery_message', array('name' => $patient->name, 'order_number' => $order->number, 'order_id' => $order->id), true);

                    // $this->cms_function->load_email_library($this->_setting, $patient->email, array(), $subject, $message, 'html');
                }
            }

            // update anteraja order
            $this->db->where_in('shipping_courier', array('SD', 'ND', 'REG'));
            $this->db->where('status', 'Processing');
            $arr_order = $this->core_model->get('order');

            foreach ($arr_order as $order)
            {
                $basepath = 'https://doit.anteraja.id/norm/tracking/';

                $arr_header = array();
                $arr_header[] = 'access-key-id: Anteraja_x_Norm';
                $arr_header[] = 'secret-access-key: oH5OZ4Z2jXMEJ6itJoksQZi5';
                $arr_header[] = 'Content-Type: application/json';

                $data = new stdClass();
                $data->waybill_no = $order->shipping_courier_tracking_id;

                $payload = json_encode($data);

                $curl = curl_init($basepath);
                curl_setopt($curl, CURLOPT_HTTPHEADER, $arr_header);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_POST, true);
                curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);

                $response = curl_exec($curl);
                curl_close($curl);

                $obj_response = json_decode($response);

                $arr_history = (isset($obj_response->content->history)) ? $obj_response->content->history : array();

                if (count($arr_history) > 0 && $arr_history[0]->tracking_code == 250)
                {
                    $order_record = array();
                    $order_record['status'] = 'Delivered';
                    $order_record['delivered_date'] = strtotime($arr_history[0]->timestamp);

                    $this->core_model->update('order', $order->id, $order_record);

                    $patient = $this->core_model->get('patient', $order->patient_id);

                    $subject = "[norm] Pesanan {$order->number} kamu sudah selesai.";
                    $message = $this->load->view('print/delivery_message', array('name' => $patient->name, 'order_number' => $order->number, 'order_id' => $order->id), true);

                    // $this->cms_function->load_email_library($this->_setting, $patient->email, array(), $subject, $message, 'html');
                }
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
    /* End Private Function Area */
}