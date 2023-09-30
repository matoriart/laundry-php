<?php
session_start();
include "../db/koneksi.php";
$cart=@$_SESSION['cart'];
if(count($cart)>0){
$lama_pengiriman=3; //satuan hari
$status ='baru';
$dibayar='belum_dibayar';
$tgl_harus_tiba=date('Y-m-d-G-i-s',mktime(date('G'),date('i'),date('s'),date('m'),(date('d')+$lama_pengiriman),date('Y')));
mysqli_query($conn,"insert into transaksi (id_outlet, id_member, tgl, batas_waktu, status, dibayar, id_user) value('".$_SESSION['id_outlet']."','".$_SESSION['id_member']."','".date('Y-m-d-G-i-s')."','".$tgl_harus_tiba."','".$status."','".$dibayar."','".$_SESSION['id_user']."')");
mysqli_error($conn);
$id=mysqli_insert_id($conn);
foreach ($cart as $key_produk => $val_produk) {
mysqli_query($conn,"insert into detail_transaksi (id_transaksi,id_paket,qty) value('".$id."','".$val_produk['id_paket']."','".$val_produk['qty']."')");
}
unset($_SESSION['cart']);
echo '<script>alert("Anda berhasil membeli paket");location.href="histori_pembelian.php"</script>';
} else {
    echo '<script>alert("Error Barang tidak tersedia");location.href="keranjang.php"</script>';
}
?>