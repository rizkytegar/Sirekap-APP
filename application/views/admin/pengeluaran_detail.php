
<div class="container py-3">
<a href="<?php echo base_url('admin/rekap_bulanan')?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
<a href="<?php echo base_url('admin/pengeluaran')?>" class="btn btn-info ml-3"><i class="fa fa-plus"></i> Tambah Pengeluaran</a>

<div class="table-responsive bg-white shadow-sm p-3 mt-3">
  <h3 class="py-3">Tabel Pengeluaran</h3>
  <table class="table">
    <thead>
      <tr>
        <th scope="col-lg-1">No  <?php $i=1; ?></th>
          <th scope="col-lg-4">tanggal</th>
        <th scope="col-lg-4 ">keterangan</th>
        <th scope="col-lg-1">jumlah</th>
            <th scope="col-lg-1">harga</th>
        <th scope="col-lg-2">total</th>
<th scope="col-lg-2">aksi</th>
      </tr>
    </thead>
    <tbody>
<?php $a = 0;?>
<?php foreach ($hasil as $row ) :?>
<?php
 $a++;
 $hargatotal[$a] = $row['total'];
 $jmh = array_sum($hargatotal);
$jum = $row['anggaran'] - array_sum($hargatotal);
 ?>
      <tr>

        <th scope="row">  <?php echo $i++ ?></th>
        <td><?php echo $row['hari']; ?>, <?php echo $row['tanggal']; ?> <?php echo $row['bulan']; ?> <?php echo $row['tahun']; ?></td>
        <td><?php echo $row['keterangan']; ?></td>
        <td><?php echo $row['jumlah']; ?></td>
              <td><?php echo rupiah($row['harga']) ;  ?></td>
        <td><?php echo rupiah($row['total']) ;  ?></td>
<td>  <ul class="list-inline m-0">

    <li class="list-inline-item">
      <a href="<?php echo base_url('admin/edit_pengeluaran/' .$row['id_pengeluaran'])?>" class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit">
        <i class="fa fa-edit"></i></a>
    </li>
    <li class="list-inline-item">
      <a href="<?php echo site_url('api_delete/pengeluaran/' .$row['id_pengeluaran'])?>" class="btn bg-danger btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Delete">
        <i class="fa fa-trash"></i></a>
    </li>
  </ul></td>
        </tr>
<?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <div class="table-responsive bg-white shadow-sm p-3 mt-3">
    <table class="table">
      <thead>
        <tr>
          <th scope="col-lg-1">Jenis Rekap</th>
<th scope="col-lg-1"></th>
          <th scope="col-lg-2">Keterangan Rekap</th>


        </tr>
      </thead>
      <tbody>
        <tr>
        <td><p>Rekap Bulanan</p></td>
          <td><p>:</p></td>
        <td><p><?php  if(isset($row['bulan'])){echo $row['bulan']; }?> <?php  if(isset($row['tahun'])){echo $row['tahun']; }?></p></td>
        </tr>
  <tr>
  <td><p>Anggaran Dipakai</p></td>
    <td><p>:</p></td>
  <td><p><?php if(isset($jmh)){echo rupiah($jmh); } ?></p></td>
  </tr>
  <tr>
  <td><p>Anggaran Bulan <?php  if(isset($row['bulan'])){echo $row['bulan']; }?> </p></td>
  <td><p>:</p></td>
  <td><p><?php  if(isset($row['anggaran'])){echo rupiah($row['anggaran']); }?></p></td>
  </tr>
  <tr>
  <td><p>Sisa Anggaran</p></td>
    <td><p>:</p></td>
  <td><p><?php  if(isset($jum)){echo rupiah($jum);}?></p></td>
  </tr>
        </tbody>
      </table>

    </div>

    <div class="row py-3 ">
      <div class="col-sm-6 ">
        <div class="card border-light shadow-sm bg-success">
          <div class="card-body text-center  text-white">

            <?php
                $an = $row['anggaran'];

               $jumlahku2 = $jmh/$an*100;

               ?>
        <h1> <?php echo $jumlahku2;?> % </h1>
        <p> Anggaran Telah Dipakai</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card border-light shadow-sm bg-primary">
          <div class="card-body text-center text-white">
            <?php
                $an = $row['anggaran'];

               $jumlahku = $jum/$an*100;

               ?>
        <h1> <?php echo $jumlahku;?> % </h1>
        <p> Anggaran Belum Dipakai</p>
          </div>
        </div>
      </div>
    </div>


    <div class="py-3">
      <a href="<?php echo base_url('api_rekap/print/')?><?php  if(isset($row['id_jumlah'])){echo $row['id_jumlah']; }?>" class="btn btn-danger ml-3">
        <i class="fa fa-file-pdf"></i> Rekap</a>

      <a href="<?php echo base_url('api_rekap/print_pengeluaran/')?><?php  if(isset($row['id_jumlah'])){echo $row['id_jumlah']; }?>" class="btn btn-warning ml-3">
        <i class="fa fa-file-pdf"></i> Pengeluaran</a>
    </div>
    </div>

    <?php
    function rupiah($angka){
    	$hasil_rupiah = "Rp " . number_format($angka, 0, ",", ".",);
    	return $hasil_rupiah;

    }
     ?>
