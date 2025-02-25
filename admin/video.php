
<?php include 'header.php' ?>

<!-- content -->
<div class="content">

<div class="container">

    <div class="box">

        <div class="box-header">
            Galeri Video
        </div>

        <div class="box-body">
            
            <a href="tambah-video.php" class="text-green"><i class="fa fa-plus"></i>  Tambah</a>

            <?php
                if(isset($_GET['success'])){
                    echo "<div class='alert alert-success'>".$_GET['success']."</div>";
                }
            ?>
                
                <form action="">
					<div class="input-group">
						<input type="text" name="key" placeholder="Pencarian">
						<button type="submit"><i class="fa fa-search"></i></button>
					</div>
				</form>

                <table class="table">
							<thead>
								<tr>
									<th>NO</th>
									<th>Video</th>
									<th>Keterangan</th>
									<th>Aksi</th>
								</tr>
							</thead>

                <tbody>
					<?php
					$no = 1;
                    $where = " WHERE 1=1 ";
									if(isset($_GET['key'])){
										$where .= " AND keterangan LIKE '%".addslashes($_GET['key'])."%' ";
									}

									$youtobe = mysqli_query($conn, "SELECT * FROM youtobe $where ORDER BY id DESC");
									if(mysqli_num_rows($youtobe) > 0){
										while($p = mysqli_fetch_array($youtobe)){
								?>
        
            <tr>
				<td><?= $no++ ?></td>
                <td><?= $p['video'] ?></td>
				<td><?= $p['keterangan'] ?></td>
                <td>
				<td>
					<a href="edit-video.php?id=<?= $p['id'] ?>" title="Edit Data" class="text-orange"><i class="fa fa-edit"></i></a> 
					<a href="hapus-video.php?id=<?= $p['id']?>" onclick=" return confirm('Anda yakin menghapus data ?')"title="Hapus Data" class="text-red"><i class="fa fa-times"></i></a>
                    
                		
                </td>
            </tr>
            <?php }}else{ ?>
								<tr>
									<td colspan="5">Data tidak ada</td>
								</tr>
							<?php } ?>
							</tbody>
						</table>

					</div>

				</div>

			</div>

</div> <?php include 'footer.php' ?>