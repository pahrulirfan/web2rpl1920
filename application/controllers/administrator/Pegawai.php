<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pegawai');
	}
	public function Index()
	{
		

	//	$data=$this->m_pegawai->getAll();

		//var_dump($data);

		$data['sub_judul']='Data Pegawai';
		$data['data_pegawai']=$this->m_pegawai->getAll();

		$this->load->view('administrator/templete/v_header');
		$this->load->view('administrator/pegawai/v_index', $data);
		$this->load->view('administrator/templete/footer');

	}
	public function delete($id)
	{
		$this->m_pegawai->hapus($id);
		redirect('administrator/pegawai/index');
	}

	public function add()
	{
		$data['sub_judul']='Tambah Data Pegawai';
		$this->load->view('administrator/templete/v_header');
		$this->load->view('administrator/pegawai/v_add',$data);
		$this->load->view('administrator/templete/footer');
	}

	public function simpan()
	{
		$objek =array(
			'nip'=> $this->input->post('nip'),
			'nama'=> $this->input->post('nama'),
			'alamat'=> $this->input->post('alamat'),
			'jabatan'=> $this->input->post('jabatan')
		);
			
			$this->m_pegawai->tambah($objek);
				redirect('administrator/pegawai/index');
	}
	public function edit($id)
	{
		$this->db->where('id', $id);
		$data_table = $this->db->get('tbl_005')->row();


		$data['sub_judul']='Edit Data Pegawai';
		$data['isi_form'] = $data_table;
		$this->load->view('administrator/templete/v_header');
		$this->load->view('administrator/pegawai/v_edit',$data);
		$this->load->view('administrator/templete/footer');
	}
}