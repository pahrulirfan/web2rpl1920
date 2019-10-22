<?php

class M_pegawai extends CI_Model
{
	public function getAll()
	{
		return $this->db->get('tbl_005')->result();
		
	}

	public function hapus($id)
	{
		$this->db->delete('tbl_005', array('id'=>$id));
	}

	public function tambah($objek)
	{
		$this->db->insert('tbl_005', $objek);
	}
}