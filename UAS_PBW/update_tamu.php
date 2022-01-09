<?php
include "connection.php";
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

$sql = "update daftar_tamu set nama='$nama', email='$email', pesan='$pesan' where id='$id';";
$hasil = mysqli_query($conn, $sql);

if ($hasil) {
    header("location:daftar_tamu.php");
} else {
    echo "Update Data Gagal.";
}
