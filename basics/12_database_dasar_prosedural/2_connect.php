<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'bellshade_php';
$port = '3306';

/**
 * Menghubungkan ke database dan menyimpan `instance`
 * hasil dari koneksi ke variabel `$connect`
 * ? simbol `@` menandakan jika error tidak akan ditampilkan pesan errornya
 * ? melainkan kita akan tampilkan errornya manual dibawahnya agar pesan error lebih jelas
 */
$connect = @mysqli_connect($host, $user, $pass, $db, $port);

/**
 * Mengecek apakah koneksi berhasil
 * Jika gagal fungsi `mysqli_connect_error()` akan menampilkan kesalahannya dengan jelas
 */
if (!$connect) {
    echo 'Tidak dapat terhubung dengan database: ' . mysqli_connect_error();
    die;
}

/**
 * Opsional: Jika ingin berpindah database dalam
 * koneksi yang sama, bisa menggunakan `mysqli_select_db()`
 */
// mysqli_select_db($connect, 'bellshade_php');
