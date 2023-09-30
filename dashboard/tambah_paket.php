<!DOCTYPE html>
<html>
<head>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.mi
n.css" rel="stylesheet" integrity="sha384-
+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
crossorigin="anonymous">
<title>Daftar</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-success"
style="box-shadow: 4px 4px 5px -4px;">
<div class="container-fluid">
<a class="navbar-brand bg-warning text-success" href="#">Daftar</a>

<button class="navbar-toggler" type="button" data-bs-
toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"

aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav">
</li>
</ul>
</div>
</div>
</nav>
<div class="container bg-light rounded" style="margin-top:10px">
<h2 align="center">Daftar</h2>
    <form align="center" action="../controller/proses_simpan_paket.php" method="POST">
        Nama_paket:
        <input type="text" name="paket" class="form-control" required> <br>
        Harga:
        <input type="text" name="harga" class="form-control" required> <br>
        <input type="submit" name="simpan" value="SIMPAN">
    </form>
    </div>
<div class="container bg-success text-white">
    <h4 align="center">Website kelas XIR5</h4>
</div>
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bund
le.min.js" integrity="sha384-
gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
crossorigin="anonymous"></script>
</body>
</html>