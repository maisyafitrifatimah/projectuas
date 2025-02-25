<?php 

	include '../koneksi.php';

	if(isset($_GET['idpengguna'])){

		$delete = mysqli_query($conn, "DELETE FROM pengguna WHERE id = '".$_GET['idpengguna']."' ");
		echo "<script>window.location = 'pengguna.php'</script>";

	}

	if(isset($_GET['idfasilitas'])){

		$fasilitas = mysqli_query($conn, "SELECT gambar FROM fasilitas WHERE id = '".$_GET['idfasilitas']."' ");

		if(mysqli_num_rows($fasilitas) > 0){

			$p = mysqli_fetch_object($fasilitas);

			if(file_exists("../uploads/fasilitas/".$p->gambar)){

				unlink("../uploads/fasilitas/".$p->gambar);

			}

		}

		$delete = mysqli_query($conn, "DELETE FROM fasilitas WHERE id = '".$_GET['idfasilitas']."' ");
		echo "<script>window.location = 'fasilitas.php'</script>";

	}

	if(isset($_GET['idgaleri'])){

		$galeri = mysqli_query($conn, "SELECT foto FROM galeri WHERE id = '".$_GET['idgaleri']."' ");

		if(mysqli_num_rows($galeri) > 0){

			$p = mysqli_fetch_object($galeri);

			if(file_exists("../uploads/galeri/".$p->foto)){

				unlink("../uploads/galeri/".$p->foto);

			}

		}

		$delete = mysqli_query($conn, "DELETE FROM galeri WHERE id = '".$_GET['idgaleri']."' ");
		echo "<script>window.location = 'galeri.php'</script>";

	}

	if(isset($_GET['ideskul'])){

		$eskul = mysqli_query($conn, "SELECT gambar FROM eskul WHERE id = '".$_GET['ideskul']."' ");

		if(mysqli_num_rows($eskul) > 0){

			$p = mysqli_fetch_object($eskul);

			if(file_exists("../uploads/eskul/".$p->gambar)){

				unlink("../uploads/eskul/".$p->gambar);

			}

		}

		$delete = mysqli_query($conn, "DELETE FROM eskul WHERE id = '".$_GET['ideskul']."' ");
		echo "<script>window.location = 'eskul.php'</script>";

	}
	

?>