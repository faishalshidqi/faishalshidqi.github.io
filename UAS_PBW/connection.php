<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "buku_tamu";
$conn = mysqli_connect($host, $user, $password, $db);
if (!$conn) {
    die("Koneksi Gagal!");
} /*else {
    echo "Koneksi Ke Database Berhasil";
}*/
