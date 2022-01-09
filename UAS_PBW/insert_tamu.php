<?php
include "connection.php";
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST["pesan"];

$sql = "insert into daftar_tamu(nama, email, pesan) values('$nama', '$email', '$pesan');";
$hasil = mysqli_query($conn, $sql);

if ($hasil) {
    header("location:daftar_tamu.php");
} else {
    echo "Tambah Data Gagal.";
}