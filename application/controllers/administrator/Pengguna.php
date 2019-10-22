<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pengguna');
    }

    public function Index()
    {


        //	$data=$this->m_pengguna->getAll();

        //var_dump($data);

        $data['sub_judul'] = 'Data pengguna';
        $data['data_pengguna'] = $this->m_pengguna->getAll();

        $this->load->view('administrator/template/v_header');
        $this->load->view('administrator/pengguna/v_tampil', $data);
        $this->load->view('administrator/template/footer');

    }

    public function delete($id)
    {
        $this->m_pengguna->hapus($id);
        redirect('administrator/pengguna/index');
    }

    public function add()
    {
        $data['sub_judul'] = 'Tambah Data pengguna';
        $this->load->view('administrator/template/v_header');
        $this->load->view('administrator/pengguna/v_tambah', $data);
        $this->load->view('administrator/template/footer');
    }

    public function simpan()
    {
        $objek = array(
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
        );

        $this->m_pengguna->tambah($objek);
        redirect('administrator/pengguna/index');
    }

    function edit($id)
    {
        $data['sub_judul'] = 'Edit Data pengguna';

        $data['isi_form'] = $this->m_pengguna->getWhere($id);

        $this->load->view('administrator/template/v_header');
        $this->load->view('administrator/pengguna/v_ubah', $data);
        $this->load->view('administrator/template/footer');
    }

    function proses_edit()
    {
        $id = $this->input->post('kode');

        $objek = array(
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
        );

        $this->m_pengguna->simpan_edit($id, $objek);

        redirect('administrator/pengguna/index');
    }
}