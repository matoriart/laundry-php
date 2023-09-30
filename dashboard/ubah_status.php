<?php
    include "../home-index/header.php";
    include "../db/koneksi.php";
    $query_barang = mysqli_query($conn, "select * from transaksi where id_transaksi='".$_GET['id_transaksi']."'");
    $data_barang = mysqli_fetch_array($query_barang);
?>
    <br></br>
    <div class="container">
        <div class="card">
            <h1 class="card-header">Ubah status</h1>
            <div class="card-body">
                <form method="POST" action="../controller/proses_ubah_status.php">
    
                    <input type="hidden" name="id_transaksi" value="<?=$data_barang['id_transaksi']?>">
                    <label for="status">Pilih status:</label>
                        <select name="status" id="status">
                        <option value="baru">baru</option>
                        <option value="dibayar">dibayar</option>
                        <option value="diproses">diproses</option>
                        <option value="diambil">diambil</option>
                        </select>
                    <label for="dibayar">Pilih status pembayaran:</label>
                        <select name="dibayar" id="dibayar">
                        <option value="dibayar">dibayar</option>
                        <option value="belum_dibayar">belum_dibayar</option>
                        </select>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
<?php
include "../home-index/footer.php"
?>
