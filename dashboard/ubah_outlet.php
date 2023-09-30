<?php
    include "../home-index/header.php";
    include "../db/koneksi.php";
    $query_barang = mysqli_query($conn, "select * from outlet where id_outlet='".$_GET['id_outlet']."'");
    $data_barang = mysqli_fetch_array($query_barang);
?>
    <br></br>
    <div class="container">
        <div class="card">
            <h1 class="card-header">Ubah Outlet</h1>
            <div class="card-body">
                <form method="POST" action="../controller/proses_ubah_outlet.php">
                    <input type="hidden" name="id_outlet" value="<?=$data_barang['id_outlet']?>">
                    <div class="mb-3">
                        <label for="nama_outlet" class="form-label">Nama Outlet</label>
                        <input type="text" class="form-control" name="nama_outlet" placeholder="Masukkan nama Outlet" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat" required>
                    </div>
                    <div class="mb-3">
                        <label for="tlp" class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" name="tlp" placeholder="Masukkan Nomor Telepon" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
<?php
include "../home-index/footer.php"
?>
