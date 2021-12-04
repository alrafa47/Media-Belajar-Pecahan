<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Pecahan Senilai</title>
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
			width: max-content;
		}

		.bottom {
			border-top: 1px solid #000;
			display: block;
		}

		.table-bordered,
		.table-bordered td,
		.table-bordered th {
			border: 1px solid black;
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

		.input {
			width: 35px;
			/* padding: 12px 20px; */
			margin: 5px;
			box-sizing: border-box;
			border: none;
		}
	</style>
</head>

<body id="page-top">
	<!-- Navigation-->
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
		<a class="navbar-brand js-scroll-trigger" href="#page-top">
			<span class="d-block d-lg-none">Pecahan Senilai</span>
			<span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?= base_url('assets/soal/') ?>assets/img/2.webp" alt="..." /></span>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav">
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Penjelasan</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#ayoMenyimak1">Ayo Menyimak 1 </a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#ayoMencoba1">ayo Mencoba 1</a></li>
				<!-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#ayoMenemukan1">ayo Menemukan 1</a></li> -->
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#AyoBerlatih1">Ayo Berlatih 1</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#ayoMenyimak2">ayo Menyimak 2</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#ayoMenemukan2">ayo Menemukan</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#ayoMencoba2">ayo Mencoba 2</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#AyoBerlatih2">Ayo Berlatih 2</a></li>
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
							<span class="text-primary">Pecahan</span>
							Senilai
						</h2>
					</div>
				</div>
				<div class="card mt-1">
					<div class="card-body">
						<h1 class="mb-0">
							<p class="lead mb-5">Pecahan yang berbeda dapat bernilai sama asalkan perbandingannya tetap. Pecahan tersebut dinamakan pecahan senilai. Pecahan senilai merujuk pada pecahan yang nilainya tetap sama ketika pembilang dan penyebut dari sebuah pecahan dikalikan atau dibagi dengan bilangan yang sama</p>
						</h1>
					</div>
				</div>
			</div>
		</section>
		<hr class="m-0" />

		<!-- Ayo Menyimak 1-->
		<section class="resume-section" id="ayoMenyimak1">
			<div class="resume-section-content">
				<!-- <div class="row"> -->
				<div class="card">
					<div class="card-body">
						<h2>Ayo Menyimak</h2>
					</div>
				</div>

				<table class="table table-borderless">
					<tr>
						<td>
							<p>Hari ini ayah membantu ibu menggoreng tempe. Kakak dan Adik sangat senang. Tempe yang digoreng ayah berjumlah 8 biji yang dimasukkan ke dalam 4 tempat yang berbeda. Ayah pun bertanya:</p>
						</td>
					</tr>
					<tr>
						<td>
							<figure class="figure">
								<img class="figure-img img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 2\1.webp') ?>" alt="no image">
								<figcaption class="figure-caption text-center">Gambar : Keluarga </figcaption>
								<figcaption class="figure-caption text-center">Sumber : canva.com </figcaption>
							</figure>
						</td>
					</tr>
				</table>
			</div>
		</section>
		<hr class="m-0" />

		<!-- Ayo Mencoba 1-->
		<section class="resume-section" id="ayoMencoba1">
			<div class="resume-section-content">
				<!-- <div class="row"> -->
				<div class="card">
					<div class="card-body">
						<h2>Ayo Mencoba</h2>
					</div>
				</div>

				<table class="table table-borderless">
					<tr>
						<td>
							Kamu telah mengamati perbedaan jawaban Kakak dan Adik. Kamu juga sudah mengemukakan alasan perbedaan antara
							<div class="fraction align-middle">
								<span class="top">1</span>
								<span class="bottom">4</span>
							</div> atau <div class="fraction align-middle">
								<span class="top">2</span>
								<span class="bottom">8</span>
							</div>.
							<p>
								Sekarang mari kita buktikan jawaban Kakak dan Adik dengan menggunakan tempe.
							</p>
						</td>
					</tr>
					<tr>
						<td>
							<figure class="figure">
								<img class="img-fluid mx-auto d-block w-75" src="<?= base_url('assets\soal\assets\img\bab 2\2.webp') ?>" alt="no image">
								<figcaption class="figure-caption text-center">Gambar : Tempe </figcaption>
								<figcaption class="figure-caption text-center">Sumber : canva.com </figcaption>
							</figure>
						</td>
					</tr>
					<tr>
						<td>
							<img class="img-fluid mx-auto d-block w-75" src="<?= base_url('assets\soal\assets\img\bab 2\3.webp') ?>" alt="no image">
						</td>
					</tr>
					<tr>
						<td>
							<div class="card border-danger">
								<div class="card-body">
									<p>Anggaplah kotak di bawah ini adalah tempe. Perhatikan kedua tempe berikut! Tempe pertama akan dibagi menjadi 4 bagian lalu tempe kedua akan dibagi menjadi 8 bagian. Ingat ketika membagi, kita pastikan bahwa potongannya sama besar.</p>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<img class="img-fluid mx-auto d-block w-75" src="<?= base_url('assets\soal\assets\img\bab 2\4.webp') ?>" alt="no image">
						</td>
					</tr>
					<tr>
						<td>
							<div class="card border-danger">
								<div class="card-body">
									Asirlah
									<div class="fraction align-middle">
										<span class="top">1</span>
										<span class="bottom">4</span>
									</div> ada tempe pertama dan <div class="fraction align-middle">
										<span class="top">2</span>
										<span class="bottom">8</span>
									</div> pada tempe kedua!
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<img class="img-fluid mx-auto d-block w-75" src="<?= base_url('assets\soal\assets\img\bab 2\5.webp') ?>" alt="no image">
						</td>
					</tr>
					<tr>
						<td>
							<div class="card border-warning">
								<div class="card-body">
									Apakah menurutmu <div class="fraction align-middle">
										<span class="top">1</span>
										<span class="bottom">4</span>
									</div> sama dengan <div class="fraction align-middle">
										<span class="top">2</span>
										<span class="bottom">8</span>
									</div> ?
									<br>
									<div>
										<input type="radio" name="pilihan1" value="1">Sama
									</div>
									<div>
										<input type="radio" name="pilihan1" value="0">Tidak sama
									</div>
									<!-- <input type="text" style="width: 60px;" id="input1" data-correct="SAMA" class="input-dotted"> -->
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="card border-danger">
								<div class="card-body">
									Pecahan senilai adalah pecahan yang memiliki nilai yang sama .
								</div>
							</div>
						</td>
					</tr>
				</table>
			</div>
		</section>
		<hr class="m-0" />

		<!-- ayoMenemukan-->
		<!-- <section class="resume-section" id="ayoMenemukan1">
			<div class="resume-section-content">
				<div class="card">
					<div class="card-body">
						<h2>ayo Menemukan</h2>
					</div>
				</div>

				<table class="table table-borderless mt-2">
					<tr>
						<th class="border-warning text-center">
							Ayo Lakukan Dengan Kertas
						</th>
					</tr>
					<tr>
						<td>
							<p>Ambilah selembar kertas dan potong memanjang sehingga diperoleh dua lembar kertas yang sama panjang!</p>
						</td>
					</tr>
					<tr>
						<td>
							Kertas pertama <br>
							<img style="min-width: 120px; width: 700px;" class="img-fluid mx-auto d-block " src="<?= base_url('assets\soal\assets\img\bab 2\6.webp') ?>" alt="no image"><br>
							<ol>
								<li>Lipatlah kertas pertama tepat di tengah sehingga membentuk 2 bagian.</li>
								<li>Lipat lagi kertasnya sehingga menjadi 4 bagian.</li>
								<li>Tuliskan pecahan <div class="fraction">
										<span class="top">1</span>
										<span class="bottom">4</span>
									</div> di setiap bagian kertas.</li>
							</ol>
						</td>
					</tr>
					<tr>
						<td>
							Kertas kedua <br>
							<img style="min-width: 120px; width: 700px;" class="img-fluid mx-auto d-block " src="<?= base_url('assets\soal\assets\img\bab 2\6.webp') ?>" alt="no image"><br>
							<ol>
								<li>Lipatlah kertas kedua tepat di tengah sehingga membentuk 2 bagian.</li>
								<li>Lipat lagi kertas sehingga menjadi 4 bagian.</li>
								<li>Lipat lagi ketiga kalinya untuk memperoleh 8 bagian sama besar.</li>
								<li>Tuliskan pecahan <div class="fraction">
										<span class="top">1</span>
										<span class="bottom">8</span>
									</div> di setiap bagian kertas.</li>
							</ol>
						</td>
					</tr>
					<tr>
						<td>
							Potonglah 1 bagian kertas pertama dan 2 bagian kertas kedua! Kemudian jawab pertanyaan berikut:
							<ol>
								<li>Pecahan berapakah potongan kertas pertama?</li>
								<li>Pecahan berapakah potongan kertas kedua?</li>
								<li>Bandingkan kedua potongan kertas! Manakah yang memiliki bentuk pecahan yang bernilai sama besar?</li>
								<li>Apa kesimpulanmu?</li>
							</ol>
						</td>
					</tr>
				</table>
				<div class="card border-danger">
					<div class="card-body" style="text-align: center;">
						Pecahan senilai adalah pecahan yang memiliki nilai yang sama .
					</div>
				</div>
			</div>
		</section>
		<hr class="m-0" /> -->

		<!-- Ayo Berlatih -->
		<section class="resume-section" id="AyoBerlatih1">
			<div class="resume-section-content">
				<div class="card mb-5">
					<div class="card-body">
						<h2>Ayo Berlatih</h2>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<p>Pasangkanlah bentuk pecahan yang ada di sebelah kiri dengan bentuk pecahan senilai di sebelah kanan! Gunakanlah kertas seperti kegiatan di atas!</p>
						<table style="font-size: 30px;" class="table table-borderless text-center">
							<tr>
								<td style="width: 15%;" class=" align-middle">
									<div class="fraction" style="border: green 3px solid;">
										<span class="top">1</span>
										<span class="bottom">2</span>
									</div>
								</td>
								<td style="width: 10%;" class=" align-middle">
									<h2>
										C
									</h2>
								</td>
								<td style="width: 50%;"></td>
								<td class="align-middle">
									<h2>
										A
									</h2>
								</td>
								<td class="align-middle">
									<div class="fraction" style="border: purple 3px solid;">
										<span class="top">2</span>
										<span class="bottom">6</span>
									</div>
								</td>
							</tr>
							<tr>
								<td style="width: 15%;" class=" align-middle">
									<div class="fraction" style="border: blue 3px solid;">
										<span class="top">2</span>
										<span class="bottom">3</span>
									</div>
								</td>
								<td style="width: 10%;" class=" align-middle">
									<h2>
										<input style="height: 50%;" type="text" id="input2" data-correct="B" class="input-dotted">
									</h2>
								</td>
								<td style="width: 50%;"></td>
								<td class="align-middle">
									<h2>
										B
									</h2>
								</td>
								<td class="align-middle">
									<div class="fraction" style="border: orange 3px solid;">
										<span class="top">4</span>
										<span class="bottom">6</span>
									</div>
								</td>
							</tr>
							<tr>
								<td style="width: 15%;" class=" align-middle">
									<div class="fraction" style="border: yellow 3px solid;">
										<span class="top">1</span>
										<span class="bottom">3</span>
									</div>
								</td>
								<td style="width: 10%;" class=" align-middle">
									<h2>
										<input style="height: 50%;" type="text" id="input3" data-correct="A" class="input-dotted">
									</h2>
								</td>
								<td style="width: 50%;"></td>
								<td class="align-middle">
									<h2>
										C
									</h2>
								</td>
								<td class="align-middle">
									<div class="fraction" style="border: gray 3px solid;">
										<span class="top">2</span>
										<span class="bottom">4</span>
									</div>
								</td>
							</tr>
							<tr>
								<td style="width: 15%;" class=" align-middle">
									<div class="fraction" style="border: gray 3px solid;">
										<span class="top">3</span>
										<span class="bottom">4</span>
									</div>
								</td>
								<td style="width: 10%;" class=" align-middle">
									<h2>
										<input style="height: 50%;" type="text" id="input4" data-correct="D" class="input-dotted">
									</h2>
								</td>
								<td style="width: 50%;"></td>
								<td class="align-middle">
									<h2>
										D
									</h2>
								</td>
								<td class="align-middle">
									<div class="fraction" style="border: yellow 3px solid;">
										<span class="top">6</span>
										<span class="bottom">8</span>
									</div>
								</td>
							</tr>
							<tr>
								<td style="width: 15%;" class=" align-middle">
									<div class="fraction" style="border: orange 3px solid;">
										<span class="top">2</span>
										<span class="bottom">4</span>
									</div>
								</td>
								<td style="width: 10%;" class=" align-middle">
									<h2>
										<input style="height: 50%;" type="text" id="input5" data-correct="F" class="input-dotted">
									</h2>
								</td>
								<td style="width: 50%;"></td>
								<td class="align-middle">
									<h2>
										E
									</h2>
								</td>
								<td class="align-middle">
									<div class="fraction" style="border: blue 3px solid;">
										<span class="top">2</span>
										<span class="bottom">8</span>
									</div>
								</td>
							</tr>
							<tr>
								<td style="width: 15%;" class=" align-middle">
									<div class="fraction" style="border: purple 3px solid;">
										<span class="top">1</span>
										<span class="bottom">4</span>
									</div>
								</td>
								<td style="width: 10%;" class=" align-middle">
									<h2>
										<input style="height: 50%;" type="text" id="input6" data-correct="E" class="input-dotted">
									</h2>
								</td>
								<td style="width: 50%;"></td>
								<td class="align-middle">
									<h2>
										F
									</h2>
								</td>
								<td class="align-middle">
									<div class="fraction" style="border: green 3px solid;">
										<span class="top">4</span>
										<span class="bottom">8</span>
									</div>
								</td>
							</tr>
						</table>
					</div>
				</div>

			</div>
		</section>
		<hr class="m-0" />

		<!-- ayoMenyimak 2-->
		<section class="resume-section" id="ayoMenyimak2">
			<div class="resume-section-content">
				<div class="card mb-5">
					<div class="card-body">
						<h2>Ayo Menyimak</h2>
					</div>
				</div>
				<table class="table table-borderless">
					<tr>
						<td>
							<p>Kakak dan empat orang temannya sedang belajar tentang konsep pecahan. Ibu membawakan lima brownies dengan ukuran yang sama.</p>
						</td>
					</tr>
					<tr>
						<td>
							<figure class="figure">
								<img class="figure-img img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 2\7.webp') ?>" alt="no image">
								<figcaption class="figure-caption text-center">Gambar : brownies dan Ibu </figcaption>
								<figcaption class="figure-caption text-center">Sumber : canva.com </figcaption>
							</figure>
						</td>
					</tr>
					<tr>
						<td>
							<p>“Anak-anak, coba perhatikan kelima brownies ini. Ibu akan memotong kue ini sama besar dan akan memberikan kepada kalian.” </p>
							<ul>
								<li>
									Ibu memotong brownies pertama menjadi 2 bagian dan memberikan 1 bagian kepada kakak.
									<img class="figure-img img-fluid mx-auto d-block w-25" src="<?= base_url('assets\soal\assets\img\bab 2\9.webp') ?>" alt="no image">
								</li>
								<li>Ibu memotong brownies kedua menjadi 4 bagian dan memberikan 2 bagian kepada Arif.
									<img class="figure-img img-fluid mx-auto d-block w-25" src="<?= base_url('assets\soal\assets\img\bab 2\10.webp') ?>" alt="no image">
								</li>
								<li>Ibu memotong brownies ketiga menjadi 6 bagian dan memberikan 3 bagian kepada Akbar.
									<img class="figure-img img-fluid mx-auto d-block w-25" src="<?= base_url('assets\soal\assets\img\bab 2\11.webp') ?>" alt="no image">
								</li>
								<li>Ibu memotong brownies keempat menjadi 8 bagian dan memberikan 4 bagian kepada Dian.
									<img class="figure-img img-fluid mx-auto d-block w-25" src="<?= base_url('assets\soal\assets\img\bab 2\12.webp') ?>" alt="no image">
								</li>
								<li>Ibu memotong brownies kelima menjadi 10 bagian dan memberikan 5 bagian kepada Sari.
									<img class="figure-img img-fluid mx-auto d-block w-25" src="<?= base_url('assets\soal\assets\img\bab 2\13.webp') ?>" alt="no image">
								</li>
							</ul>
						</td>
					</tr>
				</table>
			</div>
		</section>
		<hr class="m-0" />

		<!-- ayoMenemukan 2-->
		<section class="resume-section" id="ayoMenemukan2">
			<div class="resume-section-content">
				<div class="card mb-3">
					<div class="card-body">
						<h2>Ayo Menemukan</h2>
					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<p>
							Kakak dan keempat temannya mengucapkan terima kasih kepada ibu. Sari bertanya kepada ibu, “Ibu, apakah tidak apa-apa saya mendapat potongan lebih banyak?” Ibu hanya tersenyum dan menjelaskan.
						</p>
						<p>
							Ayo menjawab pertanyaan dari ibu!
						</p>
						<p>
							1. Berapakah pecahan brownies yang diterima Kakak, Arif, Akbar, Dian, Sari masing-masing?
						</p>

						<table class="table table-bordered">
							<tr>
								<td class="align-middle">
									Kakak
									<img class="figure-img img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 2\9.webp') ?>" alt="no image">

								</td>
								<td class="align-middle">
									<div class="fraction">
										<span class="top"><input type="text" id="input7" data-correct="1" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input8" data-correct="2" class="input-dotted"></span>
									</div>
								</td>
							</tr>
							<tr>
								<td class="align-middle">
									Arif
									<img class="figure-img img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 2\10.webp') ?>" alt="no image">
								</td>
								<td class="align-middle">
									<div class="fraction">
										<span class="top"><input type="text" id="input9" data-correct="2" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input10" data-correct="4" class="input-dotted"></span>
									</div>
								</td>
							</tr>
							<tr>
								<td class="align-middle">
									Akbar
									<img class="figure-img img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 2\11.webp') ?>" alt="no image">
								</td>
								<td class="align-middle">
									<div class="fraction">
										<span class="top"><input type="text" id="input11" data-correct="3" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input12" data-correct="6" class="input-dotted"></span>
									</div>
								</td>
							</tr>
							<tr>
								<td class="align-middle">
									Dian
									<img class="figure-img img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 2\12.webp') ?>" alt="no image">

								</td>
								<td class="align-middle">
									<div class="fraction">
										<span class="top"><input type="text" id="input13" data-correct="4" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input14" data-correct="8" class="input-dotted"></span>
									</div>
								</td>
							</tr>
							<tr>
								<td class="align-middle">
									Sari
									<img class="figure-img img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 2\13.webp') ?>" alt="no image">
								</td>
								<td class="align-middle">
									<div class="fraction">
										<span class="top"><input type="text" id="input15" data-correct="5" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input16" data-correct="10" class="input-dotted"></span>
									</div>
								</td>
							</tr>
						</table>

						<p>
							2. Urutkan banyaknya brownies yang didapat masing-masing anak dari yang paling banyak ke yang paling sedikit. Gunakan bantuan kertas pecahan. Ingatlah untuk membagi setiap potongan kertas sama besar.
						</p>

						<p>silahkan geser nilai nilai pecahan berikut untuk mengurutkan pecahan</p>

						<div id="items-1" class="list-group row list-group-horizontal text-center">
							<div id="2" data-id="2" class="list-group-item col-2 ">
								<div class="fraction">
									<span class="top">4</span>
									<span class="bottom">8</span>
								</div>
							</div>
							<div id="5" data-id="5" class="list-group-item col-2 ">
								<div class="fraction">
									<span class="top">1</span>
									<span class="bottom">2</span>
								</div>
							</div>
							<div id="1" data-id="1" class="list-group-item col-3 ">
								<div class="fraction">
									<span class="top">5</span>
									<span class="bottom">10</span>
								</div>
							</div>
							<div id="4" data-id="4" class="list-group-item col-2 ">
								<div class="fraction">
									<span class="top">2</span>
									<span class="bottom">4</span>
								</div>
							</div>
							<div id="3" data-id="3" class="list-group-item col-2 ">
								<div class="fraction">
									<span class="top">3</span>
									<span class="bottom">6</span>
								</div>
							</div>
						</div>

						<div id="items-2" class="list-group row list-group-horizontal text-center d-none">
							<div style="background-color: #28a745;" class="list-group-item col-3 ">
								<div class="fraction">
									<span class="top">5</span>
									<span class="bottom">10</span>
								</div>
							</div>
							<div style="background-color: #28a745;" class="list-group-item col-2 ">
								<div class="fraction">
									<span class="top">4</span>
									<span class="bottom">8</span>
								</div>
							</div>
							<div style="background-color: #28a745;" class="list-group-item col-2 ">
								<div class="fraction">
									<span class="top">3</span>
									<span class="bottom">6</span>
								</div>
							</div>
							<div style="background-color: #28a745;" class="list-group-item col-2 ">
								<div class="fraction">
									<span class="top">2</span>
									<span class="bottom">4</span>
								</div>
							</div>
							<div style="background-color: #28a745;" class="list-group-item col-2 ">
								<div class="fraction">
									<span class="top">1</span>
									<span class="bottom">2</span>
								</div>
							</div>
						</div>
						<div class="card border-danger">
							<div class="card-body">
								<b>Pembilang</b> menunjukkan <b>bagian</b>, sedangkan <b>penyebut</b> menunjukkan <b>keseluruhan</b>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section>
		<hr class="m-0" />

		<!-- AyoMencoba 2-->
		<section class="resume-section" id="ayoMencoba2">
			<div class="resume-section-content">
				<div class="card mb-5">
					<div class="card-body">
						<h2>Ayo Mencoba</h2>
					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<p>Perhatikan perubahan pecahan berikut. Ayo temukan cara menentukan pecahan senilai!</p>
						<div class="table-responsive">
							<table class="table text-center">
								<tr>
									<td>
										<div class="fraction align-middle " style="border: blue 3px solid;">
											<span class="top">1</span>
											<span class="bottom">2</span>
										</div>
									<td>
										<span class="align-middle"><i style="font-size: 20px;" class="fas fa-arrow-right"></i></span>
									</td>

									<td>
										<div class="fraction align-middle" style="width: max-content; border: blue 3px solid;">
											<span class="top">1 X 2</span>
											<span class="bottom">2 X 2</span>
										</div>
									</td>
									<td>
										<span class="align-middle"><i style="font-size: 20px;" class="fas  fa-arrow-right"></i></span>
									</td>
									<td>
										<div class="fraction align-middle" style="border: blue 3px solid;">
											<span class="top">2</span>
											<span class="bottom">4</span>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="fraction" style="border: blue 3px solid;">
											<span class="top">1</span>
											<span class="bottom">2</span>
										</div>
									</td>
									<td>
										<i style="font-size: 20px;" class="fas fa-arrow-right"></i>
									</td>
									<td>
										<div class="fraction" style="border: blue 3px solid;">
											<span class="top">1 X 3</span>
											<span class="bottom">2 X 3</span>
										</div>
									</td>
									<td>
										<i style="font-size: 20px;" class="fas fa-arrow-right"></i>
									</td>
									<td>
										<div class="fraction" style="border: blue 3px solid;">
											<span class="top">3</span>
											<span class="bottom">6</span>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="fraction" style="border: blue 3px solid;">
											<span class="top">1</span>
											<span class="bottom">2</span>
										</div>
									</td>
									<td>
										<i style="font-size: 20px;" class="fas fa-arrow-right"></i>
									</td>
									<td>
										<div class="fraction" style="border: blue 3px solid;">
											<span class="top">1 X <input style="height: 50%; width: 20px;" type="text" data-correct="4" id="input17" class="input-dotted"></span>
											<span class="bottom">2 X <input style="height: 50%; width: 20px;" type="text" data-correct="4" id="input18" class="input-dotted"></span>
										</div>
									</td>
									<td>
										<i style="font-size: 20px;" class="fas fa-arrow-right"></i>
									</td>
									<td>
										<div class="fraction" style="border: blue 3px solid;">
											<span class="top">4</span>
											<span class="bottom">8</span>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="fraction" style="border: blue 3px solid;">
											<span class="top">1</span>
											<span class="bottom">2</span>
										</div>
									</td>
									<td>
										<i style="font-size: 20px;" class="fas fa-arrow-right"></i>
									</td>
									<td>
										<div class="fraction" style="border: blue 3px solid;">
											<span class="top">1 X <input style="height: 50%; width: 20px;" type="text" id="input19" data-correct="5" class="input-dotted"></span>
											<span class="bottom">2 X <input style="height: 50%; width: 20px;" type="text" id="input20" data-correct="5" class="input-dotted"></span>
										</div>
									</td>
									<td>
										<i style="font-size: 20px;" class="fas fa-arrow-right"></i>
									</td>
									<td>
										<div class="fraction" style="border: blue 3px solid;">
											<span class="top">5</span>
											<span class="bottom">10</span>
										</div>
									</td>
								</tr>
							</table>
						</div>
						<br>


						Ayo lakukan hal yang sama pada pecahan <div class="fraction align-middle">
							<span class="top">1</span>
							<span class="bottom">3</span>
						</div>
						<div class="table-responsive">
							<table class="table text-center">
								<tr>
									<td>
										<div class="fraction" style="border: blue 3px solid;">
											<span class="top">1</span>
											<span class="bottom">3</span>
										</div>
									</td>
									<td>
										<i style="font-size: 20px;" class="fas fa-arrow-right"></i>
									</td>
									<td>
										<div class="fraction" style="border: blue 3px solid;">
											<span class="top">1 X 2</span>
											<span class="bottom">3 X 2</span>
										</div>
									</td>
									<td>
										<i style="font-size: 20px;" class="fas fa-arrow-right"></i>
									</td>
									<td>
										<div class="fraction" style="border: blue 3px solid;">
											<span class="top"><input style="height: 50%; width: 20px;" type="text" id="input21" data-correct="2" class="input-dotted"></span>
											<span class="bottom"><input style="height: 50%; width: 20px;" type="text" id="input22" data-correct="6" class="input-dotted"></span>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="fraction" style="border: blue 3px solid;">
											<span class="top">1</span>
											<span class="bottom">3</span>
										</div>
									</td>
									<td>
										<i style="font-size: 20px;" class="fas fa-arrow-right"></i>
									</td>
									<td>
										<div class="fraction" style="border: blue 3px solid;">
											<span class="top">1 X 3</span>
											<span class="bottom">3 X 3</span>
										</div>
									</td>
									<td>
										<i style="font-size: 20px;" class="fas fa-arrow-right"></i>
									</td>
									<td>
										<div class="fraction" style="border: blue 3px solid;">
											<span class="top"><input style="height: 50%; width: 20px;" type="text" id="input23" data-correct="3" class="input-dotted"></span>
											<span class="bottom"><input style="height: 50%; width: 20px;" type="text" id="input24" data-correct="9" class="input-dotted"></span>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="fraction" style="border: blue 3px solid;">
											<span class="top">1</span>
											<span class="bottom">3</span>
										</div>
									</td>
									<td>
										<i style="font-size: 20px;" class="fas fa-arrow-right"></i>
									</td>
									<td>
										<div class="fraction" style="border: blue 3px solid;">
											<span class="top">1 X <input style="height: 50%; width: 20px;" type="text" id="input25" data-correct="4" class="input-dotted"></span>
											<span class="bottom">3 X <input style="height: 50%; width: 20px;" type="text" id="input26" data-correct="4" class="input-dotted"></span>
										</div>
									</td>
									<td>
										<i style="font-size: 20px;" class="fas fa-arrow-right"></i>
									</td>
									<td>
										<div class="fraction" style="border: blue 3px solid;">
											<span class="top">4</span>
											<span class="bottom">12</span>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="fraction" style="border: blue 3px solid;">
											<span class="top">1</span>
											<span class="bottom">3</span>
										</div>
									</td>
									<td>
										<i style="font-size: 20px;" class="fas fa-arrow-right"></i>
									</td>
									<td>
										<div class="fraction" style="border: blue 3px solid;">
											<span class="top">1 X 5</span>
											<span class="bottom">3 X 5</span>
										</div>
									</td>
									<td>
										<i style="font-size: 20px;" class="fas fa-arrow-right"></i>
									</td>
									<td>
										<div class="fraction" style="border: blue 3px solid;">
											<span class="top"><input style="height: 50%; width: 20px;" type="text" id="input27" data-correct="5" class="input-dotted"></span>
											<span class="bottom"><input style="height: 50%; width: 20px;" type="text" id="input28" data-correct="15" class="input-dotted"></span>
										</div>
									</td>
								</tr>
							</table>
						</div>

						<div class="card border-warning mt-3">
							<div class="card-body">
								<p>
									Untuk memperoleh pecahan senilai, kita dapat mengalikan atau membagi pembilang dan penyebut pecahan dengan bilangan yang sama
								</p>
								<p>
									Pecahan paling sederhana adalah pecahan yang sudah tidak dapat diperkecil lagi angkanya.
								</p>
								<p>
									Contoh pecahan paling sederhana adalah
								</p>
								<div class="row">
									<div class="col-3">
										<div class="fraction">
											<span class="top">1</span>
											<span class="bottom">2</span>
										</div>
									</div>
									<div class="col-3">
										<div class="fraction">
											<span class="top">1</span>
											<span class="bottom">3</span>
										</div>
									</div>
									<div class="col-3">
										<div class="fraction">
											<span class="top">1</span>
											<span class="bottom">10</span>
										</div>
									</div>
									<div class="col-3">
										<div class="fraction">
											<span class="top">9</span>
											<span class="bottom">10</span>
										</div>
									</div>
								</div>
							</div>

						</div>

					</div>

				</div>
			</div>
		</section>

		<!-- AyoBerlatih 2-->
		<section class="resume-section" id="AyoBerlatih2">
			<div class="resume-section-content">
				<div class="card mb-5">
					<div class="card-body">
						<h2>Ayo Berlatih</h2>
					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<p>Mari kita buat dua pecahan senilai dan menentukan pecahan yang paling sederhana!</p>
						<div class="table-responsive">
							<table style="width: 110%;" class="table table-bordered">
								<!-- 1 -->
								<div>
									<tr>
										<td rowspan="3" style="width: 5%;">1)</td>
										<td style="width: 5%;">
											<div class="fraction align-middle">
												<span class="top">2</span>
												<span class="bottom">4</span>
											</div>
										</td>
										<td>
											<div class="row">
												<div class="fraction align-middle">
													<span class="top">2</span>
													<span class="bottom">4</span>
												</div>
												=
												<div class="fraction align-middle">
													<span class="top">2:2</span>
													<span class="bottom">4:2</span>
												</div>
												=
												<div class="fraction align-middle">
													<span class="top">1</span>
													<span class="bottom">2</span>
												</div>
											</div>
											<div class="row">
												<div class="fraction align-middle">
													<span class="top">2</span>
													<span class="bottom">4</span>
												</div>
												=
												<div class="fraction align-middle">
													<span class="top">2X3</span>
													<span class="bottom">4X3</span>
												</div>
												=
												<div class="fraction align-middle">
													<span class="top">6</span>
													<span class="bottom">12</span>
												</div>
											</div>

										</td>
									</tr>
									<tr>
										<td colspan="2">
											<div class="row">
												Jadi, pecahan senilai dengan
												<div class="fraction align-middle">
													<span class="top">2</span>
													<span class="bottom">4</span>
												</div>
												adalah
												<div class="fraction align-middle">
													<span class="top">1</span>
													<span class="bottom">2</span>
												</div>
												,
												<div class="fraction align-middle">
													<span class="top">6</span>
													<span class="bottom">12</span>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td colspan="2">
											<div class="row">
												Pecahan paling sederhana dari
												<div class="fraction align-middle">
													<span class="top">2</span>
													<span class="bottom">4</span>
												</div>
												adalah
												<div class="fraction align-middle">
													<span class="top">1</span>
													<span class="bottom">2</span>
												</div>
											</div>
										</td>
									</tr>
								</div>
								<!-- 2 -->
								<div>
									<tr>
										<td rowspan="3">2)</td>
										<td>
											<div class="fraction align-middle">
												<span class="top">2</span>
												<span class="bottom">8</span>
											</div>
										</td>
										<td>
											<div class="d-inline-block">
												<div class="fraction align-middle">
													<span class="top">2</span>
													<span class="bottom">8</span>
												</div>
												=
												<div class="fraction align-middle">
													<span class="top">2 : 2</span>
													<span class="bottom">8 : 2</span>
												</div>
												=
												<div class="fraction align-middle">
													<span class="top"><input style="width: 20px; margin : 0px;" type="text" id="input29" data-correct="1" class="input-dotted"></span>
													<span class="bottom"><input style="width: 20px; margin : 0px;" type="text" id="input30" data-correct="4" class="input-dotted"></span>
												</div>
											</div>

											<div class="d-d-inline-block">
												<div class="fraction align-middle">
													<span class="top">2</span>
													<span class="bottom">8</span>
												</div>
												=
												<div class="fraction align-middle">
													<span class="top">2 X <input style="width: 20px; margin : 0px;" type="text" id="input31" data-correct="3" class="input-dotted"></span>
													<span class="bottom">8 X <input style="width: 20px; margin : 0px;" type="text32" id="input" data-correct="3" class="input-dotted"></span>
												</div>
												=
												<div class="fraction align-middle">
													<span class="top">6</span>
													<span class="bottom">24</span>
												</div>
											</div>

										</td>
									</tr>
									<tr>
										<td colspan="2">
											<div class="row">
												Jadi, pecahan senilai dengan
												<div class="fraction align-middle">
													<span class="top">2</span>
													<span class="bottom">8</span>
												</div>
												adalah
												<div class="fraction align-middle">
													<span class="top"><input style="width: 20px; margin : 0px;" type="text" id="input33" data-correct="1" class="input-dotted"></span>
													<span class="bottom"><input style="width: 20px; margin : 0px;" type="text" id="input34" data-correct="4" class="input-dotted"></span>
												</div>
												,
												<div class="fraction align-middle">
													<span class="top">6</span>
													<span class="bottom">24</span>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td colspan="2">
											<div class="row">
												Pecahan paling sederhana dari
												<div class="fraction align-middle">
													<span class="top">2</span>
													<span class="bottom">8</span>
												</div>
												adalah
												<div class="fraction align-middle">
													<span class="top"><input style="width: 20px; margin : 0px;" type="text" id="input35" data-correct="1" class="input-dotted"></span>
													<span class="bottom"><input style="width: 20px; margin : 0px;" type="text" id="input36" data-correct="4" class="input-dotted"></span>
												</div>
											</div>
										</td>
									</tr>
								</div>
								<!-- 3 -->
								<div>
									<tr>
										<td rowspan="3">3)</td>
										<td>
											<div class="fraction align-middle">
												<span class="top">6</span>
												<span class="bottom">10</span>
											</div>
										</td>
										<td>
											<div class="d-inline-block">
												<div class="fraction align-middle">
													<span class="top">6</span>
													<span class="bottom">10</span>
												</div>
												=
												<div class="fraction align-middle">
													<span class="top">6:2</span>
													<span class="bottom">10:2</span>
												</div>
												=
												<div class="fraction align-middle">
													<span class="top"><input style="width: 20px; margin : 0px;" type="text" id="input37" data-correct="3" class="input-dotted"></span>
													<span class="bottom"><input style="width: 20px; margin : 0px;" type="text" id="input38" data-correct="5" class="input-dotted"></span>
												</div>
											</div>

											<div class="d-d-inline-block">
												<div class="fraction align-middle">
													<span class="top">6</span>
													<span class="bottom">10</span>
												</div>
												=
												<div class="fraction align-middle">
													<span class="top">6 X 2</span>
													<span class="bottom">10 X 2</span>
												</div>
												=
												<div class="fraction align-middle">
													<span class="top"><input style="width: 25px; margin : 0px;" type="text" id="input41" data-correct="12" class="input-dotted"></span>
													<span class="bottom"><input style="width: 25px; margin : 0px;" type="text" id="input42" data-correct="20" class="input-dotted"></span>
												</div>
											</div>

										</td>
									</tr>
									<tr>
										<td colspan="2">
											<div class="row">
												Jadi, pecahan senilai dengan
												<div class="fraction align-middle">
													<span class="top">6</span>
													<span class="bottom">10</span>
												</div>
												adalah
												<div class="fraction align-middle">
													<span class="top"><input style="width: 20px; margin : 0px;" type="text" id="input43" data-group="3" data-correct="3" data-correct2="12" class="input-dotted"></span>
													<span class="bottom"><input style="width: 20px; margin : 0px;" type="text" id="input44" data-group="3" data-correct="5" data-correct2="20" class="input-dotted"></span>
												</div>
												,
												<div class="fraction align-middle">
													<span class="top"><input style="width: 25px; margin : 0px;" type="text" id="input45" data-group="3" data-correct="12" data-correct2="3" class="input-dotted"></span>
													<span class="bottom"><input style="width: 25px; margin : 0px;" type="text" id="input46" data-group="3" data-correct="20" data-correct2="5" class="input-dotted"></span>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td colspan="2">
											<div class="row">
												Pecahan paling sederhana dari
												<div class="fraction align-middle">
													<span class="top">6</span>
													<span class="bottom">10</span>
												</div>
												adalah
												<div class="fraction align-middle">
													<span class="top"><input style="width: 20px; margin : 0px;" type="text" id="input47" data-correct="3" class="input-dotted"></span>
													<span class="bottom"><input style="width: 20px; margin : 0px;" type="text" id="input48" data-correct="5" class="input-dotted"></span>
												</div>
											</div>
										</td>
									</tr>
								</div>
								<!-- 4 -->
								<div>
									<tr>
										<td rowspan="3">4)</td>
										<td>
											<div class="fraction align-middle">
												<span class="top">10</span>
												<span class="bottom">20</span>
											</div>
										</td>
										<td>
											<div class="d-inline-block">
												<div class="fraction align-middle">
													<span class="top">10</span>
													<span class="bottom">20</span>
												</div>
												=
												<div class="fraction align-middle">
													<span class="top">10 : <input style="width: 25px; margin : 0px;" type="text" id="input49" data-correct="10" class="input-dotted"></span>
													<span class="bottom">20 : <input style="width: 25px; margin : 0px;" type="text" id="input50" data-correct="10" class="input-dotted"></span>
												</div>
												=
												<div class="fraction align-middle">
													<span class="top">1</span>
													<span class="bottom">2</span>
												</div>
											</div>

											<div class="d-d-inline-block">
												<div class="fraction align-middle">
													<span class="top">10</span>
													<span class="bottom">20</span>
												</div>
												=
												<div class="fraction align-middle">
													<span class="top">10 X 2</span>
													<span class="bottom">20 X 2</span>
												</div>
												=
												<div class="fraction align-middle">
													<span class="top"><input style="width: 25px; margin : 0px;" type="text" id="input51" data-correct="20" class="input-dotted"></span>
													<span class="bottom"><input style="width: 25px; margin : 0px;" type="text" id="input52" data-correct="40" class="input-dotted"></span>
												</div>
											</div>

										</td>
									</tr>
									<tr>
										<td colspan="2">
											<div class="row">
												Jadi, pecahan senilai dengan
												<div class="fraction align-middle">
													<span class="top">10</span>
													<span class="bottom">20</span>
												</div>
												adalah
												<div class="fraction align-middle">
													<span class="top"><input style="width: 20px; margin : 0px;" type="text" data-group="1" id="input53" data-correct="1" data-correct2="20" class="input-dotted"></span>
													<span class="bottom"><input style="width: 20px; margin : 0px;" type="text" data-group="1" id="input54" data-correct="2" data-correct2="40" class="input-dotted"></span>
												</div>
												,
												<div class="fraction align-middle">
													<span class="top"><input style="width: 25px; margin : 0px;" type="text" data-group="1" id="input55" data-correct="20" data-correct2="1" class="input-dotted"></span>
													<span class="bottom"><input style="width: 25px; margin : 0px;" type="text" data-group="1" id="input56" data-correct="40" data-correct2="2" class="input-dotted"></span>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td colspan="2">
											<div class="row">
												Pecahan paling sederhana dari
												<div class="fraction align-middle">
													<span class="top">10</span>
													<span class="bottom">20</span>
												</div>
												adalah
												<div class="fraction align-middle">
													<span class="top"><input style="width: 20px; margin : 0px;" type="text" id="input57" data-correct="1" class="input-dotted"></span>
													<span class="bottom"><input style="width: 20px; margin : 0px;" type="text" id="input58" data-correct="2" class="input-dotted"></span>
												</div>
											</div>
										</td>
									</tr>
								</div>
								<!-- 5 -->
								<div>
									<tr>
										<td rowspan="3">5)</td>
										<td>
											<div class="fraction align-middle">
												<span class="top">5</span>
												<span class="bottom">20</span>
											</div>
										</td>
										<td>
											<div class="d-inline-block">
												<div class="fraction align-middle">
													<span class="top">5</span>
													<span class="bottom">20</span>
												</div>
												=
												<div class="fraction align-middle">
													<span class="top">5 : 5</span>
													<span class="bottom">20 : 5</span>
												</div>
												=
												<div class="fraction align-middle">
													<span class="top"><input style="width: 20px; margin : 0px;" type="text" id="input59" data-correct="1" class="input-dotted"></span>
													<span class="bottom"><input style="width: 20px; margin : 0px;" type="text" id="input60" data-correct="4" class="input-dotted"></span>
												</div>
											</div>
											<div class="d-d-inline-block">
												<div class="fraction align-middle">
													<span class="top">5</span>
													<span class="bottom">20</span>
												</div>
												=
												<div class="fraction align-middle">
													<span class="top">5 X <input style="width: 20px; margin : 0px;" type="text" id="input61" data-correct="2" class="input-dotted"></span>
													<span class="bottom">20 X <input style="width: 20px; margin : 0px;" type="text" id="input62" data-correct="2" class="input-dotted"></span>
												</div>
												=
												<div class="fraction align-middle">
													<span class="top">10</span>
													<span class="bottom">40</span>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td colspan="2">
											<div class="row">
												Jadi, pecahan senilai dengan
												<div class="fraction align-middle">
													<span class="top">5</span>
													<span class="bottom">20</span>
												</div>
												adalah
												<div class="fraction align-middle">
													<span class="top"><input style="width: 20px; margin : 0px;" type="text" id="input63" data-group="2" data-correct="1" data-correct2="10" class="input-dotted"></span>
													<span class="bottom"><input style="width: 20px; margin : 0px;" type="text" id="input64" data-group="2" data-correct="4" data-correct2="40" class="input-dotted"></span>
												</div>
												,
												<div class="fraction align-middle">
													<span class="top"><input style="width: 25px; margin : 0px;" type="text" id="input65" data-group="2" data-correct="10" data-correct2="1" class="input-dotted"></span>
													<span class="bottom"><input style="width: 25px; margin : 0px;" type="text" id="input66" data-group="2" data-correct="40" data-correct2="4" class="input-dotted"></span>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td colspan="2">
											<div class="row">
												Pecahan paling sederhana dari
												<div class="fraction align-middle">
													<span class="top">5</span>
													<span class="bottom">20</span>
												</div>
												adalah
												<div class="fraction align-middle">
													<span class="top"><input style="width: 20px; margin : 0px;" type="text" id="input67" data-correct="1" class="input-dotted"></span>
													<span class="bottom"><input style="width: 20px; margin : 0px;" type="text" id="input1" data-correct="4" class="input-dotted"></span>
												</div>
											</div>
										</td>
									</tr>
								</div>
							</table>
						</div>
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
	<!-- <script src="https://cdn.jsdelivr.net/npm/jquery-sortablejs@latest/jquery-sortable.js"></script> -->

	<script src="https://unpkg.com/sortablejs-make/Sortable.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-sortablejs@latest/jquery-sortable.js"></script>

	<!-- Core theme JS-->
	<script src="<?= base_url('assets/soal/') ?>js/scripts.js"></script>
	<script>
		// sortable
		$('#items-1').sortable({
			group: 'list',
			animation: 200,
			ghostClass: 'ghost',
		});
		// Arrays of "data-id"
		// $('#get-order').click(function() {
		var sort1 = $('#items-1').sortable('toArray');
		console.log(sort1);

		// });
		// Report when the sort order has changed
		// function reportActivity() {
		// 	console.log('The sort order has changed');
		// };

		// enf of sort
		$("#selesai").click(function() {
			var nilaiIsian = 0;
			var soal = 0
			$(".input-dotted:not([data-group])").each(function() {
				if ($(this).val().toUpperCase() == $(this).attr('data-correct')) {
					// console.log($(this).attr('id'));
					nilaiIsian++;
				} else {
					var jawaban = $(this).attr('data-correct');
					$(this).attr("data-toggle", "tooltip");
					$(this).attr("data-html", "true");
					$(this).attr("data-placement", "right");
					$(this).attr("title", "<em>Jawaban : </em> <b>" + jawaban + "</b>");
					$(this).css("border-bottom", "5px solid red");
				}
				soal++;
			});

			console.log(soal);

			$(function() {
				$('[data-toggle="tooltip"]').tooltip()
			})

			var sort1 = $('#items-1').sortable('toArray');
			var soalSort = 0;
			for (let index = 0; index < sort1.length; index++) {
				if (sort1[index] == index + 1) {
					soalSort++;
				} else {
					$("#" + (index + 1)).css("background-color", "red");
				}
			}
			console.log('soal sort ' + soalSort);

			// 10 grup inputan
			var soalGrup = 0;
			for (let index = 1; index <= 3; index++) {
				var targetNilai = $(".input-dotted[data-group='" + index + "']").length;
				var nilaiGroup1 = 0;
				var nilaiGroup2 = 0;
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
					idElement.push($(this).attr("id"));
				});
				var correct = "";
				if (nilaiGroup1 == targetNilai || nilaiGroup2 == targetNilai) {
					nilaiIsian = nilaiIsian + targetNilai;
				} else if (nilaiGroup1 >= nilaiGroup2) {
					nilaiIsian = nilaiIsian + nilaiGroup1;
					correct = "data-correct";
				} else {
					nilaiIsian = nilaiIsian + nilaiGroup2;
					correct = "data-correct2";
				}

				if (nilaiGroup1 != targetNilai && nilaiGroup2 != targetNilai) {
					var jawaban;
					idElement.forEach(function(value) {
						jawaban = $("#" + value).attr(correct);
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

			console.log("nilai isian" + nilaiIsian);

			var rad = $('input[name="pilihan1"]:checked');
			var pilihan = parseInt(rad.val());
			if (rad.val() == 0) {
				rad.closest("div").css("background", "red");
			}

			$("input[type='radio'][value='1']").closest("div").css("background", "#8ed278")
			var totalSkor = Math.round((nilaiIsian + soalSort + pilihan) / 71 * 100);
			if (isNaN(totalSkor)) {
				totalSkor = 0;
			}
			Swal.fire(
				'Skor Kamu : ' + totalSkor,
				'Semangat, Tetap Belajar lagi ya :)',
				'success'
			)
			$("#items-2").removeClass("d-none")

			$("#selesai").attr("disabled", "disabled")
		});
	</script>
</body>

</html>
