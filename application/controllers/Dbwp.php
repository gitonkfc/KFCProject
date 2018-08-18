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
                    $r->date,
                    $r->edit = "<center><a href=" . base_url() . "dbwp/" . "edit/" . $r->no_layan . ">edit</a></center>"

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
     public function tambah()
     {
        if($this->session->userdata('level') == TRUE)
        {
            $data['jenis_pelayanan'] = $this->Dbwp_model->jenis_pelayanan();
            $this->load->view('Tambah',$data);
        }
        else
        {
            redirect('Login');
        }

     }

     public function simpan()
     {
        $data = $this->Dbwp_model->get_last_nolayan();
        $no_l = $data['0']['maxKode'];
        $no_u = $no_l + 1;
        $no_t = (int) substr($no_u, 0, 3);
        $kode_layan = sprintf("%03s", $no_t);
        $name = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $phone = $this->input->post('phone');
        $kota = $this->input->post('kota');
        $kecamatan = $this->input->post('kec');
        $kodepos = $this->input->post('kodepos');
        $no_pel = $this->input->post('no_pel');
        $date = date('Y-m-d H:i:s');

        $data = array
        (
            'no_layan'  => $kode_layan,
            'nama'      => $name,
            'alamat'    => $alamat,
            'nohp'      => $phone,
            'kota'      => $kota,
            'kecamatan'  => $kecamatan,
            'kodepos'   => $kodepos,
            'no_pel'    => $no_pel,
            'date'      => $date
        );
        

        if(!$this->Dbwp_model->input_data($data,'data_wp'))
        {
          $data['output'] = "<h1 class='display-3'>Data Kurang Lengkap</h1> <p class='lead'><strong>Silahkan periksa kembali data yang diinput. </p>";
          $data['button'] = "<a class='btn btn-primary btn-sm' href=" . base_url() . "dbwp/tambah" .  "role='button'> Pendaftaran Baru</a> <a class='btn btn-primary btn-sm' href=" . base_url() . "Dashboard" . "role='button'>Menu Utama</a>";
        }    
        else
        {
          $data['button'] = "<a class='btn btn-primary btn-sm' href=" . base_url() . "dbwp/tambah" .  "role='button'> Pendaftaran Baru</a> <a class='btn btn-primary btn-sm' href=" . base_url() . "Dashboard" . "role='button'>Menu Utama</a>";
          $data['output'] = "<h1 class='display-3'>Terima Kasih!</h1> <p class='lead'><strong>Selamat Melayani.</strong> Untuk Info yang belum anda pahami silahkan menghubungi pusat pelayanan lanjutan. </p>";
        }
        return $this->load->view('Simpan',$data);

      }
     public function edit($no_layan)
     {
        if($this->is_logged_in)
        {
          $where = array('no_layan' => $no_layan);
          $data['datawp'] = $this->Dbwp_model->edit_data($where,'data_wp')->result();
          $data['jenis_pelayanan'] = $this->Dbwp_model->jenis_pelayanan();
          $this->load->view('Editwp',$data); 
        }
        else
        {
          redirect('Login');
        }


     }
     public function update()
     {
        $no_layan   = $this->input->post('no_layan');
        $nama       = $this->input->post('nama');
        $alamat     = $this->input->post('alamat');
        $kota       = $this->input->post('kota');
        $kodepos    = $this->input->post('kodepos');
        $nohp       = $this->input->post('phone');
        $no_pel     = $this->input->post('no_pel');
        $date = date('Y-m-d H:i:s');

        $data = array
        (
          'nama'      => $nama,
          'alamat'    => $alamat,
          'kota'      => $kota,
          'kodepos'   => $kodepos,
          'nohp'      => $nohp,
          'no_pel'    => $no_pel,
          'date'      => $date
        );

        $where = array('no_layan' => $no_layan);
        if(!$this->Dbwp_model->update_data($where,$data,'data_wp'))
        {
          $data['output'] = "<h1 class='display-3'>Data Kurang Lengkap</h1> <p class='lead'><strong>Silahkan periksa kembali data yang diinput. </p>";
            $data['button'] = "<a class='btn btn-primary btn-sm' href=" . base_url() . "dbwp/tambah" .  "role='button'> Pendaftaran Baru</a> <a class='btn btn-primary btn-sm' href=" . base_url() . "Dashboard" . "role='button'>Menu Utama</a> <a class='btn btn-primary btn-sm' href=". base_url() . "dbwp/" . "edit/" . $no_layan . " role='button'>Input Ulang</a>";
        }    
        else
        {
          $data['button'] = "<a class='btn btn-primary btn-sm' href=" . base_url() . "dbwp/tambah" .  "role='button'> Pendaftaran Baru</a>< a class='btn btn-primary btn-sm' href=" . base_url() . "Dashboard" . "role='button'>Menu Utama</a>";
          $data['output'] = "<h1 class='display-3'>Terima Kasih!</h1> <p class='lead'><strong>Selamat Melayani.</strong> Untuk Info yang belum anda pahami silahkan menghubungi pusat pelayanan lanjutan. </p>";
        }
        return $this->load->view('Simpan',$data);
     }

}
?>