<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="lib/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="lib/datatables/datatables.min.css">

    <title>UTS PROMNET - Perpustakaan</title>
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <a class="navbar-brand" href="#">Perpusatakaan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>

            </ul>
        </div>
    </nav>


    <div class="container-fluids p-5" id="tampil-data">

    </div>



    <div class="modal fade" id="modal-tambahdata" tabindex="-1" aria-labelledby="ModalTambahData" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form method="POST" id="tambah-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Buku</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="judul-buku">Judul Buku</label>
                            <input type="text" name="judul-buku" id="judul-buku" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="penulis">Penulis</label>
                            <input type="text" name="penulis" id="penulis" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="penerbit">Penerbit</label>
                            <input type="text" name="penerbit" id="penerbit" class="form-control" required>
                        </div>
                        <div class="form-row">
                            <div class="col-4 mb-3">
                                <label for="kategori-buku">Kategori Buku</label>
                                <select class="form-control" name="kategori-buku" id="kategori-buku" required>
                                    <option value="Anatologi">Anatologi</option>
                                    <option value="Biografi">Biografi</option>
                                    <option value="Ensiklopedia">Ensiklopedia</option>
                                    <option value="Karya Ilmiah">Karya Ilmiah</option>
                                    <option value="Komik">Komik</option>
                                    <option value="Novel">Novel</option>
                                    <option value="Sejarah">Sejarah</option>
                                </select>
                            </div>
                            <div class="col-4 mb-3">
                                <label for="tahun-terbit">Tahun Terbit</label>
                                <select class="form-control" name="tahun-terbit" id="tahun-terbit" required>
                                    <?php
                                $tahun = 2020;
                                for ($i = 1945; $i <= $tahun; $i++) {

                                ?>
                                    <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-4 mb-3">
                                <label for="stock">Stock</label>
                                <input type="number" name="stock" id="stock" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="modal fade" id="modal-editdata" tabindex="-1" aria-labelledby="ModalEditData" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form method="POST" id="update-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Data Buku</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="modal-edit-form">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-primary">Update Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="lib/jquery-3.5.1/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="lib/bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="lib/datatables/datatables.min.js"></script>

    <script>
    $(document).ready(function() {

        tampilData();

        $("#tambah-data").on("submit", function(e) {
            e.preventDefault();
            $.ajax({
                url: 'tambah-proses.php',
                type: 'post',
                data: $(this).serialize(),
                success: function(data) {
                    $('#tambah-data').trigger('reset');
                    $('#modal-tambahdata').modal('hide');
                    tampilData();
                }
            });
        });

        // $(document).on('click', '#edit-data', function(e) {
        //     alert('naisu');
        //     e.preventDefault();
        //     $id_buku = $(this).attr('data-id')
        //     $.ajax({
        //         url: 'edit.php',
        //         type: 'post',
        //         data: {
        //             id_buku: id_buku
        //         },
        //         success: function(data) {
        //             alert('uwaa');
        //             $("#modal-edit-form").html(data);
        //             tampilData();
        //         }
        //     });
        // });

        $(document).on('click', '#edit-data', function(e) {
            e.preventDefault();
            $.post('edit.php', {
                    id_buku: $(this).attr('data-id')
                },
                function(html) {
                    $("#modal-edit-form").html(html);
                }
            );
        });

        $("#update-data").on("submit", function(e) {
            e.preventDefault();
            $.ajax({
                url: 'edit-proses.php',
                type: 'post',
                data: $(this).serialize(),
                success: function(data) {
                    $('#modal-editdata').modal('hide');
                    tampilData();
                }
            });
        });

        $(document).on("click", "#hapus-data", function() {
            var id_buku = $(this).attr("value");
            $.ajax({
                url: 'hapus-proses.php',
                type: 'post',
                data: {
                    id_buku: id_buku
                },
                success: function(data) {
                    tampilData();
                }
            });
        });

    });

    function tampilData() {
        $.ajax({
            url: 'tampil-data.php',
            type: 'get',
            success: function(data) {
                $('#tampil-data').html(data);
                $('#tabel-databuku').DataTable();
            }
        });
    }
    </script>

</body>

</html>