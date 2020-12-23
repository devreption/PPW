<?php
    include('Koneksi/Koneksi.php');
?>
<h2>Tambah Produk</h2>

<form action="proses_TambahProduk.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
    <select name="jenis" class="form-control">
        <option name="Winter Clothes" value="Winter Clothes">Winter Clothes</option>
		<option name="Summer Clothes" value="Summer Clothes">Summer Clothes</option>
        <option name="Spring Clothes" value="Spring Clothes">Spring Clothes</option>
        <option name="Fall Clothes" value="Fall Clothes">Fall Clothes</option>
    </select>
    </div>
    <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" name="nama"required>
    </div>
    <div class="form-group">
        <label>Harga (Rp)</label>
        <input type="number" class="form-control" name="harga"required>
    </div>
    <div class="form-group">
        <label>Foto</label>
        <input type="file" class="form-control" name="foto"required>
    </div>
    <div class="form-group">
        <label>Deskripsi</label>
        <textarea class="form-control" name="deskripsi" rows="5"required></textarea>
    </div>
    <button class="btn btn-primary" name="save">Simpan</button>
</form>  