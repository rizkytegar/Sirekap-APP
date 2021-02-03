
<div class="container py-3">
        <div class="col-md-9 mx-auto">

            <div class=" bg-white rounded p-5" >
              <div class="alert  mb-3" role="alert">
                        <h2 class="text-dark mb-3"><i class="fa fa-edit text-dark"></i> Catatan</h2>

              </div>
<?php foreach ($anggaran as $ang) : ?>
              <form method="post" action="<?php echo base_url('api_update/update_anggaran')?>">
                <div class="form-group">
                  <label for="jumlah">Anggaran Bulanan</label>
                  <input type="hidden" name="id_jumlah" value="<?php echo $ang->id_jumlah ?>">
                  <input type="text" value="<?php echo $ang->anggaran ?>"onkeypress="return hanyaAngka(event)" class="form-control" id="jumlah" name="anggaran" required>
<small class="text-danger">Hanya boleh input angka, tidak boleh menggunakan tanda baca apapun</small>
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
                    for ($a=2015;$a<=$now;$a++)
                    {
                      echo "<option value='$a'>$a</option>";
                    }
                    ?>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save text-white"></i> Simpan</button>
                <a href="<?php echo base_url('admin/anggaran');?>" class="btn btn-warning"><i class="fa fa-arrow-left text-dark"></i> Kembali</a>
              </form>
    <?php endforeach;?>


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
