<?php
    $id_barang = $_POST["id_outlet"];
    $nama_barang = $_POST["nama_outlet"];
    $penjual = $_POST["alamat"];
    $tlp = $_POST["tlp"];
    
    include "../db/koneksi.php";            
            $input = mysqli_query($conn, "UPDATE outlet SET nama_outlet='".$nama_barang."', alamat='".$penjual."', tlp='".$tlp."' where id_outlet='".$id_barang."'");

            if ($input) {
                echo "<script>alert('Berhasil');location.href='../dashboard/outlet.php';</script>";
            }
            else {
                echo "<script>alert('Gagal');location.href='../dashboard/ubah_outlet.php';</script>";
            
    }
    
?>