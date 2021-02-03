
  <body id="page-top" class="bg-light">
  	<nav class="navbar navbar-expand-lg navbar-light py-3 bg-white static-top shadow-sm">
      <div class="container">
            <a class="navbar-brand" href="<?php echo base_url('admin');?>"><b><i class="fa fa-pen"></i> SIREKAP APP</b></a>
        <button class="navbar-toggler border-white" type="button" data-toggle="collapse" data-target="#navbarResponsive"
          aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-align-right"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url('admin');?>"><i class="fa fa-tachometer-alt"></i> Dashboard
                <span class="sr-only">(current)</span>
              </a>
            </li>


            <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url('admin/rekap_bulanan');?>"><i class="fa fa-clipboard-list"></i> Rekap Bulanan</a>
            </li>
            <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-money-bill-alt"></i> Keuangan
            </a>
            <div class="dropdown-menu dropdown-menu-right text-left p-2" aria-labelledby="navbarDropdownPortfolio">
                <a class="nav-link" href="<?php echo base_url('admin/pengeluaran');?>"><i class="fas fa-credit-card "></i> Pengeluaran</a>
                <a class="nav-link" href="<?php echo base_url('admin/anggaran');?>"><i class="fas fa-wallet"></i> Anggaran</a>
            </div>

          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user-circle fa-lg text-dark"></i> Admin
          </a>
          <div class="dropdown-menu dropdown-menu-right text-center" aria-labelledby="navbarDropdownPortfolio">
            <a class="nav-link"
            href="<?php echo base_url('admin/setting');?>"><i class="fa fa-user"></i> Profile</a>
            <a class="nav-link" data-toggle="modal" data-target="#exampleModal"
            href="#"><i class="fa fa-sign-out-alt"></i> Keluar</a>
          </div>
        </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin Ingin Keluar ?</h5>
        </div>

        <div class="modal-footer text-center">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
          <a href="<?php echo base_url('logout/id');?>" class="btn btn-primary">Keluar</a>
        </div>
      </div>
    </div>
  </div>
