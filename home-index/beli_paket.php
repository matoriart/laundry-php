<?php
include "header.php";
include "../db/koneksi.php";
$qry_detail_barang=mysqli_query($conn,"select * from paket where id_paket = '".$_GET['id_paket']."'");
$dt_barang=mysqli_fetch_array($qry_detail_barang);
?>
<h2>Beli Paket</h2>
<div class="row">
<div class="col-md-12">
<form action="masukkankeranjang.php?id_paket=<?=$dt_barang['id_paket']?>" method="post">
<table class="table table-hover table-striped">
<thead>
<tr>
<td>Nama Paket</td>
<td><?=$dt_barang['nama_paket']?></td>
</tr>
<tr>
<td>Harga</td>
<td>RP <?=$dt_barang['harga']?></td>
</tr>
<tr>
<td>Jumlah Beli</td><td><input type="number" name="jumlah_pinjam" value="1"></td>
</tr>
<tr>
<td colspan="2"><input class="btn btn-success"type="submit" value="BELI"></td>
</tr>
</thead>
</table>

</form>
</div>
</div>
<?php
include "footer.php";
?>