<?php

class M_pengguna extends CI_Model
{
    private $table = 'tbl_pengguna';

    public function getAll()
    {
        return $this->db->get($this->table)->result();

    }

    public function hapus($id)
    {
        $this->db->delete($this->table, array('kode' => $id));
    }

    public function tambah($objek)
    {
        $this->db->insert($this->table, $objek);
    }

    public function getWhere($id)
    {
        return $this->db->where('kode', $id)->get($this->table)->row();
    }

    public function simpan_edit($id, $object)
    {
        $this->db->where('kode', $id)->update($this->table, $object);
    }
}