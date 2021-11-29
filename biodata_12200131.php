<?php
// Mendefinisikan konstanta atau nilai statis variabel
$Robih = "Robih";
$data = "data diri";
$pendidikan = "pendidikan";
$attaqwa = "Mi Nur-Attaqwa";
$smp = "Sekolah Menengah Pertama Negeri 114 Jakarta Utara";
$sma = "Sekolah Menengah Atas Karya Aksara (Paket C)";
$universitas = "Universitas Bina Sarana Informatika D3";
$Language = "Languange";
$indonesia = "Indonesia";
$English = "English";
$arab = "bahasa arab";
$kerja = "pengalaman kerja";
$organisasi = "pengalaman organisasi";
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<head>
	<style>
		/* block style pada elemen body */
		body {
			background-image: url(https://manjaro.org/img/bg.svg);
			background-size: auto;
			background-color: #f0f0f0;
			background-size: contain;
			background-repeat: no-repeat;
			background-position: -232px 232px;
			background-attachment: fixed;
			width: 95%;
		}

		/* kode css membuat/menggabungkan kolom */
		#colspan {
			background-color: white;
			background-position: center center;
			box-shadow: 0 0 25px;
			width: 31%;
			height: 1400.15px;
			text-align: justify;
			float: left;
			padding: 0 8px;
			padding-right: 16px;

			/* membungkus dan mengatur sisi sebuah elemen */
		}

		.container-padding {
			box-shadow: 0 0 25px;
			width: 60%;
			height: 1400.2px;
			background-color: rgb(255, 255, 255);
			box-sizing: border-box;
			color: rgb(0, 0, 0);
			font-family: "Roboto", sans-serif;
			font-size: 15px;
			line-height: 22.5px;
			margin-left: 34%;
			padding-bottom: 0.15px;
			padding-left: 16px;
			padding-top: 0.15px;
		}


		/* kode css membuat sebuah progres/berupa bentuk loading */
		.load {
			background-color: rgb(241, 241, 241);
			border-bottom-left-radius: 16px;
			border-bottom-right-radius: 16px;
			border-top-left-radius: 16px;
			border-top-right-radius: 16px;
			box-sizing: border-box;
			color: rgb(0, 0, 0);
			font-family: "Roboto", sans-serif;
			font-size: 12px;
			line-height: 18px;
		}

		.progress {
			background-color: #009688 !important;
			border-bottom-left-radius: 13px;
			border-bottom-right-radius: 16px;
			border-top-left-radius: 16px;
			border-top-right-radius: 16px;
			box-sizing: border-box;
			color: rgb(0, 0, 0);
			font-family: "Roboto", sans-serif;
			font-size: 12px;
			line-height: 18px;
			color: #ffff !important;
			text-align: center;
		}

		.load2 {
			background-color: rgb(241, 241, 241);
			border-bottom-left-radius: 16px;
			border-bottom-right-radius: 16px;
			border-top-left-radius: 16px;
			border-top-right-radius: 16px;
			box-sizing: border-box;
			color: rgb(0, 0, 0);
			font-family: "Roboto", sans-serif;
			font-size: 12px;
			line-height: 18px;
		}


		.progress2 {
			background-color: #009688 !important;
			border-bottom-left-radius: 16px;
			border-bottom-right-radius: 16px;
			border-top-left-radius: 16px;
			border-top-right-radius: 16px;
			box-sizing: border-box;
			color: rgb(0, 0, 0);
			font-family: "Roboto", sans-serif;
			font-size: 12px;
			line-height: 18px;
			color: #ffff !important;
			text-align: center;
		}

		.load3 {
			background-color: rgb(241, 241, 241);
			border-bottom-left-radius: 16px;
			border-bottom-right-radius: 16px;
			border-top-left-radius: 16px;
			border-top-right-radius: 16px;
			box-sizing: border-box;
			color: rgb(0, 0, 0);
			line-height: 18px;
		}

		.progress3 {
			background-color: #009688 !important;
			border-bottom-left-radius: 16px;
			border-bottom-right-radius: 16px;
			border-top-left-radius: 16px;
			border-top-right-radius: 16px;
			color: #fff !important;
			text-align: center;
			line-height: 18px;
			font-size: 12px;


		}

		.load4 {
			background-color: rgb(241, 241, 241);
			border-bottom-left-radius: 16px;
			border-bottom-right-radius: 16px;
			border-top-left-radius: 16px;
			border-top-right-radius: 16px;
			box-sizing: border-box;
			color: rgb(0, 0, 0);
			line-height: 18px;
		}

		.progress4 {
			background-color: #009688 !important;
			border-bottom-left-radius: 16px;
			border-bottom-right-radius: 16px;
			border-top-left-radius: 16px;
			border-top-right-radius: 16px;
			color: #fff !important;
			text-align: center;
			line-height: 18px;
			font-size: 12px;
		}

		/* membuat spasi atau ruang diantara konten dan border */
		.content1 {
			padding: 14px;
		}

		.content2 {
			padding: 14px;
		}

		.content3 {
			padding: 10px;
		}

		.content {
			padding: 10px;
		}

		.content4 {
			padding: 16px;
		}

		.content5 {
			padding: 16px;
		}

		.content6 {
			padding: 16px;
		}

			{
			/* kode css untuk gambar */
		}

		img.center {
			display: block;
			margin-left: auto;
			margin-right: auto;
		}

		/* kode css membuat element h4 */
		h4 {
			font-size: 20px;
			color: black;
			padding: auto;
			text-align: center;
			margin-top: auto;
		}

		i {
			padding: 5px;
			color: #009688 !important;
		}

		hr {
			border: -1px solid gray;
		}
	</style>
</head>

<body>
	<!-- Container -->
	<div class="container">
		<div id="colspan">
			<!-- colspan mengabungan beberapa kolom sederhana -->
			<img class="center" src="rob.png" width="200px" style="border-radius:200px;" -moz-border-radius: 200px;>
			<!-- tag <hr/> membuat garis horizontal -->
			<hr />
			<!-- tag </br> untuk membuat baris baru -->
			</br>
			<!-- <h4> digunakan untuk judul artikel terkait -->
			<h4>Robih</h4>
			<!-- tag <p> membuat sebuah paragraf -->
			<p style="text-align: justify;"> Disiplin memiliki motivasi yang tingg,
				memiliki
				analisis yang baik dan juga memiliki keterampilan komunikasi yang baik.</p>
			<hr />
			<p><i class="fa fa-briefcase fa-fw large"></i>Jasa Total Logistik</p>
			<p><i class="fa fa-street-view fa-fw large"></i><a href="https://goo.gl/maps/pgPtGUxqPw93fnyt7">Kp.Sukapura Jaya</a></p>
			<p><i class="fa fa-phone fa-fw large"></i><a href="https://bit.ly/31Ikjsb">089681684199</a></p>
			<hr>
			<h3><i class="fa fa-user fa-fw large"></i>Data Diri</h3>
			<!-- paragraf -->
			<p>Tempat Lahir : Jakarta</p>
			<p>Tanggal Lahir : 11 April 1996</p>
			<p>Agama : Islam</p>
			<p>Status Pernikahan : Belum Menikah</p>
			<p>kebangsaan : Indonesia</p>
			<p>Tinggi Badan : 169cm</p>
			<p>Berat Badan : 58kg</p>
			<hr>
			<h3><i class="fa fa-balance-scale fa-fw large"></i>Kemampuaan</h3>
			<p>HTML</p>
			<!-- <div class, mendefinisikan id dari css -->
			<div class="load">
				<div class="progress" style="width:70%">70%</div>
			</div>
			<p>CSS</p>
			<div class="load2">
				<div class="progress2" style="width:65%">65%</div>
			</div>
			<p>Microsoft word</p>
			<div class="load3">
				<div class="progress3" style="width:70%">70%</div>
			</div>
			<p>Microsoft Excel</p>
			<div class="load4">
				<div class="progress4" style="width:65%">65%</div>
			</div>
			<p>Welder(pengelasan)</p>
			<p>tes paragraf</p>
			<div class="load4">
				<div class="progress4" style="width:80%">90%</div>
			</div>
			<p>Listrik</p>
			<div class="load4">
				<div class="progress4" style="width:65%">65%</div>
			</div>
			<hr>
			<h3><i class="fa fa-language fa-fw large"></i>Bahasa</h3>
			<div>
				<!-- <li> membuat daftar berurutan -->
				<li>Indonesia (aktif)</li>
				<li>English (pasif)</li>
				<li>Bhs.Arab (pasif)</li>
			</div>

			<div style="text-align: right;">&copy; 2021 by Robih
			</div>

		</div>
		<div class="container-padding">
			<div class="padding">
				<div class="content1">
					<h2><i class="fa fa-university fa-fw large"></i>Pendidikan</h2>
					<h3>MI.NUR-ATTAQWA</h3>
					<p><i class="fa fa-calendar fa-fw large"></i>2009/2010</p>
					<p>Sekolah Madrasah Ibtidaiyah Nur-Attaqwa Jakarta Utara dengan nilai rata-rata 21,3
					</p>
				</div>
				<hr>
				<div class="content2">
					<h3>Sekolah Menengah Pertama Negeri 114 Jakarta Utara</h3>
					<p><i class="fa fa-calendar fa-fw large"></i>2011/2012</p>
					<p>Sekolah Menengah Pertama Negeri 114 jakarta utara dengan nilai kelulusan rata-rata 7,2
					</p>
				</div>
				<hr>
				<div class="content3">
					<h3>Sekolah Menengah Atas Karya Aksara (Paket C)</h3>
					<p><i class="fa fa-calendar fa-fw large"></i>2017/2018</p>
					<p>Sekolah Menengah Atas Karya Aksara (Paket C) dengan nilai 75,53 , jurusan Ilmu Pengetahuan Alam
						<hr>
					<div class="padding">
						<div class="content">
							<h3>Universitas Bina Sarana Informatika D3</h3>
							<p><i class="fa fa-calendar fa-fw large"></i>2023/2024</p>
							<p>Sedang menempuh pendidikan tinggi di Universitas Bina Sarana Informatika , jurusan Sistem informasi
							</p>
							<hr />
							<h2><i class="fa fa-briefcase fa-fw large"></i>Pengalaman Kerja</h2>
							<td style="text-align: justify;">
								<!-- <b> menebalkan kalimat/paragraf -->
								<b>
									<li>PT.Cahaya mas cemerlang (Teknisi)</li>
								</b>
								<p><i class="fa fa-calendar fa-fw large"></i>22 oktober 2015 - 24 april 2017</p>
								<hr />
								<b>
									<li>PT.Haistar (warehouse)</li>
								</b>
								<p><i class="fa fa-calendar fa-fw large"></i>12 september 2018 - 15 februari 2019</p>
								<hr />
								<b>
									<li>PT.Mayora (Operator produksi)</li>
								</b>
								<p><i class="fa fa-calendar fa-fw large"></i>24 april 2019 - 25 oktober 2019</p>
								<hr>
								<b>
									<li>Apartemen Gading Green Hill (OB)</li>
								</b>
								<p><i class="fa fa-calendar fa-fw large"></i>25 november 2019 - 30 Desember 2019</p>
								<hr>
								<b>
									<li>CV. Jappa Indonesia(Teknisi)</li>
								</b>
								<p><i class="fa fa-calendar fa-fw large"></i> 15 januari 2020 - 20 desember 2020</p>
								<hr />
							</td>
							<h2><i class="fa fa-sitemap fa-fw large"></i>Pengalaman Organisasi</h2>
							<td style="text-align: justify;">
								<p> 2019-Sekarang : Ketua Karang Karuna Unit RT</p>
								<p> 2019-Sekarang : Ketua Ikatan Remaja Masjid Al-Husna (Pegangsaan 2)</p>
							</td>
						</div>
</body>

</html>