<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class patch_blog extends CI_Controller
{
	private $_setting;

	public function __construct()
	{
		parent:: __construct();

		$user_id = $this->session->userdata('user_id');

        if ($user_id > 0)
        {
            $this->_user = $this->core_model->get('user', $user_id);
            $this->_setting = $this->setting_model->load();
            $this->_acl = $this->cms_function->generate_acl($this->_user->id, $this->_setting);
        }
        else
        {
            redirect(base_url() . 'login/');
        }

		$this->load->library('cms_data');
	}




	public function generate()
	{
		$json['status'] = 'success';
		set_time_limit(0);

		try
		{
			$this->db->trans_start();

			$arr_blog = $this->cms_data->generate_blog();

			foreach ($arr_blog as $blog)
			{
				$blog->date = strtotime($blog->date);

				$blog_record = array();

				$blog_record['name'] = $blog->name;
				$blog_record['category'] = $blog->category;
				$blog_record['date'] = $blog->date;
				$blog_record['url_name'] = $blog->url_name;
				$blog_record['subtitle'] = $blog->subtitle;
				$blog_record['description'] = '';
				$blog_record['content'] = trim($blog->description);
				$blog_record['image_url'] = $blog->image;
				$this->core_model->insert('blog', $blog_record);
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