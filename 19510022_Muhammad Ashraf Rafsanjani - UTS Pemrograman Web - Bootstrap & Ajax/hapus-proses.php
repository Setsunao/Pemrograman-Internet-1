<?php

include 'koneksi.php';

$id_buku = $_POST['id_buku'];

mysqli_query($koneksi, "DELETE FROM tbl_databuku WHERE id_buku='$id_buku'");

header("location:index.php");