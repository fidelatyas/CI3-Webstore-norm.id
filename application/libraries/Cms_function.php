<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cms_function
{
    public function add_log($author, $record, $method, $table)
    {
        $CI = &get_instance();

        $user_history_record = array();
        $user_history_record['ref_id'] = ($table == 'setting') ? 0 : $record['id'];
        $user_history_record['user_id'] = $author->id;

        $user_history_record['date'] = time();
        $user_history_record['type'] = $method;

        if ($method == 'add')
        {
            $user_history_record['description'] = 'Successfully insert data into table ' . $table;
        }
        elseif ($method == 'edit')
        {
            $user_history_record['description'] = 'Successfully edit data into table ' . $table;
        }
        elseif ($method == 'delete')
        {
            $user_history_record['description'] = 'Successfully delete data into table ' . $table;
        }

        $user_history_record['query'] = $record['last_query'];
        $user_history_record['table'] = $table;
        $user_history_record['ip_address'] = $CI->cms_function->get_ip_address();

        $user_history_record['ref_type'] = (isset($record['type'])) ? $record['type'] : '';
        $user_history_record['ref_number'] = (isset($record['number'])) ? $record['number'] : '';
        $user_history_record['ref_name'] = (isset($record['name'])) ? $record['name'] : '';
        $user_history_record['ref_date'] = (isset($record['date'])) ? $record['date'] : 0;
        $user_history_record['ref_status'] = (isset($record['status'])) ? $record['status'] : '';

        $user_history_record['user_type'] = $author->type;
        $user_history_record['user_number'] = $author->number;
        $user_history_record['user_name'] = $author->name;
        $user_history_record['user_date'] = $author->date;
        $user_history_record['user_status'] = $author->status;
        $CI->core_model->insert('user_history', $user_history_record);
    }

    public function extract_records($records, $field)
    {
        $data = array();

        foreach ($records as $record)
        {
            if (isset($data[$record->$field]))
            {
                continue;
            }

            $data[$record->$field] = $record->$field;
        }

        return array_values($data);
    }

    public function generate_acl($user_id)
    {
        if ($user_id <= 0)
        {
            return array();
        }

        $CI = &get_instance();

        $acl = array();

        $CI->db->select('id');
        $CI->db->where('enabled <=', 0);
        $arr_module = $CI->core_model->get('module');
        $arr_module_id = $CI->cms_function->extract_records($arr_module, 'id');

        $CI->db->where('user_id', $user_id);

        if (count($arr_module_id) > 0)
        {
            $CI->db->where_not_in('module_id', $arr_module_id);
        }

        $arr_user_access = $CI->core_model->get('user_access');

        foreach ($arr_user_access as $user_access)
        {
            $acl[$user_access->module_id] = new stdClass();
            $acl[$user_access->module_id]->add = $user_access->add;
            $acl[$user_access->module_id]->delete = $user_access->delete;
            $acl[$user_access->module_id]->edit = $user_access->edit;
            $acl[$user_access->module_id]->list = $user_access->list;
            $acl[$user_access->module_id]->view = $user_access->view;
        }

        return $acl;
    }

    public function generate_cart()
    {
        $cart_record = array();
        $CI = &get_instance();

        $arr_cart = ($CI->session->userdata('arr_cart')) ? $CI->session->userdata('arr_cart') : array();
        $address_record = $CI->session->userdata('address');

        $voucher = $CI->session->userdata('voucher');

        $subtotal = 0;
        $discount = 0;
        $discount_item = 0;
        $additional_discount_text = '';
        $additional_discount = 0;
        $shipping = (isset($address_record['price'])) ? $address_record['price'] : 0;
        $shipping_discount = 0;
        $count_items = 0;
        $voucher_code = '';
        $weight = 0;

        $arr_weight = array();
        $arr_weight[1] = 100;
        $arr_weight[3] = 100;
        $arr_weight[3] = 175;
        $arr_weight[11] = 500;
        $arr_weight[13] = 200;
        $arr_weight[16] = 180;
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
        $arr_weight[33] = 1125;
        $arr_weight[34] = 1200;
        $arr_weight[35] = 300;
        $arr_weight[36] = 300;
        $arr_weight[37] = 600;

        foreach ($arr_cart as $cart)
        {
            $cart->weight = (isset($arr_weight[$cart->product_id])) ? $arr_weight[$cart->product_id] : 100;
            $weight += $cart->weight * $cart->quantity;

            $cart->price_new = (($cart->product_id == 1 || $cart->product_id == 3 || $cart->product_id == 4 || $cart->product_id == 11 || $cart->product_id == 13 || $cart->product_id == 16) && $cart->quantity >= 3) ? $cart->price - ($cart->price / 10) : $cart->price;

            $total = (($cart->product_id == 1 || $cart->product_id == 3 || $cart->product_id == 4 || $cart->product_id == 11 || $cart->product_id == 13 || $cart->product_id == 16) && $cart->quantity >= 3) ? $cart->total - ($cart->total / 10) : $cart->total;

            $cart->total_normal = $cart->total;
            $cart->total_normal_display = 'IDR ' . number_format($cart->total_normal, 0, ',', '.');
            $cart->total_display = 'IDR ' . number_format($total, 0, ',', '.');
            $cart->price_new_display = 'IDR ' . number_format($cart->price_new, 0, ',', '.');
            $cart->price_display = 'IDR ' . number_format($cart->price, 0, ',', '.');

            $subtotal += $cart->total;
            $discount_item += $cart->discount;
            $count_items += $cart->quantity;
        }

        $subtotal_cart = $subtotal - $discount_item;

        if ($voucher)
        {
            $voucher_code = $voucher->code;

            if ($voucher_code == 'WINNER')
            {
                $discount = 659000;
            }
            else
            {
                $CI->db->where('code', $voucher->code);
                $CI->db->where('status', 'Active');
                $arr_voucher = $CI->core_model->get('voucher');

                if (count($arr_voucher) > 0)
                {
                    $voucher_discount = $arr_voucher[0]->discount;
                    $voucher_max_discount = $arr_voucher[0]->max_discount;
                    $voucher_shipping_discount = $arr_voucher[0]->shipping;

                    $order_discount = ($voucher_discount / 100) * ($subtotal - $discount_item);

                    if ($voucher_max_discount > 0)
                    {
                        $order_discount = ($order_discount > $voucher_max_discount) ? $voucher_max_discount : $order_discount;
                    }

                    $shipping = ($shipping - $voucher_shipping_discount <= 0) ? 0 : $shipping - $voucher->shipping_discount;
                    $discount += $order_discount;

                    $shipping_discount = $voucher_shipping_discount;
                }
            }
        }

        $total = $subtotal + $shipping - $discount - $additional_discount - $discount_item;

        $cart_record['arr_cart'] = $arr_cart;
        $cart_record['count_items'] = $count_items;
        $cart_record['subtotal'] = $subtotal;
        $cart_record['subtotal_display'] = 'IDR ' . number_format($subtotal, 0, ',', '.');
        $cart_record['subtotal_cart'] = $subtotal_cart;
        $cart_record['subtotal_cart_display'] = 'IDR ' . number_format($subtotal_cart, 0, ',', '.');
        $cart_record['discount'] = $discount;
        $cart_record['discount_display'] = 'IDR ' . number_format($discount + $discount_item, 0, ',', '.');
        $cart_record['discount_item'] = $discount_item;
        $cart_record['additional_discount_text'] = $additional_discount_text;
        $cart_record['additional_discount'] = $additional_discount;
        $cart_record['additional_discount_display'] = 'IDR ' . number_format($additional_discount, 0, ',', '.');
        $cart_record['shipping'] = $shipping;
        $cart_record['shipping_display'] = 'IDR ' . number_format($shipping, 0, ',', '.');
        $cart_record['total'] = $total;
        $cart_record['total_display'] = 'IDR ' . number_format($total, 0, ',', '.');
        $cart_record['voucher_code'] = $voucher_code;
        $cart_record['shipping_discount'] = $shipping_discount;
        $cart_record['weight'] = ceil($weight / 1000);

        return $cart_record;
    }

	public function generate_csrf()
	{
		$CI = &get_instance();

		$arr_csrf = array();
		$arr_csrf['name'] = $CI->security->get_csrf_token_name();
		$arr_csrf['hash'] = $CI->security->get_csrf_hash();

		return $arr_csrf;
	}

    public function generate_province()
    {
        $CI = &get_instance();

        $CI->db->order_by('name');
        return $CI->core_model->get('province');
    }

    public function generate_random_number($table, $count_length)
    {
        $CI = &get_instance();

        $char = '0123456789abcdefghijklmnopqrstuvwxyz';
        $length = strlen($char);
        $number = '';

        for ($i = 0; $i < $count_length; $i++)
        {
            $number .= $char[rand(0, $length - 1)];
        }

        $CI->db->where('number', $number);
        $count_table = $CI->core_model->count($table);

        if ($count_table > 0)
        {
            $CI->cms_function->generate_random_number();
        }

        return $number;
    }

    public function get_ip_address()
    {
        $ipaddress = '';

        if (isset($_SERVER['HTTP_CLIENT_IP']))
        {
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        }
        elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        {
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        elseif (isset($_SERVER['HTTP_X_FORWARDED']))
        {
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        }
        elseif (isset($_SERVER['HTTP_FORWARDED_FOR']))
        {
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        }
        elseif (isset($_SERVER['HTTP_FORWARDED']))
        {
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        }
        elseif (isset($_SERVER['REMOTE_ADDR']))
        {
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        }
        else
        {
            $ipaddress = 'UNKNOWN';
        }

        return $ipaddress;
    }

    public function load_email_library($setting, $sent_to, $arr_cc_to, $subject, $message, $mailtype)
    {
        $CI = &get_instance();

        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.mailgun.org',
            'smtp_port' => 465,
            'smtp_user' => 'postmaster@mail.norm.id',
            'smtp_pass' => 'c669fe150413e96199ea3a74ebfa1c66-1f1bd6a9-87b8d881',
            'mailtype'  => 'text',
            'charset'   => 'iso-8859-1'
        );

        $CI->load->library('email');

        $CI->email->set_header('X-Mailgun-Track', 'yes');
        // $CI->email->set_header('X-Mailgun-Track-Clicks', 'yes');
        $CI->email->set_header('X-Mailgun-Track-Opens', 'yes');

        $CI->email->initialize($config);
        $CI->email->set_mailtype($mailtype);

        $CI->email->from('help@norm.id', 'norm.id');
        $CI->email->reply_to('help@norm.id', 'norm.id');

        if ($sent_to != '')
        {
            $CI->email->to($sent_to);
        }

        $CI->email->bcc($arr_cc_to);

        $CI->email->subject($subject);
        $CI->email->message($message);

        @$CI->email->send();
    }

    public function populate_foreign_field($id, $record, $table)
    {
        $CI = &get_instance();

        if ($table == 'module')
        {
            $CI->db->select('type, number, name, date, status');
            $CI->db->where('id', $id);
            $arr_query_result = $CI->core_model->get($table);

            $query_result = (count($arr_query_result) > 0) ? $arr_query_result[0] : new stdClass();
        }
        else
        {
            if ($id > 0)
            {
                $CI->db->select('type, number, name, date, status');
                $query_result = $CI->core_model->get($table, $id);
            }
        }

        if ($id > 0)
        {
            foreach ($query_result as $k => $v)
            {
                $record["{$table}_{$k}"] = $v;
            }
        }

        return $record;
    }

    public function send_email($setting, $sent_to, $arr_cc_to, $subject, $message, $mailtype)
    {
        $CI = &get_instance();

        $arr_bcc_email = explode(',', $setting->setting__email_bcc_default);

        foreach ($arr_bcc_email as $bcc_email)
        {
            if (trim($bcc_email) == '')
            {
                continue;
            }

            $bcc_email = trim($bcc_email);
        }

        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.mailgun.org',
            'smtp_port' => 465,
            'smtp_user' => 'postmaster@mail.labelideas.co',
            'smtp_pass' => '50a6b2d5fdda393e4b422a1378aacc5b-4836d8f5-f3f726c3',
            'mailtype'  => 'text',
            'charset'   => 'iso-8859-1'
        );

        $CI->load->library('email');
        $CI->email->initialize($config);
        $CI->email->set_mailtype($mailtype);

        $CI->email->from($setting->setting__email_from_default, $setting->company_name);
        $CI->email->to($sent_to);
        $CI->email->cc($arr_cc_to);
        $CI->email->bcc($arr_bcc_email);

        $CI->email->subject($subject);
        $CI->email->message($message);

        @$CI->email->send();
    }

    public function update_foreign_field($arr_table, $record, $foreign_id)
    {
        $CI = &get_instance();

        foreach ($arr_table as $table)
        {
            if ($foreign_id == 'bank' && $table == 'transfer')
            {
                $update_record = array();
                $update_record["{$foreign_id}_from_type"] = (isset($record['type'])) ? $record['type'] : '';
                $update_record["{$foreign_id}_from_number"] = (isset($record['number'])) ? $record['number'] : '';
                $update_record["{$foreign_id}_from_name"] = (isset($record['name'])) ? $record['name'] : '';
                $update_record["{$foreign_id}_from_date"] = (isset($record['date'])) ? $record['date'] : 0;
                $update_record["{$foreign_id}_from_status"] = (isset($record['status'])) ? $record['status'] : '';

                $CI->db->where($foreign_id . '_from_id', $record['id']);
                $CI->core_model->update($table, 0, $update_record);

                $update_record = array();
                $update_record["{$foreign_id}_to_type"] = (isset($record['type'])) ? $record['type'] : '';
                $update_record["{$foreign_id}_to_number"] = (isset($record['number'])) ? $record['number'] : '';
                $update_record["{$foreign_id}_to_name"] = (isset($record['name'])) ? $record['name'] : '';
                $update_record["{$foreign_id}_to_date"] = (isset($record['date'])) ? $record['date'] : 0;
                $update_record["{$foreign_id}_to_status"] = (isset($record['status'])) ? $record['status'] : '';

                $CI->db->where($foreign_id . '_to_id', $record['id']);
                $CI->core_model->update($table, 0, $update_record);

                continue;
            }

            $update_record = array();
            $update_record["{$foreign_id}_type"] = (isset($record['type'])) ? $record['type'] : '';
            $update_record["{$foreign_id}_number"] = (isset($record['number'])) ? $record['number'] : '';
            $update_record["{$foreign_id}_name"] = (isset($record['name'])) ? $record['name'] : '';
            $update_record["{$foreign_id}_date"] = (isset($record['date'])) ? $record['date'] : 0;
            $update_record["{$foreign_id}_status"] = (isset($record['status'])) ? $record['status'] : '';

            if ($foreign_id == 'product')
            {
                $update_record['unit'] = (isset($record['unit'])) ? $record['unit'] : 'PCS';
            }

            $CI->db->where($foreign_id . '_id', $record['id']);
            $CI->core_model->update($table, 0, $update_record);
        }
    }
}
