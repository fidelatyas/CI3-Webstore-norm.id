<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Westbike extends CI_Controller
{
    private $_setting;

    private $_api_url;
    private $_client_id;
    private $_api_secret;

    public function __construct()
    {
        parent:: __construct();

        $this->_setting = $this->setting_model->load();

        $this->_api_url = 'https://westbike.id:8443';
        $this->_client_id = '6ce94de64a9948229151d5fc9548153f';
        $this->_api_secret = '8f178bbb92984196a06b84a427fb32a4';
    }




    /* Public Function Area */
    public function index()
    {
        $json['status'] = 'success';

        try
        {
            $authentication = $this->_authenticate();
            $delivery_order = $this->_submit_delivery_order($authentication);
            $this->_checkout($authentication, $delivery_order);
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
    private function _authenticate()
    {
        $url = $this->_api_url . '/api/auth/authenticate';

        $params = '{"grantType":"client_credential","clientId":"'. $this->_client_id .'","clientSecret":"' . $this->_api_secret . '"}';

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $params,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'User-Agent: Mozilla/5.0 (platform; rv:geckoversion) Gecko/geckotrail Firefox/firefoxversion'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $arr_response = json_decode($response);

        return $arr_response;
    }

    private function _checkout($authentication, $delivery_order)
    {
        $url = $this->_api_url . '/api/merchant/invoices/checkout';
        $params = '{"transactionOrderIds": ["' . $delivery_order->id . '"]}';

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $params,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: Bearer ' . $authentication->access_token
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $arr_response = json_decode($response);
        var_dump($arr_response);
    }

    private function _submit_delivery_order($authentication)
    {
        $url = $this->_api_url . '/api/transaction/delivery/order';
        $params = '{"pickupAddress": {"address": "Jalan Danau Toba No. G2/149, Bendungan Hilir,","description": "Samping Anna Suite","pickupPhone": "6282193222215","pickupName": "Norm","longitude": "-6.210210884542241","latitude": "106.81193902143738","cityId": 1,"cityCode": 7,"zoneId": 100,"zoneCode": "11179"},"deliveryAddress": {"address": "Treasury Tower lti 21 Unit F","description": "Seberang Grand Lucky","pickupPhone": "6282193222215","pickupName": "Norm","longitude": 0,"latitude": 0,"receiverName": "Sugianto","receiverEmail": "sugi@selestialbrands.com","cityId": 1,"receiverPhone": 6281911778839,"cityCode": 7,"zoneId": 127,"zoneCode": 11206},"serviceId": 22,"serviceCode": "G-SameDay","itemDescription": "Skincare Norm","weight": 1,"volume": 100,"height": 10,"width": 10,"lengths": 10,"externalRefNum": "NORM20220100001"}';

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $params,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: Bearer ' . $authentication->access_token
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $arr_response = json_decode($response);
        var_dump($arr_response);

        return $arr_response;
    }
    /* End Private Function Area */
}
//