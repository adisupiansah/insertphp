<?php
// menyambungkan ke file functions.php
require 'functions.php';

$daftar = query ("SELECT * FROM daftar");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/input.css">
    <link rel="shortcut icon" href="img/logo.png">


    <title>Daftar Mahasiswa</title>
</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" alt="" width="35" height="35" class="d-inline-block align-text-top">
                Universitas Terbuka
            </a>
        </div>
    </nav>

        <h1>Data Mahasiswa Universitas Terbuka Tahun Ajaran 2023/2024</h1>

        <br>

        <a class="tmbh" href="tambah.php">Tambah Data</a> |
        <a class="btn btn-primary" href="index.php">Home</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Aksi</th>
                <th scope="col">Gambar</th>
                <th scope="col">Nim</th>
                <th scope="col">Nama</th>
                <th scope="col">Fakultas</th>
                <th scope="col">Prodi</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            <?php $hitung = 1; ?>
            <?php foreach($daftar as $pensil) : ?>
            <tr>
                <td><?= $hitung;?></td>
                <td>
                    <a class="buton" href="">Ubah</a> |
                    <a class="hapus" href="hapus.php?id=<?= $pensil["id"]; ?>">Hapus</a>
                </td>
                <td><img src="img/<?= $pensil["gambar"]; ?>" width="60"></td>
                <td><?= $pensil["nim"]; ?></td>
                <td><?= $pensil["nama"]; ?></td>
                <td><?= $pensil["fakultas"]; ?></td>
                <td><?= $pensil["prodi"]; ?></td>
                <td><?= $pensil["email"]; ?></td>
            </tr>
            <?php $hitung++; ?>
            <?php endforeach?>
        </tbody>
    </table>

    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>