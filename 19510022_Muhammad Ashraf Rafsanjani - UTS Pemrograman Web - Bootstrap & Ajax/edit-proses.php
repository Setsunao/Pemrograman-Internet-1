<?php 

    include 'koneksi.php';

    $id_buku = $_POST['id-buku'];
    $judul_buku = $_POST['judul-buku'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun-terbit'];
    $kategori_buku = $_POST['kategori-buku'];
    $stock = $_POST['stock'];

    mysqli_query($koneksi, "UPDATE tbl_databuku SET judul_buku='$judul_buku', penulis='$penulis', penerbit='$penerbit', tahun_terbit='$tahun_terbit', kategori_buku='$kategori_buku', stock='$stock'  WHERE id_buku='$id_buku'");

    header("location:index.php");

?>