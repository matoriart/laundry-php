<?php
include "../home-index/header.php";
if($_SESSION['role']!='owner'){
?>
<h3>Daftar Pelanggan</h3>
<a href="tambah_member.php" class="btn btn-primary">Tambah</a>
<table class="table table-hover table-striped">
<thead>
<tr>
<th>ID</th><th>Nama Pelanggan</th>
<th>Alamat</th><th>Nomor Telpon</th><th>Gender</th>
    <th>Aksi</th>
</tr>
</thead>
<tbody>
<?php
include "../db/koneksi.php";

$qry_buku=mysqli_query($conn,"select * from member");

$no=0;
while($data_buku=mysqli_fetch_array($qry_buku)){
$no++;?>
<tr>
<td><?=$data_buku['id_member']?></td>
<td><?=$data_buku['nama_member']?></td>
<td><?=$data_buku['alamat']?></td>
<td><?=$data_buku['tlp']?></td>
<td><?=$data_buku['jenis_kelamin']?></td>
<td><a href="../controller/pakai.php?id_member=<?=$data_buku['id_member']?>" class="btn btn-success">Pakai</a>
<?php
if($_SESSION['role']=='admin'){
    ?>
<a href="../controller/hapus.php?id_member=<?=$data_buku['id_member']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
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

<?php include "../home-index/footer.php"?>