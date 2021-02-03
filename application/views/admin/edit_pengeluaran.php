<div class="container py-3">
  <form action="<?php echo base_url('api_update/update_pengeluaran')?>" method="POST">
<h3 class="py-3"><i class="fa fa-edit"></i> Edit Pengeluaran</h3>
    <div class="row">
<?php foreach ($keluar as $ang) : ?>
      <div class=" bg-white col-lg-6 mx-auto p-3 ">
        <div class="form-group">
          <label for="keterangan">Keterangan</label>
          <input type="text" value="<?php echo $ang->keterangan ?>" class="form-control" id="keterangan" name="keterangan">

        </div>
        <div class="form-group">
          <label for="jumlah">Jumlah</label>
          <input type="text" value="<?php echo $ang->jumlah ?>" class="form-control" onkeypress="return hanyaAngka(event)"  name="jumlah" id="jumlah">
  <small class="text-dark">Hanya boleh input angka</small>
        </div>
        <div class="form-group">
          <label for="">Harga</label>
          <input type="text" value="<?php echo $ang->harga ?>" class="form-control" name="harga" onkeypress="return hanyaAngka(event)" id="harga">
          <small class="text-dark">Hanya boleh input angka</small>
        </div>
        <div class="form-group">
          <label for="">Total</label>
          <input type="text" value="<?php echo $ang->total ?>" onkeypress="return hanyaAngka(event)" name="total" class="form-control" id="total">
          <small class="text-dark">Hanya boleh input angka</small>
        </div>
      </div>
<?php endforeach;?>
      <div class=" bg-white col-lg-6 mx-auto p-3">
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
                  <input type="hidden" name="id_pengeluaran" value="<?php echo $ang->id_pengeluaran ?>">
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
            <?php
              $this->db->order_by('id_jumlah', 'DESC');
              $query = $this->db->get('jumlah_anggaran');
              foreach ($query->result() as $ang):
            ?>
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
