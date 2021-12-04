<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Penjumlahan Pecahan</title>
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

		.table-bordered,
		.table-bordered td,
		.table-bordered th {
			border: 1px solid black;
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
			<span class="d-block d-lg-none">Penjumlahan Pecahan</span>
			<span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?= base_url('assets/soal/') ?>assets/img/3.webp" alt="..." /></span>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav">
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Penjelasan</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#ayoMenyimak1">Ayo Menyimak 1</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#ayoMenemukan1">ayo Menemukan 1</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#ayoMencoba1">ayo Mencoba 1</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#ayoBerlatih1">Ayo Berlatih 1</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#ayoMenemukan2">ayo Menemukan 2</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#ayoMenyimak2">Ayo Menyimak 2</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#ayoMencoba2">ayo Mencoba 2</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#ayoBerlatih2">Ayo Berlatih 2</a></li>
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
							Penjumlahan
							<span class="text-primary">Pecahan</span>
						</h2>
					</div>
				</div>
				<div class="card mt-1">
					<div class="card-body">
						<h1 class="mb-0">
							<p class="lead mb-5">Penjumlahan pecahan biasa adalah dasar operasi penjumlahan pecahan yang menggunakan pecahan biasa (pecahan yang pembilangnya lebih kecil dari penyebut).</p>
						</h1>
					</div>
				</div>
			</div>
		</section>
		<hr class="m-0" />

		<!-- Ayo Menyimak1-->
		<section class="resume-section" id="ayoMenyimak1">
			<div class="resume-section-content">
				<!-- <div class="row"> -->
				<div class="card mb-5">
					<div class="card-body">
						<h2>Ayo Menyimak</h2>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<table class="table table-borderless">
							<tr>
								<td colspan="3">
									<p> Hari ini Ibu membuat kue bolu, lalu kue bolu akan dipotong karena
										Kakak sudah tidak sabar untuk makan kue bolu. </p>
								</td>
							</tr>
							<tr>
								<td colspan="3">
									<figure class="figure">
										<img class="img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 3\1.webp') ?>" alt="no image">
										<figcaption class="figure-caption text-center">Gambar : Kue Bolu dan Ibu </figcaption>
										<figcaption class="figure-caption text-center">Sumber : canva.com </figcaption>
									</figure>
								</td>
							</tr>
							<tr>
								<td colspan="3">Mari kita amati potongan kue bolu Ibu. Anggaplah kotak dibawah ini sebagai kue bolu. </td>
							</tr>
							<tr>
								<td colspan="3"><img class="img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 3\2.webp') ?>" alt="no image">
								</td>
							</tr>
							<tr>
								<td colspan="3">
									<div class="card border-danger">
										<div class="card-body">
											<p>Pada potongan kue bolu di atas memiliki angka pembilang yang sama. Akan tetapi, angka penyebutnya berbeda. Semakin besar angka penyebutnya, semakin kecil pula bagian pecahan tersebut.</p>
										</div>
									</div>
								</td>
							</tr>
						</table>
					</div>
				</div>

			</div>
		</section>
		<hr class="m-0" />

		<!-- ayoMenemukan-->
		<section class="resume-section" id="ayoMenemukan1">
			<div class="resume-section-content">
				<div class="card mb-5">
					<div class="card-body">
						<h2>ayo Menemukan</h2>
					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<p>Bagaimana jika angka penyebut sama akan tetapi angka pembilangnya yang berbeda-beda? Manakah yang lebih besar? Mari kita lihat gambar berikut ini.</p>
						<p>Beri tanda “>” (lebih dari) atau “<” (kurang dari) </p>
								<div class="table-responsive">
									<table class="table table-borderless">
										<tr>
											<td>
												<img style="min-width: 120px; width: 200px;" class="img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 3\3.webp') ?>" alt="no image">
											</td>
											<td>
											</td>
											<td>
												<img style="min-width: 120px; width: 200px;" class="img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 3\4.webp') ?>" alt="no image">
											</td>
										</tr>
										<tr>
											<td class="align-middle">
												<figcaption class="figure-caption text-center">
													<div class="fraction">
														<span class="top">1</span>
														<span class="bottom">2</span>
													</div>
												</figcaption>
											</td>
											<td>
												<input type="text" id="input1" data-correct="<" class="input-dotted">
											</td>
											<td class="align-middle">
												<figcaption class="figure-caption text-center">
													<div class="fraction">
														<span class="top">1</span>
														<span class="bottom">1</span>
													</div>
												</figcaption>
											</td>
										</tr>
										<tr>
											<td>
												<img style="min-width: 120px; width: 200px;" class="img-fluid mx-auto d-block " src="<?= base_url('assets\soal\assets\img\bab 3\5.webp') ?>" alt="no image">
											</td>
											<td>

											</td>
											<td>
												<img style="min-width: 120px; width: 200px;" class="img-fluid mx-auto d-block " src="<?= base_url('assets\soal\assets\img\bab 3\6.webp') ?>" alt="no image">
											</td>
										</tr>
										<tr>
											<td class="align-middle">
												<figcaption class="figure-caption text-center">
													<div class="fraction">
														<span class="top">1</span>
														<span class="bottom">4</span>
													</div>
												</figcaption>
											</td>
											<td>
												<input type="text" id="input2" data-correct="<" class="input-dotted">
											</td>
											<td class="align-middle">
												<figcaption class="figure-caption text-center">
													<div class="fraction">
														<span class="top">2</span>
														<span class="bottom">4</span>
													</div>
												</figcaption>
											</td>
										</tr>
										<tr>
											<td>
												<img style="min-width: 120px; width: 200px;" class="img-fluid mx-auto d-block " src="<?= base_url('assets\soal\assets\img\bab 3\7.webp') ?>" alt="no image">
											</td>
											<td>
											</td>
											<td>
												<img style="min-width: 120px; width: 200px;" class="img-fluid mx-auto d-block " src="<?= base_url('assets\soal\assets\img\bab 3\8.webp') ?>" alt="no image">
											</td>

										</tr>
										<tr>
											<td class="align-middle">
												<figcaption class="figure-caption text-center">
													<div class="fraction">
														<span class="top">1</span>
														<span class="bottom">8</span>
													</div>
												</figcaption>
											</td>
											<td>
												<input type="text" id="input3" data-correct="<" class="input-dotted">
											</td>
											<td class="align-middle">
												<figcaption class="figure-caption text-center">
													<div class="fraction">
														<span class="top">3</span>
														<span class="bottom">8</span>
													</div>
												</figcaption>
											</td>
										</tr>
									</table>
								</div>
								<div class="card border-danger">
									<div class="card-body">
										<p>Untuk pecahan dengan penyebut yang sama “semakin besar pembilangnya, semakin besar nilai pecahan tersebut.”</p>
									</div>
								</div>
					</div>
				</div>
			</div>
		</section>
		<hr class="m-0" />

		<!-- ayoMencoba1-->
		<section class="resume-section" id="ayoMencoba1">
			<div class="resume-section-content">
				<div class="card mb-3">
					<div class="card-body">
						<h2>Ayo Mencoba</h2>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<table class="table table-borderless text-center">
							<tr>
								<td colspan="2" align="left">
									Kue yang dibuat Ibu tidak hanya bolu kukus saja. Hari ini Ibu juga membuat pizza. Pizza adalah makanan kesukaan Adik, maka dari itu ibu membuat 2 buah pizza
								</td>
							</tr>
							<tr>
								<td>
									<img style="min-width: 120px;" class="w-50 img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 3\9.webp') ?>" alt="no image">
								</td>
								<td>
									<img style="min-width: 120px;" class="w-50 img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 3\9.webp') ?>" alt="no image">
								</td>


							</tr>
							<tr>
								<td colspan="3">
									<figcaption class="figure-caption text-center">Gambar : Pizza</figcaption>
									<figcaption class="figure-caption text-center">Sumber : canva.com </figcaption>
								</td>

							</tr>
							<tr>

								<td class="align-middle">
									<div class="card border-danger mb-5">
										<div class="card-body">
											Pizza piring pertama

											<figcaption class="figure-caption text-center">
												<div class="fraction">
													<span class="top">1</span>
													<span class="bottom">8</span>
												</div>
											</figcaption>
										</div>
									</div>
								</td>
								<td class="align-middle">
									<div class="card border-danger mb-5">
										<div class="card-body">
											Pizza piring kedua
											<figcaption class="figure-caption text-center">
												<div class="fraction">
													<span class="top">1</span>
													<span class="bottom">8</span>
												</div>
											</figcaption>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<p>Ibu membagi pizza menjadi 8 bagian sama besar.</p>
								</td>
							</tr>
							<tr>
								<td colspan="2" align="left">
									<ol>
										<li>Pada siang hari Adik memakan 2 potong pizza dari piring pertama, maka pizza yang Adik makan adalah
											<div class="fraction align-middle">
												<span class="top"><input type="text" id="input4" data-correct="2" class="input-dotted"></span>
												<span class="bottom">8</span>
											</div>
										</li>
										<li>Kemudian pada sore hari, Adik memakan lagi 1 potong pizza dari piring kedua, maka pizza yang Adik makan dari piring kedua adalah
											<div class="fraction align-middle">
												<span class="top"><input type="text" id="input5" data-correct="1" class="input-dotted"></span>
												<span class="bottom">8</span>
											</div>
										</li>
										<li>Jadi, banyak pizza yang Adik telah habiskan adalah
											<div class="fraction align-middle">
												<span class="top"><input type="text" id="input6" data-correct="3" class="input-dotted"></span>
												<span class="bottom"><input type="text" id="input7" data-correct="8" class="input-dotted"></span>
											</div>bagian dari sebuah pizza
										</li>
										<li>Kamu dapat menulisnya sebagai penjumlahan pecahan berikut ini:
											<br>
											<div class="fraction align-middle">
												<span class="top">2</span>
												<span class="bottom">8</span>
											</div>
											+
											<div class="fraction align-middle">
												<span class="top"><input type="text" id="input8" data-correct="1" class="input-dotted"></span>
												<span class="bottom">8</span>
											</div>
											=
											<div class="fraction align-middle">
												<span class="top"><input type="text" id="input9" data-correct="3" class="input-dotted"></span>
												<span class="bottom">8</span>
											</div>

										</li>

									</ol>
								</td>
							</tr>
						</table>

						<div class="card border-danger mt-3 mb-3">
							<div class="card-body">
								Jadi, apa yang dapat kamu simpulkan:
							</div>
						</div>

						<table class="table table-borderless mt-2 text-center">
							<tr>
								<td align="left">
									<li>
										Perbandingan potongan pizza dengan jumlah keseluruhan dapat disajikan dalam bentuk
										<br>
										<input style="width: 180px;" type="text" id="input10" data-correct="PENJUMLAHAN PECAHAN" class="input-dotted">
									</li>
								</td>
							</tr>
							<tr>
								<td align="left">
									<li>Setiap pecahan terdiri dari
										<input style="width: 100px;" data-correct="PEMBILANG" data-correct2="PENYEBUT" data-group="1" type="text" id="input91" class="input-dotted">
										dan
										<input style="width: 100px;" data-correct="PENYEBUT" data-correct2="PEMBILANG" data-group="1" type="text" id="input92" class="input-dotted">
									</li>
								</td>
							</tr>

						</table>
						<div class="card border-warning mt-3 mb-3">
							<div class="card-body">
								Pembilang menunjukkan bagian, sedangkan penyebut menunjukkan keseluruhan
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<hr class="m-0" />

		<!-- AyoBerlatih-->
		<section class="resume-section" id="ayoBerlatih1">
			<div class="resume-section-content">
				<div class="card mb-3">
					<div class="card-body">
						<h2>Ayo Berlatih</h2>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<table class="table table-borderless text-center">
							<tr>
								<td>1</td>
								<td colspan="3" align="left">
									Perhatikan gambar berikut ini, dapatkah kamu menuliskan pecahan untuk menggambar ukuran yang ditunjukkan oleh masing-masing gambar tersebut?
								</td>
							</tr>
							<tr>
								<td colspan="1"></td>
								<td>
									<figure class="figure">
										<img class="figure-img img-fluid mx-auto d-block w-5" src="<?= base_url('assets\soal\assets\img\bab 3\10.webp') ?>" alt="no image">
										<figcaption class="figure-caption text-center">
											a.
											<div class="fraction align-middle">
												<span class="top"><input type="text" id="input11" data-correct="1" class="input-dotted"></span>
												<span class="bottom"><input type="text" id="input12" data-correct="4" class="input-dotted"></span>
											</div>
										</figcaption>
									</figure>
								</td>
								<td></td>
								<td>
									<figure class="figure">
										<img class="figure-img img-fluid mx-auto d-block w-5" src="<?= base_url('assets\soal\assets\img\bab 3\11.webp') ?>" alt="no image">
										<figcaption class="figure-caption text-center">
											b.
											<div class="fraction align-middle">
												<span class="top"><input type="text" id="input13" data-correct="2" class="input-dotted"></span>
												<span class="bottom"><input type="text" id="input14" data-correct="4" class="input-dotted"></span>
											</div>
										</figcaption>
									</figure>
								</td>

							</tr>
							<tr>
								<td>2</td>
								<td colspan="3" align="left">
									Jika pie pertama digabung ke dalam 1 piring dengan pie kedua maka gambar dari gabungan kedua pie adalah sebagai berikut:
								</td>
							</tr>
							<tr>
								<td colspan="4" align="center">
									<img class="figure-img img-fluid mx-auto d-block w-5" src="<?= base_url('assets\soal\assets\img\bab 3\12.webp') ?>" alt="no image">
								</td>
							</tr>
							<tr>
								<td>3</td>
								<td colspan="3" align="left">
									Operasi penjumlahan pecahan diatas adalah
									<br>
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input15" data-correct="1" data-correct2="2" data-group="2" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input16" data-correct="4" data-correct2="4" data-group="2" class="input-dotted"></span>
									</div>
									+
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input17" data-correct="2" data-correct2="1" data-group="2" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input18" data-correct="4" data-correct2="4" data-group="2" class="input-dotted"></span>
									</div>
									=
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input19" data-correct="3" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input20" data-correct="4" class="input-dotted"></span>
									</div>
								</td>

							</tr>

							<tr>
								<td>4</td>
								<td>
									<figure class="figure">
										<img class="figure-img img-fluid mx-auto d-block w-5" src="<?= base_url('assets\soal\assets\img\bab 3\13.webp') ?>" alt="no image">
										<figcaption class="figure-caption text-center">
											a.
											<div class="fraction align-middle">
												<span class="top"><input type="text" id="input21" data-correct="3" class="input-dotted"></span>
												<span class="bottom"><input type="text" id="input22" data-correct="5" class="input-dotted"></span>
											</div>
										</figcaption>
									</figure>
								</td>
								<td style="vertical-align: middle;">+</td>
								<td>
									<figure class="figure">
										<img class="figure-img img-fluid mx-auto d-block w-5" src="<?= base_url('assets\soal\assets\img\bab 3\14.webp') ?>" alt="no image">
										<figcaption class="figure-caption text-center">
											b.
											<div class="fraction align-middle">
												<span class="top"><input type="text" id="input23" data-correct="1" class="input-dotted"></span>
												<span class="bottom"><input type="text" id="input24" data-correct="5" class="input-dotted"></span>
											</div>
										</figcaption>
									</figure>
								</td>
							</tr>
							<tr>
								<td>5</td>
								<td colspan="3" align="left">
									Operasi penjumlahan pecahan no 4 adalah
									<br>
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input25" data-correct="3" data-correct2="1" data-group="3" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input26" data-correct="5" data-correct2="5" data-group="3" class="input-dotted"></span>
									</div>
									+
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input27" data-correct="1" data-correct2="3" data-group="3" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input28" data-correct="5" data-correct2="5" data-group="3" class="input-dotted"></span>
									</div>
									=
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input29" data-correct="4" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input30" data-correct="5" class="input-dotted"></span>
									</div>
								</td>

							</tr>
							<tr>
								<td>6</td>
								<td>
									<figure class="figure">
										<img class="figure-img img-fluid mx-auto d-block w-5" src="<?= base_url('assets\soal\assets\img\bab 3\15.webp') ?>" alt="no image">
										<figcaption class="figure-caption text-center">
											a.
											<div class="fraction align-middle">
												<span class="top"><input type="text" id="input31" data-correct="1" class="input-dotted"></span>
												<span class="bottom"><input type="text" id="input32" data-correct="6" class="input-dotted"></span>
											</div>
										</figcaption>
									</figure>
								</td>
								<td style="vertical-align: middle;">+</td>
								<td>
									<figure class="figure">
										<img class="figure-img img-fluid mx-auto d-block w-5" src="<?= base_url('assets\soal\assets\img\bab 3\16.webp') ?>" alt="no image">
										<figcaption class="figure-caption text-center">
											b.
											<div class="fraction align-middle">
												<span class="top"><input type="text" id="input33" data-correct="4" class="input-dotted"></span>
												<span class="bottom"><input type="text" id="input34" data-correct="6" class="input-dotted"></span>
											</div>
										</figcaption>
									</figure>
								</td>
							</tr>
							<tr>
								<td>7</td>
								<td colspan="3" align="left">
									Operasi penjumlahan pecahan no 6 adalah
									<br>
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input35" data-correct="1" data-correct2="4" data-group="4" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input36" data-correct="6" data-correct2="6" data-group="4" class="input-dotted"></span>
									</div>
									+
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input37" data-correct="4" data-correct2="1" data-group="4" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input38" data-correct="6" data-correct2="6" data-group="4" class="input-dotted"></span>
									</div>
									=
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input39" data-correct="5" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input40" data-correct="6" class="input-dotted"></span>
									</div>
								</td>

							</tr>
							<tr>
								<td>8</td>
								<td colspan="3" align="left">
									Ayah memberi roti gandum satu balok. Roti gandum tersebut dipotong menjadi 5 bagian. Ibu makan 1 potong. Ayah makan 2 potong. Berapa bagian roti yang dimakan ayah dan ibu?
									<br>
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input41" data-correct="1" data-correct2="2" data-group="5" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input42" data-correct="5" data-correct2="5" data-group="5" class="input-dotted"></span>
									</div>
									+
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input43" data-correct="2" data-correct2="1" data-group="5" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input44" data-correct="5" data-correct2="5" data-group="5" class="input-dotted"></span>
									</div>
									=
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input45" data-correct="3" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input46" data-correct="5" class="input-dotted"></span>
									</div>
								</td>

							</tr>

						</table>
					</div>
				</div>
			</div>
		</section>
		<hr class="m-0" />

		<!-- Ayo Menemukan2-->
		<section class="resume-section" id="ayoMenemukan2">
			<div class="resume-section-content">
				<div class="card">
					<div class="card-body">
						<h2>ayo Menemukan</h2>
					</div>
				</div>
				<table class="table table-borderless">
					<tr>
						<td>1</td>
						<td align="center">
							<img style="min-width: 200px;" class="w-25 img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 3\17.webp') ?>" alt="no image">
							<br>
							<div class="fraction align-center">
								<span class="top"><input type="text" id="input47" data-correct="5" class="input-dotted"></span>
								<span class="bottom"><input type="text" id="input48" data-correct="8" class="input-dotted"></span>
							</div>
						</td>
					</tr>
					<tr>
						<td>2</td>
						<td align="center">
							<img style="min-width: 200px;" class="w-25 img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 3\18.webp') ?>" alt="no image">
							<br>
							+
							<br><br>
							<img style="min-width: 200px;" class="w-25 img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 3\19.webp') ?>" alt="no image">
							<br>
							<div class="fraction align-middle">
								<span class="top"><input type="text" id="input49" data-correct="1" class="input-dotted"></span>
								<span class="bottom"><input type="text" id="input50" data-correct="4" class="input-dotted"></span>
							</div>
							+
							<div class="fraction align-middle">
								<span class="top"><input type="text" id="input51" data-correct="5" class="input-dotted"></span>
								<span class="bottom"><input type="text" id="input52" data-correct="8" class="input-dotted"></span>
							</div>
						</td>
					</tr>
				</table>
			</div>
		</section>
		<hr class="m-0" />

		<!-- ayoMenyimak 2-->
		<section class="resume-section" id="ayoMenyimak2">
			<div class="resume-section-content">
				<div class="card mb-3">
					<div class="card-body">
						<h2>Ayo Menyimak</h2>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<table class="table table-borderless">
							<tr>
								<td colspan="3">
									<p>Bacalah percakapan antara Arif dan Sari dengan cermat!</p>
									<center>
										<p><b>Saling berbagi</b></p>
									</center>
								</td>
							</tr>
							<tr>
								<td colspan="3">
									<img class="figure-img img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 3\20.webp') ?>" alt="no image">
								</td>
							</tr>
							<tr>

								<td colspan="3" align="center">
									<figcaption class="figure-caption text-center">Gambar : Anak-anak</figcaption>
									<figcaption class="figure-caption text-center">Sumber : canva.com </figcaption>
								</td>
							</tr>
							<tr>
								<td colspan="3">
									<p>Pada hari Sabtu Arif berkunjung ke rumah Sari dan dia melihat Sari sedang memotong roti gandum.</p>
									<p>Arif: “Assalammualaikum, Sari!”</p>
									<p>Sari: “Waalaikumsalam, Arif, Ayo silahkan masuk!”</p>
									<p>Arif: “Iya, Kamu sedang memotong apa?”</p>
									<p>Sari: “Aku lagi memotong 2 roti gandum. Rencananya ini akan kubagikan kepada Akbar tetangga depan rumahku.”</p>
									<p>Arif: “Terang bulan itu kamu potong berapa? Dan kira-kira berapa bagian terang bulan yang akan kamu kasih ke dia?”</p>
									<p>Sari: “Roti gandum pertama rasa coklat aku potong 10 bagian sama besar, sedangkan roti gandum kedua rasa keju aku potong 5 bagian sama besar. Aku akan memberikan terang bulan 3 potong rasa cokelat dan 1 potong rasa keju. Kira-kira menurutmu berapa bagian dari sebuah roti gandum yang aku berikan kepada tetanggaku?”</p>
									<p>Arif: “Menurutku, itu sama dengan penjumlahan pecahan
									<div class="fraction align-middle">
										<span class="top">3</span>
										<span class="bottom">10</span>
									</div>
									+

									<div class="fraction align-middle">
										<span class="top">1</span>
										<span class="bottom">5</span>
									</div>
									<br>Mungkin kita bisa menggambarkan seperti ini:
									Misalkan persegi panjang pertama kita bagi 10 dan kita arsir 3 bagian, sedangkan persegi panjang kedua kita bagi 5 dan kita arsir 1 bagian.”</p>
								</td>
							</tr>
							<tr>
								<td>
									<img style="min-width: 120px;" class="w-50 img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 3\21.webp') ?>" alt="no image">
								</td>
								<td>
									<img style="min-width: 120px;" class="w-50 img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 3\22.webp') ?>" alt="no image">
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<p>“Selanjutnya, untuk memudahkan kita menjumlahkan kedua bagian tersebut, kita dapat membagi persegi panjang kedua menjadi unit yang sama dengan persegi panjnag pertama sehingga kita peroleh hasil ini”</p>
								</td>
							</tr>
							<tr>
								<td>
									<img style="min-width: 120px;" class="w-50 img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 3\23.webp') ?>" alt="no image">
								</td>
								<td>
									<img style="min-width: 120px;" class="w-50 img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 3\24.webp') ?>" alt="no image">
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<p>“Jika kita gabungkan maka kita peroleh hasil ini”</p>
								</td>
							</tr>
							<tr>
								<td>
									<img style="min-width: 120px;" class="w-50 img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 3\25.webp') ?>" alt="no image">
								</td>
								<td></td>
							</tr>
							<tr>
								<td colspan="2">
									<p>“Yang nilainya sama dengan
									<div class="fraction align-middle">
										<span class="top">5</span>
										<span class="bottom">10</span>
									</div>
									bagian”</p>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<p>Sari: “Oh iya, kamu benar sekali, Arif. Aku baru ingat, kita dapat juga menyelesaikan dengan menyamakan penyebut dari kedua pecahan tersebut

									<div class="fraction align-middle">
										<span class="top">3</span>
										<span class="bottom">10</span>
									</div>
									+
									<div class="fraction align-middle">
										<span class="top">1</span>
										<span class="bottom">5</span>
									</div>
									=
									<div class="fraction align-middle">
										<span class="top">3</span>
										<span class="bottom">10</span>
									</div>
									+
									<div class="fraction align-middle">
										<span class="top">2</span>
										<span class="bottom">10</span>
									</div>
									=
									<div class="fraction align-middle">
										<span class="top">5</span>
										<span class="bottom">10</span>
									</div>

									dan jika sederhanakan dengan membagi masing-masing pembilang dan penyebut dengan 5, maka kita peroleh
									<div class="fraction align-middle">
										<span class="top">1</span>
										<span class="bottom">5</span>
									</div>
									</p>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<p>Arif: “Iya benar sekali.”</p>
									<p>Sari: “Kalau begitu, ayo kita makan dulu roti gandumnya”
									</p>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</section>
		<hr class="m-0" />

		<!-- ayoMencoba 2-->
		<section class="resume-section" id="ayoMencoba2">
			<div class="resume-section-content">
				<div class="card">
					<div class="card-body">
						<h2>Ayo Mencoba</h2>
					</div>
				</div>

				<table class="table table-borderless">
					<tr>
						<td colspan="2">Misalkan kamu membuat 2 bolu gulung dengan rasa yang berbeda ada rasa cokelat dan rasa pandan seperti gambar di bawah ini.</td>
					</tr>
					<tr>
						<td>
							<img style="min-width: 120px;" class="w-50 img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 3\26.webp') ?>" alt="no image">
						</td>
						<td>
							<img style="min-width: 120px;" class="w-50 img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 3\27.webp') ?>" alt="no image">
						</td>
					</tr>
					<tr>

						<td colspan="2" align="center">
							<figcaption class="figure-caption text-center">Gambar : Bolu Gulung </figcaption>
							<figcaption class="figure-caption text-center">Sumber : canva.com </figcaption>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							Bolu gulung yang rasa cokelat dipotong menjadi 8 bagian sama besar, sedangkan bolu gulung pandan dipotong menjadi 4 bagian sama besar.
						</td>
					</tr>
					<tr>
						<td colspan="2">

							1. Jika 2 bagian dari bolu gulung cokelat kamu berikan ke Ayah, maka bolu gulung cokelat yang dibagikan ke Ayah dapat dituliskan dalam bentuk pecahan yaitu ...

						</td>
					<tr>
						<td colspan="2" style="width: 15%;" class="align-middle">a.
							<input type="radio" name="pilihan1" value="0" id="">
							<div class="fraction">
								<span class="top">1</span>
								<span class="bottom">8</span>
							</div>
						</td>
					</tr>
					<tr>
						<td colspan="2" style="width: 15%;" class="align-middle">b.
							<input type="radio" name="pilihan1" value="1" id="">
							<div class="fraction">
								<span class="top">2</span>
								<span class="bottom">8</span>
							</div>
						</td>
					</tr>
					<tr>
						<td colspan="2" style="width: 15%;" class="align-middle">c.
							<input type="radio" name="pilihan1" value="0" id="">
							<div class="fraction">
								<span class="top">3</span>
								<span class="bottom">8</span>
							</div>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							2. Kemudian 1 bagian bolu gulung pandan kamu berikan ke Ibu, maka bolu gulung pandan yang dibagikan ke Ibu dapat dituliskan dalam bentuk pecahan yaitu...
						</td>
					</tr>
					<tr>
						<td colspan="2" style="width: 15%;" class="align-middle">a.
							<input type="radio" name="pilihan2" value="1" id="">
							<div class="fraction">
								<span class="top">1</span>
								<span class="bottom">4</span>
							</div>
						</td>
					</tr>
					<tr>
						<td colspan="2" style="width: 15%;" class="align-middle">b.
							<input type="radio" name="pilihan2" value="0" id="">
							<div class="fraction">
								<span class="top">2</span>
								<span class="bottom">4</span>
							</div>
						</td>
					</tr>
					<tr>
						<td colspan="2" style="width: 15%;" class="align-middle">c.
							<input type="radio" name="pilihan2" value="0" id="">
							<div class="fraction">
								<span class="top">3</span>
								<span class="bottom">4</span>
							</div>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							3. Jadi, banyak bolu gulung yang telah kamu berikan kepada kedua orang tuamu adalah ...
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<div class="fraction align-middle">
								<span class="top"><input type="text" id="input53" data-correct="2" data-correct2="1" data-group="6" class="input-dotted"></span>
								<span class="bottom"><input type="text" id="input54" data-correct="8" data-correct2="4" data-group="6" class="input-dotted"></span>
							</div>
							+
							<div class="fraction align-middle">
								<span class="top"><input type="text" id="input55" data-correct="1" data-correct2="2" data-group="6" class="input-dotted"></span>
								<span class="bottom"><input type="text" id="input56" data-correct="4" data-correct2="8" data-group="6" class="input-dotted"></span>
							</div>
							=
							<div class="fraction align-middle">
								<span class="top"><input type="text" id="input57" data-correct="2" class="input-dotted"></span>
								<span class="bottom"><input type="text" id="input58" data-correct="8" class="input-dotted"></span>
							</div>
							+
							<div class="fraction align-middle">
								<span class="top"><input type="text" id="input59" data-correct="2" class="input-dotted"></span>
								<span class="bottom"><input type="text" id="input60" data-correct="8" class="input-dotted"></span>
							</div>
							=
							<div class="fraction align-middle">
								<span class="top"><input type="text" id="input61" data-correct="4" class="input-dotted"></span>
								<span class="bottom"><input type="text" id="input62" data-correct="8" class="input-dotted"></span>
							</div>
						</td>

					</tr>
					<tr>
						<td colspan="2">
							Karena bolu gulung cokelat dan bolu gulung pandan dipotong dengan ukuran yang berbeda, kamu dapat memotong bolu gulung pandan sebanyak potongan bolu gulung cokelat. Ketika kamu sajikan dalam pecahan akan menunjukkan pecahan dengan penyebut yang sama, sehingga akan membantu kamu menjumlahkan pecahan.
						</td>
					</tr>
				</table>
			</div>
		</section>
		<hr class="m-0" />

		<!-- AyoBerlati2-->
		<section class="resume-section" id="ayoBerlatih2">
			<div class="resume-section-content">
				<div class="card">
					<div class="card-body">
						<h2>Ayo Berlatih</h2>
					</div>
				</div>
				<table class="table table-borderless">
					<tr>
						<td>1</td>
						<td colspan="2" align="left">
							Perhatikan diagram di bawah ini! Dapatkah kamu menuliskan pecahan untuk menggambarkan ukuran yang ditunjukkan pada gambar?
						</td>
					</tr>
					<tr>
						<td></td>
						<td align="center">
							<figure class="figure">
								<img class="figure-img img-fluid mx-auto d-block w-5" src="<?= base_url('assets\soal\assets\img\bab 3\28.webp') ?>" alt="no image">
								<figcaption class="figure-caption text-center">
									a.
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input63" data-correct="1" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input64" data-correct="2" class="input-dotted"></span>
									</div>
								</figcaption>
							</figure>
						</td>
						<td align="center">
							<figure class="figure">
								<img class="figure-img img-fluid mx-auto d-block w-5" src="<?= base_url('assets\soal\assets\img\bab 3\29.webp') ?>" alt="no image">
								<figcaption class="figure-caption text-center">
									b.
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input65" data-correct="1" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input66" data-correct="4" class="input-dotted"></span>
									</div>
								</figcaption>
							</figure>
						</td>

					</tr>
					<tr>
						<td>2</td>
						<td colspan="2" align="left">
							Jika kedua diagram tersebut digabungan ke dalam 1 diagram, maka kita harus membuat diagram baru dari hasil penggabungan kedua diagram.
						</td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2">
							a. Langkah pertama yang kita lakukan adalah membagi persegi panjang A dari dua bagian menjadi empat bagian sama besar.
						</td>
					</tr>
					<tr>
						<td colspan="3" align="center">
							<figure class="figure">
								<img class="figure-img img-fluid mx-auto d-block w-5" src="<?= base_url('assets\soal\assets\img\bab 3\30.webp') ?>" alt="no image">

							</figure>
						</td>
					</tr>
					<tr>
						<td>
						<td colspan="2">b. Lalu pindahkan potongan yang diarsir di gambar B ke gambar A</td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2" align="center">
							<figure class="figure">
								<img class="figure-img img-fluid mx-auto d-block w-5" src="<?= base_url('assets\soal\assets\img\bab 3\32.webp') ?>" alt="no image">

							</figure>
						</td>
					</tr>
					<tr>
						<td>3</td>
						<td colspan="3" align="left">
							Operasi penjumlahan pecahan dari diagram diatas adalah
							<br>
							<div class="fraction align-middle">
								<span class="top"><input type="text" id="input67" data-correct="1" data-correct2="1" data-group="7" class="input-dotted"></span>
								<span class="bottom"><input type="text" id="input68" data-correct="2" data-correct2="4" data-group="7" class="input-dotted"></span>
							</div>
							+
							<div class="fraction align-middle">
								<span class="top"><input type="text" id="input69" data-correct="1" data-correct2="1" data-group="7" class="input-dotted"></span>
								<span class="bottom"><input type="text" id="input70" data-correct="4" data-correct2="2" data-group="7" class="input-dotted"></span>
							</div>
							=
							<div class="fraction align-middle">
								<span class="top"><input type="text" id="input73" data-correct="2" data-group="8" data-correct2="1" class="input-dotted"></span>
								<span class="bottom"><input type="text" id="input74" data-correct="4" class="input-dotted"></span>
							</div>
							+
							<div class="fraction align-middle">
								<span class="top"><input type="text" id="input75" data-correct="1" data-group="8" data-correct2="2" class="input-dotted"></span>
								<span class="bottom"><input type="text" id="input76" data-correct="4" class="input-dotted"></span>
							</div>
							=
							<div class="fraction align-middle">
								<span class="top"><input type="text" id="input77" data-correct="3" class="input-dotted"></span>
								<span class="bottom"><input type="text" id="input78" data-correct="4" class="input-dotted"></span>
							</div>
						</td>

					</tr>
					<tr>
						<td>4</td>
						<td colspan="2" align="left">
							Perhatikan diagram di bawah ini! Dapatkah kamu menuliskan pecahan untuk menggambarkan ukuran yang ditunjukkan pada gambar?
					</tr>
					<tr>

						<td></td>
						<td align="center">
							<figure class="figure">
								<img class="figure-img img-fluid mx-auto d-block w-5" src="<?= base_url('assets\soal\assets\img\bab 3\33.webp') ?>" alt="no image">
								<figcaption class="figure-caption text-center">
									a.
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input79" data-correct="1" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input80" data-correct="3" class="input-dotted"></span>
									</div>
								</figcaption>
							</figure>
						</td>
						<td align="center">
							<figure class="figure">
								<img class="figure-img img-fluid mx-auto d-block w-5" src="<?= base_url('assets\soal\assets\img\bab 3\34.webp') ?>" alt="no image">
								<figcaption class="figure-caption text-center">
									b.
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input81" data-correct="3" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input82" data-correct="5" class="input-dotted"></span>
									</div>
								</figcaption>
							</figure>
						</td>

					</tr>

					<tr>
						<td>5</td>
						<td colspan="3" align="left">
							Operasi penjumlahan pecahan dari diagram diatas adalah ...
							<br>
							<div class="fraction align-middle">
								<span class="top"><input type="text" id="input83" data-correct="1" data-correct2="3" data-group="9" class="input-dotted"></span>
								<span class="bottom"><input type="text" id="input84" data-correct="3" data-correct2="5" data-group="9" class="input-dotted"></span>
							</div>
							+
							<div class="fraction align-middle">
								<span class="top"><input type="text" id="input85" data-correct="3" data-correct2="1" data-group="9" class="input-dotted"></span>
								<span class="bottom"><input type="text" id="input86" data-correct="5" data-correct2="3" data-group="9" class="input-dotted"></span>
							</div>
							=
							<div class="fraction align-middle">
								<span class="top"><input type="text" id="input87" data-correct="5" data-group="10" data-correct2="9" class="input-dotted"></span>
								<span class="bottom"><input type="text" id="input88" data-correct="15" class="input-dotted"></span>
							</div>
							+
							<div class="fraction align-middle">
								<span class="top"><input type="text" id="input89" data-correct="9" data-group="10" data-correct2="5" class="input-dotted"></span>
								<span class="bottom"><input type="text" id="input90" data-correct="15" class="input-dotted"></span>
							</div>
							=
							<div class="fraction align-middle">
								<span class="top"><input type="text" id="input71" data-correct="14" class="input-dotted"></span>
								<span class="bottom"><input type="text" id="input72" data-correct="15" class="input-dotted"></span>
							</div>
						</td>

					</tr>
				</table>
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
			var nilaiIsian = 0;
			var soal = 0;

			// inputan biasa
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

			// 10 grup inputan
			var soalGrup = 0;
			for (let index = 1; index <= 10; index++) {
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
				var correct = " "
				if (nilaiGroup1 == targetNilai || nilaiGroup2 == targetNilai) {
					nilaiIsian = nilaiIsian + targetNilai;
				} else if (nilaiGroup1 >= nilaiGroup2) {
					nilaiIsian = nilaiGroup1;
					correct = "data-correct";
				} else {
					nilaiIsian = nilaiGroup2;
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

			console.log((soal + soalGrup));


			// notif pembenaran
			$(function() {
				$('[data-toggle="tooltip"]').tooltip()
			});

			// soal pilihan ganda
			var pilihan = 0;
			for (let index = 1; index <= 2; index++) {
				var rad = $('input[name="pilihan' + index + '"]:checked');
				pilihan = pilihan + parseInt(rad.val());
				if (rad.val() == 0) {
					rad.closest("td").css("background", "red");
				}
			}
			$("input[type='radio'][value='1']").closest("td").css("background", "#8ed278")
			// penghitungan skor
			var totalSkor = Math.round((nilaiIsian + pilihan) / 94 * 100);
			if (isNaN(totalSkor)) {
				totalSkor = 0;
			}
			// notif skor
			Swal.fire(
				'Skor Kamu : ' + totalSkor,
				'Semangat, Tetap Belajar lagi ya :)',
				'success'
			)
			// disabled button selesai
			$("#selesai").attr("disabled", "disabled")
		});
	</script>
</body>

</html>
