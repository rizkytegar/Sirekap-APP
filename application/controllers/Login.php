<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('roling') == '1'){
			$this->session->set_flashdata('pesan',
			'<div class="alert bg-success text-white alert-dismissible fade show" role="alert">
			Anda Berhasil Login
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>');
				redirect('admin/dashboard');
		}
	}

	public function index()
	{

		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		if ($this->form_validation->run() == FALSE)
		{
					$this->load->view('login/header');
						
		$this->load->view('login/login');

	}else{
$auth = $this->Model_auth->cek_login();

if($auth == FALSE){
	$this->session->set_flashdata('pesan','<div class="alert bg-danger text-white alert-dismissible fade show" role="alert">
		Maaf Email Atau Password Anda Salah
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
		redirect('login');
}else{
	$this->session->set_userdata('email',$auth->email);
		$this->session->set_userdata('roling',$auth->roling);
		$this->session->set_flashdata('pesan',
		'<div class="alert bg-success text-white alert-dismissible fade show" role="alert">
		Anda Berhasil Login
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>');
	redirect('admin/dashboard');
}
	}

	}
}
