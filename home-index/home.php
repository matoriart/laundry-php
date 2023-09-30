<?php
include "header.php";
include "../db/koneksi.php";
$qry_buku=mysqli_query($conn,"select * from outlet where id_outlet = '".$_SESSION['id_outlet']."'");
$data_buku=mysqli_fetch_array($qry_buku)
?>

<h2>Selamat datang <?=$_SESSION['nama_user']?> di <?=$data_buku['nama_outlet']?>.</h2>
<?php
include "footer.php";
?>