
<div class="container py-3">
  <?php echo $this->session->flashdata('pesan')?>
  <div class="jumbotron jumbotron-fluid bg-white shadow-sm">
    <div class="container">
      <h1 class="display-4">Dashboard Sirekap App</h1>
      <p class="lead">Selamat datang di Sirekap App, silahkan pilih menu di bawah.</p>
    </div>
  </div>
   <div class="row pb-5">
       <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
           <!-- Card-->
           <div class="card rounded shadow-sm border-0">
               <div class="card-body p-5 text-center"><i class="fa fa-clipboard-list fa-2x mb-3 text-primary"></i>
                   <h5>Rekap Bulanan</h5>

                   <div class="bg-primary text-center rounded-pill">
                       <a href="<?php echo base_url('admin/rekap_bulanan');?>" class="text-white">Selengkapnya</a>
                   </div>
               </div>
           </div>
       </div>



       <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
           <!-- Card -->
           <div class="card rounded shadow-sm border-0">
               <div class="card-body p-5 text-center"><i class="fa fa-credit-card fa-2x mb-3 text-info"></i>
                   <h5>Pengeluaran</h5>

                   <div class="bg-info text-center rounded-pill">
                       <a href="<?php echo base_url('admin/pengeluaran');?>" class="text-white">Selengkapnya</a>
                   </div>
               </div>
           </div>
       </div>

       <!-- Card -->
       <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
           <div class="card rounded shadow-sm border-0">
               <div class="card-body p-5 text-center"><i class="fa fa-wallet fa-2x mb-3 text-danger"></i>
                   <h5>Anggaran</h5>

                   <div class="bg-danger text-center rounded-pill">
                       <a href="<?php echo base_url('admin/anggaran');?>" class="text-white">Selengkapnya</a>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
           <!-- Card -->
           <div class="card rounded shadow-sm border-0">
               <div class="card-body p-5 text-center"><i class="fa fa-user-circle fa-2x mb-3 text-success"></i>
                   <h5>Profile</h5>

                   <div class="bg-success text-center rounded-pill">
                       <a href="<?php echo base_url('admin/setting');?>" class="text-white">Selengkapnya</a>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>
