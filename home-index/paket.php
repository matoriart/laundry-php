<?php
include "header.php";
if($_SESSION['role']!='owner'){
?>
<h3>Daftar Paket</h3>
<?php
if($_SESSION['role']=='admin'){
   ?>
<a href="../dashboard/tambah_paket.php" class="btn btn-primary">Tambah</a>
<?php
   }
   ?>
<table class="table table-hover table-striped">
<thead>
<tr>
<th>ID</th><th>Nama Paket</th><th>Harga</th> 
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php
include "../db/koneksi.php";

$qry_buku=mysqli_query($conn,"select * from paket");

$no=0;
while($data_buku=mysqli_fetch_array($qry_buku)){
$no++;?>
<tr>
<td><?=$data_buku['id_paket']?></td>
<td><?=$data_buku['nama_paket']?></td>
<td>Rp. <?=$data_buku['harga']?></td>
<td>
<a href="beli_paket.php?id_paket=<?=$data_buku['id_paket']?>" class="btn btn-primary">Beli</a>
<?php
if($_SESSION['role']=='admin'){
   ?>
<a href="../dashboard/ubah_paket.php?id_paket=<?=$data_buku['id_paket']?>" class="btn btn-success">Ubah</a>
<a href="../controller/hapus-paket.php?id_paket=<?=$data_buku['id_paket']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
<?php
   }
   ?>
</tr>
<?php
}}
else{
   echo "Anda bukan admin";
};
?>

</tbody>
</table>

<?php include "footer.php"?>