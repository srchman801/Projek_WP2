        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Departemen</h1>

          <a href="<?= base_url('master'); ?>" class="btn btn-sm btn-default bg-gradient-light border rouned-0 btn-icon-split mb-4">
            <span class="icon text-white">
              <i class="fas fa-chevron-left"></i>
            </span>
            <span class="text">Kembali</span>
          </a>
          <div class="row justify-content-center">
            <form action="" method="POST" class="col-lg-5 col-md-6 col-sm-12  p-0">
              <div class="card rounded-0">
                <h5 class="card-header">Edit Departemen</h5>
                <div class="card-body">
                    <?= $this->session->flashdata('message') ?>
                  <div class="form-group">
                    <label for="department_id" class="col-form-label-lg">ID Departemen</label>
                    <input type="text" readonly class="form-control-plaintext form-control-lg" name="d_id" value="<?= $d_old['id']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="d_name" class="col-form-label-lg">Nama Departemen</label>
                    <input type="text" class="form-control form-control-lg" name="d_name" id="d_name" value="<?= $d_old['name']; ?>">
                    <?= form_error('d_name', '<small class="text-danger">', '</small>') ?>
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
