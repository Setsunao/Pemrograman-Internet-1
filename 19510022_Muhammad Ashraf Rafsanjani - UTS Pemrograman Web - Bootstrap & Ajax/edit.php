<?php
	
    include "koneksi.php";
    $id_buku = $_POST['id_buku'];
	$data = mysqli_query ($koneksi, " select * from tbl_databuku where id_buku='$id_buku' ");
	$hasil = mysqli_fetch_array ($data);
	
?>


<div class="form-group">
    <label for="judul-buku">Judul Buku</label>
    <input type="hidden" name="id-buku" value=" <?php echo $hasil['id_buku']; ?>">
    <input type="text" name="judul-buku" class="form-control" value=" <?php echo $hasil['judul_buku']; ?>" required>
</div>
<div class="form-group">
    <label for="penulis">Penulis</label>
    <input type="text" name="penulis" class="form-control" value="<?php echo $hasil['penulis']; ?>" required>
</div>
<div class="form-group">
    <label for="penerbit">Penerbit</label>
    <input type="text" name="penerbit" class="form-control" value="<?php echo $hasil['penerbit']; ?>" required>
</div>
<div class="form-row">
    <div class="col-4 mb-3">
        <label for="kategori-buku">Kategori Buku</label>
        <select class="form-control" name="kategori-buku" required>
            <option value="Anatologi" <?php if($hasil['kategori_buku']=="Anatologi") echo 'selected'; ?>>Anatologi
            </option>
            <option value="Biografi" <?php if($hasil['kategori_buku']=="Biografi") echo 'selected'; ?>>Biografi
            </option>
            <option value="Ensiklopedia" <?php if($hasil['kategori_buku']=="Ensiklopedia") echo 'selected'; ?>>
                Ensiklopedia
            </option>
            <option value="Karya Ilmiah" <?php if($hasil['kategori_buku']=="Karya Ilmiah") echo 'selected'; ?>>Karya
                Ilmiah
            </option>
            <option value="Komik" <?php if($hasil['kategori_buku']=="Komik") echo 'selected'; ?>>
                Komik</option>
            <option value="Novel" <?php if($hasil['kategori_buku']=="Novel") echo 'selected'; ?>>
                Novel</option>
            <option value="Sejarah" <?php if($hasil['kategori_buku']=="Sejarah") echo 'selected'; ?>>Sejarah</option>
        </select>
    </div>
    <div class="col-4 mb-3">
        <label for="tahun-terbit">Tahun Terbit</label>
        <select class="form-control" name="tahun-terbit" required>
            <?php
                $tahun = 2020;
                for ($i = 1945; $i <= $tahun; $i++) {
            ?>
            <option value="<?php echo $i ?>" <?php if($hasil['tahun_terbit']=="$i"){ echo 'selected'; }?>>
                <?php echo $i ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="col-4 mb-3">
        <label for="stock">Stock</label>
        <input type="number" name="stock" class="form-control" value="<?php echo $hasil['stock']; ?>" required>
    </div>
</div>