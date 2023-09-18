<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Landbot extends CI_Controller
{
    private $_setting;
    private $_patient;

    public function __construct()
    {
        parent:: __construct();

        $this->_setting = $this->setting_model->load();
    }




    /* Public Function Area */
    public function check_city($type = 1)
    {
        $json['status'] = 'success';
        $json['found'] = 1;

        try
        {
            $input = fopen('php://input', 'r');
            $data = json_decode(stream_get_contents($input));

            $arr_city = array();
            $arr_city[1] = 'Jakarta Pusat';
            $arr_city[2] = 'Jakarta Utara';
            $arr_city[3] = 'Jakarta Barat';
            $arr_city[4] = 'Jakarta Selatan';
            $arr_city[5] = 'Jakarta Timur';

            // check shipment
            if ($type == 1)
            {
                $this->db->like('city', $arr_city[$data->city]);
            }
            else
            {
                $this->db->like('city', $data->city);
            }

            $arr_shipment = $this->core_model->get('shipment');

            $json['city'] = ($type == 1) ? $arr_city[$data->city] : $data->city;

            if (count($arr_shipment) <= 0)
            {
                throw new Exception('City not found');
            }
        }
        catch (Exception $e)
        {
            $json['message'] = $e->getMessage();
            $json['status'] = 'error';
            $json['found'] = 0;

            if ($json['message'] == '')
            {
                $json['message'] = 'Server error.';
            }
        }

        echo json_encode($json);
    }

    public function get_shipment()
    {
        $json['status'] = 'success';
        $json['found'] = 1;

        try
        {
            $input = fopen('php://input', 'r');
            $data = json_decode(stream_get_contents($input));

            $arr_courier = array();
            $arr_courier[1] = 'J&T Regular';
            $arr_courier[2] = 'Lion Parcel';

            $this->db->where('name', $arr_courier[$data->courier]);
            $this->db->like('city', $data->destination);
            $this->db->order_by('price DESC');
            $this->db->limit(1);
            $arr_shipment = $this->core_model->get('shipment');

            if (count($arr_shipment) <= 0)
            {
                throw new Exception();
            }

            $shipment = $arr_shipment[0];
            $shipment->weight = preg_replace("/[^0-9]/", "", $data->weight);
            $shipment->total = $shipment->price * $shipment->weight;
            $shipment->price_display = 'Rp. ' . number_format($shipment->price, 0, '.', ',');
            $shipment->total_display = 'Rp. ' . number_format($shipment->total, 0, '.', ',');

            $json['shipment'] = $shipment;
        }
        catch (Exception $e)
        {
            $json['message'] = $e->getMessage();
            $json['status'] = 'error';
            $json['found'] = 0;

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
