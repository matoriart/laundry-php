<?php
if($_POST){
    $nama_user=$_POST['nama_outlet'];
    $lahir=$_POST['alamat'];
    $gender=$_POST['tlp'];
     include "../db/koneksi.php";
     echo $id;
         $simpan=mysqli_query($conn, "insert into outlet value('', '$nama_user', '$lahir', '$gender')");
         if($simpan){
             echo'<script>alert("Sukses");location.href="../dashboard/outlet.php"</script>';
         }
         else{
             echo '<script>alert("Gagal");location.href="../dashboard/tambah_outlet.php"</script>';
         }
    }

?>