	<!--==========================
    Intro Section
  ============================-->
	<!-- <section id="intro" class="clearfix"> -->

	<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
		<!-- <ol class="carousel-indicators">
			<li data-target="#carousel" data-slide-to="0" class="active"></li>
			<li data-target="#carousel" data-slide-to="1"></li>
			<li data-target="#carousel" data-slide-to="2"></li>
		</ol> -->
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active" style="overflow: hidden;">
				<picture>
					<img srcset="<?= base_url()?>assets/user/img/banner.png" alt="responsive image"
						class="d-block img-fluid">
				</picture>

				<div class="carousel-caption">

				</div>
			</div>

			<!-- /.carousel-item -->
			<div class="carousel-item">
				<picture>
					<img srcset="<?= base_url()?>assets/user/img/banner_hd.png" alt="responsive image" class="d-block img-fluid">
				</picture>
				<a href="<?= site_url('user/sma/Sma/belajar_dini')?>">
					<!-- <div class="carousel-caption justify-content-center align-items-center">
						<div class="button-info">
							<span class="btn btn-info effect01">INFO LENGKAP</span>
						</div>
					</div> -->
				</a>
			</div>

			<!-- /.carousel-item -->
			<!-- <div class="carousel-item">
				<picture>
					<img srcset="<?= base_url()?>assets/user/img/banner_sd.png" alt="responsive image"
						class="d-block img-fluid">
				</picture>
				<a href="<?= site_url('user/sd/Sd')?>">
					<div class="carousel-caption justify-content-center align-items-center">
						<div class="button-info">
							<span class="btn btn-info effect01">INFO LENGKAP</span>
						</div>
					</div>
				</a>
			</div> -->
			<!-- /.carousel-item -->
		</div>
		<!-- /.carousel-inner -->
		<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		</a>
		<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
		</a>
	</div>
	<!-- /.carousel -->
	<!-- </section> -->
	<!-- #intro -->

	<!--==========================
      Services Section
    ============================-->
	<section id="services" class="section-bg">
		<div class="container">

			<header class="section-header">
				<h3>Yang Anda Dapatkan Di <b>GO-SMART</b></h3>
				<p>Pendidikan adalah sesuatu yang tidak pernah habis,<b> Go Smart</b> menghadirkan program dan fasilitas
					unggul dengan harga terjangkau.</p>
			</header>

			<div class="row">

				<div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
					<div class="box">
						<div class="icon"><i class="ion-ios-paper-outline" style="color: #ff689b;"></i></div>
						<h4 class="title">Latihan Soal</h4>
						<p class="description">Diberikan Latihan soal setiap masuk Bimbingan
							serta dibahas dengan metode Logika pola soal,
							sehingga siswa dengan mudah dan cepat dalam
							mengerjakan soal.</p>
					</div>
				</div>

				<div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
					<div class="box">
						<div class="icon"><i class="ion-ios-bookmarks-outline" style="color: #e9bf06;"></i></div>
						<h4 class="title">Evaluasi</h4>
						<p class="description">Dievaluasi setiap bulan, sehingga siswa dapat
							kelihatan perkembangannya, bagi siswa yang
							kurang berkembang akan tambahan dengan khusus.</p>
					</div>
				</div>

				<div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
					<div class="box">
						<div class="icon"><i class="ion-ios-people-outline" style="color: #3fcdc7;"></i></div>
						<h4 class="title">Pengajar</h4>
						<p class="description">Pengajar Pendidikan S2 & Berpengalaman.</p>
					</div>
				</div>

				<div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
					<div class="box">
						<div class="icon"><i class="ion-chatbubbles" style="color:#0073ca;"></i></div>
						<h4 class="title">Free Konsultasi</h4>
						<p class="description">Konsultasi PR dan strategi memilih jurusan Universitas.</p>
					</div>
				</div>

				<div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
					<div class="box">
						<div class="icon"><i class="ion-android-home" style="color:#41cf2e;"></i></div>
						<h4 class="title">Kelas Nyaman</h4>
						<p class="description">Kapasitas siswa max 10 orang & full AC.</p>
					</div>
				</div>

			</div>

		</div>
	</section><!-- #services -->

	<!--==========================
      Why Us Section
    ============================-->
	<section id="why-us" class="wow fadeIn">
		<div class="container">
			<header class="section-header">
				<h3>Kenapa Memilih <b>Go Smart</b>?</h3>
				<p>Dengan kelas di desain nyaman dan kapasitas kecil <b>Go Smart</b> menjadi solusi bimbingan belajar
					yang terpercaya.<br> <br>Berikut kata mereka setelah bergabung dengan <b>Go Smart.</b></p>
			</header>
			<div class="p-5 mx-auto mt-3 mb-3" style="max-width:600px;">
				<div id="carouselTestimonial" class="carousel carousel-testimonial slide" data-ride="carousel">
					<div class="carousel-inner">
					<?php foreach($testi as $list){?>
						<?php if($list->is_active) {?>

						<div class="carousel-item text-center active">
							<div class="carousel-testimonial-img" align="center">
								<img class="d-block w-50 rounded-circle"
									src="<?php echo base_url('./gambar/testi/' . $list->gambar) ?>" alt="First slide">
							</div>
							<h5 class="mt-4 mb-0"><strong
									class="text-warning text-uppercase"><?= $list->nama_siswa?></strong></h5>
							<p style="color: white" class="m-0 pt-3"> <?= $list->testi?></p>
						</div>
						
						<?php } else {?>

							<div class="carousel-item text-center">
								<div class="carousel-testimonial-img" align="center">
									<img class="d-block w-50 rounded-circle"
										src="<?php echo base_url('./gambar/testi/' . $list->gambar) ?>" alt="First slide">
								</div>
								<h5 class="mt-4 mb-0"><strong
										class="text-warning text-uppercase"><?= $list->nama_siswa?></strong></h5>
								<p style="color: white" class="m-0 pt-3"> <?= $list->testi?></p>
							</div>
						<?php }?>
					<?php }?>

					</div>
					<a class="carousel-control-prev" href="#carouselTestimonial" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselTestimonial" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>

			<div class="row counters">

				<div class="col-lg-3 col-6 text-center">
					<span data-toggle="counter-up">150</span>
					<p>Murid</p>
				</div>

				<div class="col-lg-3 col-6 text-center">
					<span data-toggle="counter-up">50</span>
					<p>SMA</p>
				</div>

				<div class="col-lg-3 col-6 text-center">
					<span data-toggle="counter-up">50</span>
					<p>SMP</p>
				</div>

				<div class="col-lg-3 col-6 text-center">
					<span data-toggle="counter-up">50</span>
					<p>SD</p>
				</div>

			</div>

		</div>
	</section>