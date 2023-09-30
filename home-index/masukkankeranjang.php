<?php
session_start();
if($_POST){
include "../db/koneksi.php";
$qry_get_barang=mysqli_query($conn,"select * from paket where id_paket = '".$_GET['id_paket']."'");
$dt_barang=mysqli_fetch_array($qry_get_barang);
$_SESSION['cart'][]=array(
'id_paket'=>$dt_barang['id_paket'],
'nama_paket'=>$dt_barang['nama_paket'],
'harga'=>$dt_barang['harga'],
'qty'=>$_POST['jumlah_pinjam']
);
}
header('location: keranjang.php');
?>