<?php

class Rpl extends CI_Controller
{
    public function mahasiswa()
    {
        $data['nama'] = 'Anjas Ganteng';
        $data['umur'] = 67;
        $data['judul'] = 'Mahasiswa RPL';

        $this->load->view('D3/v_ipk', $data);
    }

    public function ipk()
    {
        echo 'contoh fungsi';
    }
}