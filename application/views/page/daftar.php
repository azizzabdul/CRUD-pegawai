<section id="atas" class="clearfix">
	<div class="container wow fadeInUp">
		<img src="<?= base_url('assets/user/')?>img/tagline.png" class="img-fluid" alt="Responsive Image"
			style=" margin-top:-90px;">

		<img src="<?= base_url('assets/user/')?>img/GO_SMART.png" class="img-fluid" alt="Responsive Image"
			style="margin-bottom: -230px; margin-left:140px;" width="20%">
	</div>
</section>
<br><br>
<br><br>

<div class="container" style="margin-top:100px">
	<?php if ($this->session->flashdata('msg')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('msg'); ?>
        </div>
	<?php endif; ?>
	<section class="get-in-touch">
		<h1 class="title">Pedaftaran Siswa GoSmart</h1>
		<form class="contact-form rows" action="<?= base_url('user/Daftar/tambah_aksi')?>" method="POST">

			<div class="form-field col x-50">
				<input id="name" class="input-text js-input" name="nama_siswa" type="text" placeholder="Nama Lengkap"
					value="<?php echo set_value('nama_siswa'); ?>">
				<label class="label">Nama Siswa</label>
				<?= form_error('nama_siswa');?>
			</div>

			<div class="form-field col x-50">
				<input id="email" class="input-text js-input" name="kelas_siswa" type="text"
					placeholder="Kelas (untuk Alumni tulis Alumni)" value="<?php echo set_value('kelas_siswa'); ?>">
				<label class="label">Kelas</label>
				<?= form_error('kelas_siswa');?>
			</div>

			<div class="form-field col x-50">
				<input id="name" class="input-text js-input" name="asal_siswa" type="text" placeholder="Asal Sekolah"
					value="<?php echo set_value('asal_siswa'); ?>">
				<label class="label">Asal Sekolah</label>
				<?= form_error('asal_siswa');?>
			</div>

			<div class="form-field col x-50">
				<input id="email" class="input-text js-input" name="email" type="email" placeholder="Email Aktif"
					value="<?php echo set_value('email'); ?>">
				<label class="label">E-mail</label>
				<?= form_error('email');?>
			</div>

			<div class="form-field col x-50">
				<input id="name" class="input-text js-input" name="no_hp" type="text" placeholder="No Hp (Whatsapp)"
					value="<?php echo set_value('no_hp'); ?>">
				<label class="label">No Hp</label>
				<?= form_error('no_hp');?>
			</div>

			<div class="form-field col x-50">
				<input id="email" class="input-text js-input" name="alamat" type="text" placeholder="Alamat Lengkap"
					value="<?php echo set_value('alamat'); ?>">
				<label class="label">Alamat</label>
				<?= form_error('alamat');?>
			</div>

			<div class="form-field col x-50">
				<label class="label" for="nb">NB: Semua harus diisi</label>
			</div>
			<div class="form-field col x-100 align-center button-info">
				<input class="btn btn-info effect01" style="background-color:#4297FF;" type="submit" value="Daftar">
			</div>
		</form>
	</section>
</div>