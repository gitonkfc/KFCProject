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
    $this->load->view('Dashboard');
  }
}