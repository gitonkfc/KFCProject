<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dbpetugas extends MY_Controller
{

  public function __construct() 
  {
        Parent::__construct();
        $this->load->model("Dbpetugas_model");
    }

     public function index()
     {
          $this->load->view("Dbpetugas", array());
     }

     public function data_petugas()
     {

          // Datatables Variables
          $draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));


          $data_petugas = $this->Dbpetugas_model->getdata_petugas();

          $data = array();

          foreach($data_petugas->result() as $r) {

               $data[] = array(
                    $r->nama_depan,
                    $r->nama_belakang,
                    $r->username,
                    $r->level,
                    $r->nip

                );
          }

          $output = array(
               "draw" => $draw,
                 "recordsTotal" => $data_petugas->num_rows(),
                 "recordsFiltered" => $data_petugas->num_rows(),
                 "data" => $data
            );
          echo json_encode($output);
          exit();
     }

}
?>