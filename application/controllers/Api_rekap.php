<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_rekap extends CI_Controller {
	public function print($id_jumlah)
	{
    $data['hasil']=$this->Model_api->tampil_detail($id_jumlah);
    $this->load->view('admin/print', $data);


	}

	public function print_pengeluaran($id_jumlah)
	{
    $data['hasil']=$this->Model_api->tampil_detail($id_jumlah);
    $this->load->view('admin/print_pengeluaran', $data);


	}
}
