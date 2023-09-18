<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Testing extends CI_Controller
{
    private $_setting;
    private $_patient;

    public function __construct()
    {
        parent:: __construct();

        $this->_setting = $this->setting_model->load();
    }




    /* Public Function Area */
    public function index()
    {
        $json['status'] = 'success';

        try
        {
            $this->db->trans_start();

            $params = array(
                "address" => "sugi@selestialbrands.com"
            );

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
            curl_setopt($ch, CURLOPT_USERPWD, 'api:pubkey-1b273613ef872b3c23a111a1ee545223');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
            curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
            curl_setopt($ch, CURLOPT_URL, 'https://api.mailgun.net/v4/address/validate');
            $result = curl_exec($ch);
            curl_close($ch);

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
    /* End Private Function Area */
}
