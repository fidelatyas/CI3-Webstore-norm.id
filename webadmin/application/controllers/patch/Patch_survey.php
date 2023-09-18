<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Patch_survey extends CI_Controller
{
	private $_setting;

	public function __construct()
	{
		parent:: __construct();

		$this->_setting = $this->setting_model->load();
	}




	public function index()
	{
		$json['status'] = 'success';

		try
		{
			set_time_limit(0);

			$this->load->library('../third_party/PHPExcel');
			//$this->load->library('../third_party/PHPExcel/iofactory');

			$inputFileName = "application/controllers/file/customer-followup.xls";

			$inputFileType = PHPExcel_IOFactory::identify($inputFileName);
			$objReader = PHPExcel_IOFactory::createReader($inputFileType);
			$objPHPExcel = $objReader->load($inputFileName);

			$rows = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);

			foreach ($rows as $key => $row)
			{
				if ($key <= 4)
				{
					continue;
				}

				if ($key > 10)
				{
					break;
				}

				$survey_record = array();

				$survey_record['number'] = '';
				$survey_record['name'] = $row['F'];
				$survey_record['phone'] = $row['C'];
				$survey_record['email'] = $row['E'];
				$survey_record['pic'] = 'Razaq';
				var_dump($survey_record);
				// $this->core_model->insert('survey3', $survey_record);
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
}