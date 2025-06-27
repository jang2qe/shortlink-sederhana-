<?php
// Script Shortlink Sederhana
// Buatan sendiri pakai PHP, tanpa database

// Daftar shortlink kamu di sini
$shortlinks = [
    'yt' => 'https://youtube.com',
    'ig' => 'https://instagram.com',
    'wa' => 'https://wa.me/6281234567890',
    'gh' => 'https://github.com'
];

// Ambil parameter dari URL (?p=yt, ?p=ig, dst)
$path = isset($_GET['p']) ? $_GET['p'] : '';

// Kalau kode ditemukan dalam array, redirect ke URL tujuan
if (array_key_exists($path, $shortlinks)) {
    header("Location: " . $shortlinks[$path]);
    exit;
}

// Kalau tidak ditemukan, tampilkan pesan error
?>
<!DOCTYPE html>
<html>
<head>
    <title>Shortlink Tidak Ditemukan</title>
</head>
<body style="font-family: sans-serif; text-align: center; margin-top: 100px;">
    <h2>404 - Link tidak ditemukan 😢</h2>
    <p>Coba tambahkan parameter seperti: <code>?p=yt</code>, <code>?p=ig</code>, atau <code>?p=wa</code></p>
</body>
</html>
