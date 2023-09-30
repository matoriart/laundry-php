<?php
include "../home-index/header.php";
?>
<h2 align="center">Tambah Pelanggan</h2>
    <form action="../controller/proses_simpan_member.php" method="POST">
        Nama Pelanggan:
        <input type="text" required name="nama_member" class="form-control"> <br>
        Alamat:
        <textarea name="alamat" class="form-control" required></textarea><br>
        Telpon:
        <input type="text" required name="tlp" class="form-control"> <br>
        <label for="jenis_kelamin">Pilih status:</label>
                        <select name="jenis_kelamin" id="jenis_kelamin">
                        <option value="L">Laki Laki</option>
                        <option value="P">Perempuan</option>
                        </select> <br>
        <center><input type="submit" name="simpan" class="btn btn-primary rounded" value="SIMPAN" style="margin:10px;"></center>
    </form>
<?php
include "../home-index/footer.php"
?>