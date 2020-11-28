<button class="btn btn-success my-4" data-toggle="modal" data-target="#modal-tambahdata">Tambah Data
    Buku</button>

<table class="table table-striped shadow-sm" id="tabel-databuku">
    <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Kategori Buku</th>
            <th>Stock</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>

        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, 'SELECT * FROM tbl_databuku');

        while ($hasil = mysqli_fetch_array($data)) {
        ?>

        <tr>
            <th scope="row"><?php echo $no++; ?></th>
            <td><?php echo $hasil['judul_buku']; ?></td>
            <td><?php echo $hasil['penulis']; ?></td>
            <td><?php echo $hasil['penerbit']; ?></td>
            <td><?php echo $hasil['tahun_terbit']; ?></td>
            <td><?php echo $hasil['kategori_buku']; ?></td>
            <td><?php echo $hasil['stock']; ?></td>
            <td>
                <div class="row">
                    <button id="edit-data" data-id="<?php echo $hasil['id_buku']; ?>" class="btn btn-primary mx-2"
                        data-toggle="modal" data-target="#modal-editdata">Edit</button>
                    <button id="hapus-data" value="<?php echo $hasil['id_buku']; ?>"
                        class="btn btn-danger">Hapus</button>
                </div>
            </td>
        </tr>

        <?php } ?>

    </tbody>
</table>