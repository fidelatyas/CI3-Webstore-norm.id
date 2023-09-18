<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Patch_shipment extends CI_Controller
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
    public function generate()
    {
        $json['status'] = 'success';

        try
        {
            set_time_limit(0);

            $this->db->trans_start();
            $arr_shipment_lookup = array();

            $json_shipment = file_get_contents(base_url() . 'files/lion-parcel.json');
            $arr_shipment = json_decode($json_shipment);
            $arr_shipment_subdistrict_lookup = array();

            foreach ($arr_shipment as $shipment)
            {
                if (isset($arr_shipment_lookup[$shipment->postcode]))
                {
                    $arr_shipment_subdistrict_lookup[$shipment->postcode] .= ', ' . $shipment->subdistrict;

                    $shipment_record = array();
                    $shipment_record['subdistrict'] = $arr_shipment_subdistrict_lookup[$shipment->postcode];

                    $this->db->where('postcode', $shipment->postcode);
                    $this->db->where('name', 'Lion Parcel');
                    $this->core_model->update('shipment', 0, $shipment_record);

                    continue;
                }

                $shipment_record = array();
                $shipment_record['name'] = 'Lion Parcel';

                foreach ($shipment as $k => $v)
                {
                    $shipment_record[$k] = $v;
                }

                $shipment_record['sla'] = $shipment_record['sla'] . ' Hari';

                $this->core_model->insert('shipment', $shipment_record);

                $arr_shipment_lookup[$shipment->postcode] = clone $shipment;
                $arr_shipment_subdistrict_lookup[$shipment->postcode] = $shipment->subdistrict;
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

    public function generate_jnt()
    {
        $json['status'] = 'success';

        try
        {
            set_time_limit(0);

            $this->db->trans_start();
            $arr_shipment_lookup = array();

            $json_shipment = file_get_contents(base_url() . 'files/jnt.json');
            $arr_shipment = json_decode($json_shipment);
            $arr_shipment_subdistrict_lookup = array();

            foreach ($arr_shipment as $shipment)
            {
                if (isset($arr_shipment_lookup[$shipment->postcode]))
                {
                    $arr_shipment_subdistrict_lookup[$shipment->postcode] .= ', ' . $shipment->subdistrict;

                    $shipment_record = array();
                    $shipment_record['subdistrict'] = $arr_shipment_subdistrict_lookup[$shipment->postcode];

                    $this->db->where('postcode', $shipment->postcode);
                    $this->db->where('name', 'J&T Regular');
                    $this->core_model->update('shipment', 0, $shipment_record);

                    continue;
                }

                $shipment_record = array();
                $shipment_record['name'] = 'J&T Regular';

                foreach ($shipment as $k => $v)
                {
                    $shipment_record[$k] = $v;
                }

                $this->core_model->insert('shipment', $shipment_record);

                $arr_shipment_lookup[$shipment->postcode] = clone $shipment;
                $arr_shipment_subdistrict_lookup[$shipment->postcode] = $shipment->subdistrict;
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

    public function generate_westbike()
    {
        $json['status'] = 'success';

        try
        {
            set_time_limit(0);

            $this->db->trans_start();

            $this->db->where('name', 'Lion Parcel');
            $this->db->where('number', 'CGK');
            $this->db->where('city !=', 'KEPULAUAN SERIBU UTARA');
            $this->db->order_by('postcode');
            $arr_shipment = $this->core_model->get('shipment');

            foreach ($arr_shipment as $shipment)
            {
                $shipment_record = array();

                $shipment_record['name'] = 'Westbike Messenger';
                $shipment_record['postcode'] = $shipment->postcode;
                $shipment_record['province'] = $shipment->province;
                $shipment_record['city'] = $shipment->city;
                $shipment_record['district'] = $shipment->district;
                $shipment_record['subdistrict'] = $shipment->subdistrict;
                $shipment_record['sla'] = $shipment->sla;
                $shipment_record['price'] = 15000;

                $this->core_model->insert('shipment', $shipment_record);
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