	<?php include 'header.php'; ?>
	
	<!-- Awal Page -->
	<div class="container">
	<!-- Awal baris -->
		<div class="row">
			<div class="col-md-8"><!-- Awal Kolom Pertama -->
				<div class="panel panel-default">
					<div class="panel-body">
					<h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> EKSTRAKULIKULER SEKOLAH</h2>
			
			<?php
				$eskul = mysqli_query($conn, "SELECT * FROM eskul ORDER BY id DESC");
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

<div class="col-md-4"><!-- Awal kolom kedua -->
	<div class="panel panel-default">
		<div class="panel-body">
			<h2 style="text-muted"><span class="glyphicon glyphicon-tasks"></span>Sambutan Kepsek</h2>
				<img src="uploads/images/kepalasekolah.jpg" class="img-thumbnail img-responsive">
				<p>Assalamualaikum warahmatullahi wabarakatuh,Salam sejahtera untuk semua siswa-siswi, guru-guru, dan seluruh staf di sekolah kita yang tercinta.Saya sebagai Kepala Sekolah merasa bangga dan bersyukur dapat memimpin sekolah ini. Kita semua berada dalam lingkungan yang memungkinkan kita untuk belajar dan berkembang bersama.Di sekolah ini, kita memprioritaskan pendidikan yang berkualitas dan juga memberikan kesempatan bagi siswa-siswi untuk mengembangkan potensi mereka di berbagai bidang.Kami juga selalu berusaha untuk meningkatkan fasilitas dan sumber daya yang ada agar dapat memberikan lingkungan belajar yang optimal bagi siswa-siswi.
					Saya mengajak seluruh siswa-siswi untuk bersemangat dalam mengejar cita-cita dan mencapai prestasi yang membanggakan.</p>
				</div>
			</div>
		</div><!-- Akhir Kolom Kedua -->
	</div><!-- Akhir Baris -->
</div><!--  Akhir Page -->
	<?php include 'footer.php'; ?>