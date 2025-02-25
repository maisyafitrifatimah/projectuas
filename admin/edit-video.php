<?php include 'header.php' ?>

<?php
	$youtobe 	= mysqli_query($conn, "SELECT * FROM youtobe WHERE id = '".$_GET['id']."' ");

	if(mysqli_num_rows($youtobe) == 0){
		echo "<script>window.location='video.php'</script>";
	}

	$p 			= mysqli_fetch_object($youtobe);
?>
	<!-- content -->
    <div class="content">

        <div class="container">

            <div class="box">

                <div class="box-header">
                    Edit Galeri video
                </div>

                <div class="box-body">
                    
                <form action="" method="POST" enctype="multipart/form-data">

                <div class="form-group">
								<label>Keterangan</label>
								<input type="text" name="keterangan" placeholder="Keterangan" value="<?= $p->keterangan ?>" class="input-control" required>
							</div>

                            <div class="form-group">
								<label for="video"> Video</label>
								<input type="url" name="video" placeholder="https://www.youtube.com/watch?v=your_video_id" value="<?= $p->video ?>" class="input-control" required>
							</div>

                    <button type="button" class="btn" onclick="window.location = 'video.php'">Kembali</button>
					<input type="submit" name="submit" value="Simpan" class="btn btn-blue">

				</form>

                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $keterangan = $_POST['keterangan'];
                        $video = $_POST['video'];

                        // Lakukan penyimpanan data ke database atau proses lain di sini

                        echo "Keterangan: " . htmlspecialchars($keterangan) . "<br>";
                        echo "Video: " . htmlspecialchars($video);
                     // Validasi link YouTube
                     if (filter_var($video, FILTER_VALIDATE_URL)) {

                        // Menyimpan data
                        $stmt = $conn->prepare("INSERT INTO youtobe (keterangan, video) VALUES (?, ?)");
                        $stmt->bind_param("ss", $keterangan, $video);

                        if ($stmt->execute()) {
                            echo "Video berhasil disimpan!";
                        } else {
                            echo "Gagal menyimpan video: " . $stmt->error;
                        }

                        $stmt->close();
                        $conn->close();
                    } else {
                        echo "Link YouTube tidak valid.";
                    }
                } else {
                    echo "Harap isi form terlebih dahulu.";
                }
                ?>


<?php include 'footer.php' ?>