<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Patch_backup extends CI_Controller
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

            $this->db->simple_query('USE `webshop_2_eliocare_backup`');

            // select patient
            $this->db->where('id >=', 21752);
            $arr_patient = $this->core_model->get('patient');
            $arr_patient_lookup = array();

            // get order
            $this->db->where('id >=', 15831);
            $arr_order = $this->core_model->get('order');
            $arr_order_id = $this->cms_function->extract_records($arr_order, 'id');
            $arr_order_item_lookup = array();

            if (count($arr_order_id) > 0)
            {
                $this->db->where_in('order_id', $arr_order_id);
                $arr_order_item = $this->core_model->get('order_item');

                foreach ($arr_order_item as $order_item)
                {
                    $arr_order_item_lookup[$order_item->order_id][] = clone $order_item;
                }
            }

            // insert to database
            $this->db->simple_query('USE `webapps_2_eliocare`');

            // insert patient
            foreach ($arr_patient as $patient)
            {
                $patient_record = array();

                foreach ($patient as $key => $value)
                {
                    if ($key == 'id')
                    {
                        continue;
                    }

                    $patient_record[$key] = $value;
                }

                $new_patient_id = $this->core_model->insert('patient', $patient_record);
                $patient->new_id = $new_patient_id;

                $arr_patient_lookup[$patient->id] = clone $patient;
            }

            // insert order
            foreach ($arr_order as $order)
            {
                $order_record = array();

                foreach ($order as $key => $value)
                {
                    if ($key == 'id' || $key == 'patient_id')
                    {
                        continue;
                    }

                    $order_record[$key] = $value;
                }

                $order_record['patient_id'] = (isset($arr_patient_lookup[$order->patient_id])) ? $arr_patient_lookup[$order->patient_id]->new_id : 0;
                $order_id = $this->core_model->insert('order', $order_record);

                // insert order_item
                foreach ($arr_order_item_lookup[$order->id] as $order_item)
                {
                    $order_item_record = array();

                    foreach ($order_item as $k => $v)
                    {
                        if ($k == 'id' || $k == 'order_id')
                        {
                            continue;
                        }

                        $order_item_record[$k] = $v;
                    }

                    $order_item_record['order_id'] = $order_id;
                    $order_item_id = $this->core_model->insert('order_item', $order_item_record);
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

    public function webshop()
    {
        $json['status'] = 'success';

        try
        {
            set_time_limit(0);

            $this->db->trans_start();

            $this->db->where('id >=', 17746);
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
                    $arr_order_item_lookup[$order_item->order_id][] = clone $order_item;
                }
            }

            foreach ($arr_order as $order)
            {
                $order->arr_order_item = (isset($arr_order_item_lookup[$order->id])) ? $arr_order_item_lookup[$order->id] : array();
            }

            $arr_product = $this->core_model->get('product');
            $arr_product_lookup = array();

            foreach ($arr_product as $product)
            {
                $arr_product_lookup[$product->id] = clone $product;
            }

            // update webshop
            foreach ($arr_order as $order)
            {
                $this->db->simple_query("USE webapps_2_eliocare");

                $order->shipping_email = strtolower($order->shipping_email);
                $order->discount_item = 0;

                foreach ($order->arr_order_item as $order_item)
                {
                    $order_item->additional_data = '';
                    $order->discount_item += $order_item->discount;

                    if ($order_item->product_id == 10 || $order_item->product_id == 12)
                    {
                        $this->db->where('patient_id', $order->patient_id);
                        $arr_consultation = $this->core_model->get('consultation');
                        $arr_consultation_id = $this->cms_function->extract_records($arr_consultation, 'id');

                        if (count($arr_consultation_id) > 0)
                        {
                            $this->db->select('product_id');
                            $this->db->where_in('consultation_id', $arr_consultation_id);
                            $arr_consultation_product = $this->core_model->get('consultation_product');

                            foreach ($arr_consultation_product as $consultation_product)
                            {
                                if ($consultation_product->product_id == 7)
                                {
                                    $order_item->additional_data = 'Night Cream 1';
                                }
                                elseif ($consultation_product->product_id == 8)
                                {
                                    $order_item->additional_data = 'Night Cream 2';
                                }
                            }
                        }
                    }

                    $arr_order_item_lookup[$order_item->order_id][] = clone $order_item;
                }

                $patient = $this->core_model->get('patient', $order->patient_id);
                $patient->email = strtolower($patient->email);

                $order->email = ($order->patient_id > 0) ? $patient->email : $order->shipping_email;

                $this->db->simple_query("USE webshop_1_eliocare");

                $user = new stdClass();
                $user->id = 0;
                $user->name = '';

                // get user-data
                if ($patient->referral != '')
                {
                    $this->db->select('id, name');
                    $this->db->where('referral_name', $patient->referral);
                    $arr_user = $this->core_model->get('user');

                    $user->id = $arr_user[0]->id;
                    $user->name = $arr_user[0]->name;
                }

                $arr_product =  $this->core_model->get('product');
                $arr_product_lookup = array();

                foreach ($arr_product as $product)
                {
                    $arr_product_lookup[$product->id] = clone $product;
                }

                // insert customer
                if ($order->patient_id > 0)
                {
                    $this->db->where('email', $patient->email);
                    $count_customer = $this->core_model->count('customer');

                    if ($count_customer <= 0)
                    {
                        $customer_record = array();

                        $customer_record['number'] = $patient->number;
                        $customer_record['status'] = 'Active';
                        $customer_record['name'] = ucwords(strtolower($patient->name));
                        $customer_record['date'] = $patient->date;
                        $customer_record['email'] = strtolower($patient->email);
                        $customer_record['phone'] = $patient->phone;
                        $customer_record['gender'] = $patient->gender;

                        $customer_record['author_id'] = $user->id;
                        $customer_record['author_name'] = $user->name;
                        $customer_id = $this->core_model->insert('customer', $customer_record);

                        $arr_customer_lookup[strtolower($patient->email)] = $customer_id;
                    }
                    else
                    {
                        $this->db->where('email', $patient->email);
                        $arr_customer = $this->core_model->get('customer');

                        if (count($arr_customer) > 0)
                        {
                            $arr_customer_lookup[strtolower($arr_customer[0]->email)] = $arr_customer[0]->id;
                        }
                    }
                }
                else
                {
                    $this->db->where('email', $order->shipping_email);
                    $count_customer = $this->core_model->count('customer');

                    if ($count_customer <= 0)
                    {
                        $customer_record = array();

                        $customer_record['status'] = 'Active';
                        $customer_record['name'] = ucwords(strtolower($order->shipping_name));
                        $customer_record['date'] = $order->date;
                        $customer_record['email'] = $order->shipping_email;
                        $customer_record['phone'] = $order->shipping_phone;
                        $customer_id = $this->core_model->insert('customer', $customer_record);

                        $customer_record['number'] = '#GUEST' . str_pad($customer_id, 4, 0, STR_PAD_LEFT);
                        $this->core_model->update('customer', $customer_id, array('number' => $customer_record['number']));

                        $arr_customer_lookup[$order->email] = $customer_id;
                    }
                    else
                    {
                        $this->db->where('email', $order->shipping_email);
                        $arr_customer = $this->core_model->get('customer');

                        if (count($arr_customer) > 0)
                        {
                            $arr_customer_lookup[strtolower($arr_customer[0]->email)] = $arr_customer[0]->id;
                        }
                    }
                }

                // insert sale
                $sale_record['bank_id'] = 6;
                $sale_record['channel_id'] = 2;
                $sale_record['customer_id'] = $arr_customer_lookup[$order->email];
                $sale_record['location_id'] = ($order->location == 'Haistar') ? 2 : 1;
                $sale_record['method_id'] = 8;

                $sale_record['number'] = $order->number;
                $sale_record['date'] = $order->date;
                $sale_record['status'] = 'Paid';

                $sale_record['subtotal'] = $order->subtotal;
                $sale_record['shipping'] = $order->shipping;
                $sale_record['discount'] = $order->discount - $order->discount_item;
                $sale_record['discount_item'] = $order->discount_item;
                $sale_record['total'] = $order->grand_total;
                $sale_record['fees'] = 0;

                $sale_record['fulfillment'] = $order->location;

                $sale_record['payment_number'] = $order->payment_id;
                $sale_record['payment_status'] = 'Paid';
                $sale_record['payment_method'] = 'Website Third Party';
                $sale_record['payment_url'] = $order->payment_url;

                $sale_record['receiver_name'] = $order->shipping_name;
                $sale_record['phone'] = $order->shipping_phone;
                $sale_record['email'] = $order->email;
                $sale_record['address_line_1'] = $order->shipping_address_line_1;
                $sale_record['address_line_2'] = $order->shipping_address_line_2;
                $sale_record['address_line_3'] = $order->shipping_address_line_3;
                $sale_record['postcode'] = $order->shipping_postcode;
                $sale_record['city'] = $order->shipping_city;
                $sale_record['province'] = $order->shipping_province;
                $sale_record['district'] = $order->shipping_district;
                $sale_record['courier'] = $order->shipping_courier;
                $sale_record['courier_id'] = $order->shipping_courier_tracking_id;

                $sale_record = $this->cms_function->populate_foreign_field($sale_record['bank_id'], $sale_record, 'bank');
                $sale_record = $this->cms_function->populate_foreign_field($sale_record['location_id'], $sale_record, 'location');
                $sale_record = $this->cms_function->populate_foreign_field($sale_record['channel_id'], $sale_record, 'channel');
                $sale_record = $this->cms_function->populate_foreign_field($sale_record['customer_id'], $sale_record, 'customer');
                $sale_record = $this->cms_function->populate_foreign_field($sale_record['method_id'], $sale_record, 'method');

                $sale_record['author_id'] = $user->id;
                $sale_record['author_name'] = $user->name;

                $sale_id = $this->core_model->insert('sale', $sale_record);

                $arr_webshop_product_id_lookup = array();
                $arr_webshop_product_id_lookup[1] = 19; // Finasteride
                $arr_webshop_product_id_lookup[3] = 20; // Hair Tonic
                $arr_webshop_product_id_lookup[4] = 21; // Anti DHT Shampoo
                $arr_webshop_product_id_lookup[6] = 22; // Day Cream
                $arr_webshop_product_id_lookup[7] = 23; // Night Cream 1
                $arr_webshop_product_id_lookup[8] = 24; // Night Cream 2
                $arr_webshop_product_id_lookup[16] = 27; // Stamina Cream
                $arr_webshop_product_id_lookup[17] = 28; // Protective Mask

                $arr_webshop_product_id_lookup[11] = 81; // Complete Hair Loss Kit
                $arr_webshop_product_id_lookup[13] = 82; // Starter Hair Loss kit

                $arr_webshop_product_id_lookup[18] = 33; // Face Wash
                $arr_webshop_product_id_lookup[19] = 34; // Face Scrub
                $arr_webshop_product_id_lookup[20] = 35; // Moisturizer
                $arr_webshop_product_id_lookup[21] = 36; // Shampoo
                $arr_webshop_product_id_lookup[22] = 37; // Body Wash
                $arr_webshop_product_id_lookup[23] = 62; // Ultimate Gentleman Set
                $arr_webshop_product_id_lookup[24] = 63; // Complete Maintenance Set
                $arr_webshop_product_id_lookup[25] = 64; // Complete Shower Set
                $arr_webshop_product_id_lookup[26] = 80; // Ultimate Gentleman Set + Bag
                $arr_webshop_product_id_lookup[27] = 78; // Complete Maintenance Set + Bag
                $arr_webshop_product_id_lookup[28] = 79; // Complete Shower Set + Bag
                $arr_webshop_product_id_lookup[29] = 70; // Starter Maintenance Set
                $arr_webshop_product_id_lookup[30] = 71; // Daily Maintenance Set
                $arr_webshop_product_id_lookup[31] = 72; // Aging maintenance Set
                $arr_webshop_product_id_lookup[32] = 41; // Water Resistant Utility Bag
                $arr_webshop_product_id_lookup[33] = 96; // Ultimate Gift Set
                $arr_webshop_product_id_lookup[34] = 97; // Ultimate Gift Set + Bag

                $arr_webshop_product_id_lookup[35] = 94; // Summer Sol
                $arr_webshop_product_id_lookup[36] = 95; // White Night
                $arr_webshop_product_id_lookup[37] = 98; // Spektrum Set

                // insert sale_item
                foreach ($order->arr_order_item as $order_item)
                {
                    $product_id = (isset($arr_webshop_product_id_lookup[$order_item->product_id])) ? $arr_webshop_product_id_lookup[$order_item->product_id] : 0;

                    $sale_item_record = array();

                    $sale_item_record['bank_id'] = (isset($sale_record['bank_id'])) ? $sale_record['bank_id'] : 0;
                    $sale_item_record['location_id'] = (isset($sale_record['location_id'])) ? $sale_record['location_id'] : 0;
                    $sale_item_record['method_id'] = (isset($sale_record['method_id'])) ? $sale_record['method_id'] : 0;
                    $sale_item_record['product_id'] = $product_id;
                    $sale_item_record['sale_id'] = $sale_id;
                    $sale_item_record['channel_id'] = (isset($sale_record['channel_id'])) ? $sale_record['channel_id'] : 0;
                    $sale_item_record['customer_id'] = (isset($sale_record['customer_id'])) ? $sale_record['customer_id'] : 0;
                    $sale_item_record['category_id'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->category_id : 0;

                    $sale_item_record['quantity'] = $order_item->quantity;
                    $sale_item_record['price'] = $order_item->price;
                    $sale_item_record['total'] = $order_item->quantity * $order_item->price;
                    $sale_item_record['unit'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->unit : 'PCS';

                    $sale_item_record['bank_type'] = (isset($sale_record['bank_type'])) ? $sale_record['bank_type'] : '';
                    $sale_item_record['bank_number'] = (isset($sale_record['bank_number'])) ? $sale_record['bank_number'] : '';
                    $sale_item_record['bank_name'] = (isset($sale_record['bank_name'])) ? $sale_record['bank_name'] : '';
                    $sale_item_record['bank_date'] = (isset($sale_record['bank_date'])) ? $sale_record['bank_date'] : 0;
                    $sale_item_record['bank_status'] = (isset($sale_record['bank_status'])) ? $sale_record['bank_status'] : '';

                    $sale_item_record['category_type'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->category_type : 0;
                    $sale_item_record['category_number'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->category_number : 0;
                    $sale_item_record['category_name'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->category_name : 0;
                    $sale_item_record['category_date'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->category_date : 0;
                    $sale_item_record['category_status'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->category_status : 0;

                    $sale_item_record['location_type'] = (isset($sale_record['location_type'])) ? $sale_record['location_type'] : '';
                    $sale_item_record['location_number'] = (isset($sale_record['location_number'])) ? $sale_record['location_number'] : '';
                    $sale_item_record['location_name'] = (isset($sale_record['location_name'])) ? $sale_record['location_name'] : '';
                    $sale_item_record['location_date'] = (isset($sale_record['location_date'])) ? $sale_record['location_date'] : 0;
                    $sale_item_record['location_status'] = (isset($sale_record['location_status'])) ? $sale_record['location_status'] : '';

                    $sale_item_record['method_type'] = (isset($sale_record['method_type'])) ? $sale_record['method_type'] : '';
                    $sale_item_record['method_number'] = (isset($sale_record['method_number'])) ? $sale_record['method_number'] : '';
                    $sale_item_record['method_name'] = (isset($sale_record['method_name'])) ? $sale_record['method_name'] : '';
                    $sale_item_record['method_date'] = (isset($sale_record['method_date'])) ? $sale_record['method_date'] : 0;
                    $sale_item_record['method_status'] = (isset($sale_record['method_status'])) ? $sale_record['method_status'] : '';

                    $sale_item_record['product_type'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->type : '';
                    $sale_item_record['product_number'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->number : '';
                    $sale_item_record['product_name'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->name : '';
                    $sale_item_record['product_date'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->date : 0;
                    $sale_item_record['product_status'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->status : '';

                    $sale_item_record['sale_type'] = (isset($sale_record['type'])) ? $sale_record['type'] : '';
                    $sale_item_record['sale_number'] = (isset($sale_record['number'])) ? $sale_record['number'] : '';
                    $sale_item_record['sale_name'] = (isset($sale_record['name'])) ? $sale_record['name'] : '';
                    $sale_item_record['sale_date'] = (isset($sale_record['date'])) ? $sale_record['date'] : 0;
                    $sale_item_record['sale_status'] = (isset($sale_record['status'])) ? $sale_record['status'] : '';

                    $sale_item_record['customer_type'] = (isset($sale_record['customer_type'])) ? $sale_record['customer_type'] : '';
                    $sale_item_record['customer_number'] = (isset($sale_record['customer_number'])) ? $sale_record['customer_number'] : '';
                    $sale_item_record['customer_name'] = (isset($sale_record['customer_name'])) ? $sale_record['customer_name'] : '';
                    $sale_item_record['customer_date'] = (isset($sale_record['customer_date'])) ? $sale_record['customer_date'] : 0;
                    $sale_item_record['customer_status'] = (isset($sale_record['customer_status'])) ? $sale_record['customer_status'] : '';

                    $sale_item_record['channel_type'] = (isset($sale_record['channel_type'])) ? $sale_record['channel_type'] : '';
                    $sale_item_record['channel_number'] = (isset($sale_record['channel_number'])) ? $sale_record['channel_number'] : '';
                    $sale_item_record['channel_name'] = (isset($sale_record['channel_name'])) ? $sale_record['channel_name'] : '';
                    $sale_item_record['channel_date'] = (isset($sale_record['channel_date'])) ? $sale_record['channel_date'] : 0;
                    $sale_item_record['channel_status'] = (isset($sale_record['channel_status'])) ? $sale_record['channel_status'] : '';

                    $sale_item_record['author_id'] = $user->id;
                    $sale_item_record['author_name'] = $user->name;

                    $sale_item_id = $this->core_model->insert('sale_item', $sale_item_record);

                    // insert inventory_history
                    $inventory_history_record = array();

                    $inventory_history_record['location_id'] = (isset($sale_record['location_id'])) ? $sale_record['location_id'] : 0;
                    $inventory_history_record['product_id'] = $product_id;

                    $inventory_history_record['ref_id'] = $sale_id;
                    $inventory_history_record['ref_item_id'] = $sale_item_id;

                    $inventory_history_record['type'] = 'Sale';
                    $inventory_history_record['name'] = 'Sale ' . $sale_record['number'];
                    $inventory_history_record['date'] = (isset($sale_record['date'])) ? $sale_record['date'] : 0;
                    $inventory_history_record['quantity'] = $order_item->quantity * -1;
                    $inventory_history_record['unit'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->unit : 'PCS';

                    $inventory_history_record['location_type'] = (isset($sale_record['location_type'])) ? $sale_record['location_type'] : '';
                    $inventory_history_record['location_number'] = (isset($sale_record['location_number'])) ? $sale_record['location_number'] : '';
                    $inventory_history_record['location_name'] = (isset($sale_record['location_name'])) ? $sale_record['location_name'] : '';
                    $inventory_history_record['location_date'] = (isset($sale_record['location_date'])) ? $sale_record['location_date'] : 0;
                    $inventory_history_record['location_status'] = (isset($sale_record['location_status'])) ? $sale_record['location_status'] : '';

                    $inventory_history_record['product_type'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->type : '';
                    $inventory_history_record['product_number'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->number : '';
                    $inventory_history_record['product_name'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->name : '';
                    $inventory_history_record['product_date'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->date : 0;
                    $inventory_history_record['product_status'] = (isset($arr_product_lookup[$product_id])) ? $arr_product_lookup[$product_id]->status : '';

                    $inventory_history_record['ref_type'] = (isset($sale_record['type'])) ? $sale_record['type'] : '';
                    $inventory_history_record['ref_number'] = (isset($sale_record['number'])) ? $sale_record['number'] : '';
                    $inventory_history_record['ref_name'] = (isset($sale_record['name'])) ? $sale_record['name'] : '';
                    $inventory_history_record['ref_date'] = (isset($sale_record['date'])) ? $sale_record['date'] : 0;
                    $inventory_history_record['ref_status'] = (isset($sale_record['status'])) ? $sale_record['status'] : '';

                    $inventory_history_record['ref_item_type'] = (isset($sale_item_record['type'])) ? $sale_item_record['type'] : '';
                    $inventory_history_record['ref_item_number'] = (isset($sale_item_record['number'])) ? $sale_item_record['number'] : '';
                    $inventory_history_record['ref_item_name'] = (isset($sale_item_record['name'])) ? $sale_item_record['name'] : '';
                    $inventory_history_record['ref_item_date'] = (isset($sale_item_record['date'])) ? $sale_item_record['date'] : 0;
                    $inventory_history_record['ref_item_status'] = (isset($sale_item_record['status'])) ? $sale_item_record['status'] : '';

                    $inventory_history_record['author_id'] = $user->id;
                    $inventory_history_record['author_name'] = $user->name;

                    $this->core_model->insert('inventory_history', $inventory_history_record);

                    // update inventory
                    $this->db->set('quantity', "quantity - {$order_item->quantity}", FALSE);
                    $this->db->where('location_id', $sale_record['location_id']);
                    $this->db->where('product_id', $product_id);
                    $this->core_model->update('inventory');

                    if ($arr_product_lookup[$product_id]->type == 'Package')
                    {
                        $arr_item = json_decode($arr_product_lookup[$product_id]->item);
                        $arr_product_item_id = $this->cms_function->extract_records($arr_item, 'product_id');
                        $arr_product_item_lookup = array();

                        $arr_product_item = $this->core_model->get('product', $arr_product_item_id);

                        foreach ($arr_product_item as $product_item)
                        {
                            $arr_product_item_lookup[$product_item->id] = clone $product_item;
                        }

                        foreach ($arr_item as $item)
                        {
                            $inventory_history_record = array();
                            $quantity = $order_item->quantity * $item->quantity;

                            $inventory_history_record['location_id'] = (isset($sale_record['location_id'])) ? $sale_record['location_id'] : 0;
                            $inventory_history_record['product_id'] = $item->product_id;

                            $inventory_history_record['ref_id'] = $sale_id;
                            $inventory_history_record['ref_item_id'] = $sale_item_id;

                            $inventory_history_record['type'] = 'Sale';
                            $inventory_history_record['name'] = 'Sale ' . $sale_record['number'];
                            $inventory_history_record['date'] = (isset($sale_record['date'])) ? $sale_record['date'] : 0;
                            $inventory_history_record['quantity'] = $quantity * -1;
                            $inventory_history_record['unit'] = (isset($arr_product_item_lookup[$item->product_id])) ? $arr_product_item_lookup[$item->product_id]->unit : 'PCS';

                            $inventory_history_record['location_type'] = (isset($sale_record['location_type'])) ? $sale_record['location_type'] : '';
                            $inventory_history_record['location_number'] = (isset($sale_record['location_number'])) ? $sale_record['location_number'] : '';
                            $inventory_history_record['location_name'] = (isset($sale_record['location_name'])) ? $sale_record['location_name'] : '';
                            $inventory_history_record['location_date'] = (isset($sale_record['location_date'])) ? $sale_record['location_date'] : 0;
                            $inventory_history_record['location_status'] = (isset($sale_record['location_status'])) ? $sale_record['location_status'] : '';

                            $inventory_history_record['product_type'] = (isset($arr_product_item_lookup[$item->product_id])) ? $arr_product_item_lookup[$item->product_id]->type : '';
                            $inventory_history_record['product_number'] = (isset($arr_product_item_lookup[$item->product_id])) ? $arr_product_item_lookup[$item->product_id]->number : '';
                            $inventory_history_record['product_name'] = (isset($arr_product_item_lookup[$item->product_id])) ? $arr_product_item_lookup[$item->product_id]->name : '';
                            $inventory_history_record['product_date'] = (isset($arr_product_item_lookup[$item->product_id])) ? $arr_product_item_lookup[$item->product_id]->date : 0;
                            $inventory_history_record['product_status'] = (isset($arr_product_item_lookup[$item->product_id])) ? $arr_product_item_lookup[$item->product_id]->status : '';

                            $inventory_history_record['ref_type'] = (isset($sale_record['type'])) ? $sale_record['type'] : '';
                            $inventory_history_record['ref_number'] = (isset($sale_record['number'])) ? $sale_record['number'] : '';
                            $inventory_history_record['ref_name'] = (isset($sale_record['name'])) ? $sale_record['name'] : '';
                            $inventory_history_record['ref_date'] = (isset($sale_record['date'])) ? $sale_record['date'] : 0;
                            $inventory_history_record['ref_status'] = (isset($sale_record['status'])) ? $sale_record['status'] : '';

                            $inventory_history_record['ref_item_type'] = (isset($sale_item_record['type'])) ? $sale_item_record['type'] : '';
                            $inventory_history_record['ref_item_number'] = (isset($sale_item_record['number'])) ? $sale_item_record['number'] : '';
                            $inventory_history_record['ref_item_name'] = (isset($sale_item_record['name'])) ? $sale_item_record['name'] : '';
                            $inventory_history_record['ref_item_date'] = (isset($sale_item_record['date'])) ? $sale_item_record['date'] : 0;
                            $inventory_history_record['ref_item_status'] = (isset($sale_item_record['status'])) ? $sale_item_record['status'] : '';

                            $inventory_history_record['author_id'] = $user->id;
                            $inventory_history_record['author_name'] = $user->name;

                            $this->core_model->insert('inventory_history', $inventory_history_record);

                            // update inventory
                            $this->db->set('quantity', "quantity - {$quantity}", FALSE);
                            $this->db->where('location_id', $sale_record['location_id']);
                            $this->db->where('product_id', $item->product_id);
                            $this->core_model->update('inventory');
                        }
                    }
                }

                // add transaction
                $transaction_record = array();

                $transaction_record['bank_id'] = (isset($sale_record['bank_id'])) ? $sale_record['bank_id'] : 0;
                $transaction_record['customer_id'] = (isset($sale_record['customer_id'])) ? $sale_record['customer_id'] : 0;
                $transaction_record['ref_id'] = $sale_id;

                $transaction_record['type'] = 'Sale';
                $transaction_record['name'] = (isset($sale_record['number'])) ? 'Payment for Sale ' . $sale_record['number'] : '';
                $transaction_record['date'] = $order->payment_date;

                $transaction_record['amount'] = $order->grand_total;

                $transaction_record['bank_type'] = (isset($sale_record['bank_type'])) ? $sale_record['bank_type'] : '';
                $transaction_record['bank_number'] = (isset($sale_record['bank_number'])) ? $sale_record['bank_number'] : '';
                $transaction_record['bank_name'] = (isset($sale_record['bank_name'])) ? $sale_record['bank_name'] : '';
                $transaction_record['bank_date'] = (isset($sale_record['bank_date'])) ? $sale_record['bank_date'] : 0;
                $transaction_record['bank_status'] = (isset($sale_record['bank_status'])) ? $sale_record['bank_status'] : '';

                $transaction_record['customer_type'] = (isset($sale_record['customer_type'])) ? $sale_record['customer_type'] : '';
                $transaction_record['customer_number'] = (isset($sale_record['customer_number'])) ? $sale_record['customer_number'] : '';
                $transaction_record['customer_name'] = (isset($sale_record['customer_name'])) ? $sale_record['customer_name'] : '';
                $transaction_record['customer_date'] = (isset($sale_record['customer_date'])) ? $sale_record['customer_date'] : 0;
                $transaction_record['customer_status'] = (isset($sale_record['customer_status'])) ? $sale_record['customer_status'] : '';

                $transaction_record['ref_type'] = (isset($sale_record['type'])) ? $sale_record['type'] : '';
                $transaction_record['ref_number'] = (isset($sale_record['number'])) ? $sale_record['number'] : '';
                $transaction_record['ref_name'] = (isset($sale_record['name'])) ? $sale_record['name'] : '';
                $transaction_record['ref_date'] = (isset($sale_record['date'])) ? $sale_record['date'] : 0;
                $transaction_record['ref_status'] = (isset($sale_record['status'])) ? $sale_record['status'] : '';

                $transaction_record['author_id'] = $user->id;
                $transaction_record['author_name'] = $user->name;

                $transaction_id = $this->core_model->insert('transaction', $transaction_record);
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