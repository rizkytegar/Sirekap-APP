<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_delete extends CI_Controller {
  public function anggaran($id_jumlah) {

        if ($id_jumlah != '') {
            $this->db->where('id_jumlah', $id_jumlah);
            $result = $this->db->delete('jumlah_anggaran');
            if ($result) {
              $this->session->set_flashdata('pesan',
              '<div class="alert bg-success text-white alert-dismissible fade show" role="alert">
              Data Berhasil Dihapus
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>');
                  redirect('admin/anggaran');
            } else {
              $this->session->set_flashdata('pesan',
              '<div class="alert bg-danger text-white alert-dismissible fade show" role="alert">
              Data gagal Berhasil Dihapus
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>');

            redirect('admin/anggaran');

        }
          redirect('admin/anggaran');
    }

}  public function pengeluaran($id_pengeluaran) {

        if ($id_pengeluaran != '') {
            $this->db->where('id_pengeluaran', $id_pengeluaran);
            $result = $this->db->delete('pengeluaran');
            if ($result) {
              $this->session->set_flashdata('pesan',
              '<div class="alert bg-success text-white alert-dismissible fade show" role="alert">
              Pengeluaran Berhasil Dihapus
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>');
                  redirect('admin/rekap_bulanan');
            } else {
              $this->session->set_flashdata('pesan',
              '<div class="alert bg-danger text-white alert-dismissible fade show" role="alert">
              Pengeluaran gagal Berhasil Dihapus
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>');

            redirect('admin/rekap_bulanan');

        }
          redirect('admin/rekap_bulanan');
    }

}

}
