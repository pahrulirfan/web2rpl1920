<?php

class Pegawai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pegawai');
    }

    public function index()
    {
        // percobaan untuk menampilkan data semua pegawai
//        $data = $this->m_pegawai->getAll();
//        var_dump($data);

        $data['sub_judul'] = 'Data Pegawai';
        $data['data_pegawai'] = $this->m_pegawai->getAll();

        $this->load->view('administrator/template/v_header');
        $this->load->view('administrator/pegawai/v_index', $data);
        $this->load->view('administrator/template/footer');
    }
}