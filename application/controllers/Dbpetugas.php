<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dbpetugas extends MY_Controller
{

  public function __construct() 
  {
        Parent::__construct();
        $this->load->model("Dbpetugas_model");
    }

     public function index()
     {    #cek level untuk tampiin button register petugas
            if($this->is_manager())
            {   #visibility register petugas button
                $data['regpetugas'] = "<a href =" . base_url() . "Dbpetugas/Register_petugas" . "/><button class='btn btn-primary' style='float:right'>Registrasi Petugas</button></a>";
            }
            elseif($this->is_karyawan())
            {
                $data['regpetugas'] = "";
            }
            $this->load->view("Dbpetugas", $data);
     }

     public function data_petugas()
     {

          // Datatables Variables

            $draw = intval($this->input->get("draw"));
            $start = intval($this->input->get("start"));
            $length = intval($this->input->get("length"));

            $id = $this->session->userdata('id_akun');

            $data_petugas = $this->is_manager() 
                            ? $this->Dbpetugas_model->get_join('user','printer','user.id_akun=printer.id_akun') 
                            : $this->Dbpetugas_model->get_join_where('user','printer','user.id_akun=printer.id_akun','user.id_akun',$id);

              $data = array();
              foreach($data_petugas->result() as $r) 
              {
                #inisialisasi data petugas
                    $data[] = array(
                      $r->nama_depan,
                      $r->nama_belakang,
                      $r->username,
                      $r->level,
                      $r->nip,
                      $r->nama_printer,
                      $r->edit = $this->is_manager() ? "<center><a href=" . base_url() . "dbpetugas/" . "edit/" . $r->id_akun . ">Edit</a></center> <center><a href=" . base_url() . "dbpetugas/" . "delete/" . $r->id_akun . ">Delete</a></center>" : "<center><a href=" . base_url() . "dbpetugas/" . "edit/" . $r->id_akun . ">Edit</a></center>"
                  );


              }

            $output = array(
               "draw" => $draw,
                 "recordsTotal" => $data_petugas->num_rows(),
                 "recordsFiltered" => $data_petugas->num_rows(),
                 "data" => $data
            );
            #convert ke json
            echo json_encode($output, JSON_UNESCAPED_SLASHES);
            exit(); 
         

     }
     public function delete($id)
     {
        if($this->is_manager())
        {
          $data['user'] = $this->Dbpetugas_model->get_join_where('user','printer','user.id_akun=printer.id_akun','user.id_akun', $id)->result();
          foreach($data['user'] as $u)
          {
            $user = $u->nama_depan;
          }
          $data['output'] = "<h1 class='display-3' align='center'>Konfirmasi Hapus Data Petugas</h1> <p class='lead' align='center'><strong> Apakah anda yakin ingin menghapus data " . $user . "</p>";
          $data['button'] = "<center><a class='btn btn-primary btn-sm' role='button' href=" . base_url() . "dbpetugas/confirmdelete/" .  $id . "> Hapus Petugas</a> <a class='btn btn-primary btn-sm' role='button' href=" . base_url() . "dbpetugas" . ">Daftar Petugas</a></center>";
          $this->load->view('Simpan',$data);
        }
        else
        {
          redirect('Dbpetugas');
        }
     }
     public function confirmdelete($id)
     {
        if($this->is_manager())
        {
            $transaction = $this->Dbpetugas_model->transaction_delete($id);
            if($transaction === FALSE)
            {
              $this->db->trans_rollback();
              $data['output'] = "<h1 class='display-3' align='center'>Kesalahan Database</h1> <p class='lead' align='center'><strong>Silahkan hubungi administrator</p>";
              $data['button'] = null;
            }
            else
            {
              $this->db->trans_commit();
              $data['button'] = "<center><a class='btn btn-primary btn-sm' href=" . base_url() . "dbpetugas/register_petugas" .  "role='button'> Register Petugas</a> <a class='btn btn-primary btn-sm' role='button' href=" . base_url() . "dbpetugas" . ">Daftar Petugas</a></center>";
              $data['output'] = "<h1 class='display-3' align='center'>Berhasil</h1> <p class='lead' align='center'><strong>Penghapusan data petugas berhasil</p>";
            }
            $this->load->view('Simpan',$data);
        }
        else
        {
          redirect('Dbpetugas');
        }
     }
     public function edit($id)
     {
        if($this->is_manager())
        {
          #get data by id petugas          
          $data['user'] = $this->Dbpetugas_model->get_join_where('user','printer','user.id_akun=printer.id_akun','user.id_akun', $id)->result();
          foreach($data['user'] as $u)
          {
            $level    = $u->level;
            $printer  = $u->nama_printer;
          }
          
          $levellist      = array
          (
            'karyawan' => 'Karyawan',
            'manager' => 'Manager'
          );

          $printerlist    = array
          (
            'Receiptprinter1' => 'Receiptprinter1', 
            'Receiptprinter2' => 'Receiptprinter2', 
            'Receiptprinter3' => 'Receiptprinter3', 
            'Receiptprinter4' => 'Receiptprinter4'
          );
          #form dropdown with selected
          $data['selectjabatan'] = "<div class='control-group'><label class='control-label'>Jabatan</label><div class='controls'>" . form_dropdown('level', $levellist, $level) ."</div>";
          $data['selectprinter'] = "<div class='control-group'><label class='control-label'>Jabatan</label><div class='controls'>" . form_dropdown('nama_printer', $printerlist, $printer) ."</div>";
        }
        else
        {
          $data['user']             = $this->Dbpetugas_model->edit_data($id,'user','id_akun');
          $data['selectprinter']    = null;
          $data['selectjabatan']    = form_hidden('level', $this->session->userdata('level'));

        }
        $this->load->view('Editpetugas',$data);
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
        $printer = $this->input->post('nama_printer');
        
        #inisialisasi data untuk di insert ke database
        $userdata = array(
            'nama_depan'        => $nama_depan,
            'nama_belakang'     => $nama_belakang,
            'username'          => $username,
            'level'             => $level,
            'password'          => $password,
            'id_akun'           => $id,
            'nip'               => $nip
        );

        $printerdata = array(
          'id_akun'       => $id,
          'nama_printer'  => $printer
        );
        $where = array
        (
          'id_akun' => $id
        );

        #cek level
        if($this->is_manager())
        {
            #input query join table user dan printer
            $transaction = $this->Dbpetugas_model->transaction_update($id,$userdata,$printerdata);
            if($transaction === FALSE)
            {
              $this->db->trans_rollback();
              $data['output'] = "<h1 class='display-3'>Data Kurang Lengkap</h1> <p class='lead'><strong>Silahkan periksa kembali data yang diinput. </p>";
              $data['button'] = "<a class='btn btn-primary btn-sm' role='button' href=" . base_url() . "dbpetugas" . ">List Petugas</a> <a class='btn btn-primary btn-sm' href=". base_url() . "dbpetugas/" . "edit/" . $id . " role='button'>Input Ulang</a>";
            }
            else
            {
              $this->db->trans_commit();
              $data['button'] = "<a class='btn btn-primary btn-sm' href=" . base_url() . "dbpetugas/register_petugas" .  "role='button'> Register Petugas</a> <a class='btn btn-primary btn-sm' role='button' href=" . base_url() . "dbpetugas" . ">Daftar Petugas</a>";
              $data['output'] = "<h1 class='display-3'>Berhasil!</h1> <p class='lead'><strong>Update data petugas berhasil. </p>";
            }
 
        }
        else
        {
          #input table user oleh karyawan
          if(!$this->Dbpetugas_model->update_data($where,$userdata,'user'))
          {
              $data['output'] = "<h1 class='display-3'>Data Kurang Lengkap</h1> <p class='lead'><strong>Silahkan periksa kembali data yang diinput. </p>";
              $data['button'] = "<a class='btn btn-primary btn-sm' role='button' href=" . base_url() . "dbpetugas" . ">List Petugas</a> <a class='btn btn-primary btn-sm' href=". base_url() . "dbpetugas/" . "edit/" . $id . " role='button'>Input Ulang</a>"; 
          }
          else
          {
              $data['button'] = "<a class='btn btn-primary btn-sm' href=" . base_url() . "dbpetugas/register_petugas" .  "role='button'> Register Petugas</a> <a class='btn btn-primary btn-sm' role='button' href=" . base_url() . "dbpetugas" . ">Daftar Petugas</a>";
              $data['output'] = "<h1 class='display-3'>Berhasil!</h1> <p class='lead'><strong>Update data petugas berhasil. </p>";  
          }
        }

        return $this->load->view('Simpan',$data);
     }

     public function register_petugas()
     {
      if($this->is_manager())
      {
        $this->load->view('Registrasi_petugas');
      }
      elseif($this->is_karyawan())
      {
        redirect('Dashboard');
      }
     }
     public function simpan_petugas()
     {
        $data             = $this->Dbpetugas_model->get_last_iduser();
        $no_l             = $data['0']['maxKode'];
        $id_akun          = $no_l + 1;
        $nama_depan       = $this->input->post('nama_depan');
        $nama_belakang    = $this->input->post('nama_belakang');
        $username         = $this->input->post('username');
        $password         = md5($this->input->post('password'));
        $level            = $this->input->post('level');
        $nip              = $this->input->post('nip');
        $printer          = $this->input->post('nama_printer');
 
        $userdata = array(
            'nama_depan'      => $nama_depan,
            'nama_belakang'   => $nama_belakang,
            'username'        => $username,
            'level'           => $level,
            'password'        => $password,
            'id_akun'         => $id_akun,
            'nip'             => $nip
        ); 
        $printerdata = array(
          'id_akun'       => $id_akun,
          'nama_printer'  => $printer
        );
        #insert query join table user dan printer
        $transaction = $this->Dbpetugas_model->transaction_insert($userdata,$printerdata);
        if($transaction === FALSE)
        {
          $this->db->trans_rollback();
          $data['output'] = "<h1 class='display-3'>Data Kurang Lengkap</h1> <p class='lead'><strong>Silahkan periksa kembali data yang diinput. </p>";
          $data['button'] = "<a class='btn btn-primary btn-sm' role='button' href=" . base_url() . "dbpetugas" . ">List Petugas</a> <a class='btn btn-primary btn-sm' href=". base_url() . "dbpetugas/" . "edit/" . $id . " role='button'>Input Ulang</a>";
        }
        else
        {
            $this->db->trans_commit();
            $data['button'] = "<a class='btn btn-primary btn-sm' href=" . base_url() . "dbpetugas/register_petugas" .  "role='button'> Register Petugas</a> <a class='btn btn-primary btn-sm' role='button' href=" . base_url() . "dbpetugas" . ">Daftar Petugas</a>";
            $data['output'] = "<h1 class='display-3'>Berhasil!</h1> <p class='lead'><strong>Update data petugas berhasil. </p>";
        }

        return $this->load->view('Simpan',$data);
     }
}
?>