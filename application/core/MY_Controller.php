<?php
 
class MY_Controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('level') != TRUE)
        { 
            $url=base_url();
            redirect($url);
        }
        if($this->session->userdata('level') == 'manager')
    	{
      		$data['nav']  = "<li><a href=" . base_url() . "dbwp/tambah" . "><i class='icon icon-th'></i> <span>Form Registrasi WP</span></a></li><li><a href=" . base_url() . "dbpetugas" . "><i class='icon icon-th'></i> <span>Daftar Petugas</span></a></li></ul></div>";
            $this->load->view('template/Header');
            $this->load->view('template/Nav', $data);
    	}
    	elseif($this->session->userdata('level') == 'karyawan')
    	{
      		$data['nav']  = "<li><a href=" . base_url() . "dbpetugas" . "><i class='icon icon-th'></i> <span>Daftar Petugas</span></a></li></ul></div>";
            $this->load->view('template/Header');
            $this->load->view('template/Nav', $data);
    	}

    }
    public function is_manager()
    {
        if($this->session->userdata('level') == 'manager')
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function is_karyawan()
    {
        if($this->session->userdata('level') == 'karyawan')
        {
            return true;
        }
        else
        {
            return false;
        }
    }

}