<?php
require_once __DIR__ . '/../../config/database.php';

$id = $_GET['id'] ?? '';

$query = mysqli_query($conn, "SELECT * FROM data_barang WHERE id_barang='$id'");
$data = mysqli_fetch_assoc($query);

if (isset($_POST['ubah'])) {
    $kategori = $_POST['kategori'];
    $nama = $_POST['nama'];
    $harga_beli = $_POST['harga_beli'];
    $harga_jual = $_POST['harga_jual'];
    $stok = $_POST['stok'];

    mysqli_query($conn, "UPDATE data_barang SET 
    kategori='$kategori',
    nama='$nama',
    harga_beli='$harga_beli',
    harga_jual='$harga_jual',
    stok='$stok'
    WHERE id_barang='$id'");

    header("Location: ../../index.php?page=barang/list");
    exit;
}
?>

<section class="content">
    <h2>Ubah Barang</h2>

    <form method="post">
        <label>Kategori</label>
        <input type="text" name="kategori" value="<?= htmlspecialchars($data['kategori']) ?>" required>

        <label>Nama Barang</label>
        <input type="text" name="nama" value="<?= htmlspecialchars($data['nama']) ?>" required>

        <label>Harga Beli</label>
        <input type="number" name="harga_beli" value="<?= htmlspecialchars($data['harga_beli']) ?>" required>

        <label>Harga Jual</label>
        <input type="number" name="harga_jual" value="<?= htmlspecialchars($data['harga_jual']) ?>" required>

        <label>Stok</label>
        <input type="number" name="stok" value="<?= htmlspecialchars($data['stok']) ?>" required>

        <button type="submit" name="ubah">Ubah</button>
    </form>
</section>