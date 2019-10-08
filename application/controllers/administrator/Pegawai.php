<?php

class Pegawai extends CI_Controller
{

    public function index()
    {
        $this->load->view('administrator/template/v_header');
        $this->load->view('administrator/pegawai/v_index');
        $this->load->view('administrator/template/footer');
    }

    public function pengumuman()
    {
        $this->load->view('administrator/template/v_header');
        $this->load->view('administrator/pegawai/v_pengumuman');
        $this->load->view('administrator/template/footer');
    }

}