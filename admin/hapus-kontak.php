<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$id = $_GET['id'];

include "../koneksi.php";

$delete = mysqli_query($conn, "DELETE FROM komentar WHERE id = '".$_GET['id']."' ");

echo "<script>window.location = 'contact.php'</script>";




?>