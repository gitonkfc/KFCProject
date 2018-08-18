<?php
class Dashboard extends MY_Controller
{
  
  function __construct()
  {
    parent::__construct();
    if($this->session->userdata('level') != TRUE)
      { 
        $url=base_url();
        redirect($url);
      }
  }

  function index()
  {
    if($this->session->userdata('level')=='manager')
    {
        $data['nav'] ="<li class='bg_lg span3'> <a href=" . base_url() . "dbwp" . "> <i class='icon-th'></i> Database Daftar Wajib Pajak</a> </li><li class='bg_lo span3'> <a href=" . base_url(). "dbwp/tambah" . "> <i class='icon-th-list'></i> Pembuatan Form Baru </a> </li> <li class='bg_lo span3'> <a href=" . base_url(). "Dbpetugas/Register_petugas" . "> <i class='icon-th-list'></i> Registrasi Petugas </a> </li>"; 
    }
    else
    {
        $data['nav'] ="<li class='bg_lg span3'> <a href=" . base_url(). "dbwp" . "> <i class='icon-th'></i> Database Daftar Wajib Pajak</a> </li><li class='bg_lo span3'> <a href=" . base_url(). "dbwp/tambah" . "> <i class='icon-th-list'></i> Pembuatan Form Baru </a> </li>"; 
    }

    $this->load->view('Dashboard',$data);
  }
}