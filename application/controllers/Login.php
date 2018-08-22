<?php
class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
	}

	function index()
	{
		$sess_id = $this->session->userdata('nama_u');
		if(!empty($sess_id))
		{
			redirect(site_url().'Dashboard');

   		}
   		else
   		{
        	$this->load->view('Login');        
   		}   
	}


	public function auth()
	{
		$username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
		$password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
		#cek data login dengan database
		$cek_login=$this->Login_model->auth($username,$password);
		if($cek_login->num_rows() > 0)
			{ 
				$data=$cek_login->row_array();
				#set session
				$this->session->sess_expiration = '1800';
				$this->session->set_userdata('level',$data['level']);
				$this->session->set_userdata('nama_u',$data['nama_depan']);
				$this->session->set_userdata('id_akun',$data['id_akun']);
				redirect('Dashboard');
			} 
		else 
			{ 
                $url=base_url();
                #alert karena input tidak sesuai
                echo $this->session->set_flashdata('msg','<div class="logins alert alert-danger"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> <span><strong>Pemberitahuan: </strong> Data yang anda masukan salah.</span> </div>');
                redirect($url);
            }
    }

	function logout()
	{
		#menghapus session ketika logout
		$this->session->sess_destroy();
		$url=base_url('');
		redirect($url);
	}
}