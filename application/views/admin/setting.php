
<div class="container py-3">
  <?php echo $this->session->flashdata('pesan')?>

        <div class="row">
            <div class="col-md-3">
                <!-- Tabs nav -->
                <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link mb-3 p-3 active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        <i class="fa fa-user-circle mr-2"></i>
                        <span class="font-weight-bold small text-uppercase"> Profile</span></a>

                    <a class="nav-link mb-3 p-3 " id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        <i class="fa fa-lock mr-2"></i>
                        <span class="font-weight-bold small text-uppercase"> Change Password</span></a>

                    <a class="nav-link mb-3 p-3 " id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <i class="fa fa-envelope mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Change Email</span></a>


                    </div>
            </div>


            <div class="col-md-9">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade shadow-sm rounded bg-white show active p-5" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
  <h4 class="font-italic mb-4"><i class="fa fa-user-circle"></i> Profile Admin</h4>
                      <table class="table">
                        <thead>
                                  <?php foreach ($login as $ang) : ?>
                          <tr>

                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>

                          </tr>
                        </thead>
                        <tbody>
                          <tr>

                            <td> <?php echo $ang->nama ?></td>
                            <td> <?php echo $ang->email ?></td>

                          </tr>

                        </tbody>
                            <?php endforeach;?>
                      </table>
                    </div>

                    <div class="tab-pane fade shadow-sm rounded bg-white p-5" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <h4 class="font-italic mb-4">
                          <i class="fa fa-lock"></i> Change Password
                        </h4>
                        <p class="bg-warning p-3">Jika mengganti password anda tidak perlu login ulang</p>
                        <form method="post" action="<?php echo base_url('api_update/update_pass')?>">
                          <div class="form-group">
                            <label for="jumlah">Password Anda</label>
                            <input type="hidden" name="id" value="<?php echo $ang->id ?>">
                            <input type="text" value="<?php echo $ang->password ?>" class="form-control" id="jumlah" name="password" required>

                          </div>
  <button type="submit" class="btn btn-primary"><i class="fa fa-save text-white"></i> Simpan</button>
                        </form>
                    </div>

                    <div class="tab-pane fade shadow-sm rounded bg-white p-5" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                      <h4 class="font-italic mb-4">
                        <i class="fa fa-envelope"></i> Change Email
                      </h4>
                      <p class="bg-warning p-3">Jika mengganti Email anda tidak perlu login ulang</p>
                      <form method="post" action="<?php echo base_url('api_update/update_email')?>">
                        <div class="form-group">
                          <label for="jumlah">Password Anda</label>
                          <input type="hidden" name="id" value="<?php echo $ang->id ?>">
                          <input type="email" value="<?php echo $ang->email ?>" class="form-control" id="jumlah" name="email" required>

                        </div>
  <button type="submit" class="btn btn-primary"><i class="fa fa-save text-white"></i> Simpan</button>
                      </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
