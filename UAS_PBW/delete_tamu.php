<?php
include "connection.php";
$id = $_GET['id'];

$sql = "delete from daftar_tamu where id='$id'";
$hasil = mysqli_query($conn, $sql);

if ($hasil) {
    header("location:daftar_tamu.php");
} else {
    echo "Hapus Data Gagal";
}
