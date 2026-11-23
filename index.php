<?php
require_once __DIR__ . '/functions/helpers.php';

$routes = [
    'dashboard' => __DIR__ . '/views/dashboard.php',
    'user/list' => __DIR__ . '/modules/user/list.php',
    'user/add' => __DIR__ . '/modules/user/add.php',
    'barang/list' => __DIR__ . '/modules/barang/list.php',
    'barang/add' => __DIR__ . '/modules/barang/tambah.php',
    'barang/edit' => __DIR__ . '/modules/barang/ubah.php',
    'barang/delete' => __DIR__ . '/modules/barang/hapus.php',
];

$page = $_GET['page'] ?? 'dashboard';

if (!is_string($page) || !array_key_exists($page, $routes)) {
    http_response_code(404);
    $contentFile = __DIR__ . '/views/404.php';
} else {
    $contentFile = $routes[$page];
}

require_once __DIR__ . '/header.php';
require $contentFile;
require_once __DIR__ . '/footer.php';
?>