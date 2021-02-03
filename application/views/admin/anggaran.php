
<div class="container py-3">

  <div class="row">
    <div class="col-md-3">

      <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link mb-3 p-3  active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
          <i class="fa fa-wallet mr-2"></i>
          <span class="font-weight-bold small text-uppercase"> Anggaran</span></a>
          <a class="nav-link mb-3 p-3 " id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
            <i class="fa fa-plus mr-2"></i>
            <span class="font-weight-bold small text-uppercase"> Tambah Anggaran</span></a>

          </div>
        </div>


        <div class="col-md-9">
          <!-- Tabs content -->
          <div class="tab-content" id="v-pills-tabContent">

            <div class="tab-pane fade show bg-white active p-5" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
    <?php echo $this->session->flashdata('pesan')?>

                <h4 class="alert-heading text-dark mb-3"><i class="fa fa-wallet text-dark"></i> Anggaran</h4>
                <p>Ini adalah total anggaran bulanan yang akan di pakai untuk setiap bulanya. untuk menambahkan silahkan tambahkan melalui halaman tambah anggaran.</p>



                <div class="table-responsive">

                  <table class="table m-0">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Bulan</th>
                        <th scope="col">Tahun</th>
                        <th scope="col">Anggaran Bulanan</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; foreach ($anggaran as $ang) : ?>

                      <tr>
                        <th scope="row"> <?php echo $i++ ?></th>
                        <td>  <?php echo $ang->bulan ?></td>
                        <td> <?php echo $ang->tahun ?></td>
                        <td> <?php echo "Rp " . number_format("$ang->anggaran", 0, ",", ".");  ?></td>
                        <td>

                          <ul class="list-inline m-0">

                            <li class="list-inline-item">
                              <a href="<?php echo base_url('admin/edit_anggaran/' .$ang->id_jumlah)?>" class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="fa fa-edit"></i></a>
                            </li>
                            <li class="list-inline-item">
                              <a href="<?php echo site_url('api_delete/anggaran/' .$ang->id_jumlah)?>" class="btn bg-danger btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="fa fa-trash"></i></a>
                            </li>
                          </ul>
                        </td>
                      </tr>


              <?php endforeach;?>
                </tbody>
                  </table>

                </div>

            </div>


            <div class="tab-pane fade  bg-white rounded p-5" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

                        <h4 class="alert-heading text-dark mb-3"><i class="fa fa-plus text-dark"></i> Tambah Anggaran</h4>
                <p>Hanya bisa menginput satu anggaran untuk 1 bulan. Anggaran akan di tampilkan pada halaman anggaran.</p>



              <form method="post" action="<?php echo base_url('api_simpan/simpan_anggaran')?>">
                <div class="form-group">
                  <label for="jumlah">Anggaran Bulanan</label>
                  <input type="text" onkeypress="return hanyaAngka(event)" class="form-control" id="jumlah" name="anggaran" required>
<small class="text-dark">Hanya boleh input angka, tidak boleh menggunakan tanda baca apapun</small>
                </div>
                <div class="form-group">
                  <label for="bulan">Bulan</label>
                  <select class="form-control" name="bulan" id="bulan">

  <?php
  $bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
  $jlh_bln=count($bulan);
  for($c=0; $c<$jlh_bln; $c+=1){
      echo"<option value=$bulan[$c]> $bulan[$c] </option>";
  }
  ?>
  </select>
                  </select>
                </div>
                <div class="form-group">
                  <label for="tahun">Tahun</label>
                  <select class="form-control" name="tahun" id="tahun">
<?php
$now=date('Y');
for ($a=2019;$a<=$now;$a++){
  echo "<option value='$a'>$a</option>";
}
 ?>
                </select>

                </div>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save text-white"></i> Simpan</button>
              </form>



</div>
          </div>
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
