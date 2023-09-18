<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Haistar extends CI_Controller
{
    private $_setting;
    private $_patient;
    private $_api_key;
    private $_api_endpoint_url;
    private $_hashkey;

    public function __construct()
    {
        parent:: __construct();

        $this->_setting = $this->setting_model->load();
        $this->_api_key = '550a0cd295be34497bac8ae03bb19567';
        $this->_api_endpoint_url = 'https://hiperion.haistar.co.id';
        $this->_hashkey = 'PksahgbYvarf09*&7565$%^225';
    }




    /* Public Function Area */

    public function get_all_order()
    {
        $json['status'] = 'success';

        try
        {
            $this->db->trans_start();

            $signature = $this->_get_signature();
            $start = '2021-07-07 00:00:00';
            $end = '2021-07-07 06:00:00';

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => $this->_api_endpoint_url . '/GetOrder/?Apikey=' . $this->_api_key,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => '{
                    "apikey":"550a0cd295be34497bac8ae03bb19567",
                    "start_date":"2021-07-06 06:00:00",
                    "end_date":"2021-07-06 12:00:00"
                }',
                CURLOPT_HTTPHEADER => array(
                    'apikey: ' . $this->_api_key,
                    'Content-Type: application/json',
                    'x-authorization: ' . $signature,
                ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);

            $arr_response = jsoN_decode($response);

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

    public function get_courier($courier = 'JNT')
    {
        $json['status'] = 'success';

        try
        {
            $this->db->trans_start();

            $signature = $this->_get_signature();
            $start = date('Y-m-d 12:00:00', time());
            $end = date('Y-m-d H:i:s', time());

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => $this->_api_endpoint_url . '/Courier/getDeliveryType/?apikey=' . $this->_api_key,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_POSTFIELDS => json_encode(array(
                    'courier_name' => $courier)),
                CURLOPT_HTTPHEADER => array(
                    'Apikey: ' . $this->_api_key,
                    'Content-Type: application/json',
                    'x-authorization: ' . $signature,
                ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);

            var_dump(json_decode($response));

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

    public function push_order()
    {
        $json['status'] = 'success';

        try
        {
            $this->db->trans_start();

            $signature = $this->_get_signature();

            $curl = curl_init();

            $arr_items = array();

            $item = new stdClass();
            $item->item_code = 'NPRO-000017';
            $item->quantity = 1;
            $item->unit_price = 469000;
            $arr_items[] = clone $item;

            $record = array();

            $record['apikey'] = $this->_api_key;
            $record['location'] = 'LOCLN';
            $record['code'] = $this->cms_function->generate_random_number('order', 4);
            $record['order_date'] = date('Y-m-d H:i:s', time());
            $record['channel_id'] = 'WEB';
            $record['courier_name'] = 'AnterAja';
            $record['delivery_type_name'] = '100';
            $record['waybill_number'] = 'adlasjldkajslkdjl';
            $record['stock_type_name'] = 'MULTI CHANNEL';
            $record['payment_type'] = 'NON COD';
            $record['cod_price'] = 0;
            $record['total_price'] = 469000;
            $record['remark'] = 'Fragile. Handle with care.';

            $record['recipient_name'] = 'Aurelius Sugianto';
            $record['recipient_postal_code'] = '13960';
            $record['recipient_phone'] = '081911778839';
            $record['recipient_email'] = 'sugi@selestialbrands.com';
            $record['recipient_address'] = 'Metland Menteng blok E4 / 20';
            $record['recipient_country'] = 'Indonesia';
            $record['recipient_province'] = 'DKI JAKARTA';
            $record['recipient_city'] = 'JAKARTA TIMUR';
            $record['recipient_district'] = 'CAKUNG';
            $record['stock_source'] = 'GOOD STOCK';
            $record['order_type'] = 'Sales Order';
            $record['dfod_price'] = 0;
            $record['shipping_price'] = 0;
            $record['items'] = $arr_items;

            // https://hiperiondev.haistar.co.id/
            curl_setopt_array($curl, array(
                CURLOPT_URL => $this->_api_endpoint_url . '/Push_order/?apikey=' . $this->_api_key,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => json_encode($record),
                CURLOPT_HTTPHEADER => array(
                    'Apikey: ' . $this->_api_key,
                    'Content-Type: application/json',
                    'x-authorization: ' . $signature,
                ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);

            var_dump($record);
            var_dump($response);

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

    public function subscribe_new_order()
    {
        // https://hiperion.haistar.co.id/Api/Subscribe_Webhook_NewOrder/?apikey=13a069d99c42ce1da40822b4042d1153

        $json['status'] = 'success';

        try
        {
            $this->db->trans_start();

            $signature = $this->_get_signature();

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => $this->_api_endpoint_url . '/Api/Subscribe_Webhook_Order_Status/?apikey=' . $this->_api_key,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => json_encode(array(
                    'apikey' => $this->_api_key, 'platform' => 'WEB', 'url' => 'https://www.norm.id/api/haistar/update_order_status/')),
                CURLOPT_HTTPHEADER => array(
                    'Apikey: ' . $this->_api_key,
                    'Content-Type: application/json',
                    'x-authorization: ' . $signature,
                ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);

            var_dump($response);

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

    public function update_order_status()
    {
        $json['status'] = 'success';

        try
        {
            $this->db->trans_start();

            //'{"response": 200, "status": "order status updates", "data": {"code": 12345, "hash_key": "PksahgbYvarf09*&7565$%^225", "status_id": 24}}';
            // {"response": 200, "status": "order status updates", "data": {"code": 12345, "hash_key": "PksahgbYvarf09*&7565$%^225", "status_id": 24}}

            $json_result = file_get_contents('php://input');
            $result = json_decode($json_result);

            $order_status_lookup = array();
            $order_status_lookup['70'] = 'Pending';
            $order_status_lookup['71'] = 'Out Of Stock';
            $order_status_lookup['23'] = 'Pending';
            $order_status_lookup['16'] = 'Pending';
            $order_status_lookup['21'] = 'Pending';
            $order_status_lookup['8'] = 'Processing';
            $order_status_lookup['24'] = 'Processing';
            $order_status_lookup['25'] = 'Processing';
            $order_status_lookup['26'] = 'Processing';
            $order_status_lookup['27'] = 'Processing';
            $order_status_lookup['10'] = 'Processing';
            $order_status_lookup['11'] = 'Processing';
            $order_status_lookup['12'] = 'Delivered';
            $order_status_lookup['15'] = 'Return';
            $order_status_lookup['73'] = 'cancel';
            $order_status_lookup['14'] = 'cancel';

            $order_record = array();
            $order_record['status'] = (isset($order_status_lookup[$result->data->status_id])) ? $order_status_lookup[$result->data->status_id] : 'Pending';

            if ($order_record['status'] == 'Processing')
            {
                $order_record['processed_date'] = time();
            }

            if ($order_record['status'] == 'Delivered')
            {
                $order_record['delivered_date'] = time();
            }

            $this->db->where('number', $result->data->code);
            $this->core_model->update('order', 0, $order_record);

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
    /* End Public Function Area */




    /* Ajax Area */
    /* End Ajax Area */




    /* Private Function Area */
    private function _get_signature()
    {
        $param = new stdClass();
        $param->apikey = $this->_api_key;
        $json_param = json_encode($param);

        $url =  $this->_api_endpoint_url . '/Api/getSignature/?apikey=' . $this->_api_key;
        $curl = curl_init($url);

        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'apikey: ' . $this->_api_key));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $json_param);

        $result = curl_exec($curl);
        curl_close($curl);

        $auth = json_decode($result);

        return $auth->Data->Signature;
    }
    /* End Private Function Area */
}
