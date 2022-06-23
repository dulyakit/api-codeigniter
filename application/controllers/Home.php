<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	// public function index()
	// {
	// 	$this->load->view('core/header');
	// 	$this->load->view('home');
	// 	$this->load->view('core/footer');

	// }
	public function index()
	{
		$this->load->view('core/header');
		$this->load->view('home1');
		$this->load->view('core/footer');
	}
}
