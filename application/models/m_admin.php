<?php

class M_admin extends CI_Model
{
    public function getAdmin($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        return $this->db->get('tbl_pengguna');
    }
}