<?php
Class Test extends CI_Controller
{
	function __construct()
	{
		Parent::__construct();
		$this->load->model('Tambah_model');
	}

	public function index()
	{
		$data = $this->Tambah_model->get_last_nolayan();
		$no_l = $data['0']['maxKode'];
        $no_u = (int) substr($no_l, 0, 3);
        $no_u++;
        $kode_layan = sprintf("%03s", $no_u);
        echo '<pre>';
        print_r($kode_layan);
    }
}