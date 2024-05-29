        <!-- General Element -->
        <?php if ($this->session->flashdata('msg')): ?>
        <div class="alert alert-success" role="alert">
        	<?php echo $this->session->flashdata('msg'); ?>
        </div>
        <?php endif; ?>
        <div class="card mb-4">
        	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        		<h6 class="m-0 font-weight-bold text-primary">Update Data Pegawai</h6>
        	</div>
        	<div class="card-body">
        		<?php foreach ($pegawai as $list) {?>
        		<form action="<?= base_url('pegawai/Pegawai/update')?>" method="POST">
        			<input type="hidden" name="id" value="<?php echo $list->id?>" />
					<div class="form-group">
						<label for="exampleFormControlInput1">NIP</label> <?= form_error('nip');?>
						<input type="text" name="nip" class="form-control" id="exampleFormControlInput1"
							placeholder="NIP pegawai" value="<?= $list->nip ?>">
					</div>

        			<div class="form-group">
        				<label for="exampleFormControlInput1">Nama Pegawai</label> <?= form_error('nama');?>
        				<input type="text" name="nama" class="form-control" id="exampleFormControlInput1"
        					placeholder="Nama panjang pegawai" value="<?= $list->nama ?>">
        			</div>
					
					<div class="form-group">
        				<label for="exampleFormControlInput1">Kota</label> <?= form_error('kota');?>
        				<input type="text" name="kota" class="form-control" id="exampleFormControlInput1"
        					placeholder="Kota pegawai" value="<?= $list->kota ?>">
        			</div>
					
					<div class="form-group">
        				<label for="exampleFormControlInput1">Gaji</label> <?= form_error('gaji');?>
        				<input type="text" name="gaji" class="form-control" id="exampleFormControlInput1"
        					placeholder="Gaji pegawai" value="<?= $list->gaji ?>">
        			</div>

					<div class="form-group">
                    <label for="exampleFormControlInput1">Jabatan</label> <?= form_error('Jabatan')?>
                            <select class="form-control" name="jabatan" required
                            oninvalid="this.setCustomValidity('Jabatan tidak boleh kosong')" oninput="setCustomValidity('')">
                                <option selected value="">-- Pilih jabatan --</option>
                                <?php foreach ($jabatan as $list) {  
                                    echo "<option value='".$list->id."'>".$list->jabatan."</option>";
                                }?>
                            </select>
                    </div>

                    <div class="form-group">
                    <label for="exampleFormControlInput1">Kontrak/Bulan</label> <?= form_error('kontrak')?>
                            <select class="form-control" name="kontrak" required
                            oninvalid="this.setCustomValidity('Kontrak tidak boleh kosong')" oninput="setCustomValidity('')">
                                <option selected value="">-- Pilih kontrak --</option>
                                <?php foreach ($kontrak as $list) {  
                                    echo "<option value='".$list->id."'>".$list->kontrak."</option>";
                                }?>
                            </select>
                    </div>

        			
        			<?php }?>
        			<!-- <button type="submit" class="btn btn-primary">Submit</button> -->
        			<div class="form-group row">
        				<div class="col-sm-10">
        					<button type="submit" class="btn btn-primary" value="submit">Simpan</button>
        					<a href="<?= site_url('pegawai/Pegawai')?>" class="btn btn-danger">Batal</a>
        				</div>
        			</div>
        		</form>
        	</div>
        </div>