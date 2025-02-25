<?php include 'header.php'; ?>
	
	
	<div class="section">
		<div class="container">
			<div class="panel panel-default">
				<div class="panel-body">
                <h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> GALERI VIDEO</h2>

<?php

$query = "SELECT * FROM youtobe ORDER BY created_at DESC";
$result = $conn->query($query);
?>

    <?php if ($result->num_rows > 0): ?>
        <?php while ($row = $result->fetch_assoc()): ?>
            
            <div class="thumbnail-box">
            <iframe width="720" height="350" src="https://www.youtube.com/embed/<?php echo $row['video']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <div class="col-4">
                <div class="thumbnail-text">
                    
                <h4><?php echo $row['keterangan']; ?></h4>
                </div>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <p>Tidak ada video.</p>
    <?php endif; ?>
</body>
    </div>
    </div>
    </div>
    </div>
    </div>

<?php include 'footer.php'; ?>

