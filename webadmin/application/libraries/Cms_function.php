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

	public function generate_csrf()
	{
		$CI = &get_instance();

		$arr_csrf = array();
		$arr_csrf['name'] = $CI->security->get_csrf_token_name();
		$arr_csrf['hash'] = $CI->security->get_csrf_hash();

		return $arr_csrf;
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
            'smtp_user' => 'postmaster@mail.eliocare.com',
            'smtp_pass' => '31b9e2aacb04f2f72ce62daf44101a63-0afbfc6c-b6db244f',
            'mailtype'  => 'text',
            'charset'   => 'iso-8859-1'
        );

        $CI->load->library('email');

        // $CI->email->set_header('X-Mailgun-Track', 'yes');
        // $CI->email->set_header('X-Mailgun-Track-Clicks', 'yes');
        // $CI->email->set_header('X-Mailgun-Track-Opens', 'yes');

        $CI->email->initialize($config);
        $CI->email->set_mailtype($mailtype);

        $CI->email->from('help@norm.id', 'Apotek Now');
        $CI->email->to($sent_to);
        $CI->email->cc($arr_cc_to);

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
