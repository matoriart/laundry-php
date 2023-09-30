<?php
include "../db/koneksi.php";
$qry_cek=mysqli_query($conn,"select * from member where id_member = '".$_GET['id_member']."'");
    session_start();
    $dt_login=mysqli_fetch_array($qry_cek);
    $_SESSION['id_member']=$dt_login['id_member'];
    echo'<script>alert("Sukses memakai member");location.href="../home-index/paket.php"</script>';
?>