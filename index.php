	<?php include 'header.php'; ?>
	
	<!-- Awal script Slider/ Carousel -->
	<div id="contoh-carousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
		  <li data-target="#contoh-carousel" data-slide-to="0" class="active"></li>
		  <li data-target="#contoh-carousel" data-slide-to="1"></li>
		  <li data-target="#contoh-carousel" data-slide-to="2"></li>
		</ol>
  
		<div class="carousel-inner" role="listbox">
		<!-- Awal script Slider pertama -->
		<div class="item active">
			<img src="uploads/images/fg.jpg" alt="siswa-siswi" style="width:100%;">
		<div class="carousel-caption">
			<h1>Pendaftaran</h1>
			<h2>Ayo Daftarkan diri anda melalui pendaftaran peserta didik baru melalui online segera!!!</h2>
			<a class="btn btn-success btn-lg" href="daftar.php" role="button">Daftar</a></p>
		</div>
	</div>
		<div class="item">
			<img src="uploads/images/depan.jpg.jpeg" alt="Sekolah"style="width:100%;">
			<div class="carousel-caption">
				<h1>Sekolah</h1>
			  	<h2>Info selengkapnya ada disini</h2>
			  	<p><a class="btn btn-success btn-lg" href="#" role="button">Selengkapnya</a> 
		  	</div>
	  	</div>
		  	<div class="item">
				<img src="uploads/images/gedungsekolah.jpg" alt="Gedung Sekolah"style="width:100%;">
			<div class="carousel-caption">
			  	<h1>Welcome</h1>
				<h2>Selamat datang diwebsite kami</h2>
				<p><a class="btn btn-success btn-lg" href="login.php" role="button">Masuk</a> 
			</div>
		</div><!-- Akhir script Slider ketiga -->
	</div>
	<!-- Awal script Button Geser Kiri dan Kanan -->
	  	<a class="left carousel-control" href="#contoh-carousel" role="button" data-slide="prev">
	  		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	  		<span class="sr-only">Previous</span>
	  	</a>
		  
	  	<a class="right carousel-control" href="#contoh-carousel" role="button" data-slide="next">
	  		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	  		<span class="sr-only">Next</span>
	  	</a><!-- Akhir script Button Geser Kiri dan Kanan -->
		  
	  	</div><!-- Akhir script Slider/Carousel -->

		<!-- bagian sambutan -->
		<div class="section">
			<div class="row">
				<div class="panel panel-default"width="50%">
					<div class="panel-body"width="50%">
						<div class="container text-center">
							<h3>Sambutan Kepala Sekolah</h3>
							<img src="uploads/identitas/<?= $d->foto_kepsek ?>" width="20%"height="10%">
							<h4><?= $d->nama_kepsek ?></h4>
							<p><?= $d->sambutan_kepsek ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>

	
	<!-- bagian fasilitas sekolah -->
	<div class="container">
	<!-- Awal Panel -->
		<div class="row">
			<div class="panel panel-default">
				<div class="panel-body">
					<h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> FASILITAS SEKOLAH</h2>
					<p><?= $d->alamat ?></p>
				
				<div class="section" id="fasilitas">

					<?php
						$fasilitas = mysqli_query($conn, "SELECT * FROM fasilitas ORDER BY id DESC");
						if(mysqli_num_rows($fasilitas) > 0){
						while($j = mysqli_fetch_array($fasilitas)){
					?>

				<div class="col-4">
					<a href="detail-fasilitas.php?id=<?= $j['id'] ?>" class="thumbnail-link">
				<div class="thumbnail-box">
					<div class="thumbail-img" style="background-image: url('uploads/fasilitas/<?= $j['gambar'] ?>');">
				</div>

					<div class="thumbnail-text">
						<?= $j['nama'] ?>
					</div>

						</div>
							</a>
						</div>

						<?php }}else{ ?>

						Tidak ada data

						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- bagian ekstrakulikuler -->

	<div class="container">
	<!-- Awal Panel -->
		<div class="row">
			<div class="panel panel-default">
				<div class="panel-body">
					<h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> EKSTRAKULIKULER</h2>

				<div class="section">

					<?php
						$eskul = mysqli_query($conn, "SELECT * FROM eskul ORDER BY id DESC LIMIT 8");
						if(mysqli_num_rows($eskul) > 0){
						while($p = mysqli_fetch_array($eskul)){
					?>

				<div class="col-4">
					<a href="detail-eskul.php?id=<?= $p['id'] ?>" class="thumbnail-link">
				<div class="thumbnail-box">
					<div class="thumbail-img" style="background-image: url('uploads/eskul/<?= $p['gambar'] ?>');">
				</div>

				<div class="thumbnail-text">
					<?= substr($p['judul'], 0, 50) ?>
				</div>

					</div>
						</a>
					</div>

						<?php }}else{ ?>

						Tidak ada data

						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include 'footer.php'; ?>