<?php

class M_pegawai extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('tbl_031')->result();
    }
}