        <!-- General Element -->
        <?php if ($this->session->flashdata('msg')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('msg'); ?>
				</div>
				<?php endif; ?>
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tambah kontrak/bulan</h6>
                </div>
                <div class="card-body">
                  <form action="<?= base_url('pegawai/Kontrak/tambah_aksi')?>" method="POST">
                    <div class="form-group">                      
                      <label for="exampleFormControlInput1">Kontrak</label> <?= form_error('kontrak');?> 
                      <input type="numeric" name="kontrak" class="form-control" id="exampleFormControlInput1"
                        placeholder="kontrak/bulan" value="<?php echo set_value('kontrak'); ?>">
                    </div>

                    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                    <div class="form-group row">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary" value="submit">Simpan</button>
                        <a href="<?= site_url('pegawan/Pegawai')?>" class="btn btn-danger">Batal</a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>