	<?php include 'header.php'; ?>
	
	<div class="section">
		<div class="container">

			<?php
				$fasilitas 	= mysqli_query($conn, "SELECT * FROM fasilitas WHERE id = '".$_GET['id']."' ");

				if(mysqli_num_rows($fasilitas) == 0){
					echo "<script>window.location='index.php'</script>";
				}

				$p 			= mysqli_fetch_object($fasilitas);
			?>

			<h3 class="text-center"><?= $p->nama ?></h3>
			<img src="uploads/fasilitas/<?= $p->gambar ?>" width="100%" class="image">
			<?= $p->keterangan ?>
		</div>
	</div>

	<?php include 'footer.php'; ?>