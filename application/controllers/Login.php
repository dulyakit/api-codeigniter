<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function index()
    {
        $this->load->view('login');
    }
    public function check_register()
    {
        $user_data = $this->input->post();
        $this->load->model('user');
        $result = $this->user->check_register($user_data);
        if ($result) {
            $r['fail'] = '1234';
            $this->load->view('register', $r);
        } else {
            $this->load->model('user');
            $this->user->create_user($user_data);
            $this->load->view('login');
        }
    }
    public function check_login()
    {
        $user_data = $this->input->post();
        $this->load->model('user');
        $result = $this->user->check_login($user_data);
        if ($result) {
            $this->session->set_userdata($result);
            redirect('home');
        } else {
            $r['fail'] = '123';
            $this->load->view('login', $r);
        }
    }

    public function logout()
    {
        session_destroy();
        redirect('/home', 'refresh');
    }
}
