<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pegawai');
    }

    public function Index()
    {


        //	$data=$this->m_pegawai->getAll();

        //var_dump($data);

        $data['sub_judul'] = 'Data Pegawai';
        $data['data_pegawai'] = $this->m_pegawai->getAll();

        $this->load->view('administrator/template/v_header');
        $this->load->view('administrator/pegawai/v_index', $data);
        $this->load->view('administrator/template/footer');

    }

    public function delete($id)
    {
        $this->m_pegawai->hapus($id);
        redirect('administrator/pegawai/index');
    }

    public function add()
    {
        $data['sub_judul'] = 'Tambah Data Pegawai';
        $this->load->view('administrator/template/v_header');
        $this->load->view('administrator/pegawai/v_add', $data);
        $this->load->view('administrator/template/footer');
    }

    public function simpan()
    {
        $this->form_validation->set_rules('nip', 'NIP', 'required|numeric|exact_length[8]|is_unique[tbl_031.nip]');
        $this->form_validation->set_rules('nama', 'Nama', 'required|min_length[3]');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[10]');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|min_length[5]');

        if ($this->form_validation->run() == false) {
            $this->add();
        } else {

            $objek = array(
                'nip' => $this->input->post('nip'),
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'jabatan' => $this->input->post('jabatan')
            );

            $this->m_pegawai->tambah($objek);
            redirect('administrator/pegawai/index');
        }
    }

    function edit($id)
    {
        $data['sub_judul'] = 'Edit Data Pegawai';

        $data['isi_form'] = $this->m_pegawai->getWhere($id);

        $this->load->view('administrator/template/v_header');
        $this->load->view('administrator/pegawai/v_edit', $data);
        $this->load->view('administrator/template/footer');
    }

    function proses_edit()
    {
        $id = $this->input->post('id');

        $this->form_validation->set_rules('nip', 'NIP', 'required|numeric|exact_length[8]');
        $this->form_validation->set_rules('nama', 'Nama', 'required|min_length[3]');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[10]');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|min_length[5]');

        if ($this->form_validation->run() == false) {
            $this->edit($id);
        } else {
            $objek = array(
                'nip' => $this->input->post('nip'),
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'jabatan' => $this->input->post('jabatan')
            );
            $this->m_pegawai->simpan_edit($id, $objek);
            redirect('administrator/pegawai/index');
        }
    }
}