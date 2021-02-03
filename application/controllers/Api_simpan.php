<?php

class Api_simpan extends CI_Controller
{
public function simpan_anggaran() {
      if (isset($_POST['anggaran'])) {
          $post_data = $_POST;
          $result = $this->db->insert('jumlah_anggaran', $post_data);
          if ($result) {
            $this->session->set_flashdata('pesan',
            '<div class="alert bg-success text-white alert-dismissible fade show" role="alert">
            Anggaran berhasil disimpan
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
          } else {
            $this->session->set_flashdata('pesan',
            '<div class="alert bg-danger text-white alert-dismissible fade show" role="alert">
            Anggaran Gagal Disimpan
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
          }

          redirect('admin/anggaran');
      }
  }

public function simpan_pengeluaran(){
  if (isset($_POST['keterangan'])) {
      $post_data = $_POST;
      $result = $this->db->insert('pengeluaran', $post_data);
      if ($result) {
        $this->session->set_flashdata('pesan',
        '<div class="alert bg-success text-white alert-dismissible fade show" role="alert">
        Pengeluaran berhasil disimpan
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      } else {
        $this->session->set_flashdata('pesan',
        '<div class="alert bg-danger text-white alert-dismissible fade show" role="alert">
        Pengeluaran Gagal Disimpan
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
      }

      redirect('admin/pengeluaran');
  }

}

}

 ?>
