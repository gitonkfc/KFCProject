<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

use Mike42\Escpos\Printer;
use Mike42\Escpos\Item;
use Mike42\Escpos\PrintConnectors\CupsPrintConnector;

class Dbwp extends MY_Controller
{

	public function __construct() 
	{
        Parent::__construct();
        $this->load->model("Dbwp_model");
    }

     public function index()
     {    

            $this->load->view("Dbwp", array());
     }

     public function data_wp()
     {

          // Datatables Variables
          $draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));

          #get data wp
          $data_wp = $this->Dbwp_model->getdata_wp();

          $data = array();
          #inisialisasi data untuk ditampilkan
          foreach($data_wp->result() as $r) {

               $data[] = array(
                    $r->no_layan,
                    $r->nama,
                    $r->alamat,
                    $r->kota,
                    $r->kodepos,
                    $r->nohp,
                    $r->no_pel,
                    $r->date,
                    $r->edit = "<center><button class='btn btn-info btn-mini'><span class='glyphicon glyphicon-edit'><a href=" . base_url() . "dbwp/" . "edit/" . $r->no_layan . ">Edit</a></button></center>",
                    $r->cetak = " <center><button class='btn btn-info btn-mini'><span class='glyphicon glyphicon-print'><a href=" . base_url() . "dbwp/" . "menucetak/" . $r->no_layan . ">Cetak</a></button></center>"
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
            #get data jenis pelayanan dari database
            $data['jenis_pelayanan'] = $this->Dbwp_model->jenis_pelayanan();
            $this->load->view('Tambah',$data);
     }

     public function menucetak($no_layan)
     {
          $where = array('no_layan' => $no_layan);
          #get data wp sesuai id
          $data = $this->Dbwp_model->edit_data($where,'data_wp')->result();
          #inisialisasi data yang akan dicetak
          $datas = array();
          foreach ($data as $datas)
          {
            $datas = array
            (
              'no_layan'  => $datas->no_layan,
              'nama'      => $datas->nama,
              'alamat'    => $datas->alamat,
              'nohp'      => $datas->nohp,
              'kota'      => $datas->kota,
              'kecamatan'  => $datas->kecamatan,
              'kodepos'   => $datas->kodepos,
              'no_pel'    => $datas->no_pel,
              'date'      => $datas->date
            );
          }
          #cetak data
          $this->cetak($datas);
          redirect('Dbwp');
     }
     private function cetak($data=[])
     {

         #inistialisasi data yang akan dicetak
          $items = array 
          (
            new Item ('Nama', $data['nama']),
            new Item ('Alamat', $data['alamat']),
            new Item ('No Telepon', $data['nohp']),
            new Item ('Kota', $data['kota']),
            new Item ('Kecamatan', $data['kecamatan']),
            new Item ('Kode Pos', $data['kodepos']),
            new Item ('Nama Pelayanan', $data['no_pel']),
            new Item ('Tanggal', $data['date'])
          );

          #konek ke printer
          $where = $this->session->userdata('id_akun');
          $pr       = $this->Dbwp_model->getw($where,'printer','id_akun');
          $connector = new CupsPrintConnector($pr['nama_printer']);
          $printer = new Printer($connector);
          #set tulisan tengah
          $printer -> setJustification(Printer::JUSTIFY_CENTER);
          #set font kecil
          $printer -> selectPrintMode(Printer::MODE_FONT_B);
          $printer -> setEmphasis(true);
          $printer -> text('PBB-P2 KUTAI TIMUR');
          $printer -> setEmphasis(false);
          $printer -> feed();
          $printer -> setEmphasis(true);
          $printer -> text('Data Wajib Pajak');
          $printer -> setEmphasis(false);
          $printer -> feed();
          $printer -> setJustification(Printer::JUSTIFY_LEFT);
          foreach ($items as $item)
          {
            $printer -> text($item);
          }
          $printer -> feed();
          $printer -> setJustification(Printer::JUSTIFY_CENTER);
          $printer -> text('TERIMAKASIH');
          $printer -> feed();
          $printer -> text('Untuk Info yang belum anda pahami silahkan hubungi pusat pelayanan lanjutan.');
          $printer -> feed(2);
          $printer -> cut();
    
          /* Close printer */
          $printer -> close();
     }
     public function simpan()
     {
        $data           = $this->Dbwp_model->get_last_nolayan();
        $no_l           = $data['0']['maxKode'];
        $no_u           = $no_l + 1;
        $no_t           = (int) substr($no_u, 0, 3);
        $kode_layan     = sprintf("%03s", $no_t);
        $name           = $this->input->post('nama');
        $alamat         = $this->input->post('alamat');
        $phone          = $this->input->post('phone');
        $kota           = $this->input->post('kota');
        $kecamatan      = $this->input->post('kec');
        $kodepos        = $this->input->post('kodepos');
        $no_pel         = $this->input->post('no_pel');
        $date           = date('Y-m-d H:i:s');

        $datas = array
        (
            'no_layan'    => $kode_layan,
            'nama'        => $name,
            'alamat'      => $alamat,
            'nohp'        => $phone,
            'kota'        => $kota,
            'kecamatan'   => $kecamatan,
            'kodepos'     => $kodepos,
            'no_pel'      => $no_pel,
            'date'        => $date
        );

        #output untuk view sesuai dengan kondisi 
        $outputf = "<h1 class='display-3'>Data Kurang Lengkap</h1> <p class='lead'><strong>Silahkan periksa kembali data yang diinput. </p>";
        $buttonf = "<a class='btn btn-primary btn-sm' role='button' href=" . base_url() . "dbwp/tambah" .  "> Pendaftaran Baru</a> <a class='btn btn-primary btn-sm' role='button' href=" . base_url() . "Dashboard" . ">Menu Utama</a>";
        $outputs = "<a class='btn btn-primary btn-sm' role='button' href=" . base_url() . "dbwp/tambah" .  "> Pendaftaran Baru</a> <a class='btn btn-primary btn-sm' role='button' href=" . base_url() . "Dashboard" . ">Menu Utama</a>";
        $buttons = "<h1 class='display-3'>Terima Kasih!</h1> <p class='lead'><strong>Selamat Melayani.</strong> Untuk Info yang belum anda pahami silahkan menghubungi pusat pelayanan lanjutan. </p>";
        
        #cek button yang diklik user berikut aksi sesuai button yang diklik
        if (array_key_exists('cetak',$_POST))
        {
           if(!$this->Dbwp_model->input_data($datas,'data_wp'))
          {
            $data['output'] = $outputf;
            $data['button'] = $buttonf;
          }    
          else
          {
            $this->cetak($datas);
            $data['button'] = $outputs;
            $data['output'] = $buttons;
          }
        }
        if(array_key_exists('simpan', $_POST))
        {
          if(!$this->Dbwp_model->input_data($datas,'data_wp'))
          {
            $data['output'] = $outputf;
            $data['button'] = $buttonf;          }    
          else
          {
            $data['button'] = $outputs;
            $data['output'] = $buttons;
          }

        }
        return $this->load->view('Simpan',$data);

      }
     public function edit($no_layan)
     {
          $where = array('no_layan' => $no_layan);

          #get data wp sesuai id
          $data['datawp']           = $this->Dbwp_model->edit_data($where,'data_wp')->result();
          $data['jenis_pelayanan']  = $this->Dbwp_model->jenis_pelayanan();

          $this->load->view('Editwp',$data); 

     }
     public function update()
     {
        $no_layan   = $this->input->post('no_layan');
        $nama       = $this->input->post('nama');
        $alamat     = $this->input->post('alamat');
        $kota       = $this->input->post('kota');
        $kecamatan  = $this->input->post('kec');
        $kodepos    = $this->input->post('kodepos');
        $nohp       = $this->input->post('phone');
        $no_pel     = $this->input->post('no_pel');
        $date = date('Y-m-d H:i:s');

        #inistialisasi daata yang akan di insert ke database
        $data = array
        (
          'nama'      => $nama,
          'alamat'    => $alamat,
          'kota'      => $kota,
          'kecamatan' => $kecamatan,
          'kodepos'   => $kodepos,
          'nohp'      => $nohp,
          'no_pel'    => $no_pel,
          'date'      => $date
        );

        $outputs = "<h1 class='display-3'>Terima Kasih!</h1> <p class='lead'><strong>Selamat Melayani.</strong> Untuk Info yang belum anda pahami silahkan menghubungi pusat pelayanan lanjutan. </p>";
        $buttons = "<a class='btn btn-primary btn-sm' role='button' href=" . base_url() . "dbwp/tambah" .  "> Pendaftaran Baru</a> <a class='btn btn-primary btn-sm' role='button' href=" . base_url() . "Dashboard" . ">Menu Utama</a>";
        $outputf ="<h1 class='display-3'>Data Kurang Lengkap</h1> <p class='lead'><strong>Silahkan periksa kembali data yang diinput. </p>";
        $buttonf = "<a class='btn btn-primary btn-sm' role='button' href=" . base_url() . "dbwp/tambah" .  "> Pendaftaran Baru</a> <a class='btn btn-primary btn-sm' role='button' href=" . base_url() . "Dashboard" . ">Menu Utama</a> <a class='btn btn-primary btn-sm' href=". base_url() . "dbwp/" . "edit/" . $no_layan . " role='button'>Input Ulang</a>";
        if(array_key_exists('cetak', $_POST))
        {
            $where = array('no_layan' => $no_layan);
            if(!$this->Dbwp_model->update_data($where,$data,'data_wp'))
            {
              $this->cetak($data);
              $data['button'] = $buttons;
              $data['output'] = $outputs;
            }
            else
            {
              $data['output'] = $outputf;
              $data['button'] = $buttonf;
            } 

        }
        if(array_key_exists('simpan', $_POST))
        {
            $where = array('no_layan' => $no_layan);
            if(!$this->Dbwp_model->update_data($where,$data,'data_wp'))
            {
              $data['button'] = $buttons;
              $data['output'] = $outputs;
            }
            else
            {
              $data['output'] = $outputf;
              $data['button'] = $buttonf;
            } 

        }
        return $this->load->view('Simpan',$data);
      }


}
?>