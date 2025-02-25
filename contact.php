<?php include "header.php" ; ?>

<div class="col-md-12"><!-- Awal Kolom Pertama -->
				<div class="panel panel-default">
					<div class="panel-body">
						<h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> Contact</h2>
						<?php 

						if(@$_GET['pesan']=="inputBerhasil"){

						?>
										<div class="alert alert-success">
										Terima kasih, pesan anda sudah terkirim!
										</div>
						<?php

						}

						?>

						<form action="" method="post">
						<table class="table table-hover">

						<div class="form-group">
								<label>Nama Lengkap</label>
								<input type="text" name="nama" placeholder="Isikan nama anda dengan lengkap" class="input-control" required>
							</div>

							<div class="form-group">
								<label>Alamat Email</label>
								<input type="email" name="nama" placeholder="Isikan alamat email yang masih aktif" class="input-control" required>
							</div>

							<div class="form-group">
								<label>Pesan</label>
								<textarea name="pesan" placeholder="Isikan Pesan Anda" class="form-control input-md" required> </textarea>
							</div>
							
							<input type="submit" value="Kirim" class="btn btn-lg btn-info"> <input type="reset" value="Batal" class="btn btn-lg btn-warning">
								
						</table>
					</form>
					



<?php

if(isset($_POST['submit'])){

    $nama 	= addslashes(ucwords($_POST['nama']));
    $email 	= addslashes($_POST['email']);
    $pesan 	= addslashes($_POST['pesan']);

    $simpan = mysqli_query($conn, "INSERT INTO komentar VALUES (
        null,
        '".$nama."',
        '".$email."',
        '".$pesan."',
        null,
        null
)");

if($simpan){
    echo '<div class="alert alert-success">Data Berhasil Terkirim</div>';
}else{
    echo 'gagal kirim '.mysqli_error($conn);
}

}

?>
					</div>
				</div>
			</div>
      	</div>
		</div><!-- Akhir Kolom Pertama -->

	<div class="section">
		<div class="container">
			<h3 class="text-center">Peta Sekolah</h3>
			
			<div class="col-4">
				<p style="margin-bottom: 10px;"><b>Alamat :</b> <br><?= $d->alamat ?></p>
				<p style="margin-bottom: 10px;"><b>Telepon :</b> <br><?= $d->telepon ?></p>
				<p style="margin-bottom: 10px;"><b>Email :</b> <br><?= $d->email ?></p>
			</div>
			<div class="box-gmaps">
				<iframe src="<?= $d->google_maps ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
			
		</div>
	</div>
	</div>
	</div>

	<?php include 'footer.php'; ?>