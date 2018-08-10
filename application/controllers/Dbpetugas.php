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
          if($this->session->userdata('level')=='manager')
          {
            $this->load->view("Dbpetugas", array());
          }          
          elseif ($this->session->userdata('level')=='karyawan') 
          {
            $this->load->view('Dashboard');
          }
          else
          {
            $this->load->view('Login');
          }
     }

     public function data_petugas()
     {

          // Datatables Variables
          $draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));


          $data_petugas = $this->Dbpetugas_model->getdata_petugas();

          $data = array();

          foreach($data_petugas->result() as $r) 
          {

               $data[] = array(
                    $r->nama_depan,
                    $r->nama_belakang,
                    $r->username,
                    $r->level,
                    $r->nip,
                    $r->edit = "<center><a href=" . base_url() . "dbpetugas/" . "edit/" . $r->id_akun . ">edit</a></center>"
                );
          }


          $output = array(
               "draw" => $draw,
                 "recordsTotal" => $data_petugas->num_rows(),
                 "recordsFiltered" => $data_petugas->num_rows(),
                 "data" => $data
            );
          echo json_encode($output, JSON_UNESCAPED_SLASHES);
          exit();
     }
     public function edit($id)
     {
        $where        = array('id_akun' => $id);
        $data['user'] = $this->Dbpetugas_model->edit_data($where,'user')->result();
        $this->load->view('Editpetugas',$data);
     }

}
?>