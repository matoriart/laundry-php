<?php
    $status = $_POST["status"];  
    $dibayar = $_POST["dibayar"];
    $id_pembelian_barang=$_POST ["id_transaksi"];  
    include "../db/koneksi.php";            
            $input = mysqli_query($conn, "UPDATE transaksi SET status='".$status."', dibayar ='".$dibayar."' where id_transaksi='".$id_pembelian_barang."'");
            mysqli_error($conn);
            if ($input) {
                echo "<script>alert('Berhasil');location.href='../home-index/histori_pembelian.php';</script>";
            }
            else {
                echo "<script>alert('Gagal');location.href='../dashboard/ubah_status.php';</script>";
            }
?>