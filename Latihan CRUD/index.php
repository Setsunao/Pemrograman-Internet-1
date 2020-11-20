<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan CRUD</title>

    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
    <div class='header'>
        <span class="title text-center">DATA MAHASISWA PRODI SISTEM INFORMASI</span>
    </div>

    <div class="wrapper">
        <a href="tambah.php">
            <button class='btn btn-tambah'>Tambah Data</button>
        </a>
        <table border='1' cellpadding='7' class='tabel-mahasiswa'>
            <tr class='table-title'>
                <th>NO</th>
                <th>NAMA</th>
                <th>NIM</th>
                <th>OPSI</th>
            </tr>
            <?php 
                include 'koneksi.php';
                $no = 1; 
                $data = mysqli_query($koneksi, 'SELECT * FROM tbl_mahasiswa');

                    while($hasil = mysqli_fetch_array($data)){
                ?>

                <tr>
                    <td class="text-center"><?php echo $no++; ?></td>
                    <td><?php echo $hasil['nama']; ?></td>
                    <td class="text-center"><?php echo $hasil['nim']; ?></td>
                    <td class="text-center"> 
                        <a href="edit.php?id=<?php echo $hasil['id']; ?>">
                            <button class='btn btn-edit'>EDIT</button>
                        </a>
                        &nbsp;&nbsp;&nbsp;
                        <a href="hapus.php?id=<?php echo $hasil['id']; ?>">
                            <button class='btn btn-hapus'>HAPUS</button>
                        </a>
                    </td>
                </tr>

                <?php
                    }
                ?>    
            
        </table>
    </div>
</body>
</html>