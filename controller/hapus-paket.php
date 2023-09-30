<?php
    if ($_GET['id_paket']) {
        include "../db/koneksi.php";   
        $query_hapus = mysqli_query($conn, "DELETE FROM paket where id_paket = '".$_GET['id_paket']."'");
        if ($query_hapus) {
            // echo "berhasil";
            echo "<script> alert('Berhasil dihapus'); location.href='../home-index/paket.php'; </script>";
        }
        else{
            // echo "gagal";
            echo "<script> alert ('Gagal dihapus'); location.href='../home-index/paket.php'; </script>";
        }
    }
    else{
        echo "id tidak ada";
    }
?>