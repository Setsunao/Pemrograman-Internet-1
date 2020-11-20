<?php

$koneksi =  mysqli_connect('localhost', 'root', '', 'Perkuliahan');

if(mysqli_connect_error()){
    echo 'koneksi database gagal (NAMA DATABASE perkuliahan, TABEl tbl-mahasiswa) : ' . mysqli_connect_error();
}

?>