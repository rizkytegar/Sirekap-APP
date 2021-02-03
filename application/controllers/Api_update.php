<?php
class Api_update extends CI_controller{
public function update_anggaran(){
$id         = $this->input->post('id_jumlah');
$bulan         = $this->input->post('bulan');
$tahun         = $this->input->post('tahun');
$anggaran         = $this->input->post('anggaran');
$data = array(
'bulan' => $bulan,
'tahun' => $tahun,
'anggaran' => $anggaran
);
$where = array(
  'id_jumlah' => $id
);
$this->Model_api->update_data($where,$data,'jumlah_anggaran');
$this->session->set_flashdata('pesan',
'<div class="alert bg-success text-white alert-dismissible fade show" role="alert">
Anggaran berhasil diubah
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
redirect('admin/anggaran');

}


public function update_pass(){
$id         = $this->input->post('id');
$password         = $this->input->post('password');

$data = array(
'password' => $password,
);
$where = array(
  'id' => $id
);
$this->Model_api->update_data($where,$data,'login');
$this->session->set_flashdata('pesan',
'<div class="alert bg-success text-white alert-dismissible fade show" role="alert">
Password Anda Berhasil Diubah
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');

redirect('admin/setting');

}


public function update_email(){
$id         = $this->input->post('id');
$email         = $this->input->post('email');

$data = array(
'email' => $email,
);
$where = array(
  'id' => $id
);
$this->Model_api->update_data($where,$data,'login');
$this->session->set_flashdata('pesan',
'<div class="alert bg-success text-white alert-dismissible fade show" role="alert">
Email Anda Berhasil Diubah
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');

redirect('admin/setting');

}
public function update_pengeluaran(){
$id         = $this->input->post('id_pengeluaran');
$keterangan         = $this->input->post('keterangan');
$jumlah         = $this->input->post('jumlah');
$harga         = $this->input->post('harga');
$total         = $this->input->post('total');
$hari         = $this->input->post('hari');
$tanggal         = $this->input->post('tanggal');
$id_jumlah         = $this->input->post('id_jumlah');
$data = array(
'keterangan' => $keterangan,
'jumlah' => $jumlah,
'harga' => $harga,
'total' => $total,
'hari' => $hari,
'tanggal' => $tanggal,
'id_jumlah' => $id_jumlah
);
$where = array(
  'id_pengeluaran' => $id
);
$this->Model_api->update_data($where,$data,'pengeluaran');
$this->session->set_flashdata('pesan',
'<div class="alert bg-success text-white alert-dismissible fade show" role="alert">
Pengeluaran berhasil diubah
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
redirect('admin/rekap_bulanan');

}
}
 ?>
