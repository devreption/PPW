<?php
include('Koneksi/Koneksi.php');

?>
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Jenis</th>  
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <!-- <tfoot>
                  <tr>
                    <th>No</th> 
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                  </tr>
                </tfoot> -->
                <tbody>
                <?php 
                    $nomor=1;
                    $sql = mysqli_query($koneksi,"SELECT * FROM produk");
                    while($data = mysqli_fetch_array($sql)){
                ?>  
                  <tr>
                    <td><?= $nomor ?></td>
                    <td><?= $data['jenis_produk']; ?></td>
                    <td><?= $data['nama_produk'] ?></td>
                    <td><?= $data['harga_produk'] ?></td>
                    <td><img src="../foto_produk/<?= $data['foto_produk']; ?>" width="100" ></td>
                    <td>
                        <a href="Home.php?halaman=hapusproduk&id=<?= $data['id_produk']; ?>" class="btn btn-danger">Delete</a>
                        <a href="Home.php?halaman=ubahproduk&id=<?= $data['id_produk']; ?>" class="btn btn-warning">Edit</a>
                    </td>    
                  </tr>
                <?php
                    $nomor++;
                    }
                ?>  
                </tbody>
              </table>
              <a href="Home.php?halaman=tambahproduk" class="btn btn-success">Tambah Produk</a>
            </div>