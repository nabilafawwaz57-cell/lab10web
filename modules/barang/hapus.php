<?php
require_once __DIR__ . '/../../config/database.php';

$id = $_GET['id'] ?? '';

if ($id !== '') {
    mysqli_query($conn, "DELETE FROM data_barang WHERE id_barang='$id'");
}

header("Location: ../../index.php?page=barang/list");
exit;
?>