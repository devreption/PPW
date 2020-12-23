<?php
    include('Koneksi/Koneksi.php');

    $idproduk = $_GET['id'];
    
    $query = "SELECT * FROM produk WHERE id_produk='$idproduk'";
    $sql = mysqli_query($koneksi,$query);
    $data = mysqli_fetch_array($sql);

?>
<h2>Tambah Produk</h2>

<form action="proses_UbahProduk.php" method="POST" enctype="multipart/form-data">
    <td><input type="hidden" name="id" value=<?= $idproduk ?>></td>
    <div class="form-group">
    <select name="jenis" class="form-control">
        <option value="Winter Clothes"
			<?php if ($data["jenis_produk"]=="Winter Clothes") 
            echo "selected=selected"?>>Winter Clothes
        </option>	
		<option value="Summer Clothes"
			<?php if ($data["jenis_produk"]=="Summer Clothes") 
            echo "selected=selected"?>>Summer Clothes
        </option>
		<option value="Spring Clothes"
			<?php if ($data["jenis_produk"]=="Spring Clothes") 
            echo "selected=selected"?>>Spring Clothes
        </option>
        <option value="Fall Clothes"
			<?php if ($data["jenis_produk"]=="Fall Clothes") 
            echo "selected=selected"?>>Fall Clothes
        </option>
    </select>
    </div>
    <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" name="nama" value="<?= $data['nama_produk']; ?>" required>
    </div>
    <div class="form-group">
        <label>Harga (Rp)</label>
        <input type="number" class="form-control" name="harga" value="<?= $data['harga_produk']; ?>" required>
    </div>
    <div class="form-group">
        <img src="../foto_produk/<?= $data['foto_produk']; ?>" width="200">
    </div>
    <div class="form-group">
        <label>Foto</label>
        <input type="file" class="form-control" name="foto">
    </div>  
    <div class="form-group">
        <label>Deskripsi</label>
        <textarea class="form-control" name="deskripsi" rows="5"><?= $data['deskripsi_produk']; ?></textarea>
    </div>
    <button class="btn btn-primary" name="edit">Simpan</button>
</form>  