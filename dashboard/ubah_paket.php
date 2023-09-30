<?php
    include "../home-index/header.php";
    include "../db/koneksi.php";
    $query_barang = mysqli_query($conn, "select * from paket where id_paket='".$_GET['id_paket']."'");
    $data_barang = mysqli_fetch_array($query_barang);
?>
    <br></br>
    <div class="container">
        <div class="card">
            <h1 class="card-header">Ubah Barang</h1>
            <div class="card-body">
                <form method="POST" action="../controller/proses_ubah_paket.php">
                    <input type="hidden" name="id_paket" value="<?=$data_barang['id_paket']?>">
                    <div class="mb-3">
                        <label for="nama_paket" class="form-label">Nama Paket</label>
                        <input type="text" class="form-control" name="nama_paket" value="<?=$data_barang['nama_paket']?>" placeholder="Masukkan nama paket" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="text" class="form-control" name="harga" value="<?=$data_barang['harga']?>"placeholder="Masukkan harga" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
<?php
include "../home-index/footer.php"
?>
