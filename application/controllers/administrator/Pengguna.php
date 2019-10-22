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
        $this->load->view('administrator/pengguna/v_index', $data);
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
        $this->load->view('administrator/pengguna/v_add', $data);
        $this->load->view('administrator/template/footer');
    }

    public function simpan()
    {
        $objek = array(
            'nip' => $this->input->post('nip'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'jabatan' => $this->input->post('jabatan')
        );

        $this->m_pengguna->tambah($objek);
        redirect('administrator/pengguna/index');
    }

    function edit($id)
    {
        $data['sub_judul'] = 'Edit Data pengguna';

        $data['isi_form'] = $this->m_pengguna->getWhere($id);

        $this->load->view('administrator/template/v_header');
        $this->load->view('administrator/pengguna/v_edit', $data);
        $this->load->view('administrator/template/footer');
    }

    function proses_edit()
    {
        $id = $this->input->post('id');

        $objek = array(
            'nip' => $this->input->post('nip'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'jabatan' => $this->input->post('jabatan')
        );

        $this->m_pengguna->simpan_edit($id, $objek);

        redirect('administrator/pengguna/index');
    }
}