/        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">User</h1>

          <a href="<?= base_url('master/users'); ?>" class="btn btn-light bg-gradient-light border btn-icon-split mb-4 rounded-0">
            <span class="icon text-white">
              <i class="fas fa-chevron-left"></i>
            </span>
            <span class="text">Kembali</span>
          </a>
          <div class="row justify-content-center">
            <form action="" method="POST" class="col-lg-5 col-md-6 col-sm-12 p-0">
              <div class="card">
                <h5 class="card-header">Edit Data User</h5>
                <div class="card-body">
                  <div class="form-group">
                    <label for="u_username" class="col-form-label-lg">Username</label>
                    <input type="text" readonly class="form-control-plaintext form-control-lg" name="u_username" value="<?= $users['username']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="password" class="col-form-label-lg">Ubah Password</label>
                    <input type="password" class="form-control form-control-lg" name="password" id="password">
                    <?= form_error('password', '<small class="text-danger">', '</small>') ?>
                  </div>
                  <button type="submit" class="btn btn-sm btn-primary bg-gradient-primary btn-icon-split mt-4 float-right rounded-0">
                    <span class="icon text-white">
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Simpan</span>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
