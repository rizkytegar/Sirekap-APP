<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __construct(){
    parent::__construct();
    if($this->session->userdata('roling') != '1'){
      $this->session->set_flashdata('pesan',
      '<div class="alert bg-danger text-white alert-dismissible fade show" role="alert">
        Maaf Anda belum Login
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
        redirect('login');
    }
  }

	public function index()
	{
    redirect('admin/dashboard');
	}
  public function dashboard()
  {
      $this->load->view('admin/header');
        $this->load->view('admin/nav');
        $this->load->view('admin/dashboard');
    $this->load->view('footer');
  }


public function tahun(){
  $this->load->view('admin/header');
  $this->load->view('admin/nav');
  $this->load->view('admin/tahun');
  $this->load->view('footer');
}
  public function anggaran()
  {

    $this->db->order_by('id_jumlah','DESC');
    $anggaran['anggaran'] = $this->Model_api->tampil_anggaran()->result();
      $this->load->view('admin/header');
        $this->load->view('admin/nav');
        $this->load->view('admin/anggaran',$anggaran);
    $this->load->view('footer');
  }

  public function edit_anggaran($id)
  {
      $where = array ('id_jumlah' => $id);
      $data['anggaran'] = $this->Model_api->edit_anggaran($where, 'jumlah_anggaran') ->result();
      $this->load->view('admin/header');
        $this->load->view('admin/nav');
        $this->load->view('admin/edit_anggaran',$data);
    $this->load->view('footer');
  }public function edit_pengeluaran($id)
  {

      $where = array ('id_pengeluaran' => $id);
      $data['keluar'] = $this->Model_api->edit_pengeluaran($where, 'pengeluaran') ->result();
      $this->load->view('admin/header');
        $this->load->view('admin/nav');
        $this->load->view('admin/edit_pengeluaran',$data);
    $this->load->view('footer');
  }


  public function setting()
  {

    $login['login'] = $this->Model_auth->tampil_user()->result();
      $this->load->view('admin/header');
        $this->load->view('admin/nav');
        $this->load->view('admin/setting',$login);
    $this->load->view('footer');
  }

  public function pengeluaran()
  {

    $this->db->order_by('id_jumlah', 'DESC');
    $peng['pengeluaran'] = $this->Model_api->tampil_anggaran()->result();
      $this->load->view('admin/header');
        $this->load->view('admin/nav');
        $this->load->view('admin/pengeluaran',$peng);
    $this->load->view('footer');
  }
  public function rekap_bulanan()
  {

    $this->db->order_by('id_jumlah', 'DESC');
    $anggaran['anggaran'] = $this->Model_api->tampil_anggaran()->result();
      $this->load->view('admin/header');
        $this->load->view('admin/nav');
        $this->load->view('admin/rekap_bulanan',$anggaran);
    $this->load->view('footer');
  }
  public function pengeluaran_detail($id_jumlah) {

        $data['hasil']=$this->Model_api->tampil_detail($id_jumlah);

      $this->load->view('admin/header');
      $this->load->view('admin/nav');
      $this->load->view('admin/pengeluaran_detail', $data);
      $this->load->view('footer');
  }

}
