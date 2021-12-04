<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>E-Modul : Penjumlahan dan Pengurangan Pecahan</title>
	<!-- Favicon-->
	<link rel="icon" type="image/x-icon" href="<?= base_url('assets/landing_page/') ?>assets/img/favicon.ico" />
	<!-- Font Awesome icons (free version)-->
	<script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
	<!-- Google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
	<!-- Core theme CSS (includes Bootstrap)-->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

	<link href="<?= base_url('assets/landing_page/css/styles.css') ?>" rel="stylesheet" />
</head>

<body id="page-top">
	<!-- Navigation-->
	<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="#page-top">E-Modul</a>
			<button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				Menu
				<i class="fas fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Materi</a></li>
					<li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Kompetensi Dasar & Inti</a></li>
					<li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Tentang</a></li>
					<li class="nav-item mx-0 mx-lg-1">
						<!-- <button type="button" class="btn btn-primary align-middle" data-toggle="modal" data-target="#exampleModal">
							Launch demo modal
						</button> -->

						<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-toggle="modal" data-target="#exampleModal">Petunjuk</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Masthead-->
	<header class="masthead bg-primary text-white text-center">
		<div class="container d-flex align-items-center flex-column">
			<!-- Masthead Avatar Image-->
			<!-- <img class="masthead-avatar mb-5" src="<?= base_url('assets/landing_page/') ?>assets/img/avataaars.svg" alt="..." /> -->
			<!-- Masthead Heading-->
			<h1 class="text-uppercase mb-0">E-Modul</h1>
			<h1 class="masthead-heading text-uppercase mb-0">Penjumlahan & Pengurangan Pecahan</h1>
			<!-- Icon Divider-->
			<div class="divider-custom divider-light">
				<div class="divider-custom-line"></div>
				<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
				<div class="divider-custom-line"></div>
			</div>
			<!-- Masthead Subheading-->
			<h1 class="masthead-subheading font-weight-light mb-0">Berbasis Literasi Numerasi</h1>
		</div>
	</header>
	<!-- Portfolio Section-->
	<section class="page-section portfolio" id="portfolio">
		<div class="container">
			<!-- Portfolio Section Heading-->
			<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Materi</h2>
			<!-- Icon Divider-->
			<div class="divider-custom">
				<div class="divider-custom-line"></div>
				<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
				<div class="divider-custom-line"></div>
			</div>
			<!-- Portfolio Grid Items-->
			<div class="row justify-content-center">
				<!-- Portfolio Item 1-->
				<div class="col-md-6 col-lg-4 mb-5">
					<a href="<?= base_url('Soal/soal1') ?>">
						<div class="portfolio-item mx-auto">
							<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
								<div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-eye fa-3x"></i></div>
							</div>
							<img class="img-fluid" src="<?= base_url('assets/landing_page/') ?>assets/img/portfolio/1.webp" alt="..." />
						</div>
					</a>
				</div>
				<!-- Portfolio Item 2-->
				<div class="col-md-6 col-lg-4 mb-5">
					<a href="<?= base_url('Soal/soal2') ?>">
						<div class="portfolio-item mx-auto">
							<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
								<div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-eye fa-3x"></i></div>
							</div>
							<img class="img-fluid" src="<?= base_url('assets/landing_page/') ?>assets/img/portfolio/2.webp" alt="..." />
						</div>
					</a>
				</div>
				<!-- Portfolio Item 3-->
				<div class="col-md-6 col-lg-4 mb-5">
					<a href="<?= base_url('Soal/soal3') ?>">
						<div class="portfolio-item mx-auto">
							<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
								<div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-eye fa-3x"></i></div>
							</div>
							<img class="img-fluid" src="<?= base_url('assets/landing_page/') ?>assets/img/portfolio/3.webp" alt="..." />
						</div>
					</a>
				</div>
				<!-- Portfolio Item 4-->
				<div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
					<a href="<?= base_url('Soal/soal4') ?>">
						<div class="portfolio-item mx-auto">
							<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
								<div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-eye fa-3x"></i></div>
							</div>
							<img class="img-fluid" src="<?= base_url('assets/landing_page/') ?>assets/img/portfolio/4.webp" alt="..." />
						</div>
					</a>
				</div>
				<div class="col-md-6 col-lg-4">
					<a href="<?= base_url('Soal/evaluasi') ?>">
						<div class="portfolio-item mx-auto">
							<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
								<div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-eye fa-3x"></i></div>
							</div>
							<img class="img-fluid" src="<?= base_url('assets/landing_page/') ?>assets/img/portfolio/evkom.webp" alt="..." />
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- About Section-->
	<section class="page-section bg-primary text-white mb-0" id="about">
		<div class="container">
			<!--kompetensi dasar-->
			<h2 class="page-section-heading text-center text-uppercase text-white"> Kompetensi Inti</h2>
			<!-- Icon Divider-->
			<div class="divider-custom divider-light">
				<div class="divider-custom-line"></div>
				<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
				<div class="divider-custom-line"></div>
			</div>
			<!-- About Section Content-->
			<div class="row mb-3">
				<!-- <div class="col-lg-4 mr-auto"> -->
				<table class="table lead" style="color: white;">
					<tr>
						<td>1</td>
						<td>Menerima, menjalankan, dan menghargai ajaran agama yang dianutnya</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Menunjukkan perilaku jujur, disiplin, santun, percaya diri, peduli, dan bertanggung jawab dalam berinteraksi dengan keluarga, teman, guru, dan tetangga, dan negara</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Memahami pengetahuan faktual, konseptual, prosedural, dan metakognitif pada tingkat dasar dengan cara mengamati, menanya, dan mencoba berdasarkan rasa ingin tahu tentang dirinya, makhluk ciptaan Tuhan dan kegiatannya, dan benda-benda yang dijumpainya di rumah, di sekolah, dan tempat bermain.</td>
					</tr>
					<tr>
						<td>4</td>
						<td>Menunjukkan keterampilan berfikir dan bertindak kreatif, produktif, kritis, mandiri, kolaboratif, dan komunikatif. Dalam bahasa yang jelas, sistematis, logis dan kritis, dalam karya yang estetis, dalam gerakan yang mencerminkan anak sehat, dan tindakan yang mencerminkan perilaku anak sesuai dengan tahap perkembangannya.</td>
					</tr>
				</table>
				<!-- </div> -->
			</div>
			<!-- kompotensi inti -->
			<h2 class="page-section-heading text-center text-uppercase text-white"> Kompetensi Dasar</h2>
			<!-- Icon Divider-->
			<div class="divider-custom divider-light">
				<div class="divider-custom-line"></div>
				<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
				<div class="divider-custom-line"></div>
			</div>
			<!-- About Section Content-->
			<div class="row">
				<!-- <div class="col-lg-4 mr-auto"> -->
				<table class="table lead" style="color: white;">
					<tr>
						<th>Kompetensi Dasar</th>
						<th>Indikator</th>
					</tr>
					<tr>
						<td>
							<p>
								3.4 Menggeneralisasi ide pecahan sebagai bagian dari keseluruhan menggunakan benda-benda konkret
							</p>
							<p>
								4.4 Menyajikan pecahan sebagai bagian dari keseluruhan menggunakan benda-benda konkret.
							</p>

						</td>
						<td>
							<p>
								3.4.1 Mengidentifikasi pecahan sebagai bagian dari sesuatu yang utuh dari benda konkret dengan tepat
							</p>
							<p>
								4.4.1 Menentukan pecahan pada benda benda konkret.
							</p>
						</td>
					</tr>
					<tr>
						<td>
							<p>
								3.5 Menjelaskan dan melakukan penjumlahan dan pengurangan pecahan.
							</p>
							<p>
								4.5 Menyelesaikan masalah penjumlahan dan pengurangan berpenyebut sama.
							</p>
						</td>
						<td>
							<p>
								3.5.1 Menjelaskan cara menjumlahkan dan mengurangkan pecahan.
							</p>
							<p>
								4.5.1 Menentukan penyelesaian penjumlahan dan pengurangan pecahan berpenyebut sama.
							</p>
						</td>
					</tr>
				</table>
				<!-- </div> -->
			</div>

		</div>
	</section>
	<!-- Contact Section-->
	<section class="page-section" id="contact">
		<div class="container">
			<!-- Contact Section Heading-->
			<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Tentang</h2>
			<!-- Icon Divider-->
			<div class="divider-custom">
				<div class="divider-custom-line"></div>
				<div class="divider-custom-icon"><i class="fas fa-star"></i></div>
				<div class="divider-custom-line"></div>
			</div>
			<!-- Contact Section Form-->
			<div class="row">
				<!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
				<div class="col-12 col-md-4">
					<img style="max-width: 200px;" class="masthead-avatar mb-5 img-fluid img-thumbnail mx-auto d-block" src="<?= base_url('assets/landing_page/') ?>assets/img/mega.jpeg" alt="..." />
				</div>
				<div class="col-12 col-md-8">
					<div class="table-responsive">
						<table class="table">
							<tr>
								<td>Nama</td>
								<td>:</td>
								<td> Kartini Mega Sari</td>
							</tr>
							<tr>
								<td>Tempat / Tanggal Lahir</td>
								<td>:</td>
								<td>Kota Malang, 19 September 1998 </td>
							</tr>
							<tr>
								<td>Email</td>
								<td>:</td>
								<td>kartinimegasari@gmal.com</td>
							</tr>
							<tr>
								<td>Pendidikan Terakhir</td>
								<td>:</td>
								<td>
									<p>
										Mahasiswa Fakultas Ilmu Pendidikan Progam Studi Pendidikan Guru Sekolah Dasar Universitas PGRI Kanjuruhan Malang
									</p>
								</td>
							</tr>
						</table>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- Footer-->
	<!-- <footer class="footer text-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 mb-5 mb-lg-0">
					<h4 class="text-uppercase mb-4">Location</h4>
					<p class="lead mb-0">
						2215 John Daniel Drive
						<br />
						Clark, MO 65243
					</p>
				</div>
				<div class="col-lg-4 mb-5 mb-lg-0">
					<h4 class="text-uppercase mb-4">Around the Web</h4>
					<a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
					<a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
					<a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
					<a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
				</div>
				<div class="col-lg-4">
					<h4 class="text-uppercase mb-4">About Freelancer</h4>
					<p class="lead mb-0">
						Freelance is a free to use, MIT licensed Bootstrap theme created by
						<a href="http://startbootstrap.com">Start Bootstrap</a>
						.
					</p>
				</div>
			</div>
		</div>
	</footer> -->
	<!-- Copyright Section-->
	<div class="copyright py-4 text-center text-white">
		<div class="container">
			<small>
				Copyright &copy; E-Modul : Penjumlahan dan Pengurangan Pecahan - Kartini Mega Sari
				<script>
					document.write(new Date().getFullYear());
				</script>
			</small>
		</div>
	</div>
	<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
	<div class="scroll-to-top d-lg-none position-fixed">
		<a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
	</div>
	<!-- Bootstrap core JS-->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
	<!-- Third party plugin JS-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
	<!-- Contact form JS-->
	<script src="<?= base_url('assets/landing_page/') ?>assets/mail/jqBootstrapValidation.js"></script>
	<script src="<?= base_url('assets/landing_page/') ?>assets/mail/contact_me.js"></script>
	<!-- Core theme JS-->
	<script src="<?= base_url('assets/landing_page/') ?>js/scripts.js"></script>
</body>

</html>


<!-- modal petunjuk -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Petunjuk Penggunaan E-Modul:</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="padding: 1rem;">
				<p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-modul penjumlahan dan pengurangan pecahan berbasis literasi numerasi dapat digunakan untuk siswa kelas III SD. Setiap bab pada E-modul saling berurutan dan menjadi kesatuan untuk dipelajari. </p>
				<p>Petunjuk untuk mengerjakan E-modul:</p>
				<ol>
					<li>Berdoalah sebelum mempelajari E-modul penjumlahan dan pengurangan pecahan berbasis literasi numerasi sesuai dengan agama masing-masing.</li>
					<li>Pahamilah Kompetensi Dasar dan Indikator supaya kamu mengetahui apa yang harus dipelajari serta dipahami pada E-modul ini.</li>
					<li>Bacalah uraian materi dengan seksama.</li>
					<li>Kamu bisa mengerjakan latihan soal yang ada di E-modul secara langsung.</li>
					<li>Kerjakanlah latihan soal dan evaluasi untuk mengukur tingkat penguasaan materi.</li>
					<li>Jika hasil yang kamu dapatkan belum memuaskan, jangan berputus asa dan teruslah giat untuk belajar. </li>
				</ol>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
