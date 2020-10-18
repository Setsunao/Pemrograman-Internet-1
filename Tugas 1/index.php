<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Promnet 1</title>

    <style>
        body {
            font-family: sans-serif;
        }
        .wrapper {
            padding-bottom: 40px;
        }
    </style>

</head>
<body>
    
    <div class="wrapper">
        <h3>1. Penilaian dengan Grade</h3>

        <form method="POST" action="">
            <input type="number" name="nilai">
            <input type="submit" name="submit" value="Proses">
        </form>
        <?php

            if(isset($_POST['submit'])){

                $nilai = $_POST['nilai'];
                // $nilai = 71;

                if ($nilai > 85 && $nilai <= 100) {
                    echo 'Selamat… proses belajarmu sangat baik, tingkatkan terus kemampuan codingnya…';
                }
                else if ($nilai > 70 && $nilai <= 85 ) {
                    echo 'Selamat… kamu sudah mulai memahami pemrgraman PHP, tingkatkan terus skil codingmu…';
                }
                else if ($nilai >= 60 && $nilai <= 70) {
                    echo 'uppsssss….. skil kodingmu perlu diasah ini gaes, tetap semangat  belajar dan eksplore kemampuan ya…';
                }
            }
        ?>
    </div> 

    <div class="wrapper">
        <h3>2. Fungsi Pemanggilan Berulang</h3>
        <?php

            function tampil_data(){
                echo '<p>Haloo, perkenalkan nama saya Muhammad Ashraf Rafsanjani<br>
                      Saya adalah mahasiswa Prodi Sistem Informasi<br>
                      Saya sangat tertarik mempelajari Pemrograman Internet</p>';
            }
            
            //FUNGSI LANGSUNG SAYA TAMPILKAN DUA KALI
            echo '<h4>a. Memanggil Fungsi Dua Kali Secara Manual : </h4>';

            tampil_data();
            tampil_data();

            //MENAMPILKAN FUNGSI MENGGUNAKAN FOR / PERULANGAN
            echo '<h4>b. Memanggil Fungsi Menggunakan For / Perulangan : </h4>';

            for ($i=0; $i < 3; $i++) { 
                tampil_data();
            }


        ?>
    </div>

    <div>
        <h3>3. Tugas Memanggil Fungsi dalam Fungsi / Fungsi Rekrusif</h3>
        <?php

            function fungsi_rekrusiv($data_nilai){
                if ($data_nilai == 5) {
                    echo 'Nilai anda benar..';
                }
                else {
                    echo 'Nilai belum benar..<br>';
                    $data_nilai += 1;
                    fungsi_rekrusiv($data_nilai);
                }
            }

            $nilai2 = 1;
            fungsi_rekrusiv($nilai2);

        ?>

    </div>




</body>
</html>


           
