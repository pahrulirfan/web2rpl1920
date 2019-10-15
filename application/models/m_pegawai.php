<?php

class M_pegawai extends CI_Model
{
//    cara 1 dengan membuat property
//    protected $table = 'tbl_031';

    public function getAll()
    {
//        cara 1 mengambil property tabel
//        return $this->db->get($this->table)->result();

//        cara 2 dengan langsung menulis nama tabel
        return $this->db->get('tbl_031')->result();
    }

    public function hapus($id)
    {
        $this->db->delete('tbl_031', array('id' => $id));
    }
}