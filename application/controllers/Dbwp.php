<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dbwp extends MY_Controller
{

	public function __construct() 
	{
        Parent::__construct();
        $this->load->model("Dbwp_model");
    }

     public function index()
     {
          if($this->session->userdata('level') == TRUE)
          {
            $this->load->view("Dbwp", array());
          }          
          else
          {
            $this->load->view('Login');
          }
     }

     public function data_wp()
     {

          // Datatables Variables
          $draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));


          $data_wp = $this->Dbwp_model->getdata_wp();

          $data = array();

          foreach($data_wp->result() as $r) {

               $data[] = array(
                    $r->nama,
                    $r->alamat,
                    $r->kota,
                    $r->kodepos,
                    $r->nohp,
                    $r->no_pel,
                    $r->date

                );
          }

          $output = array(
               "draw" => $draw,
                 "recordsTotal" => $data_wp->num_rows(),
                 "recordsFiltered" => $data_wp->num_rows(),
                 "data" => $data
            );
          echo json_encode($output);
          exit();
     }

}
?>