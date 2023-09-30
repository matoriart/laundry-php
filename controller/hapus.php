<?php
    if ($_GET['id_member']) {
        include "../db/koneksi.php";   
        $query_hapus = mysqli_query($conn, "DELETE FROM member where id_member = '".$_GET['id_member']."'");
        if ($query_hapus) {
            // echo "berhasil";
            echo "<script> alert('Berhasil dihapus'); location.href='../dashboard/pelanggan.php'; </script>";
        }
        else{
            // echo "gagal";
            echo "<script> alert ('Gagal dihapus'); location.href='../dashboard/pelanggan.php'; </script>";
        }
    }
    else{
        echo "id tidak ada";
    }
?>