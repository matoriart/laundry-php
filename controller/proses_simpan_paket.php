<?php
session_start();
if($_POST){
    $nama_user=$_POST['paket'];
    $lahir=$_POST['harga'];
    include "../db/koneksi.php";
         $simpan=mysqli_query($conn, "insert into paket value('', '".$_SESSION['id_outlet']."', '$nama_user', '$lahir')");
         if($simpan){
             echo'<script>alert("Sukses");location.href="../home-index/paket.php"</script>';
         }
         else{
             echo '<script>alert("Gagal");location.href="../dashboard/tambah_paket.php"</script>';
         }
    }

?>