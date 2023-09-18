<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Patch_order extends CI_Controller
{
	private $_setting;

	public function __construct()
	{
		parent:: __construct();

		$this->_setting = $this->setting_model->load();
	}




	public function generate()
	{
		$json['status'] = 'success';
		set_time_limit(0);

		try
		{
			$this->db->trans_start();

			$this->db->where('date >', strtotime('2021-05-01 00:00:00'));
			$arr_order = $this->core_model->get('order');
			$arr_order_id = $this->cms_function->extract_records($arr_order, 'id');
			$arr_order_item_lookup = array();

			if (count($arr_order_id) > 0)
			{
				$this->db->where_in('order_id', $arr_order_id);
				$arr_order_item = $this->core_model->get('order_item');

				foreach ($arr_order_item as $order_item)
				{
					if (isset($arr_order_item_lookup[$order_item->order_id]))
					{
						$arr_order_item_lookup[$order_item->order_id]['subtotal'] += $order_item->price * $order_item->quantity;
						$arr_order_item_lookup[$order_item->order_id]['discount'] += $order_item->discount;

						continue;
					}

					$arr_order_item_lookup[$order_item->order_id]['subtotal'] = $order_item->price * $order_item->quantity;
					$arr_order_item_lookup[$order_item->order_id]['discount'] = $order_item->discount;
				}
			}

			foreach ($arr_order as $order)
			{
				if (isset($arr_order_item_lookup[$order->id]) && $order->subtotal != $arr_order_item_lookup[$order->id]['subtotal'])
				{
					$order_record = array();

					$order_record['subtotal'] = $arr_order_item_lookup[$order->id]['subtotal'];
					$order_record['discount'] = $order->discount + $arr_order_item_lookup[$order->id]['discount'];

					$this->core_model->update('order', $order->id, $order_record);
					var_dump($order->id);
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

	public function generate_order_shipping()
	{
		$json['status'] = 'success';
		set_time_limit(0);

		try
		{
			$this->db->trans_start();
			// sleep(300);

			$arr_weight = array();
	        $arr_weight[1] = 100;
	        $arr_weight[3] = 100;
	        $arr_weight[4] = 175;
	        $arr_weight[6] = 50;
	        $arr_weight[7] = 50;
	        $arr_weight[8] = 50;
	        $arr_weight[11] = 500;
	        $arr_weight[12] = 250;
	        $arr_weight[13] = 200;
	        $arr_weight[14] = 5;
	        $arr_weight[15] = 5;
	        $arr_weight[16] = 180;
	        $arr_weight[17] = 100;
	        $arr_weight[18] = 175;
	        $arr_weight[19] = 75;
	        $arr_weight[20] = 175;
	        $arr_weight[21] = 325;
	        $arr_weight[22] = 325;
	        $arr_weight[23] = 1025;
	        $arr_weight[24] = 375;
	        $arr_weight[25] = 625;
	        $arr_weight[26] = 1150;
	        $arr_weight[27] = 550;
	        $arr_weight[28] = 800;
	        $arr_weight[29] = 325;
	        $arr_weight[30] = 225;
	        $arr_weight[31] = 250;
	        $arr_weight[32] = 200;

	        // get all shipping
	        $arr_shipping = $this->core_model->get('shipping');
	        $arr_shipping_lookup = array();

	        foreach ($arr_shipping as $shipping)
	        {
	        	$arr_shipping_lookup[$shipping->province_name][$shipping->city_name][$shipping->district_name][$shipping->number] = clone $shipping;
	        }

	        $this->db->where('date >=', '1627750800');
	        $this->db->where('date <=', '1630429199');
	        $this->db->where('payment_status', 'Paid');
	        $arr_order = $this->core_model->get('order');
	        $arr_order_id = $this->cms_function->extract_records($arr_order, 'id');

	        $arr_order_item_lookup = array();

	        if (count($arr_order_id) > 0)
	        {
	        	$this->db->where_in('order_id', $arr_order_id);
	        	$arr_order_item = $this->core_model->get('order_item');

	        	foreach ($arr_order_item as $order_item)
	        	{
	        		if (isset($arr_order_item_lookup[$order_item->order_id]))
	        		{
	        			$arr_order_item_lookup[$order_item->order_id] += $arr_weight[$order_item->product_id] * $order_item->quantity;

	        			continue;
	        		}

	        		$arr_order_item_lookup[$order_item->order_id] = $arr_weight[$order_item->product_id] * $order_item->quantity;
	        	}
	        }

	        foreach ($arr_order as $order)
	        {
	        	$this->db->simple_query('USE `webapps_2_eliocare`');

	        	$order_record = array();

	        	$weight = (isset($arr_order_item_lookup[$order->id])) ? floor($arr_order_item_lookup[$order->id] / 1000) : 1;
	        	$weight = ($weight <= 0) ? 1 : $weight;

	        	$shipping = (isset($arr_shipping_lookup[$order->shipping_province][$order->shipping_city][$order->shipping_district][$order->shipping_courier])) ? $arr_shipping_lookup[$order->shipping_province][$order->shipping_city][$order->shipping_district][$order->shipping_courier]->price * $weight : 0;

	        	if ($order->shipping > 0 && $order->shipping != $shipping)
	        	{
	        		$difference = $shipping - $order->shipping;
	        		echo $order->number . ' -> ' . $order->shipping . ' != ' . $shipping . ' (Weight: ' . $weight . ')' . ' Selisih: ' . $difference . '<br>';

	        		$order_record['order_shipping'] = ($order->shipping <= 0) ? $shipping : $order->shipping;
	        		$order_record['order_shipping'] = ($difference == 15000) ? $shipping : $order->shipping;
	        		$this->core_model->update('order', $order->id, $order_record);
	        	}
	        	else
	        	{
	        		$order_record['order_shipping'] = $shipping;
		        	$this->core_model->update('order', $order->id, $order_record);
	        	}

	        	// use db webshop
	        	$this->db->simple_query('USE `webshop_1_eliocare`');
	        	$sale_record = array();

	        	$sale_record['order_shipping'] = $order_record['order_shipping'];

	        	$this->db->where('number', $order->number);
	        	$this->core_model->update('sale', 0, $sale_record);
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
}