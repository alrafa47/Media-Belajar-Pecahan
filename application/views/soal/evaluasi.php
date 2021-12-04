<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Evaluasi Kompetensi</title>
	<link rel="icon" type="image/x-icon" href="<?= base_url('assets/soal/') ?>assets/img/favicon.ico" />
	<!-- Font Awesome icons (free version)-->
	<script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
	<!-- Google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
	<!-- Core theme CSS (includes Bootstrap)-->
	<link href="<?= base_url('assets/soal/') ?>css/styles.css" rel="stylesheet" />
	<!-- internal style -->
	<style>
		body {
			background-image: url('../background.webp');
			background-size: 30%;
		}

		table,
		p {
			background-color: white;
		}

		.container-img {
			position: relative;
			text-align: center;
			color: black;
		}

		.bottom-left {
			position: absolute;
			bottom: 8px;
			left: 16px;
		}

		.top-left {
			/* position: absolute;
			top: 8px;
			left: 16px; */
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			text-align: center;
			color: white;
			font-weight: bold;
		}

		.top-right {
			position: absolute;
			top: 8px;
			right: 16px;
		}

		.bottom-right {
			position: absolute;
			bottom: 8px;
			right: 16px;
		}

		.centered {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
		}

		/* fraction style */

		.fraction,
		.top,
		.bottom {
			padding: 0 5px;
		}

		.fraction {
			display: inline-block;
			text-align: center;
		}

		.bottom {
			border-top: 1px solid #000;
			display: block;
		}

		/*input titik titik  */
		.input-dotted {
			width: 35px;
			/* padding: 12px 20px; */
			margin: 5px;
			box-sizing: border-box;
			border: none;
			border-bottom: 2px dotted black;
			text-align: center;
		}
	</style>
</head>

<body id="page-top">
	<!-- Navigation-->
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
		<a class="navbar-brand js-scroll-trigger" href="#page-top">
			<span class="d-block d-lg-none">Soal Evaluasi</span>
			<span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?= base_url('assets/soal/') ?>assets/img/eval.webp" alt="..." /></span>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav">
				<!-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Penjelasan</a></li> -->
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#soalEvaluasi">Soal Evaluasi</a></li>
				<!-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#ayoMenemukan">ayo Menemukan</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#ayoMencoba">ayo Mencoba</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#AyoBerlatih">Ayo Berlatih</a></li> -->
				<!-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Awards</a></li> -->
			</ul>
		</div>
	</nav>

	<!-- Page Content-->
	<div class="container-fluid p-0">
		<!-- About-->
		<!-- Soal evaluasi-->
		<section class="resume-section" id="soalEvaluasi">
			<div class="resume-section-content">
				<!-- <div class="row"> -->
				<div class="card mb-3">
					<div class="card-body">
						<h2>Soal Evaluasi</h2>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<h5>A. Pilih salah satu jawaban yang paling benar! </h5>
						<ol>
							<!-- 1 -->
							<li>
								Daerah yang diarsir pada gambar di bawah, menunjukkan pecahan ......
								<div class="row">
									<div class="col-md-4">
										<img class="img-fluid mx-auto d-block w-35" src="<?= base_url('assets\soal\assets\img\eval\1.webp') ?>" alt="no image">
									</div>
									<div class="col-md-8">
										<div class="row">
											<div class="col-6">
												a. <input type="radio" name="pilihan1" value="0" id="">
												<div class="fraction align-middle">
													<span class="top">2</span>
													<span class="bottom">2</span>
												</div>
											</div>
											<div class="col-6">
												b. <input type="radio" name="pilihan1" value="0" id="">
												<div class="fraction align-middle">
													<span class="top">2</span>
													<span class="bottom">3</span>
												</div>
											</div>
											<div class="col-6">
												c. <input type="radio" name="pilihan1" value="0" id="">
												<div class="fraction align-middle">
													<span class="top">1</span>
													<span class="bottom">2</span>
												</div>
											</div>
											<div class="col-6">
												d. <input type="radio" name="pilihan1" value="1" id="">
												<div class="fraction align-middle">
													<span class="top">1</span>
													<span class="bottom">3</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<!-- 2 -->
							<li>
								Pecahan<div class="fraction align-middle">
									<span class="top">2</span>
									<span class="bottom">4</span>
								</div>ditunjukkan oleh gambar......
								<div class="row">
									<div class="col-6">
										a. <input type="radio" name="pilihan2" value="0" id="">
										<img class="img-fluid mx-auto d-block w-35" src="<?= base_url('assets\soal\assets\img\eval\2.webp') ?>" alt="no image">
									</div>
									<div class="col-6">
										b. <input type="radio" name="pilihan2" value="1" id="">
										<img class="img-fluid mx-auto d-block w-35" src="<?= base_url('assets\soal\assets\img\eval\3.webp') ?>" alt="no image">
									</div>
									<div class="col-6">
										c. <input type="radio" name="pilihan2" value="0" id="">
										<img class="img-fluid mx-auto d-block w-35" src="<?= base_url('assets\soal\assets\img\eval\4.webp') ?>" alt="no image">
									</div>
									<div class="col-6">
										d. <input type="radio" name="pilihan2" value="0" id="">
										<img class="img-fluid mx-auto d-block w-35" src="<?= base_url('assets\soal\assets\img\eval\5.webp') ?>" alt="no image">
									</div>
								</div>
							</li>
							<!-- 3 -->
							<li>
								Daerah yang diarsir pada gambar di bawah, menunjukkan pecahan ......
								<div class="row">
									<div class="col-md-4">
										<img class="img-fluid mx-auto d-block w-35" src="<?= base_url('assets\soal\assets\img\eval\6.webp') ?>" alt="no image">
									</div>
									<div class="col-md-8">
										<div class="row">
											<div class="col-6">
												a. <input type="radio" name="pilihan3" value="0" id="">
												<div class="fraction">
													<span class="top">4</span>
													<span class="bottom">12</span>
												</div>
											</div>
											<div class="col-6">
												b. <input type="radio" name="pilihan3" value="0" id="">
												<div class="fraction">
													<span class="top">5</span>
													<span class="bottom">12</span>
												</div>
											</div>
											<div class="col-6">
												c. <input type="radio" name="pilihan3" value="1" id="">
												<div class="fraction">
													<span class="top">6</span>
													<span class="bottom">12</span>
												</div>
											</div>
											<div class="col-6">
												d. <input type="radio" name="pilihan3" value="0" id="">
												<div class="fraction">
													<span class="top">7</span>
													<span class="bottom">12</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<!-- 4 -->
							<li>
								<div class="fraction align-middle">
									<span class="top">5</span>
									<span class="bottom">8</span>
								</div>
								......
								<div class="fraction align-middle">
									<span class="top">7</span>
									<span class="bottom">8</span>
								</div>
								<div class="row">
									<div class="col-6 col-md-3">
										a. <input type="radio" name="pilihan4" value="1" id="">
										<label for="">
											< </label>
									</div>
									<div class="col-6 col-md-3">
										b. <input type="radio" name="pilihan4" value="0" id="">
										<label for="">
											> </label>
									</div>
									<div class="col-6 col-md-3">
										c. <input type="radio" name="pilihan4" value="0" id="">
										<label for="">
											= </label>
									</div>
									<div class="col-6 col-md-3">
										d. <input type="radio" name="pilihan4" value="0" id="">
										<label for="">
											+ </label>
									</div>
								</div>

							</li>
							<!-- 5 -->
							<li>
								<div class="fraction align-middle">
									<span class="top">3</span>
									<span class="bottom">6</span>
								</div>
								+
								<div class="fraction align-middle">
									<span class="top">2</span>
									<span class="bottom">6</span>
								</div>
								=
								<div class="row">
									<div class="col-6 col-md-3">
										a. <input type="radio" name="pilihan5" value="0" id="">
										<div class="fraction align-middle">
											<span class="top">2</span>
											<span class="bottom">6</span>
										</div>
									</div>
									<div class="col-6 col-md-3">
										b. <input type="radio" name="pilihan5" value="0" id="">
										<div class="fraction align-middle">
											<span class="top">3</span>
											<span class="bottom">6</span>
										</div>
									</div>
									<div class="col-6 col-md-3">
										c. <input type="radio" name="pilihan5" value="0" id="">
										<div class="fraction align-middle">
											<span class="top">4</span>
											<span class="bottom">6</span>
										</div>
									</div>
									<div class="col-6 col-md-3">
										d. <input type="radio" name="pilihan5" value="1" id="">
										<div class="fraction align-middle">
											<span class="top">5</span>
											<span class="bottom">6</span>
										</div>
									</div>
								</div>
							</li>
							<!-- 6 -->
							<li>
								Daerah yang diarsir pada gambar di bawah, menunjukkan pecahan ......
								<div class="row">
									<div class="col-md-4">
										<img class="img-fluid mx-auto d-block w-35" src="<?= base_url('assets\soal\assets\img\eval\7.webp') ?>" alt="no image">
									</div>
									<div class="col-md-8">
										<div class="row">
											<div class="col-6">
												a. <input type="radio" name="pilihan6" value="1" id="">
												<div class="fraction">
													<span class="top">3</span>
													<span class="bottom">8</span>
												</div>
											</div>
											<div class="col-6">
												b. <input type="radio" name="pilihan6" value="0" id="">
												<div class="fraction">
													<span class="top">4</span>
													<span class="bottom">8</span>
												</div>
											</div>
											<div class="col-6">
												c. <input type="radio" name="pilihan6" value="0" id="">
												<div class="fraction">
													<span class="top">5</span>
													<span class="bottom">8</span>
												</div>
											</div>
											<div class="col-6">
												d. <input type="radio" name="pilihan6" value="0" id="">
												<div class="fraction">
													<span class="top">6</span>
													<span class="bottom">8</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<!-- 7 -->
							<li>
								<div class="fraction align-middle">
									<span class="top">1</span>
									<span class="bottom">4</span>
								</div>

								+
								<div class="fraction align-middle">
									<span class="top">1</span>
									<span class="bottom">2</span>
								</div>
								=
								<div class="row">
									<div class="col-6 col-md-3">
										a.<input type="radio" name="pilihan7" value="0" id="">
										<div class="fraction align-middle">
											<span class="top">1</span>
											<span class="bottom">4</span>
										</div>
									</div>
									<div class="col-6 col-md-3">
										b. <input type="radio" name="pilihan7" value="1" id="">
										<div class="fraction align-middle">
											<span class="top">3</span>
											<span class="bottom">4</span>
										</div>
									</div>
									<div class="col-6 col-md-3">
										c. <input type="radio" name="pilihan7" value="0" id="">
										<div class="fraction align-middle">
											<span class="top">2</span>
											<span class="bottom">4</span>
										</div>
									</div>
									<div class="col-6 col-md-3">
										d. <input type="radio" name="pilihan7" value="0" id="">
										<div class="fraction align-middle">
											<span class="top">5</span>
											<span class="bottom">4</span>
										</div>
									</div>
								</div>
							</li>
							<!-- 8 -->
							<li>
								<div class="fraction align-middle">
									<span class="top">7</span>
									<span class="bottom">10</span>
								</div>
								-
								<div class="fraction align-middle">
									<span class="top">3</span>
									<span class="bottom">10</span>
								</div>
								=
								<div class="row">
									<div class="col-6 col-md-3">
										a. <input type="radio" name="pilihan8" value="1" id="">
										<div class="fraction align-middle">
											<span class="top">4</span>
											<span class="bottom">10</span>
										</div>
									</div>
									<div class="col-6 col-md-3">
										b. <input type="radio" name="pilihan8" value="0" id="">
										<div class="fraction align-middle">
											<span class="top">7</span>
											<span class="bottom">10</span>
										</div>
									</div>
									<div class="col-6 col-md-3">
										c. <input type="radio" name="pilihan8" value="0" id="">
										<div class="fraction align-middle">
											<span class="top">6</span>
											<span class="bottom">10</span>
										</div>
									</div>
									<div class="col-6 col-md-3">
										d. <input type="radio" name="pilihan8" value="0" id="">
										<div class="fraction align-middle">
											<span class="top">5</span>
											<span class="bottom">10</span>
										</div>
									</div>
								</div>

							</li>
							<!-- 9 -->
							<li>
								Nilai
								<br>
								<div class="row">
									<div class="d-inline">
										<img class="img-fluid mx-auto" src="<?= base_url('assets\soal\assets\img\eval\8.webp') ?>" alt="no image">
										<b style="font-size: 2rem;">-</b>
										<img class="img-fluid mx-auto" src="<?= base_url('assets\soal\assets\img\eval\9.webp') ?>" alt="no image">
									</div>
								</div>
								adalah...
								<div class="row">
									<div class="col-6 col-md-3">
										a. <input type="radio" name="pilihan9" value="0" id="">
										<div class="fraction align-middle">
											<span class="top">2</span>
											<span class="bottom">7</span>
										</div>
									</div>
									<div class="col-6 col-md-3">
										b. <input type="radio" name="pilihan9" value="0" id="">
										<div class="fraction align-middle">
											<span class="top">4</span>
											<span class="bottom">7</span>
										</div>
									</div>
									<div class="col-6 col-md-3">
										c. <input type="radio" name="pilihan9" value="1" id="">
										<div class="fraction align-middle">
											<span class="top">1</span>
											<span class="bottom">7</span>
										</div>
									</div>
									<div class="col-6 col-md-3">
										d. <input type="radio" name="pilihan9" value="0" id="">
										<div class="fraction align-middle">
											<span class="top">5</span>
											<span class="bottom">7</span>
										</div>
									</div>
								</div>
							</li>
							<!-- 10 -->
							<li>
								<div class="fraction align-middle">
									<span class="top">3</span>
									<span class="bottom">4</span>
								</div>
								-
								<div class="fraction align-middle">
									<span class="top">5</span>
									<span class="bottom">8</span>
								</div>
								=
								<div class="row">
									<div class="col-6 col-md-3">
										a. <input type="radio" name="pilihan10" value="0" id="">
										<div class="fraction align-middle">
											<span class="top">2</span>
											<span class="bottom">8</span>
										</div>
									</div>
									<div class="col-6 col-md-3">
										b. <input type="radio" name="pilihan10" value="0" id="">
										<div class="fraction align-middle">
											<span class="top">11</span>
											<span class="bottom">8</span>
										</div>
									</div>
									<div class="col-6 col-md-3">
										c. <input type="radio" name="pilihan10" value="1" id="">
										<div class="fraction align-middle">
											<span class="top">1</span>
											<span class="bottom">8</span>
										</div>
									</div>
									<div class="col-6 col-md-3">
										d. <input type="radio" name="pilihan10" value="0" id="">
										<div class="fraction align-middle">
											<span class="top">5</span>
											<span class="bottom">8</span>
										</div>
									</div>
								</div>
							</li>
						</ol>

						<h5>B. Pertanyaan di bawah ini dengan jawaban yang tepat!</h5>
						<ol>
							<li>
								Perhatikan Gambar dibawah ini
								<div class="row">
									<div class="col-12 col-md-6">
										<img class="img-fluid mx-auto d-block w-35" src="<?= base_url('assets\soal\assets\img\eval\10.webp') ?>" alt="no image">
									</div>
									<div class="col-12 col-md-6">
										Daerah yang diarsir pada gambar di atas, menunjukkan pecahan <div class="fraction align-middle">
											<span class="top"><input type="text" id="input1" data-correct="4" class="input-dotted"></span>
											<span class="bottom"><input type="text" id="input2" data-correct="6" class="input-dotted"></span>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="fraction align-middle">
									<span class="top">10</span>
									<span class="bottom">20</span>
								</div>

								<input type="text" id="input3" data-correct="=" class="input-dotted">
								<div class="fraction align-middle">
									<span class="top">5</span>
									<span class="bottom">10</span>
								</div>
							</li>
							<li>
								Hari ini Hadi dan teman-temannya akan membawa kue yang akan dimakan Bersama di taman bermain dekat rumahnya.
								Hadi membawa bolu kukus pandan sebanyak
								<div class="fraction align-middle">
									<span class="top">4</span>
									<span class="bottom">12</span>
								</div>, lalu dian juga membawa bolu kukus cokelat sebanyak
								<div class="fraction align-middle">
									<span class="top">5</span>
									<span class="bottom">12</span>
								</div>
								Berapakah jumlah bolu kukus yang dibawa Hadi dan Dian?
								<br>
								<div class="fraction align-middle">
									<span class="top"><input type="text" data-group="3" data-correct2="5" id="input60" data-correct="4" class="input-dotted"></span>
									<span class="bottom"><input type="text" id="input61" data-correct="12" class="input-dotted"></span>
								</div>
								+
								<div class="fraction align-middle">
									<span class="top"><input type="text" data-group="3" data-correct2="4" id="input62" data-correct="5" class="input-dotted"></span>
									<span class="bottom"><input type="text" id="input63" data-correct="12" class="input-dotted"></span>
								</div>
								=
								<div class="fraction align-middle">
									<span class="top"><input type="text" id="input4" data-correct="9" class="input-dotted"></span>
									<span class="bottom"><input type="text" id="input5" data-correct="12" class="input-dotted"></span>
								</div>
							</li>
							<li>
								Reyhan dan Rizki akan membutuhkan cat warna jingga untuk mewarnai topeng yang ditugaskan dari sekolah. Reyhan memiliki
								<div class="fraction align-middle">
									<span class="top">2</span>
									<span class="bottom">5</span>
								</div> kaleng cat berwarna merah, sedangkan Rizki mempunyai
								<div class="fraction align-middle">
									<span class="top">1</span>
									<span class="bottom">2</span>
								</div>
								kaleng cat warna kuning. Jika cat mereka dicampurkan berapa jumlah cat warna jingga Reyhan dan Rizki?
								<br>
								<div class="d-inline">
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input64" data-group="4" data-correct2="1" data-correct="2" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input65" data-group="4" data-correct2="2" data-correct="5" class="input-dotted"></span>
									</div>
									+
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input66" data-group="4" data-correct2="2" data-correct="1" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input67" data-group="4" data-correct2="5" data-correct="2" class="input-dotted"></span>
									</div>
									=
									<div class="fraction align-middle">
										<span class="top"><input type="text" data-group="4" data-correct2="5" id="input6" data-correct="4" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input7" data-correct="10" class="input-dotted"></span>
									</div>
									+
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input8" data-group="4" data-correct2="4" data-correct="5" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input9" data-correct="10" class="input-dotted"></span>
									</div>
									=
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input10" data-correct="9" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input11" data-correct="10" class="input-dotted"></span>
									</div>
								</div>
							</li>
							<li>
								Lita membawa <div class="fraction align-middle">
									<span class="top">5</span>
									<span class="bottom">6</span>
								</div> terang bulan ke sekolahnya, lalu dibagikan ke teman-temannya sebanyak <div class="fraction align-middle">
									<span class="top">4</span>
									<span class="bottom">6</span>
								</div> berapa sisa terang bulan Lita sekarang?
								<br>
								<div class="fraction align-middle">
									<span class="top"><input type="text" id="input68" data-correct="5" class="input-dotted"></span>
									<span class="bottom"><input type="text" id="input69" data-correct="6" class="input-dotted"></span>
								</div>
								-
								<div class="fraction align-middle">
									<span class="top"><input type="text" id="input70" data-correct="4" class="input-dotted"></span>
									<span class="bottom"><input type="text" id="input71" data-correct="6" class="input-dotted"></span>
								</div>
								=
								<div class="fraction align-middle">
									<span class="top"><input type="text" id="input12" data-correct="1" class="input-dotted"></span>
									<span class="bottom"><input type="text" id="input13" data-correct="6" class="input-dotted"></span>
								</div>
							</li>
						</ol>

						<!-- C -->
						<h5>C. Jawablah pertanyaan di bawah ini dengan benar!</h5>
						<table class="table table-borderless">
							<tr>
								<td>1 </td>
								<td colspan="4">Sebuah semangka dipotong menjadi 10 bagian. Semangka itu dimakan <div class="fraction align-middle">
										<span class="top">4</span>
										<span class="bottom">10</span>
									</div> bagian. Berapa bagiankan sisa semangka tersebut?</td>
							</tr>
							<tr>
								<td></td>
								<td style="border: black solid 1px">
									<!-- <button id="add1" class="btn btn-sm btn-primary">Tambah</button>
									<br>
									<div id="pertanyaan1" class="d-inline-block p-2">
										<div class="d-inline-block">
											<div style="padding: 0; margin: 0;" class="alert fractionCount fade show" role="alert">
												<div class="fraction align-middle d-inline-block" style="height: 77px;">
													<span class="top"><input type="text" class="input-dotted"></span>
													<span class="bottom"><input type="text" class="input-dotted"></span>
												</div>
												<div class="d-inline-block" style="height: 50px;">
													<select class="opt">
														<option value="+">+</option>
														<option value="-">-</option>
														<option value="=">=</option>
													</select>
												</div>
											</div>
										</div>
									</div> -->
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input14" data-correct="10" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input15" data-correct="10" class="input-dotted"></span>
									</div>
									<div class="d-inline-block" style="height: 50px;">
										<select class="opt">
											<option value="0">+</option>
											<option value="1">-</option>
										</select>
									</div>

									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input16" data-correct="4" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input17" data-correct="10" class="input-dotted"></span>
									</div> =
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input18" data-correct="6" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input19" data-correct="10" class="input-dotted"></span>
									</div>
								</td>
							</tr>
							<tr>
								<td>2 </td>
								<td colspan="4">Arif membeli pizza yang telah dipotong menjadi 8 bagian. Lalu ia memakan 3 bagian pizza. Berapa bagian pizza Arif sekarang?</td>
							</tr>
							<tr>
								<td></td>
								<td style="border: black solid 1px" colspan="4">
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input20" data-correct="8" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input21" data-correct="8" class="input-dotted"></span>
									</div>
									<div class="d-inline-block" style="height: 50px;">
										<select class="opt">
											<option value="0">+</option>
											<option value="1">-</option>
										</select>
									</div>

									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input22" data-correct="3" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input23" data-correct="8" class="input-dotted"></span>
									</div>
									=
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input24" data-correct="5" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input25" data-correct="8" class="input-dotted"></span>
									</div>
								</td>
							</tr>
							<tr>
								<td>3 </td>
								<td colspan="4">Ibu memiliki <div class="fraction align-middle">
										<span class="top">1</span>
										<span class="bottom">4</span>
									</div> kg gula. Untuk persediaan ibu membeli lagi
									<div class="fraction align-middle">
										<span class="top">1</span>
										<span class="bottom">4</span>
									</div>kg gula, sepulang kerja ayah membelikan ibu gula sebanyak
									<div class="fraction align-middle">
										<span class="top">1</span>
										<span class="bottom">2</span>
									</div> kg. berapa jumlah gula ibu sekarang?
							</tr>
							<tr>
								<td></td>
								<td style="border: black solid 1px" colspan="4">
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input26" data-group="1" data-correct2="1" data-correct3="1" data-correct="1" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input27" data-group="1" data-correct2="4" data-correct3="2" data-correct="4" class="input-dotted"></span>
									</div>
									<div class="d-inline-block" style="height: 50px;">
										<select class="opt">
											<option value="1">+</option>
											<option value="0">-</option>
										</select>
									</div>

									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input28" data-group="1" data-correct2="1" data-correct3="1" data-correct="1" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input29" data-group="1" data-correct2="2" data-correct3="4" data-correct="4" class="input-dotted"></span>
									</div>
									<div class="d-inline-block" style="height: 50px;">
										<select class="opt">
											<option value="1">+</option>
											<option value="0">-</option>
										</select>
									</div>
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input30" data-group="1" data-correct2="1" data-correct3="1" data-correct="1" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input31" data-group="1" data-correct2="4" data-correct3="4" data-correct="2" class="input-dotted"></span>
									</div>
									=
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input32" data-group="1" data-correct2="1" data-correct3="2" data-correct="1" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input33" data-correct="4" class="input-dotted"></span>
									</div>
									<div class="d-inline-block" style="height: 50px;">
										<select class="opt">
											<option value="1">+</option>
											<option value="0">-</option>
										</select>
									</div>

									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input34" data-group="1" data-correct2="2" data-correct3="1" data-correct="1" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input35" data-correct="4" class="input-dotted"></span>
									</div>
									<div class="d-inline-block" style="height: 50px;">
										<select class="opt">
											<option value="+">+</option>
											<option value="-">-</option>
										</select>
									</div>
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input36" data-group="1" data-correct2="1" data-correct3="1" data-correct="2" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input37" data-correct="4" class="input-dotted"></span>
									</div>
									=
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input38" data-correct="4" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input39" data-correct="4" class="input-dotted"></span>
									</div>
								</td>
							</tr>
							<tr>
								<td>4 </td>
								<td colspan="4">Lena membelikan telur untuk ibunya sebanyak <div class="fraction align-middle">
										<span class="top">1</span>
										<span class="bottom">2</span>
									</div> kg, lalu ibu membeli lagi
									<div class="fraction align-middle">
										<span class="top">1</span>
										<span class="bottom">4</span>
									</div>kg untuk persediaan, berapa kg telur ibu sekarang?

							</tr>
							<tr>
								<td></td>
								<td style="border: black solid 1px" colspan="4">
									<div class="fraction align-middle">
										<span class="top"><input type="text" data-group="2" data-correct2="1" id="input40" data-correct="1" class="input-dotted"></span>
										<span class="bottom"><input type="text" data-group="2" data-correct2="4" id="input41" data-correct="2" class="input-dotted"></span>
									</div>
									<div class="d-inline-block" style="height: 50px;">
										<select class="opt">
											<option value="1">+</option>
											<option value="0">-</option>
										</select>
									</div>
									<div class="fraction align-middle">
										<span class="top"><input type="text" data-group="2" data-correct2="1" id="input42" data-correct="1" class="input-dotted"></span>
										<span class="bottom"><input type="text" data-group="2" data-correct2="2" id="input43" data-correct="4" class="input-dotted"></span>
									</div> =
									<div class="fraction align-middle">
										<span class="top"><input type="text" data-group="2" data-correct2="1" id="input44" data-correct="2" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input45" data-correct="4" class="input-dotted"></span>
									</div>
									<div class="d-inline-block" style="height: 50px;">
										<select class="opt">
											<option value="1">+</option>
											<option value="0">-</option>
										</select>
									</div>
									<div class="fraction align-middle">
										<span class="top"><input type="text" data-group="2" data-correct2="2" id="input46" data-correct="1" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input47" data-correct="4" class="input-dotted"></span>
									</div> =

									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input48" data-correct="3" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input49" data-correct="4" class="input-dotted"></span>
								</td>
							</tr>
							<tr>
								<td>5</td>
								<td colspan="4">Dina mempunyai <div class="fraction align-middle">
										<span class="top">1</span>
										<span class="bottom">2</span>
									</div> meter pita, lalu diberikan pada kakaknya
									<div class="fraction align-middle">
										<span class="top">3</span>
										<span class="bottom">8</span>
									</div>meter. Berapa meter siswa pita Dina sekarang?
							</tr>
							<tr>
								<td></td>
								<td style="border: black solid 1px" colspan="4">
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input50" data-correct="1" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input51" data-correct="2" class="input-dotted"></span>
									</div>
									<div class="d-inline-block" style="height: 50px;">
										<select class="opt">
											<option value="0">+</option>
											<option value="1">-</option>
										</select>
									</div>

									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input52" data-correct="3" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input53" data-correct="8" class="input-dotted"></span>
									</div> =
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input54" data-correct="4" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input55" data-correct="8" class="input-dotted"></span>
									</div>
									<div class="d-inline-block" style="height: 50px;">
										<select class="opt">
											<option value="0">+</option>
											<option value="1">-</option>
										</select>
									</div>
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input56" data-correct="3" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input57" data-correct="8" class="input-dotted"></span>
									</div>
									=

									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input58" data-correct="1" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input59" data-correct="8" class="input-dotted"></span>
								</td>
							</tr>
						</table>
					</div>
				</div>

			</div>
		</section>

		<section>
			<button id="selesai" class="float-right btn btn-success btn-lg mb-4 mr-5">Selesai</button>
			<a id="kembali" href="<?= base_url() ?>" class="float-right btn btn-success btn-lg mb-4 mr-3">Kembali</a>
		</section>
	</div>
	<!-- Bootstrap core JS-->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
	<!-- Third party plugin JS-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

	<!-- Core theme JS-->
	<script src="<?= base_url('assets/soal/') ?>js/scripts.js"></script>
	<script>
		$("#selesai").click(function() {

			// soal isian
			var nilaiIsian = 0;
			var soalIsian = 0;
			$(".input-dotted:not([data-group])").each(function() {
				if ($(this).val() != $(this).attr('data-correct')) {
					// console.log($(this).attr('id'));
					var jawaban = $(this).attr('data-correct');
					$(this).attr("data-toggle", "tooltip");
					$(this).attr("data-html", "true");
					$(this).attr("data-placement", "right");
					$(this).attr("title", "<em>Jawaban : </em> <b>" + jawaban + "</b>");
					$(this).css("border-bottom", "5px solid red");
				} else {
					nilaiIsian++;
				}
				soalIsian++;
			});
			console.log("soal isian" + soalIsian);

			$(function() {
				$('[data-toggle="tooltip"]').tooltip()
			})

			// soal pilihan
			var pilihan = 0;
			for (let index = 1; index <= 10; index++) {
				var rad = $('input[name="pilihan' + index + '"]:checked');
				pilihan = pilihan + parseInt(rad.val());
				if (rad.val() == 0) {
					rad.closest("div").css("background", "red");
				}
			}
			if (isNaN(pilihan)) {
				pilihan = 0;
			}
			$("input[type='radio'][value='1']").closest("div").css("background", "#8ed278")
			console.log("soal pilihan" + pilihan);

			// soal option
			var soalOpt = 0
			var nilaiOpt = 0
			$(".opt").each(function() {
				if ($("option:selected", this).val() == 0) {
					$(this).css("border", "1px solid red");
				} else {
					nilaiOpt++;
				}
				soalOpt++;
			});
			console.log("soal opt" + soalOpt);

			// 4 group
			// 10 grup inputan
			var soalGrup = 0;
			for (let index = 1; index <= 4; index++) {
				var targetNilai = $(".input-dotted[data-group='" + index + "']").length;
				var nilaiGroup1 = 0;
				var nilaiGroup2 = 0;
				var nilaiGroup3 = 0;
				console.log(index + " :" + targetNilai);
				soalGrup = soalGrup + targetNilai;
				var idElement = [];
				$(".input-dotted[data-group='" + index + "']").each(function() {
					if ($(this).val().toUpperCase() == $(this).attr('data-correct')) {
						// console.log($(this).attr('id'));
						nilaiGroup1++;
					}
					if ($(this).val().toUpperCase() == $(this).attr('data-correct2')) {
						// console.log($(this).attr('id'));
						nilaiGroup2++;
					}
					if ($(this).val().toUpperCase() == $(this).attr('data-correct3')) {
						// console.log($(this).attr('id'));
						nilaiGroup3++;
					}
					idElement.push($(this).attr("id"));
				});
				var correct = "";
				if (nilaiGroup1 == targetNilai || nilaiGroup2 == targetNilai || nilaiGroup3 == targetNilai) {
					nilaiIsian = nilaiIsian + targetNilai;
				} else if (nilaiGroup1 >= nilaiGroup2) {
					nilaiIsian = nilaiIsian + nilaiGroup1;
					correct = "data-correct";
				} else if (nilaiGroup2 >= nilaiGroup3) {
					nilaiIsian = nilaiIsian + nilaiGroup2;
					correct = "data-correct2";
				} else {
					nilaiIsian = nilaiIsian + nilaiGroup3;
					correct = "data-correct3";
				}
				// console.log("correct = " + correct)
				// console.log("--1 : " + nilaiGroup1 + "--2 : " + nilaiGroup2 + "--3 : " + nilaiGroup3)

				if (nilaiGroup1 != targetNilai && nilaiGroup2 != targetNilai && nilaiGroup3 != targetNilai) {
					var jawaban;
					idElement.forEach(function(value) {
						jawaban = $("#" + value).attr(correct);
						console.log(jawaban);
						if ($("#" + value).val().toUpperCase() != jawaban) {
							$("#" + value).attr("data-toggle", "tooltip");
							$("#" + value).attr("data-html", "true");
							$("#" + value).attr("data-placement", "right");
							$("#" + value).attr("title", "<em>Jawaban : </em> <b>" + jawaban + "</b>");
							$("#" + value).css("border-bottom", "5px solid red");
						}
					});
				}
			}
			console.log(nilaiIsian + "--" + pilihan + "--" + nilaiOpt);
			// total skor
			var totalSkor = Math.round((nilaiIsian + pilihan + nilaiOpt) / 95 * 100);
			if (isNaN(totalSkor)) {
				totalSkor = 0;
			}

			Swal.fire(
				'Skor Kamu : ' + totalSkor,
				'Semangat, Tetap Belajar lagi ya :)',
				'success'
			)

			$("#selesai").attr("disabled", "disabled")

			// $("#pertanyaan1 :input.top").each(function() {
			// 	console.log($(this).val());
			// });

			// var data = $("#pertanyaan1 :input");
			// console.log(data);

		});

		// $("#add1").click(function() {
		// 	$("#pertanyaan1").append(`
		// 	<div class="d-inline-block">
		// 		<div style="padding: 0; margin: 0;" class="alert fractionCount fade show" role="alert">
		// 			<div class="fraction align-middle d-inline-block" style="height: 77px;">
		// 				<span class="top"><input type="text" class="input-dotted"></span>
		// 				<span class="bottom"><input type="text" class="input-dotted"></span>
		// 			</div>
		// 			<div class="d-inline-block" style="height: 50px;">
		// 				<select class="opt">
		// 					<option value="+">+</option>
		// 					<option value="-">-</option>
		// 					<option value="=">=</option>
		// 				</select>
		// 			</div>
		// 			<div type="button" class="close" data-dismiss="alert" aria-label="Close">
		// 				<span aria-hidden="true">&times;</span>
		// 			</div>
		// 		</div>
		// 	</div>
		// 	`);
		// });
	</script>
</body>

</html>