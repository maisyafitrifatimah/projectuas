<?php
	include 'koneksi.php';
	date_default_timezone_set("Asia/Jakarta");

	$identitas = mysqli_query($conn, "SELECT * FROM pengaturan ORDER BY id DESC LIMIT 1");
	$d = mysqli_fetch_object($identitas);
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="uploads/identitas/<?= $d->favicon ?>">
	<title>Website <?= $d->nama ?></title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap/css/dataTables.bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet"href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<style>
	body {
        padding-top: 60px;
      }
		</style>
  	</head>

	<div id="topbar">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="top-contact">
						<li><a href=""><i class="fas fa-phone"></i></i>021-123-345-678</a></li>
						<li><a href=""><i class="fas fa-envelope"></i>mastpi@sch.id</a></li>
						<li><a href=""><i class="fas fa-bullhorn"></i>PPDB TA 2024-2025 Telah dibuka!</a></li>
				</div>
			</div>
			<div class="col-md-3">
				<div class="sosmed">
				<li><a href="https://www.facebook.com/profile.php?id=61558858363245"><i class="fab fa-facebook"></i></a></li>
				<li><a href="https://www.instagram.com/mastpi67?igsh=ZGFjcmF3Z3VzcXRk"><i class="fab fa-instagram"></i></a></li>
				<li><a href="https://youtube.com/@mastpisawitseberang?si=VgWjXjc63EK_lGhA"><i class="fab fa-youtube"></i></a></li>
				<li><a href="https://x.com/MasTpi33354?t=oBdIAVB3ki3e1-2rqGfGQA&s=09"><i class="fab fa-twitter"></i></a></li>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

	<!-- box menu mobile -->
	<div class="box-menu-mobile" id="mobileMenu">
		<span onclick="hideMobileMenu()">Close</span>
		<ul class="text-center">
			<li><a href="index.php">Beranda</a></li>
			<li><a href="tentang-sekolah.php">Tentang Sekolah</a></li>
			<li><a href="jurusan.php">Jurusan</a></li>
			<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Galeri <span class="caret"></span>
						</a>
							<ul class="dropdown-menu">
								<li><a href="galeri.php">Foto</a></li>
								<li><a href="video.php">Video</a></li>
							</ul>
						</li>
			<li><a href="informasi.php">Informasi</a></li>
			<li><a href="kontak.php">Kontak</a></li>
			<li><a href="login.php">login</a></li>
		</ul>
	</div>

	<!-- bagian header -->
	<div class="header">

		<div class="container">

			<div class="header-logo">
				<img src="uploads/identitas/<?= $d->logo ?>" width="50">
				<h2><a href="index.php"><?= $d->nama ?></a></h2>
			</div>

			<ul class="header-menu">
				<li><a href="index.php">Beranda</a></li>
				<li><a href="tentang-sekolah.php">Tentang Sekolah</a></li>
				<li><a href="fasilitas.php">Fasilitas</a></li>
				<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Galeri <span class="caret"></span>
						</a>
							<ul class="dropdown-menu">
								<li><a href="galeri.php">Foto</a></li>
								<li><a href="video.php">Video</a></li>
							</ul>
						</li>
				<li><a href="eskul.php">Ekstrakulikuler</a></li>
				<li><a href="contact.php">Kontak</a></li>
				<li><a href="login.php">Login</a></li>
			</ul>

			<div class="mobile-menu-btn text-center">
				<a href="#" onclick="showMobileMenu()">Menu</a>
			</div>

		</div>

	</div>