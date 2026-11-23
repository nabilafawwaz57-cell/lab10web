<?php
require_once __DIR__ . '/../../config/database.php';
$query = mysqli_query($conn, "SELECT * FROM data_barang");
?>

<section class="content">
    <h2>Data Barang</h2>
    <a href="index.php?page=barang/add">Tambah Barang</a>

    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Kategori</th>
            <th>Nama</th>
            <th>Gambar</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($query)) : ?>
        <tr>
            <td><?= $row['id_barang'] ?></td>
            <td><?= htmlspecialchars($row['kategori']) ?></td>
            <td><?= htmlspecialchars($row['nama']) ?></td>
            <td><?= htmlspecialchars($row['gambar']) ?></td>
            <td><?= formatRupiah($row['harga_beli']) ?></td>
            <td><?= formatRupiah($row['harga_jual']) ?></td>
            <td><?= $row['stok'] ?></td>
            <td>
                <a href="index.php?page=barang/edit&id=<?= $row['id_barang'] ?>">Edit</a> |
                <a href="index.php?page=barang/delete&id=<?= $row['id_barang'] ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</section>