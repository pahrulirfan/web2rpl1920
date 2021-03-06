<?php

class M_pegawai extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('tbl_031')->result();

    }

    public function hapus($id)
    {
        $this->db->delete('tbl_031', array('id' => $id));
    }

    public function tambah($objek)
    {
        $this->db->insert('tbl_031', $objek);
    }

    public function getWhere($id)
    {
        return $this->db->where('id', $id)->get('tbl_031')->row();
    }

    public function simpan_edit($id, $object)
    {
        $this->db->where('id', $id)->update('tbl_031', $object);
    }
}