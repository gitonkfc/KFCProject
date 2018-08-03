<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dbwp extends CI_Controller
{

	public function __construct() 
	{
        Parent::__construct();
        $this->load->model("dbwp_model");
    }

     public function index()
     {
          $this->load->view("dbwp", array());
     }

     public function data_wp()
     {

          // Datatables Variables
          $draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));


          $data_wp = $this->dbwp_model->getdata_wp();

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