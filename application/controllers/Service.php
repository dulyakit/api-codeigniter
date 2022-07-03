<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Service extends CI_Controller
{
	public function index()
	{
		$this->load->view('core/header');
		$this->load->view('home1');
		$this->load->view('core/footer');
	}

    public function employee()
	{
		$this->load->view('core/header');
		$this->load->view('service/employee');
		// $this->load->view('core/footer');
	}

    public function vue()
	{
		$this->load->view('core/header');
		$this->load->view('service/vue');
		// $this->load->view('core/footer');
	}

    public function os()
	{
		$this->load->view('core/header');
		$this->load->view('service/os');
		// $this->load->view('core/footer');
	}
}
