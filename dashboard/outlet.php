<?php
include "../home-index/header.php";
if($_SESSION['role']!='owner'){
?>
<h3>Daftar Outlet</h3>
<?php
if($_SESSION['role']=='admin'){
?>
<a href="../dashboard/tambah_outlet.php" class="btn btn-primary">Tambah</a>
<?php
}
?>
<table class="table table-hover table-striped">
<thead>
<tr>
<th>ID</th><th>Nama Outlet</th>
<th>Alamat</th><th>Nomor Telepon</th><th>Aksi</th>
</tr>
</thead>
<tbody>
<?php
include "../db/koneksi.php";

$qry_buku=mysqli_query($conn,"select * from outlet");

$no=0;
while($data_buku=mysqli_fetch_array($qry_buku)){
$no++;?>
<tr>
<td><?=$data_buku['id_outlet']?></td>
<td><?=$data_buku['nama_outlet']?></td>
<td><?=$data_buku['alamat']?></td>
<td><?=$data_buku['tlp']?>
<?php
if($_SESSION['role']=='admin'){
?>
<td><a href="../dashboard/ubah_outlet.php?id_outlet=<?=$data_buku['id_outlet']?>" class="btn btn-success">Ubah</a>
<a href="../controller/hapus_outlet.php?id_outlet=<?=$data_buku['id_outlet']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
<?php
}
?>
</tr>
<?php
}}
else{
   echo "Anda bukan admin atau kasir";
};
?>

</tbody>
</table>

<?php include "../home-index/footer.php"?>