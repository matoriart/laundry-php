<?php
    if ($_GET['id_outlet']) {
        include "../db/koneksi.php";   
        $query_hapus = mysqli_query($conn, "DELETE FROM outlet where id_outlet = '".$_GET['id_outlet']."'");
        if ($query_hapus) {
            // echo "berhasil";
            echo "<script> alert('Berhasil dihapus'); location.href='../dashboard/outlet.php'; </script>";
        }
        else{
            // echo "gagal";
            echo "<script> alert ('Gagal dihapus'); location.href='../dashboard/outlet.php'; </script>";
        }
    }
    else{
        echo "id tidak ada";
    }
?>