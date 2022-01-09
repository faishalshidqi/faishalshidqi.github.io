<?php
include "connection.php";
$id = $_GET{'id'};
$sql = "select * from daftar_tamu where id='$id'";
$hasil = mysqli_query($conn, $sql);
while ($rec = mysqli_fetch_assoc($hasil)) {
    $nama = $rec['nama'];
    $email = $rec['email'];
    $pesan = $rec['pesan'];
}?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Aplikasi CRUD data tamu</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="MainProject.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="daftar_tamu.php">Daftar Tamu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Contact.html">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container p-4">
    <!-- Content here -->
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Edit Data Tamu</h5>
            <form action="update_tamu.php" method="post">
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?= $nama; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" value="<?= $email; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Pesan</label>
                    <textarea class="form-control" name="pesan" rows="3"><?= $pesan; ?></textarea>
                </div>
                <div class="mb-3">
                    <input type="hidden" name="id" value="<?= $id; ?>">
                    <input type="submit" value="Update" class="btn btn-primary">
                </div>
            </form>
            <a href="daftar_tamu.php" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
