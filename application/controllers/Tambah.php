<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class tambah extends CI_Controller
{
    function __construct()
    {
        Parent::__construct();
        $this->load->model("tambah_model");
    }
     public function index()
     {
        if($this->session->userdata('level')=='manager')
        {
            $data['jenis_pelayanan'] = $this->tambah_model->jenis_pelayanan();
            $this->load->view('tambah',$data);
        }
        else
        {
            $this->load->view("dashboard");
        }

     }

     public function jenis_pelayanan()
     {
;
     }
}