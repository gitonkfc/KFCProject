<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tambah extends MY_Controller
{
    function __construct()
    {
        Parent::__construct();
        $this->load->model("Tambah_model");
    }
     public function index()
     {
        if($this->session->userdata('level')=='manager')
        {
            $data['jenis_pelayanan'] = $this->Tambah_model->jenis_pelayanan();
            $this->load->view('Tambah',$data);
        }
        elseif($this->session->userdata('level')=='karyawan')
        {
            $this->load->view('Dashboard');
        }
        else
        {
            $this->load->view('Login');
        }

     }

     public function simpan()
     {
        $data = $this->Tambah_model->get_last_nolayan();
        $no_l = $data['0']['maxKode'];
        $no_u = (int) substr($no_l, 0, 3);
        $no_u++;
        $kode_layan = sprintf("%03s", $no_u);
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
        $error = 'Data yang ada masukkan kurang sesuai';
        try{

    $this->Tambah_model->input_data($data,'data_wp');
        $this->load->view('Simpan');

}catch(Exception $e){

       // this is what you show to user
      log_message('error',$e->getMessage());

      // redirect somewhere
      redirect('Tambah');
}
     }

}