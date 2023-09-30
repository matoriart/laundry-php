<?php
include "header.php";
?>
<h2>Histori Pembelian Barang</h2>
<table class="table table-hover table-striped">
<thead>
<th>NO</th><th>Tanggal Beli</th><th>Tanggal Tiba</th><th>Nama Barang</th><th>Status</th><th>Status pembayaran</th><th>ID kasir</th><th>ID member</th>
<?php
if($_SESSION['role']!='owner'){
    ?>
<th>Aksi</th>
<?php
    }
    ?>
</thead>
<tbody>
<?php
include "../db/koneksi.php";
$qry_histori=mysqli_query($conn,"select * from transaksi order by id_transaksi desc");
$no=0;
while($dt_histori=mysqli_fetch_array($qry_histori)){
$no++;
//menampilkan buku yang dipinjam
$barang_dibeli="<ol>";
$qry_barang=mysqli_query($conn,"select * from detail_transaksi join paket on paket.id_paket=detail_transaksi.id_paket where id_transaksi = '".$dt_histori['id_transaksi']."'");
while($dt_barang=mysqli_fetch_array($qry_barang)){
$barang_dibeli.="<li>".$dt_barang['nama_paket']."</li>";
}
$barang_dibeli.="</ol>";
//menampilkan status sudah kembali atau belum
$qry_cek_tiba=mysqli_query($conn,"select * from transaksi where id_transaksi = '".$dt_histori['id_transaksi']."'");
if(mysqli_num_rows($qry_cek_tiba)>0){
$dt_tiba=mysqli_fetch_array($qry_cek_tiba);
} 
?>
<tr>
<td><?=$no?></td><td><?=$dt_histori['tgl']?></td><td><?=$dt_histori['batas_waktu']?></td><td><?=$barang_dibeli?></td><td><?=$dt_histori['status']?></td><td><?=$dt_histori['dibayar']?></td><td><?=$dt_histori['id_user']?></td><td><?=$dt_histori['id_member']?></td>
<?php
if($_SESSION['role']!='owner'){
    ?>
<td><a href="../dashboard/ubah_status.php?id_transaksi=<?=$dt_histori['id_transaksi']?>" class="btn btn-success">Ubah status</a></td>
<?php
    }
    ?>
</tr>
<?php
}
?>
</tbody>
</table>
<?php
include "footer.php";
?>