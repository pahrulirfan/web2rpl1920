<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('v_contoh');
	}

    public function contoh()
    {
        echo 'contoh doang';
	}
}
