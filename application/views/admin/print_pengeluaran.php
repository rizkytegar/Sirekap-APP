
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <title>Print Data</title>
  <link rel="stylesheet" href="<?php echo base_url('framework/css/bootstrap.min.css');?>">
</head>
<body class="bg-white">


  <div class="container col-lg-8 mx-auto">
<h4 class=" text-center py-3">Laporan Pengeluaran Bulanan</h4>

    <p>


    <table class="table table-bordered">
      <thead>
        <tr>
          <th class="text-center" scope="col-lg-1">No  <?php $i=1; ?></th>
          <th class="text-center" scope="col-lg-3">Tanggal</th>
          <th class="text-center" scope="col-lg-3 ">Keterangan</th>
          <th class="text-center" scope="col-lg-3">Jumlah</th>
          <th class="text-center" scope="col-lg-2">Harga</th>
          <th class="text-center" scope="col-lg-2">Total</th>
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
            <th class="text-center" scope="row"><?php echo $i++ ?></th>
            <td ><?php echo $row['hari']; ?>, <?php echo $row['tanggal']; ?> <?php echo $row['bulan']; ?> <?php echo $row['tahun']; ?></td>
            <td ><?php echo $row['keterangan']; ?></td>
            <td class="text-center"><?php echo $row['jumlah']; ?></td>
            <td ><?php echo rupiah($row['harga']) ;  ?></td>
            <td ><?php echo rupiah($row['total']) ;  ?></td>
          </tr>

        <?php endforeach; ?>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td><?php if(isset($jmh)){echo rupiah($jmh); } ?></td>
        </tr>
      </tbody>

    </table>
<p>Data Bulan <?php echo $row['bulan']; ?> Tahun <?php echo $row['tahun']; ?></p>



  <?php
  function rupiah($angka){
    $hasil_rupiah = "Rp " . number_format($angka, 0, ",", ".",);
    return $hasil_rupiah;

  }
  ?>
<script>
window.print();
</script>
<script src="<?php echo base_url('framework/js/jquery-3.5.1.slim.min.js');?>"></script>
<script src="<?php echo base_url('framework/js/bootstrap.bundle.min.js');?>"></script>
<script src="<?php echo base_url('framework/js/fontawesome.min.js');?>"></script>
</body>
</html>
