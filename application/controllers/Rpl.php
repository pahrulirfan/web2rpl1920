<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rpl extends CI_Controller {

	public function Mahasiswa()
	{

		$data['nama']='Anjas tralala';
		$data['umur']='20';
		//echo "Nama Mahasiswa : ". $Nama;
		$this->load->view('v_rpl', $data);

	}
}