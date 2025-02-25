<?php include 'header.php' ?>

		<!-- content -->
		<div class="content">

			<div class="container">

				<div class="box">

					<div class="box-header">
						Kontak
					</div>

					<form action="">
					<div class="input-group">
					    <input type="text" name="key" placeholder="Pencarian">
					    <button type="submit"><i class="fa fa-search"></i></button>
					</div>
				</form>

                <table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Alamat Email</th>
					<th>Pesan</th>
				</tr>
			</thead>

            <tbody>
        <?php
            $no = 1;
            $where = " WHERE 1=1 ";

            $komentar = mysqli_query($conn, "SELECT * FROM komentar $where ORDER BY komentar_id DESC");
            if(mysqli_num_rows($komentar) > 0){
            while($p = mysqli_fetch_array($komentar)){
        ?>

            <tr>
                <td><?= $no++ ?></td>
                <td><?= $p['nama'] ?></td>
                <td><?= $p['email'] ?></td>
                <td><?= $p['pesan'] ?></td>
            <td>

            <a href="hapus-kontak.php?komentar_id=<?= $p['komentar_id']?>" onclick=" return confirm('Anda yakin menghapus data ?')"title="Hapus Data" class="text-red"><i class="fa fa-times"> </i></a>


            </td>
                </tr>

                <?php }}else{ ?>
								<tr>
									<td colspan="4">Data tidak ada</td>
								</tr>
							<?php } ?>
							</tbody>
						</table>

					</div>

				</div>

			</div>

		</div>
<?php include "footer.php";?>