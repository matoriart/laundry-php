<?php
if($_POST){
    $nama_barang=$_POST['nama_member'];
    $penjual=$_POST['alamat'];
    $harga=$_POST['jenis_kelamin'];
    $deskripsi=$_POST['tlp'];
        include "../db/koneksi.php";
        $simpan=mysqli_query($conn, "insert into member value('', '$nama_barang', '$penjual', '$harga', '$deskripsi')");
        mysqli_error($conn);
        if($simpan){
             echo'<script>alert("Sukses");location.href="../dashboard/pelanggan.php"</script>';
        }
        else{
             echo '<script>alert("Gagal");location.href="../dashboard/tambah_member.php"</script>';
        }
}
?>