<?php

include 'koneksi.php';

$judulbuku = $_POST['judul-buku'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahunterbit = $_POST['tahun-terbit'];
$kategoribuku = $_POST['kategori-buku'];
$stock = $_POST['stock'];

mysqli_query($koneksi, "INSERT INTO tbl_databuku VALUES('', '$judulbuku', '$penulis', '$penerbit', $tahunterbit, '$kategoribuku', $stock)");

header("location:index.php");