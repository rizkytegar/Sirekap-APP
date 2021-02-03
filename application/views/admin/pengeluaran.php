
<div class="container py-3">

  <div class="p-5 bg-white shadow-sm mb-5">
    <?php echo $this->session->flashdata('pesan')?>
    <ul id="myTab" role="tablist" class="nav nav-tabs nav-pills flex-column flex-sm-row text-center bg-light border-0 rounded-nav">
      <li class="nav-item flex-sm-fill">
        <a id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="one" aria-selected="false"
        class="nav-link border-0 text-uppercase font-weight-bold active">  <i class="fa fa-credit-card  mr-2"></i>pengeluaran terbaru</a>
      </li>

      <li class="nav-item flex-sm-fill">
        <a id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"
        class="nav-link border-0 text-uppercase font-weight-bold">  <i class="fa fa-plus  mr-2"></i> tambah pengeluaran</a>
      </li>

    </ul>
    <div id="myTabContent" class="tab-content">
      <div id="one" role="tabpanel" aria-labelledby="one-tab" class="tab-pane fade px-4 py-5 show active">
<p>Data Pengeluaran Terbaru :</p>
                        <div class="table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th scope="col-lg-1">No  <?php $i=1; ?></th>
                                <th scope="col-lg-4">keterangan</th>
                                <th scope="col-lg-1">jumlah</th>
                                    <th scope="col-lg-1">harga</th>
                                <th scope="col-lg-2">total</th>
                              </tr>
                            </thead>
                            <tbody>

                              <?php
                								$this->db->order_by('id_pengeluaran', 'DESC');
                								$query = $this->db->get('pengeluaran', 10);
                								foreach ($query->result() as $row):


                							?>

                              <tr>
                                <th scope="row">  <?php echo $i++ ?></th>
                                <td><?php echo $row->keterangan; ?></td>
                                <td><?php echo $row->jumlah; ?></td>
                                <td><?php echo rupiah($row->harga); ?></td>
                                <td><?php echo rupiah($row->total);  ?></td>

                                </tr>
                          <?php endforeach; ?>
                              </tbody>
                            </table>
                            <p>Lihat Rekap Untuk Menampilkan Data Lebih Banyak</p>
<a href="<?php echo base_url('admin/rekap_bulanan')?>" class="btn btn-primary"><i class="fa fa-eye"></i> Lihat Rekap</a>
                        </div>

        </div>

        <div id="profile" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade px-4 py-5">
          <form action="<?php echo base_url('api_simpan/simpan_pengeluaran')?>" method="POST">

            <div class="row ">

              <div class=" bg-white col-lg-6 mx-auto ">
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <input type="text" class="form-control" id="keterangan" name="keterangan">

                </div>
                <div class="form-group">
                  <label for="jumlah">Jumlah</label>
                  <input type="text" class="form-control" onkeypress="return hanyaAngka(event)"  name="jumlah" id="jumlah">
<small class="text-dark">Hanya boleh input angka</small>
                </div>
                <div class="form-group">
                  <label for="">Harga</label>
                  <input type="text" class="form-control" name="harga" onkeypress="return hanyaAngka(event)" id="harga">
                  <small class="text-dark">Hanya boleh input angka</small>
                </div>
                <div class="form-group">
                  <label for="">Total</label>
                  <input type="text" onkeypress="return hanyaAngka(event)" name="total" class="form-control" id="total">
                  <small class="text-dark">Hanya boleh input angka</small>
                </div>
              </div>

              <div class=" bg-white col-lg-6 mx-auto ">
                <div class="form-group">
                  <label for="keterangan">Hari</label>
                  <select class="form-control" name="hari" id="hari">
                    <?php
                    $hari = [
                      ["hari" => "Senin",], ["hari" => "Selasa",], ["hari" => "Rabu",], ["hari" => "Kamis",], ["hari" => "Jumat",], ["hari" => "Sabtu",], ["hari" => "Minggu",]

                    ];

                    // menampilkan array
                    foreach($hari as $har){
                      echo "<option value='$har[hari]'>$har[hari]</option>";
                    }

                    ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="tanggal">Tanggal</label>
                  <select class="form-control" name="tanggal" id="tanggal">
                    <?php
                    $now=31;

                    for ($a=1;$a<=$now;$a++)
                    {
                      echo "<option value='$a'>$a</option>";
                    }
                    ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="keterangan">Bulan Dan Tahun Anggaran</label>
                  <select class="form-control" name="id_jumlah" id="id_jumlah">
                    <?php  foreach ($pengeluaran as $ang) : ?>
                      <option value='<?php echo $ang->id_jumlah ?>'><?php echo $ang->bulan ?> <?php echo $ang->tahun ?></option>
                    <?php endforeach;?>
                  </select>
                  <small class="text-dark">Tambah anggaran baru di menu anggaran, klik <a href="<?php echo base_url('admin/anggaran')?>">Disini</a></small>
                </div>
              </div>


            </div>
            <div class="col-lg-112 mx-auto">
              <button class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
            </div>
          </form>
        </div>

      </div>

    </div>
  </div>

  <script>
  function hanyaAngka(event) {
    var angka = (event.which) ? event.which : event.keyCode
    if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
    return false;
    return true;
  }
  </script>
  <?php
  function rupiah($angka){
    $hasil_rupiah = "Rp " . number_format($angka, 0, ",", ".",);
    return $hasil_rupiah;

  }
   ?>
