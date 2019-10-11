<?php

class M_pegawai extends CI_Model
{
//    cara 1 dengan membuat property
    protected $table = 'tbl_031';

    public function semua()
    {
//        cara 1 mengambil property tabel
//        return $this->db->get($this->table)->result();
//        cara 2 dengan langsung menulis nama tabel
        return $this->db->get('tbl_031')->result();
    }
}