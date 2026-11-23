<?php
require_once __DIR__ . '/functions/helpers.php';

echo formatRupiah(150000);
echo "<br>";

echo hitungDiskon(100000, 20);
echo "<br>";

echo validasiEmail("test@gmail.com") ? "Email valid" : "Email tidak valid";
echo "<br>";

echo ringkasTeks("Ini adalah contoh teks panjang untuk menguji fungsi ringkas teks.", 25);
?>