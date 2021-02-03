
<div class="container py-3">
        <div class="col-md-9 mx-auto">

            <div class=" bg-white rounded p-5" >
              <div class="alert  mb-3" role="alert">
                        <h2 class="text-dark mb-3"><i class="fa fa-edit text-dark"></i> Tahun</h2>

              </div>
<?php foreach ($tahun as $ang) : ?>
              <form method="post" action="<?php echo base_url('api_update/update_tahun')?>">
                <div class="form-group">
                  <label for="jumlah">Anggaran Bulanan</label>
                
                  <input type="text" value="<?php echo $ang->tahun ?>" class="form-control"  name="tahun" required>

                </div>

                <button type="submit" class="btn btn-primary"><i class="fa fa-save text-white"></i> Simpan</button>
                <a href="<?php echo base_url('admin/tahun');?>" class="btn btn-warning"><i class="fa fa-arrow-left text-dark"></i> Kembali</a>
              </form>
    <?php endforeach;?>


</div>
          </div>
        </div>
