<?php

class Login extends CI_Controller
{
    public function index()
    {
        $this->load->view('administrator/v_login');
    }

    public function proses_login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $this->load->model('m_admin');

        $this->m_admin->getAdmin($email, $password);

    }
}