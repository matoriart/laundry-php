<?php
    $id_barang = $_POST["id_paket"];
    $nama_barang = $_POST["nama_paket"];
    $penjual = $_POST["harga"];
    
    include "../db/koneksi.php";            
            $input = mysqli_query($conn, "UPDATE paket SET nama_paket='".$nama_barang."', harga='".$penjual."' where id_paket='".$id_barang."'");

            if ($input) {
                echo "<script>alert('Berhasil');location.href='../home-index/paket.php';</script>";
            }
            else {
                echo "<script>alert('Gagal');location.href='../dashboard/ubah_paket.php';</script>";
            
    }
    
?>