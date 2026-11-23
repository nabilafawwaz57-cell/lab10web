<?php
require_once __DIR__ . '/functions/helpers.php';

echo "Konversi 25 Celcius: ";
echo konversiCelciusKeFahrenheit(25);
echo " Fahrenheit<br>";

echo "Nilai 85 mendapatkan predikat: ";
echo tentukanStatusNilai(85);
echo "<br>";

echo "Total belanja: ";
echo formatRupiah(hitungTotal(15000, 3));
?>