<div class="container py-3">
  <div class="py-3">
  <h3><i class="fa fa-clipboard-list"></i> REKAP BULANAN</h3>
      <?php echo $this->session->flashdata('pesan')?>
  <a href="<?php echo base_url('admin/anggaran')?>"class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Anggaran</i></a>
</div>
<div class="bg-white p-3 shadow-sm">
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Bulan</th>
          <th scope="col">Tahun</th>
          <th scope="col">Anggaran</th>
          <th class="text-center" scope="col">Tampilkan</th>
        </tr>
      </thead>
      <tbody>
          <?php $i=1; foreach ($anggaran as $ang) : ?>
        <tr>
          <th scope="row">  <?php echo $i++ ?></th>
          <td><?php echo $ang->bulan ?></td>
          <td><?php echo $ang->tahun ?></td>
          <td ><?php echo "Rp " . number_format("$ang->anggaran", 0, ",", ".");  ?></td>
          <td class="text-center">

            <ul class="list-inline m-0">

            <li class="list-inline-item">
              <a href="<?php echo base_url('admin/pengeluaran_detail/'.$ang->id_jumlah )?>" class="btn btn-success btn-sm rounded-0"
                type="button" data-toggle="tooltip" data-placement="top" title="Tampilkan">
                <i class="fa fa-eye" title="Tampilkan"></i></a>
              </li>

            </ul></td>
          </tr>
            <?php endforeach;?>
        </tbody>
      </table>
    </div>
</div>
</div>
