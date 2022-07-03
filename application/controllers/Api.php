<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Api extends CI_Controller
{
	public function service($type = "", $key = "", $value = "")
	{
		$json = new stdClass;
		$json->status = 'fail';
		$json->message = "Unknown error";
		switch ($this->input->method(true)) {
            case 'GET':
				$r = false;
				parse_str(file_get_contents("php://input"), $var);
				$data = $var;
                if ($type == 'get_employee') {
					$this->load->model('employee');
					$r = $this->employee->employee_list();
				}

				if ($r) {
					$json->status = 'success';
					$json->message = "Found $type, $key, $value";
					$json->result = $r;
				} else {
					$json->status = 'fail';
					$json->message = "Not found $type, $key, $value";
				}
                break;
			case 'POST':
				$r = false;
				parse_str(file_get_contents("php://input"), $var);
				$data = $var;
				if ($type == 'edit_employee') {
					$id = $key;
					$this->load->model('employee');
					$r = $this->employee->edit_employee($id, $data);
                }

				if ($r) {
					$json->status = 'success';
					$json->message = "Found $type, $key, $value";
					$json->result = $r;
				} else {
					$json->status = 'fail';
					$json->message = "Not found $type, $key, $value";
				}
                break;
			// case 'INSERT':
			// 	$r = false;
			// 	parse_str(file_get_contents("php://input"), $var);
			// 	$data = $var;
			// 	if ($type == 'insert_useraaa') {
			// 		$id = $key;
			// 		$this->load->model('game');
			// 		$r = $this->game->insert_game($data);
			// 	}
			// 	if ($r) {
			// 		$json->status = 'success';
			// 		$json->message = "Found $type, $key, $value";
			// 		$json->result = $r;
			// 	} else {
			// 		$json->status = 'fail';
			// 		$json->message = "Not found $type, $key, $value";
			// 	}
			// 	break;
		}
		echo json_encode($json);
	}
}
