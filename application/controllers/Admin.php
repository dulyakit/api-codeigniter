<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $this->load->model('employee');
        $r['employee_list'] = $this->employee->employee_list();
        $this->load->view('core/header');
        $this->load->view('admin', $r);
        $this->load->view('core/footer');
    }
    public function delEm($ssn = "")
    {
        $this->load->model('employee');
        $result = $this->employee->delEm($ssn);
        if ($result) {
            redirect('/admin', 'refresh');
        }
    }

    public function editEm($ssn = "")
    {
        if (isset($ssn)) {
            $this->load->model('employee');
            $result['employee'] = $this->employee->employeeById($ssn);
            $this->load->view('core/header');
            $this->load->view('editEm', $result);
            $this->load->view('core/footer');
        }
    }

    public function edit_user()
    {
        $data = $this->input->post();
        $this->load->model('employee');
        $result = $this->employee->edit_user($data);
        if ($result) {
            redirect('/admin', 'refresh');
        }
    }

    public function insert_user()
    {
        $data = $this->input->post();
        $this->load->model('employee');
        $result = $this->employee->insert_user($data);
        if ($result) {
            redirect('/admin', 'refresh');
        }
    }
}
