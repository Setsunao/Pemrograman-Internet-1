<?php 

    include 'koneksi.php';

    $nama = $_POST['nama'];
    $nim = $_POST['nim'];

    mysqli_query($koneksi, "INSERT INTO tbl_mahasiswa VALUES('', '$nama', '$nim')");

    header("location:index.php");

?>