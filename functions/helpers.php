<?php

function formatRupiah($angka) {
    return "Rp " . number_format($angka, 0, ',', '.');
}

function hitungDiskon($harga, $diskon) {
    return $harga - ($harga * $diskon / 100);
}

function validasiEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function ringkasTeks($teks, $panjang = 50) {
    if (strlen($teks) > $panjang) {
        return substr($teks, 0, $panjang) . "...";
    }
    return $teks;
}
?>