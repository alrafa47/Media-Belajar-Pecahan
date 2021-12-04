<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Pengurangan Pecahan</title>
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

		.table-bordered,
		.table-bordered td,
		.table-bordered th {
			border: 1px solid black;
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
			<span class="d-block d-lg-none">Pengurangan Pecahan</span>
			<span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?= base_url('assets/soal/') ?>assets/img/4.webp" alt="..." /></span>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav">
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Penjelasan</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#ayoMenemukan">ayo Menemukan</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#ayoMenyimak">Ayo Menyimak</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#ayoBerlatih">Ayo Berlatih</a></li>
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
							Pengurangan
							<span class="text-primary">Pecahan</span>
						</h2>
					</div>
				</div>
				<div class="card mt-1">
					<div class="card-body">
						<h1 class="mb-0">
							<p class="lead mb-5">Pengurangan pecahan biasa adalah dasar operasi pengurangan pecahan yang menggunakan pecahan biasa (pecahan yang pembilangnya lebih kecil dari penyebut).</p>
						</h1>
					</div>
				</div>
			</div>
		</section>
		<hr class="m-0" />

		<!-- ayoMenemukan-->
		<section class="resume-section" id="ayoMenemukan">
			<div class="resume-section-content">
				<div class="card">
					<div class="card-body">
						<h2>ayo Menemukan</h2>
					</div>
				</div>
				<div class="card mt-3 mb-3">
					<div class="card-body">
						<ol>
							<li>
								<p>Mari menentukan bentuk pecahan dari bagian roti yang diambil pada gambar di bawah ini!</p>
								<div class="d-inline-flex align-middle mx-auto">
									<img style="min-width: 120px; width: 200px;" class="img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 4\1.webp') ?>" alt="no image">
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input1" data-correct="3" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input2" data-correct="8" class="input-dotted"></span>
									</div>
								</div>
							</li>
							<li>
								<p class="d-inline">
									Dika mengambil 1 potong pizza yang ada di piring tersebut, maka pecahan untuk menggambarkan ukuran pizza yang diambil Dika adalah
								</p>
								<div class="fraction align-middle">
									<span class="top"><input type="text" id="input3" data-correct="1" class="input-dotted"></span>
									<span class="bottom"><input type="text" id="input4" data-correct="8" class="input-dotted"></span>
								</div>
							</li>

							<li>
								<p>Operasi pengurangan pecahan dari soal nomor 1 dan 2 adalah </p>
								<div class="d-inline-block">
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input5" data-correct="3" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input6" data-correct="8" class="input-dotted"></span>
									</div>
									-
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input7" data-correct="1" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input8" data-correct="8" class="input-dotted"></span>
									</div>
									=
									<div class="fraction align-middle">
										<span class="top"><input type="text" id="input9" data-correct="2" class="input-dotted"></span>
										<span class="bottom"><input type="text" id="input10" data-correct="8" class="input-dotted"></span>
									</div>
								</div>
							</li>

							<li>
								<p>Perhatikan diagram berikut ini!</p>
								<img style="min-width: 120px;" class="img-fluid d-block" src="<?= base_url('assets\soal\assets\img\bab 4\2.webp') ?>" alt="no image">
								Gambar yang diarsir menunjukkan pecahan
								<div class="fraction align-middle">
									<span class="top"><input type="text" id="input11" data-correct="7" class="input-dotted"></span>
									<span class="bottom"><input type="text" id="input12" data-correct="10" class="input-dotted"></span>
								</div>
							</li>

							<li>
								<p class="d-inline-block">
									Jika Rina mengambil 1 bagian<img class="img-fluid d-inline" src="<?= base_url('assets\soal\assets\img\bab 4\3.webp') ?>" alt="no image">artinya sama dengan pecahan
								<div class="fraction align-middle">
									<span class="top"><input type="text" id="input13" data-correct="1" class="input-dotted"></span>
									<span class="bottom"><input type="text" id="input14" data-correct="10" class="input-dotted"></span>
								</div>
								</p>
							</li>
							<li>
								<p>Maka bentuk diagram yang sekarang adalah </p>
							</li>
							<li>
								<img style="min-width: 120px;" class="img-fluid d-block" src="<?= base_url('assets\soal\assets\img\bab 4\4.webp') ?>" alt="no image">
								Gambar di atas yang diarsir menunjukkan pecahan
								<div class="fraction align-middle">
									<span class="top"><input type="text" id="input15" data-correct="6" class="input-dotted"></span>
									<span class="bottom"><input type="text" id="input16" data-correct="10" class="input-dotted"></span>
								</div>
							</li>
							<li>
								Pada soal nomor 4-6 dapat digambarkan dengan operasi pengurangan pecahan berikut ini
								<div class="fraction align-middle">
									<span class="top"><input type="text" id="input17" data-correct="7" class="input-dotted"></span>
									<span class="bottom"><input type="text" id="input18" data-correct="10" class="input-dotted"></span>
								</div>
								-
								<div class="fraction align-middle">
									<span class="top"><input type="text" id="input19" data-correct="1" class="input-dotted"></span>
									<span class="bottom"><input type="text" id="input20" data-correct="10" class="input-dotted"></span>
								</div>
								=
								<div class="fraction align-middle">
									<span class="top"><input type="text" id="input21" data-correct="6" class="input-dotted"></span>
									<span class="bottom"><input type="text" id="input22" data-correct="10" class="input-dotted"></span>
								</div>
							</li>

							<li>
								Di Gudang Pak Tani tersedia beras sebanyak <div class="fraction align-middle">
									<span class="top">5</span>
									<span class="bottom">8</span>
								</div> Kwintal. Setelah 2 minggu, <div class="fraction align-middle">
									<span class="top">1</span>
									<span class="bottom">8</span>
								</div> kwintal beras tersebut telah terjual. Berapa kwintal beras Pak Tani yang masih ada?
								<br>
								<div class="fraction align-middle">
									<span class="top"><input type="text" id="input23" data-correct="5" class="input-dotted"></span>
									<span class="bottom"><input type="text" id="input24" data-correct="8" class="input-dotted"></span>
								</div>
								-
								<div class="fraction align-middle">
									<span class="top"><input type="text" id="input25" data-correct="1" class="input-dotted"></span>
									<span class="bottom"><input type="text" id="input26" data-correct="8" class="input-dotted"></span>
								</div>
								=
								<div class="fraction align-middle">
									<span class="top"><input type="text" id="input27" data-correct="4" class="input-dotted"></span>
									<span class="bottom"><input type="text" id="input28" data-correct="8" class="input-dotted"></span>
								</div>
							</li>
							<li>
								<div class="fraction align-middle">
									<span class="top">5</span>
									<span class="bottom">6</span>
								</div>
								-
								<div class="fraction align-middle">
									<span class="top">1</span>
									<span class="bottom">6</span>
								</div>
								=
								<div class="fraction align-middle">
									<span class="top"><input type="text" id="input29" data-correct="4" class="input-dotted"></span>
									<span class="bottom"><input type="text" id="input30" data-correct="6" class="input-dotted"></span>
								</div>
							</li>
						</ol>
					</div>
				</div>
			</div>
		</section>
		<hr class="m-0" />

		<!-- Ayo Menyimak-->
		<section class="resume-section" id="ayoMenyimak">
			<div class="resume-section-content">
				<div class="card mb-5">
					<div class="card-body">
						<h2>Ayo Menyimak</h2>
					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<p>Coba lengkapi operasi pengurangan pecahan berikut ini!</p>
						<div class="fraction align-middle">
							<span class="top">4</span>
							<span class="bottom">5</span>
						</div>
						-
						<div class="fraction align-middle">
							<span class="top">2</span>
							<span class="bottom">3</span>
						</div>
						<ol type="a">
							<li>
								<p>
									Pertama carilah Kelipatan Persekutuan Kecil dari 3 dan 5 dengan cara melengkapi tabel kelipatan berikut ini.
								</p>
								<table class="table table-bordered text-center" style="width: 50%;">
									<tr>
										<td>3</td>
										<td>6</td>
										<td>9</td>
										<td>12</td>
										<td style="background-color: yellow; color: red;">15</td>
									</tr>
									<tr>
										<td>5</td>
										<td>10</td>
										<td style="background-color: yellow; color: red;">15</td>
										<td>20</td>
										<td>25</td>
									</tr>
								</table>
								<p>Pilihlah angka yang sama terkecil dari Kelipatan Persekutuan Terkecil dari 3 dan 5!</p>
							</li>
							<li>
								Maka diperoleh Kelipatan Persekutuan Kecil dari 3 dan 5 yaitu 15
							</li>
							<li>
								<p>Kelipatan Persekutuan Kecil 3 dan 5 menjadi penyebut operasi pengurangan pecahan, setelah itu 15 dibagi dengan penyebut, dan hasilnya dikalikan dengan pembilang</p>
								<img class="img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 4\7.webp') ?>" alt="no image">
							</li>
							<li>
								Cara di atas dapat kamu gunakan juga jika ada operasi penjumlahan pecahan dengan penyebut berbeda.
							</li>
						</ol>
					</div>
				</div>

			</div>
		</section>
		<hr class="m-0" />

		<!-- AyoBerlatih-->
		<section class="resume-section" id="ayoBerlatih">
			<div class="resume-section-content">
				<div class="card mb-5">
					<div class="card-body">
						<h2>Ayo Berlatih</h2>
					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<ol>
							<li>
								<p>
									Dian memiliki pita sepanjang
								<div class="fraction align-middle">
									<span class="top">1</span>
									<span class="bottom">2</span>
								</div> meter. Dian memberikan <div class="fraction align-middle">
									<span class="top">1</span>
									<span class="bottom">4</span>
								</div> meter kepada adiknya.
								</p>
								<img style="min-width:120px" class="img-fluid mx-auto d-block" src="<?= base_url('assets\soal\assets\img\bab 4\8.webp') ?>" alt="no image">
								<p>Sisa pita yang dimiliki Dian sekarang dapat dituliskan sebagai operasi pengurangan pecahan yaitu:</p>
								<div class="fraction align-middle">
									<span class="top"><input type="text" id="input31" data-correct="1" class="input-dotted"></span>
									<span class="bottom"><input type="text" id="input32" data-correct="2" class="input-dotted"></span>
								</div>
								-
								<div class="fraction align-middle">
									<span class="top"><input type="text" id="input33" data-correct="1" class="input-dotted"></span>
									<span class="bottom"><input type="text" id="input34" data-correct="4" class="input-dotted"></span>
								</div>
							</li>
							<li>
								<p>Hitunglah sisa pita yang dimiliki Dian sekarang!</p>
								<div class="fraction align-middle">
									<span class="top"><input type="text" id="input35" data-correct="1" class="input-dotted"></span>
									<span class="bottom"><input type="text" id="input36" data-correct="2" class="input-dotted"></span>
								</div>
								-
								<div class="fraction align-middle">
									<span class="top"><input type="text" id="input37" data-correct="1" class="input-dotted"></span>
									<span class="bottom"><input type="text" id="input38" data-correct="4" class="input-dotted"></span>
								</div>
								=
								<div class="fraction align-middle">
									<span class="top"><input type="text" id="input39" data-correct="2" class="input-dotted"></span>
									<span class="bottom"><input type="text" id="input40" data-correct="4" class="input-dotted"></span>
								</div>
								-
								<div class="fraction align-middle">
									<span class="top"><input type="text" id="input41" data-correct="1" class="input-dotted"></span>
									<span class="bottom"><input type="text" id="input42" data-correct="4" class="input-dotted"></span>
								</div>
								=
								<div class="fraction align-middle">
									<span class="top"><input type="text" id="input43" data-correct="1" class="input-dotted"></span>
									<span class="bottom"><input type="text" id="input44" data-correct="4" class="input-dotted"></span>
								</div>
							</li>
							<li>
								Ibu memiliki singkong seberat <div class="fraction align-middle">
									<span class="top">3</span>
									<span class="bottom">4</span>
								</div> kg. kemudian Ibu membuat kolak dan menggunakan singkong tersebut sebanyak <div class="fraction align-middle">
									<span class="top">1</span>
									<span class="bottom">8</span>
								</div> kg. berapakah berat singkong Ibu yang masih tersisa sekarang?
								<br>
								<div class="fraction align-middle">
									<span class="top"><input type="text" id="input45" data-correct="3" class="input-dotted"></span>
									<span class="bottom"><input type="text" id="input46" data-correct="4" class="input-dotted"></span>
								</div>
								-
								<div class="fraction align-middle">
									<span class="top"><input type="text" id="input47" data-correct="1" class="input-dotted"></span>
									<span class="bottom"><input type="text" id="input48" data-correct="8" class="input-dotted"></span>
								</div>
								=
								<div class="fraction align-middle">
									<span class="top"><input type="text" id="input49" data-correct="6" class="input-dotted"></span>
									<span class="bottom"><input type="text" id="input50" data-correct="8" class="input-dotted"></span>
								</div>
								-
								<div class="fraction align-middle">
									<span class="top"><input type="text" id="input51" data-correct="1" class="input-dotted"></span>
									<span class="bottom"><input type="text" id="input52" data-correct="8" class="input-dotted"></span>
								</div>
								=
								<div class="fraction align-middle">
									<span class="top"><input type="text" id="input53" data-correct="5" class="input-dotted"></span>
									<span class="bottom"><input type="text" id="input54" data-correct="8" class="input-dotted"></span>
								</div>
							</li>
							<li>
								<p>
									Hitunglah pengurangan pecahan di bawah ini!
								</p>
								<ol type="a">
									<li>
										<div class="fraction align-middle">
											<span class="top">3</span>
											<span class="bottom">4</span>
										</div>
										-
										<div class="fraction align-middle">
											<span class="top">1</span>
											<span class="bottom">3</span>
										</div>
										=
										<div class="fraction align-middle">
											<span class="top"><input type="text" id="input55" data-correct="9" class="input-dotted"></span>
											<span class="bottom"><input type="text" id="input56" data-correct="12" class="input-dotted"></span>
										</div>
										-
										<div class="fraction align-middle">
											<span class="top"><input type="text" id="input57" data-correct="4" class="input-dotted"></span>
											<span class="bottom"><input type="text" id="input58" data-correct="12" class="input-dotted"></span>
										</div>
										=
										<div class="fraction align-middle">
											<span class="top"><input type="text" id="input59" data-correct="5" class="input-dotted"></span>
											<span class="bottom"><input type="text" id="input60" data-correct="12" class="input-dotted"></span>
										</div>
									</li>
									<li>
										<div class="fraction align-middle">
											<span class="top">3</span>
											<span class="bottom">5</span>
										</div>
										-
										<div class="fraction align-middle">
											<span class="top">1</span>
											<span class="bottom">2</span>
										</div>
										=
										<div class="fraction align-middle">
											<span class="top"><input type="text" id="input61" data-correct="6" class="input-dotted"></span>
											<span class="bottom"><input type="text" id="input62" data-correct="10" class="input-dotted"></span>
										</div>
										-
										<div class="fraction align-middle">
											<span class="top"><input type="text" id="input63" data-correct="5" class="input-dotted"></span>
											<span class="bottom"><input type="text" id="input64" data-correct="10" class="input-dotted"></span>
										</div>
										=
										<div class="fraction align-middle">
											<span class="top"><input type="text" id="input65" data-correct="1" class="input-dotted"></span>
											<span class="bottom"><input type="text" id="input66" data-correct="10" class="input-dotted"></span>
										</div>
									</li>
								</ol>
							</li>
						</ol>
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

			$(function() {
				$('[data-toggle="tooltip"]').tooltip()
			})

			var totalSkor = Math.round(isian / 66 * 100);
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