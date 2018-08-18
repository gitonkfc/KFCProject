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
          if($this->is_logged_in())
          {
            $this->load->view("Dbpetugas", array());
          }          
          else
          {
            redirect('Login');
          }
     }

     public function data_petugas()
     {

          // Datatables Variables

            $draw = intval($this->input->get("draw"));
            $start = intval($this->input->get("start"));
            $length = intval($this->input->get("length"));

            if($this->session->userdata('level')=='manager')
            {
              $data_petugas = $this->Dbpetugas_model->getdata_petugas();
            }
            elseif ($this->session->userdata('level')=='karyawan') 
            {
              $where = array('nama_depan' => $this->session->userdata('nama_u'));
              $data_petugas = $this->Dbpetugas_model->getdata_petugas_byname($where,'user');
            }


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
        if($this->is_logged_in())
        {
          $where        = array('id_akun' => $id);
          $data['user'] = $this->Dbpetugas_model->edit_data($where,'user')->result();
          $this->load->view('Editpetugas',$data);
        }
        else
        {
          redirect('Login');
        }
     }

     public function update()
     {
        $id = $this->input->post('id_akun');
        $nama_depan = $this->input->post('nama_depan');
        $nama_belakang = $this->input->post('nama_belakang');
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $level = $this->input->post('level');
        $nip = $this->input->post('nip');
 
        $data = array(
            'nama_depan' => $nama_depan,
            'nama_belakang' => $nama_belakang,
            'username' => $username,
            'level' => $level,
            'password' => $password,
            'id_akun' => $id,
            'nip' => $nip
        );

        $where = array
        (
          'id_akun' => $id
        );
        if($level == 'karyawan' || $level == 'manager')
        {
            $this->Dbpetugas_model->update_data($where,$data,'user');
            $data['button'] = "<a class='btn btn-primary btn-sm' href=" . base_url() . "dbpetugas/register_petugas" .  "role='button'> Register Petugas</a> <a class='btn btn-primary btn-sm' role='button' href=" . base_url() . "dbpetugas" . ">Daftar Petugas</a>";
            $data['output'] = "<h1 class='display-3'>Berhasil!</h1> <p class='lead'><strong>Update data petugas berhasil. </p>";
        }
        else
        {
          $data['output'] = "<h1 class='display-3'>Data Kurang Lengkap</h1> <p class='lead'><strong>Silahkan periksa kembali data yang diinput. </p>";
          $data['button'] = "<a class='btn btn-primary btn-sm' role='button' href=" . base_url() . "dbpetugas" . ">List Petugas</a> <a class='btn btn-primary btn-sm' href=". base_url() . "dbpetugas/" . "edit/" . $id . " role='button'>Input Ulang</a>";

        }

        return $this->load->view('Simpan',$data);
     }

     public function register_petugas()
     {
      if($this->session->userdata('level')=='manager')
      {
        $this->load->view('Registrasi_petugas');
      }
      elseif($this->session->userdata('level')=='karyawan')
      {
        redirect('Dashboard');
      }
      else
      {
        redirect('Login');
      }
     }
     public function simpan_petugas()
     {
        $data = $this->Dbpetugas_model->get_last_iduser();
        $no_l = $data['0']['maxKode'];
        $id_akun = $no_l + 1;
        $nama_depan = $this->input->post('nama_depan');
        $nama_belakang = $this->input->post('nama_belakang');
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $level = $this->input->post('level');
        $nip = $this->input->post('nip');
 
        $data = array(
            'nama_depan' => $nama_depan,
            'nama_belakang' => $nama_belakang,
            'username' => $username,
            'level' => $level,
            'password' => $password,
            'id_akun' => $id_akun,
            'nip' => $nip
        ); 
        $this->Dbpetugas_model->registrasi_petugas($data,'user');
        redirect('Dbpetugas');
     }

}
?>