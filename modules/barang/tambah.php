<?php
require_once __DIR__ . '/../../config/database.php';

if (isset($_POST['simpan'])) {
    $kategori = $_POST['kategori'];
    $nama = $_POST['nama'];
    $harga_beli = $_POST['harga_beli'];
    $harga_jual = $_POST['harga_jual'];
    $stok = $_POST['stok'];

    mysqli_query($conn, "INSERT INTO data_barang 
    (kategori, nama, harga_beli, harga_jual, stok) 
    VALUES ('$kategori', '$nama', '$harga_beli', '$harga_jual', '$stok')");

    header("Location: ../../index.php?page=barang/list");
    exit;
}
?>

<section class="content">
    <h2>Tambah Barang</h2>

    <form method="post">
        <label>Kategori</label>
        <input type="text" name="kategori" required>

        <label>Nama Barang</label>
        <input type="text" name="nama" required>

        <label>Harga Beli</label>
        <input type="number" name="harga_beli" required>

        <label>Harga Jual</label>
        <input type="number" name="harga_jual" required>

        <label>Stok</label>
        <input type="number" name="stok" required>

        <button type="submit" name="simpan">Simpan</button>
    </form>
</section>