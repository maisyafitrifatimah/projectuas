<?php include 'header.php' ?>

        <!-- content -->
        <div class="content">

        <div class="container">

            <div class="box">

                <div class="box-header">
                    Tambah Galeri Video
                </div>

                <div class="box-body">
                    
                    <form action="" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
								<label>Keterangan</label>
								<input type="text" name="keterangan" placeholder="Keterangan" class="input-control" required>
							</div>

							<div class="form-group">
								<label for="video"> Video</label>
								<input type="url" name="video" placeholder="https://www.youtube.com/watch?v=your_video_id" class="input-control" required>
							</div>

                            <button type="button" class="btn" onclick="window.location = 'video.php'">Kembali</button>
							<input type="submit" name="submit" value="Simpan" class="btn btn-blue">

                    </form>

                    <?php
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            $keterangan = htmlspecialchars($_POST['keterangan']);
                            $video = htmlspecialchars($_POST['video']);

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
    

</div>

</div>

</div>

</div>


<?php include 'footer.php' ?>