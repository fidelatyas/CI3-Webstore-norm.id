<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Patch_referral extends CI_Controller
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
    public function ajax_update_referral()
    {
        $json['status'] = 'success';

        try
        {
            set_time_limit(0);

            $arr_patient = $this->core_model->get('patient');

            foreach ($arr_patient as $patient)
            {
                $referral_record = array();

                $referral_record['email'] = $patient->email;
                $referral_record['date'] = time();
                $referral_record['validity'] = 1;
                $referral_record['code'] = $this->cms_function->generate_random_number('referral', 8);

                $this->core_model->insert('referral', $referral_record);
            }
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