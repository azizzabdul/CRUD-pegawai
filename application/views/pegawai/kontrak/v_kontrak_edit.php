        <!-- General Element -->
        <?php if ($this->session->flashdata('msg')): ?>
        <div class="alert alert-success" role="alert">
        	<?php echo $this->session->flashdata('msg'); ?>
        </div>
        <?php endif; ?>
        <div class="card mb-4">
        	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        		<h6 class="m-0 font-weight-bold text-primary">Update Data kontrak</h6>
        	</div>
        	<div class="card-body">
        		<?php foreach ($kontrak as $list) {?>
        		<form action="<?= base_url('pegawai/Kontrak/update')?>" method="POST">
        			<input type="hidden" name="id" value="<?php echo $list->id?>" />
        			<div class="form-group">
        				<label for="exampleFormControlInput1">kontrak</label> <?= form_error('kontrak');?>
        				<input type="text" name="kontrak" class="form-control" id="exampleFormControlInput1"
        					placeholder="kontrak" value="<?= $list->kontrak ?>">
        			</div>

        			<?php }?>
        			<!-- <button type="submit" class="btn btn-primary">Submit</button> -->
        			<div class="form-group row">
        				<div class="col-sm-10">
        					<button type="submit" class="btn btn-primary" value="submit">Simpan</button>
        					<a href="<?= site_url('pegawai/kontrak')?>" class="btn btn-danger">Batal</a>
        				</div>
        			</div>
        		</form>
        	</div>
        </div>