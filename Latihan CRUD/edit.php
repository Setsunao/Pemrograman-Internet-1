<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>

    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
    <div class='header'>
        <span class="title text-center">DATA MAHASISWA PRODI SISTEM INFORMASI</span>
    </div>

    <div class="block-center">
        <div class="wrapper edit">
            <h3>Edit Data</h3>

            <?php
                
                include 'koneksi.php';

                $id = $_GET['id'];
                $data = mysqli_query($koneksi, "SELECT * FROM tbl_mahasiswa where id='$id'");

                while ($hasil = mysqli_fetch_array($data)) {
            
            ?>
            
            <form action="update.php" method="post">
                <table border='0' cellpadding='10' class='tabel-edit'>
                    <tr>
                        <td class="label">Nama</td>
                        <td>
                            <input type="hidden" name="id" value="<?php echo $hasil['id'] ?>">
                            <input type="text" name="nama" class="input" value="<?php echo $hasil['nama'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="label">NIM</td>
                        <td><input type="number" name="nim" class="input" value="<?php echo $hasil['nim'] ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button type="submit" class="btn btn-edit right">SIMPAN</button>                        
                            <a href="index.html"><button class="btn btn-back right">KEMBALI</button></a>                       
                        </td>
                    </tr>
                </table>
            </form>
            <?php
                }
            ?>

        </div>
    </div>

</body>
</html>