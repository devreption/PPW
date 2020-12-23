<?php
$koneksi = mysqli_connect("localhost", "root", "", "estora");
if (!$koneksi) {
    echo "Koneksi Bermasalah";
}
