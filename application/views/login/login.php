
  <body id="page-top" class="orange-bg">
  	<nav class="navbar navbar-expand-lg navbar-light py-3 bg-white shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="<?php echo base_url('home');?>"><b><i class="fa fa-pen"></i> SIREKAP APP</b></a>
        <button class="navbar-toggler border-white" type="button" data-toggle="collapse" data-target="#navbarResponsive"
          aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-align-right"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url('home');?>"><i class="fa fa-home"></i> Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a
              href="<?php echo base_url('about')?>" class="nav-link"><i class="fa fa-info-circle"></i> about</a>
            </li>
            <li class="nav-item">
              <a
              href="<?php echo base_url('login')?>" class="nav-link"><i class="fa fa-sign-in-alt"></i> Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

    <div class="container py-5">
    <div class="jumbotron shadow-sm bg-white col-lg-6 mx-auto py-5">
      <h3 class="text-primary text-center"> <i class="fas fa-sign-in-alt"></i> Login  Sirekap APP</h3>

      <form method="post" action="<?php echo base_url('login')?>">
        <?php echo $this->session->flashdata('pesan')?>

    <div class="form-group">
      <label class="text-dark">Email address</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    </div>
    <div class="form-group">
      <label class="text-dark">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1"  required>
    </div>

    <button type="submit" class="btn btn-primary ">Login</button>

  </form>
    </div>
  </div>
  <script src="<?php echo base_url('framework/js/jquery-3.5.1.slim.min.js');?>"></script>
  <script src="<?php echo base_url('framework/js/bootstrap.bundle.min.js');?>"></script>
  <script src="<?php echo base_url('framework/js/fontawesome.min.js');?>"></script>
  </body>
  </html>
