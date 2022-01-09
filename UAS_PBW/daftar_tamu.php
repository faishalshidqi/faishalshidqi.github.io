<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Buku Tamu</title>
</head>

<body>
<header>
    <h1>TOKO BUNGA CANTIK</h1>
</header>
<nav>
    <ul>
        <li><a href="beranda.html">Home</a></li>
        <li><a href="About.html">About</a></li>
        <li><a href="index.html">Belanja</a></li>
        <li><a href="https://faishalshidqi.github.io/UAS_PBW/add_tamu.html">Buku Tamu</a></li>
    </ul>
</nav>
<div class="container" style="margin-left: 290px;">
    <!-- Content here -->
    <h1>Daftar Tamu</h1>
    <a href='add_tamu.html' class='btn btn-danger'>Add New</a>
    <?php
    include "connection.php";
    $sql = "select * from daftar_tamu";
    $hasil = mysqli_query($conn, $sql);
    ?>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">nama</th>
            <th scope="col">email</th>
            <th scope="col">pesan</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while ($r = mysqli_fetch_assoc($hasil)) {
            echo "                
                    <tr>
                        <th scope='row'>" . $r['nama'] . "</th>
                        <td>" . $r['email'] . "</td>
                        <td>" . $r['pesan'] . "</td>
                        <td>
                        <a href='edit_tamu.php?id=" . $r['id'] . "' class='btn btn-danger'>Edit</a>
                        <a href='delete_tamu.php?id=" . $r['id'] . "' class='btn btn-danger'>Del</a>
                        </td>
                    </tr>";
        }
        ?>
        </tbody>
    </table>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
<footer>
   Muhammad Faishal Shidqi. A11.2020.12603. <br> All Rights Reserved 2022
</footer>

</html>