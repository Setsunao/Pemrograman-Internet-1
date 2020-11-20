<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>

    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
    <div class='header'>
        <span class="title text-center">DATA MAHASISWA PRODI SISTEM INFORMASI</span>
    </div>

    <div class="block-center">
        <div class="wrapper edit">
            <h3>Tambah Data</h3>
            
            <form action="tambah-proses.php" method="post">
                <table border='0' cellpadding='10' class='tabel-edit'>
                    <tr>
                        <td class="label">Nama</td>
                        <td><input type="text" name="nama" class="input" required></td>
                    </tr>
                    <tr>
                        <td class="label">NIM</td>
                        <td><input type="number" name="nim" class="input" required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button type="submit" class="btn btn-tambah right">SIMPAN</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

</body>
</html>