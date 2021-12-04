<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Mengenal Pecahan</title>
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

		.table-bordered,
		.table-bordered td,
		.table-bordered th {
			border: 1px solid black;
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
			<span class="d-block d-lg-none">Mengenal Pecahan</span>
			<span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?= base_url('assets/soal/') ?>assets/img/1.webp" alt="..." /></span>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav">
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Penjelasan</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#ayoMenyimak">Ayo Menyimak</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#ayoMenemukan">ayo Menemukan</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#ayoMencoba">ayo Mencoba</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#AyoBerlatih">Ayo Berlatih</a></li>
				<!-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Awards</a></li> -->
			</ul>
		</div>
	</nav>
	<!-- Page Content-->
	<div class="container-fluid p-0">
		<!-- About-->
		<section class="resume-section" id="about">
			<div class="resume-section-content">
				<div class="card">
					<div class="card-body">
						<h2 class="mb-0">
							Mengenal
							<span class="text-primary">Pecahan</span>
						</h2>
					</div>
				</div>
				<div class="card mt-1">
					<div class="card-body">
						<h1 class="mb-0">
							<p class="lead mb-5">Bilangan pecahan merupakan bilangan yang terdiri atas dua angka, yakni angka sebagai pembilang dan angka sebagai pembagi atau penyebut</p>
						</h1>
					</div>
				</div>
			</div>
		</section>
		<hr class="m-0" />

		<!-- Ayo Menyimak-->
		<section class="resume-section" id="ayoMenyimak">
			<div class="resume-section-content">
				<!-- <div class="row"> -->
				<div class="card">
					<div class="card-body">
						<h2>Ayo Menyimak</h2>
					</div>
				</div>

				<!-- <img class="col-4 img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 1\1.webp') ?>" alt="no image"> -->

				<!-- </div> -->
				<img class="img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 1\2.webp') ?>" alt="no image">
				<img class="img-fluid mx-auto d-block w-75" src="<?= base_url('assets\soal\assets\img\bab 1\3.webp') ?>" alt="no image">
				<hr class="m-0 m-3" />

				<table class="table table-borderless">
					<tr>
						<td colspan="3">Pada suatu hari ibu membeli roti di swalayan.</td>
					</tr>
					<tr>
						<th>Ibu</th>
						<td>:</td>
						<td>“Kak, ibu tadi beli roti. Bagi setengah dengan adik ya!”</td>
					</tr>
					<tr>
						<th>Kakak dan adik</th>
						<td>:</td>
						<td>“Asik!, Terima kasih, Ibu.”</td>
					</tr>
					<tr>
						<th>Kakak</th>
						<td>:</td>
						<td>“Dik, ini bagianmu ya.”</td>
					</tr>
					<tr>
						<th>Adik</th>
						<td>:</td>
						<td>“Kok bagianku lebih kecil? Kata Ibu dibagi setengahnya kak.”</td>
					</tr>
					<tr>
						<th>Kakak</th>
						<td>:</td>
						<td>“Kan kamu masih kecil dik.”</td>
					</tr>
					<tr>
						<td colspan="3">
							<figure class="figure">
								<img class="figure-img img-fluid mx-auto d-block w-50" src="<?= base_url('assets\soal\assets\img\bab 1\4.webp') ?>" alt="no image">
								<figcaption class="figure-caption text-center">Gambar : Keluarga </figcaption>
								<figcaption class="figure-caption text-center">Sumber : canva.com </figcaption>
							</figure>
						</td>
					</tr>
					<tr>
						<th>Ibu</th>
						<td>:</td>
						<td>“Ada apa ini?”</td>
					</tr>
					<tr>
						<th>Adik</th>
						<td>:</td>
						<td>“Kakak tidak adil bu. Tadi Ibu bilang kalau rotinya dibagi setengah.”</td>
					</tr>
					<tr>
						<th>Ibu</th>
						<td>:</td>
						<td>“Kakak, maksud ibu setengah itu rotinya dibagi menjadi dua sama besar. Satu bagian atau setengahnya untuk Adik, lalu setengahnya lagi untuk Kakak. Kata setengah itu biasa ditulis seperdua atau
							<div class="fraction align-middle">
								<span class="top">1</span>
								<span class="bottom">2</span>
							</div>
							.”
						</td>
					</tr>
					<tr>
						<td colspan="3">
							<figure class="figure">
								<img class="figure-img img-fluid mx-auto d-block w-75" src="<?= base_url('assets\soal\assets\img\bab 1\5.webp') ?>" alt="no image">
								<figcaption class="figure-caption text-center">Gambar : Kue </figcaption>
								<figcaption class="figure-caption text-center">Sumber : canva.com </figcaption>
							</figure>
						</td>
					</tr>
					<tr>
						<th>Ibu</th>
						<td>:</td>
						<td>“Roti ini juga bisa dibagi menjadi empat untuk Adik, Kakak, Ibu dan Ayah.”</td>
					</tr>
					<tr>
						<th>Kakak</th>
						<td>:</td>
						<td>“Setuju bu kalau kita bagi empat semua akan makan roti ini.”</td>
					</tr>
					<tr>
						<th>Adik</th>
						<td>:</td>
						<td>“Ibu, kalau rotinya dibagi empat berarti bukan setengahnya lagi, kan?”</td>
					</tr>
					<tr>
						<th>Ibu</th>
						<td>:</td>
						<td>“Iya dik kamu benar sekali, jika rotinya dibagi empat aka nada 4 potong roti yang sama besar. Setiap bagian roti disebut dengan seperempat atau ditulis <div class="fraction align-middle">
								<span class="top">1</span>
								<span class="bottom">4</span>
							</div>
							. Jadi, masing-masing memperoleh <div class="fraction align-middle">
								<span class="top">1</span>
								<span class="bottom">4</span>
							</div>
							bagian.”</td>
					</tr>
					<tr>
						<td colspan="3">
							<img class="figure-img img-fluid mx-auto d-block w-75" src="<?= base_url('assets\soal\assets\img\bab 1\7.webp') ?>" alt="no image">
						</td>
					</tr>
					<tr>
						<th>Kakak</th>
						<td>:</td>
						<td>“Bu, kalau kakak ambil bagian Ibu, maka bagian kakak adalah 2 bagian dari 4 bagian yang ada. Pada pecahan ditulis
							<div class="fraction align-middle">
								<span class="top">2</span>
								<span class="bottom">4</span>
							</div>
							atau setengah.”
						</td>
					</tr>
					<tr>
						<th>Adik</th>
						<td>:</td>
						<td>“Wah kakak curang bu!”</td>
					</tr>
					<tr>
						<th>Ibu dan Kakak</th>
						<td>:</td>
						<td>“Hahahaha..” (Tertawa)</td>
					</tr>

				</table>
			</div>
		</section>
		<hr class="m-0" />

		<!-- ayoMenemukan-->
		<section class="resume-section" id="ayoMenemukan">
			<div class="resume-section-content">
				<div class="card mb-5">
					<div class="card-body">
						<h2>ayo Menemukan</h2>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<div class="card border-warning mt-3 mb-3">
							<div class="card-body">
								Mari menentukan bentuk pecahan dari bagian roti yang diambil pada gambar di bawah ini!
							</div>
						</div>
						<table class="table table-bordered border-dark text-center">
							<tr>
								<th>Bagian keseluruhan roti</th>
								<th>Bagian roti yang diambil</th>
								<th>Pecahan</th>
							</tr>
							<tr>
								<td>
									<img style="min-width: 50px; width: 100px;" class="img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 1\6.webp') ?>" alt="no image">
								</td>
								<td>
									<img style="min-width: 50px; width: 100px;" class="img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 1\8.webp') ?>" alt="no image">
								</td>
								<td>
									<div class="fraction align-middle">
										<span class="top">2</span>
										<span class="bottom">4</span>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<img style="min-width: 50px; width: 100px;" class="img-fluid mx-auto d-block " src="<?= base_url('assets\soal\assets\img\bab 1\11.webp') ?>" alt="no image">
								</td>
								<td>
									<img style="min-width: 50px; width: 100px;" class="img-fluid mx-auto d-block " src="<?= base_url('assets\soal\assets\img\bab 1\12.webp') ?>" alt="no image">
								</td>
								<td>
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input1" data-correct="1" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input2" data-correct="2" class="input-dotted"></span>
									</div>

								</td>
							</tr>
							<tr>
								<td>
									<img style="min-width: 50px; width: 100px;" class="img-fluid mx-auto d-block " src="<?= base_url('assets\soal\assets\img\bab 1\6.webp') ?>" alt="no image">
								</td>
								<td>
									<img style="min-width: 50px; width: 100px;" class="img-fluid mx-auto d-block " src="<?= base_url('assets\soal\assets\img\bab 1\13.webp') ?>" alt="no image">
								</td>
								<td>
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input3" data-correct="1" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input4" data-correct="4" class="input-dotted"></span>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<img style="min-width: 50px; width: 100px;" class="img-fluid mx-auto d-block " src="<?= base_url('assets\soal\assets\img\bab 1\6.webp') ?>" alt="no image">
								</td>
								<td>
									<img style="min-width: 50px; width: 100px;" class="img-fluid mx-auto d-block " src="<?= base_url('assets\soal\assets\img\bab 1\9.webp') ?>" alt="no image">
								</td>
								<td>
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input5" data-correct="3" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input6" data-correct="4" class="input-dotted"></span>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<img style="min-width: 50px; width: 100px;" class="img-fluid mx-auto d-block " src="<?= base_url('assets\soal\assets\img\bab 1\10.webp') ?>" alt="no image">
								</td>
								<td>
									<img style="min-width: 50px; width : 100px" class="img-fluid mx-auto d-block " src="<?= base_url('assets\soal\assets\img\bab 1\15.webp') ?>" alt="no image">
								</td>
								<td>
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input7" data-correct="1" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input8" data-correct="8" class="input-dotted"></span>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<img style="min-width: 50px; width: 100px;" class="img-fluid mx-auto d-block " src="<?= base_url('assets\soal\assets\img\bab 1\10.webp') ?>" alt="no image">
								</td>
								<td>
									<img style="min-width: 50px; width: 100px;" class="img-fluid mx-auto d-block " src="<?= base_url('assets\soal\assets\img\bab 1\14.webp') ?>" alt="no image">
								</td>
								<td>
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input9" data-correct="2" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input10" data-correct="8" class="input-dotted"></span>
									</div>
								</td>
							</tr>
						</table>
						<div class="card border-danger">
							<div class="card-body" style="text-align: center;">
								Pecahan terdiri dari pembilang dan penyebut.
								<br>
								<div class="fraction align-middle">
									<span class="top">Pembilang</span>
									<span class="bottom">Penyebut</span>
								</div>
								<br>
								Pembilang merupakan bagian yang diambil dan penyebut bagian keseluruhan.
							</div>
						</div>
					</div>
				</div>

			</div>
		</section>
		<hr class="m-0" />

		<!-- ayoMencoba-->
		<section class="resume-section" id="ayoMencoba">
			<div class="resume-section-content">
				<div class="card">
					<div class="card-body">
						<h2>Ayo Mencoba</h2>
					</div>
				</div>
				<img class="figure-img img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 1\17.webp') ?>" alt="no image">

				<div class="card">
					<div class="card-body">
						<div class="card border-warning mb-3">
							<div class="card-body">
								Mari menentukan pecahan dari cokelat berikut!
							</div>
						</div>
						<table class="table table-bordered border-dark text-center">
							<tr>
								<th>Coklat</th>
								<th>Bentuk pecahan cokelat yang tersisa</th>
							</tr>
							<tr>
								<td>
									<img style="min-width: 120px;" class="w-50 img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 1\18.webp') ?>" alt="no image">
								</td>
								<td>
									<div class="fraction align-middle">
										<span class="top">1</span>
										<span class="bottom">1</span>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<img style="min-width: 120px;" class="w-50 img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 1\19.webp') ?>" alt="no image">
								</td>
								<td>
									<div class="fraction align-middle">
										<span class="top">1</span>
										<span class="bottom">4</span>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<img style="min-width: 120px;" class="w-50 img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 1\20.webp') ?>" alt="no image">
								</td>
								<td>
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input11" data-correct="1" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input12" data-correct="6" class="input-dotted"></span>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<img style="min-width: 120px;" class="w-50 img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 1\21.webp') ?>" alt="no image">
								</td>
								<td>
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input13" data-correct="1" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input14" data-correct="8" class="input-dotted"></span>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<img style="min-width: 120px;" class="w-50 img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 1\22.webp') ?>" alt="no image">
								</td>
								<td>
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input15" data-correct="1" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input16" data-correct="10" class="input-dotted"></span>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<img style="min-width: 120px;" class="w-50 img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 1\23.webp') ?>" alt="no image">
								</td>
								<td>
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input17" data-correct="1" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input18" data-correct="12" class="input-dotted"></span>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<img style="min-width: 120px;" class="w-50 img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 1\24.webp') ?>" alt="no image">
								</td>
								<td>
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input19" data-correct="1" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input20" data-correct="14" class="input-dotted"></span>
									</div>
								</td>
							</tr>
						</table>
					</div>
				</div>

				<!-- <hr class="m-0" />
				<div class="card border-success mb-3">
					<div class="card-body">
						Sayur bayam salah satu sayuran yang mengandung zat besi. Zat besi bermanfaat untuk menjaga Kesehatan tubuh supaya kita tidak terserang anemia atau kekurangan darah.
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<h5 class="text-center">Perhatikan 10 gambar sayur bayam di bawah ini!</h5>
					</div>
					<div class="card-body">
						<img class="img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 1\25.webp') ?>" alt="no image">
					</div>
				</div>

				<div class="card border-warning mt-3 mb-3">
					<div class="card-body">
						Tentukan bentuk pecahan banyaknya bayam berikut yang diambil dari 10 bayam di atas!
					</div>
				</div>
				<table class="table table-bordered border-dark text-center">
					<tr>
						<th>Banyaknya bayam yang diambil</th>
						<th>Pecahan</th>
					</tr>
					<tr>
						<td>
							<img style="min-width: 175px;" class="w-50 img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 1\26.webp') ?>" alt="no image">
						</td>
						<td>
							<div class="fraction align-middle">
								<span class="top"><input type="text" id="input49" data-correct="3" class="input-dotted"></span>
								<span class="bottom"><input type="text" id="input50" data-correct="10" class="input-dotted"></span>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<img style="min-width: 175px;" class="w-50 img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 1\27.webp') ?>" alt="no image">
						</td>
						<td>
							<div class="fraction align-middle">
								<span class="top"><input type="text" id="input51" data-correct="2" class="input-dotted"></span>
								<span class="bottom"><input type="text" id="input52" data-correct="10" class="input-dotted"></span>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<img style="min-width: 175px;" class="w-50 img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 1\28.webp') ?>" alt="no image">
						</td>
						<td>
							<div class="fraction align-middle">
								<span class="top"><input type="text" id="input53" data-correct="5" class="input-dotted"></span>
								<span class="bottom"><input type="text" id="input54" data-correct="10" class="input-dotted"></span>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<img style="min-width: 175px;" class="w-50 img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 1\29.webp') ?>" alt="no image">
						</td>
						<td>
							<div class="fraction align-middle">
								<span class="top"><input type="text" id="input55" data-correct="7" class="input-dotted"></span>
								<span class="bottom"><input type="text" id="input56" data-correct="10" class="input-dotted"></span>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<img style="min-width: 175px;" class="w-50 img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 1\30.webp') ?>" alt="no image">
						</td>
						<td>
							<div class="fraction align-middle">
								<span class="top"><input type="text" id="input57" data-correct="6" class="input-dotted"></span>
								<span class="bottom"><input type="text" id="input58" data-correct="10" class="input-dotted"></span>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<img style="min-width: 175px;" class="w-50 img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 1\31.webp') ?>" alt="no image">
						</td>
						<td>
							<div class="fraction align-middle">
								<span class="top"><input type="text" id="input59" data-correct="4" class="input-dotted"></span>
								<span class="bottom"><input type="text" id="input60" data-correct="10" class="input-dotted"></span>
							</div>
						</td>
					</tr>
				</table> -->


			</div>
		</section>
		<hr class="m-0" />

		<!-- AyoBerlatih-->
		<section class="resume-section" id="AyoBerlatih">
			<div class="resume-section-content">
				<div class="card mb-3">
					<div class="card-body">
						<h2>Ayo Berlatih</h2>
					</div>
				</div>
				<div class="card mb-3">
					<div class="card-body">
						<div class="card border-warning mb-3">
							<div class="card-body">
								Perhatikan gambar di bawah ini! Tentukan bentuk pecahannya!
							</div>
						</div>
						<table class="table table-bordered border-dark">
							<tr>
								<td>
									<figure class="figure">
										<img class="figure-img img-fluid mx-auto d-block w-5" src="<?= base_url('assets\soal\assets\img\bab 1\32.webp') ?>" alt="no image">
										<figcaption class="figure-caption text-center">
											<div class="fraction align-middle">
												<span class="top">1</span>
												<span class="bottom">1</span>
											</div>
										</figcaption>
									</figure>
								</td>
								<td>
									<figure class="figure">
										<img class="figure-img img-fluid mx-auto d-block w-5" src="<?= base_url('assets\soal\assets\img\bab 1\33.webp') ?>" alt="no image">
										<figcaption class="figure-caption text-center">
											<div class="fraction align-middle">
												<span class="top">1</span>
												<span class="bottom">2</span>
											</div>
										</figcaption>
									</figure>
								</td>
								<td>
									<figure class="figure">
										<img class="figure-img img-fluid mx-auto d-block w-5" src="<?= base_url('assets\soal\assets\img\bab 1\34.webp') ?>" alt="no image">
										<figcaption class="figure-caption text-center">
											<div class="fraction align-middle">
												<span class="top">1</span>
												<span class="bottom">4</span>
											</div>
										</figcaption>
									</figure>
								</td>
							</tr>

							<tr>
								<td>
									<figure class="figure">
										<img class="figure-img img-fluid mx-auto d-block w-5" src="<?= base_url('assets\soal\assets\img\bab 1\35.webp') ?>" alt="no image">
										<figcaption class="figure-caption text-center">
											<div class="fraction align-middle">
												<span class="top"><input type="text" id="input61" data-correct="1" class="input-dotted"></span>
												<span class="bottom"><input type="text" id="input62" data-correct="1" class="input-dotted"></span>
											</div>
										</figcaption>
									</figure>
								</td>
								<td>
									<figure class="figure">
										<img class="figure-img img-fluid mx-auto d-block w-5" src="<?= base_url('assets\soal\assets\img\bab 1\36.webp') ?>" alt="no image">
										<figcaption class="figure-caption text-center">
											<div class="fraction align-middle">
												<span class="top"><input type="text" id="input63" data-correct="1" class="input-dotted"></span>
												<span class="bottom"><input type="text" id="input64" data-correct="8" class="input-dotted"></span>
											</div>
										</figcaption>
									</figure>
								</td>
								<td>
									<figure class="figure">
										<img class="figure-img img-fluid mx-auto d-block w-5" src="<?= base_url('assets\soal\assets\img\bab 1\37.webp') ?>" alt="no image">
										<figcaption class="figure-caption text-center">
											<div class="fraction align-middle">
												<span class="top"><input type="text" id="input65" data-correct="1" class="input-dotted"></span>
												<span class="bottom"><input type="text" id="input66" data-correct="5" class="input-dotted"></span>
											</div>
										</figcaption>
									</figure>
								</td>
							</tr>

							<tr>
								<td>
									<figure class="figure">
										<img class="figure-img img-fluid mx-auto d-block w-5" src="<?= base_url('assets\soal\assets\img\bab 1\38.webp') ?>" alt="no image">
										<figcaption class="figure-caption text-center">
											<div class="fraction align-middle">
												<span class="top"><input type="text" id="input67" data-correct="1" class="input-dotted"></span>
												<span class="bottom"><input type="text" id="input68" data-correct="1" class="input-dotted"></span>
											</div>
										</figcaption>
									</figure>
								</td>
								<td>
									<figure class="figure">
										<img class="figure-img img-fluid mx-auto d-block w-5" src="<?= base_url('assets\soal\assets\img\bab 1\39.webp') ?>" alt="no image">
										<figcaption class="figure-caption text-center">
											<div class="fraction align-middle">
												<span class="top"><input type="text" id="input69" data-correct="1" class="input-dotted"></span>
												<span class="bottom"><input type="text" id="input70" data-correct="2" class="input-dotted"></span>
											</div>
										</figcaption>
									</figure>
								</td>
								<td>
									<figure class="figure">
										<img class="figure-img img-fluid mx-auto d-block w-5" src="<?= base_url('assets\soal\assets\img\bab 1\40.webp') ?>" alt="no image">
										<figcaption class="figure-caption text-center">
											<div class="fraction align-middle">
												<span class="top"><input type="text" id="input71" data-correct="1" class="input-dotted"></span>
												<span class="bottom"><input type="text" id="input72" data-correct="6" class="input-dotted"></span>
											</div>
										</figcaption>
									</figure>
								</td>
							</tr>

							<tr>
								<td>
									<figure class="figure">
										<img class="figure-img img-fluid mx-auto d-block w-5" src="<?= base_url('assets\soal\assets\img\bab 1\41.webp') ?>" alt="no image">
										<figcaption class="figure-caption text-center">
											<div class="fraction align-middle">
												<span class="top"><input type="text" id="input73" data-correct="1" class="input-dotted"></span>
												<span class="bottom"><input type="text" id="input74" data-correct="1" class="input-dotted"></span>
											</div>
										</figcaption>
									</figure>
								</td>
								<td>
									<figure class="figure">
										<img class="figure-img img-fluid mx-auto d-block w-5" src="<?= base_url('assets\soal\assets\img\bab 1\42.webp') ?>" alt="no image">
										<figcaption class="figure-caption text-center">
											<div class="fraction align-middle">
												<span class="top"><input type="text" id="input75" data-correct="1" class="input-dotted"></span>
												<span class="bottom"><input type="text" id="input76" data-correct="2" class="input-dotted"></span>
											</div>
										</figcaption>
									</figure>
								</td>
								<td>
									<figure class="figure">
										<img class="figure-img img-fluid mx-auto d-block w-5" src="<?= base_url('assets\soal\assets\img\bab 1\43.webp') ?>" alt="no image">
										<figcaption class="figure-caption text-center">
											<div class="fraction align-middle">
												<span class="top"><input type="text" id="input77" data-correct="1" class="input-dotted"></span>
												<span class="bottom"><input type="text" id="input78" data-correct="4" class="input-dotted"></span>
											</div>
										</figcaption>
									</figure>
								</td>
							</tr>
						</table>
						<div class="card border-warning mb-5">
							<div class="card-body">
								Tentukanlah bentuk pecahan daerah yang diarsir! Ingatlah bahwa setiap bagian harus sama besar.
							</div>
						</div>
						<table class="table table-bordered border-dark">
							<tr>
								<td>
									<img style="min-width: 100px;" class="w-25 img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 1\44.webp') ?>" alt="no image">
								</td>
								<td>
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input79" data-correct="1" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input80" data-correct="6" class="input-dotted"></span>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<img style="min-width: 100px;" class="w-25 img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 1\45.webp') ?>" alt="no image">
								</td>
								<td>
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input81" data-correct="2" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input82" data-correct="6" class="input-dotted"></span>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<img style="min-width: 100px;" class="w-25 img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 1\46.webp') ?>" alt="no image">
								</td>
								<td>
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input83" data-correct="1" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input84" data-correct="2" class="input-dotted"></span>
									</div>
								</td>
							</tr>
						</table>
						<div class="card border-warning mb-5">
							<div class="card-body">
								Pilihlah pecahan yang sesuai dengan gambar di bawah ini!
							</div>
						</div>
						<table class="table table-bordered border-dark">
							<tr>
								<td style="width: 55%;">
									<img style="min-width:120px ;width: 200px;" class="img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 1\47.webp') ?>" alt="no image">
								</td>
								<td style="width: 15%;" class="align-middle">
									<input type="radio" name="pilihan1" value="0" id="">
									<div class="fraction align-middle">
										<span class="top">2</span>
										<span class="bottom">3</span>
									</div>
								</td>
								<td style="width: 15%;" class="align-middle">
									<input type="radio" name="pilihan1" value="1" id="">
									<div class="fraction align-middle">
										<span class="top">1</span>
										<span class="bottom">2</span>
									</div>
								</td>
								<td style="width: 15%;" class="align-middle">
									<input type="radio" name="pilihan1" value="0" id="">
									<div class="fraction align-middle">
										<span class="top">1</span>
										<span class="bottom">4</span>
									</div>
								</td>
							</tr>
							<tr>
								<td style="width: 55%;">
									<img style="min-width:120px ;width: 100px;" class="img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 1\48.webp') ?>" alt="no image">
								</td>

								<td style="width: 15%;" class="align-middle">
									<input type="radio" name="pilihan2" value="1" id="">
									<div class="fraction align-middle">
										<span class="top">1</span>
										<span class="bottom">8</span>
									</div>
								</td>
								<td style="width: 15%;" class="align-middle">
									<input type="radio" name="pilihan2" value="0" id="">
									<div class="fraction align-middle">
										<span class="top">2</span>
										<span class="bottom">6</span>
									</div>
								</td>
								<td style="width: 15%;" class="align-middle">
									<input type="radio" name="pilihan2" value="0" id="">
									<div class="fraction align-middle">
										<span class="top">1</span>
										<span class="bottom">4</span>
									</div>
								</td>

							</tr>
							<tr>
								<td style="width: 55%;">
									<img style="min-width:120px ;width: 200px;" class="img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 1\49.webp') ?>" alt="no image">
								</td>
								<td style="width: 15%;" class="align-middle">
									<input type="radio" name="pilihan3" value="0" id="">
									<div class="fraction align-middle">
										<span class="top">1</span>
										<span class="bottom">2</span>
									</div>
								</td>
								<td style="width: 15%;" class="align-middle">
									<input type="radio" name="pilihan3" value="0" id="">
									<div class="fraction align-middle">
										<span class="top">2</span>
										<span class="bottom">3</span>
									</div>
								</td>
								<td style="width: 15%;" class="align-middle">
									<input type="radio" name="pilihan3" value="1" id="">
									<div class="fraction align-middle">
										<span class="top">1</span>
										<span class="bottom">4</span>
									</div>
								</td>
							</tr>
							<tr>
								<td style="width: 55%;">
									<img style="min-width:120px ;width: 100px;" class="img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 1\50.webp') ?>" alt="no image">
								</td>
								<td style="width: 15%;" class="align-middle">
									<input type="radio" name="pilihan4" value="1" id="">
									<div class="fraction align-middle">
										<span class="top">1</span>
										<span class="bottom">2</span>
									</div>
								</td>
								<td style="width: 15%;" class="align-middle">
									<input type="radio" name="pilihan4" value="0" id="">
									<div class="fraction align-middle">
										<span class="top">1</span>
										<span class="bottom">4</span>
									</div>
								</td>
								<td style="width: 15%;" class="align-middle">
									<input type="radio" name="pilihan4" value="0" id="">
									<div class="fraction align-middle">
										<span class="top">2</span>
										<span class="bottom">3</span>
									</div>
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
			var isian = 0;
			var soal = 0;
			$(".input-dotted").each(function() {
				if ($(this).val() != $(this).attr('data-correct')) {
					// console.log($(this).attr('id'));
					var jawaban = $(this).attr('data-correct');
					$(this).attr("data-toggle", "tooltip");
					$(this).attr("data-html", "true");
					$(this).attr("data-placement", "right");
					$(this).attr("title", "<em>Jawaban : </em> <b>" + jawaban + "</b>");
					$(this).css("border-bottom", "5px solid red");
				} else {
					isian++;
				}
				soal++;
			});
			console.log(soal);
			$(function() {
				$('[data-toggle="tooltip"]').tooltip()
			})

			var pilihan = 0;
			for (let index = 1; index <= 4; index++) {
				var rad = $('input[name="pilihan' + index + '"]:checked');
				pilihan = pilihan + parseInt(rad.val());
				if (rad.val() == 0) {
					rad.closest("td").css("background", "red");
				}
			}

			$("input[type='radio'][value='1']").closest("td").css("background", "#8ed278")

			var totalSkor = Math.round((isian + pilihan) / 48 * 100);
			if (isNaN(totalSkor)) {
				totalSkor = 0;
			}
			Swal.fire(
				'Skor Kamu : ' + totalSkor,
				'Semangat, Tetap Belajar lagi ya :)',
				'success'
			)
			$("#selesai").attr("disabled", "disabled")
		});
	</script>
</body>

</html>
