	<?php include 'header.php'; ?>
	
	<div class="section">
		<div class="container">

			<?php
				$eskul 	= mysqli_query($conn, "SELECT * FROM eskul LEFT JOIN pengguna ON pengguna.id = eskul.created_by WHERE eskul.id = '".$_GET['id']."' ");

				if(mysqli_num_rows($eskul) == 0){
					echo "<script>window.location='index.php'</script>";
				}

				$p 			= mysqli_fetch_object($eskul);
			?>

			<h3 class="text-center"><?= $p->judul ?></h3>
			<small>Dibuat pada <?= date('d/m/Y', strtotime($p->created_at)) ?>, oleh <?= $p->nama ?></small>
			<img src="uploads/eskul/<?= $p->gambar ?>" width="100%" class="image" style="margin-top:5px">
			<?= $p->keterangan ?>
		</div>
	</div>

	<?php include 'footer.php'; ?>