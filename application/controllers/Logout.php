<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();

		$this->_setting = $this->setting_model->load();
	}




	public function index()
	{
		$this->session->set_userdata('patient_id', NULL);
		$this->session->sess_destroy();

		redirect(base_url());
	}
}