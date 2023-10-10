<?php
// sambungkan file ke function
require 'functions.php';

// ngecek apakah tombol berhasil di tekan ?
if (isset($_POST["submit"])) {
    // cek apakah data berhasil di kirimkan ?
    if (tambah($_POST) > 0) {
        echo "
        <script>
            alert('berhasil');
            document.location.href = 'input.php';
        </script>
        ";
    } else {

        echo "
        <script>
            alert('data gagal di Upload');
            document.location.href = 'input.php';
        </script>
        ";
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/tmbh.css">
    <link rel="shortcut icon" href="img/logo.png">

    <title>Input Data</title>
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

    <div class="container">
        <div class="card mt-4">
            <div class="card-body">
                <h1 class="card-title text-center mb-4">Masukan Data </h1>

                <form action="" method="post">
                    <ul>

                        <label for="nim">NIM :</label>
                        <input class="form-control" type="text" placeholder="Masukan NIM Anda" name="nim" id="nim" aria-label="default input example" required>

                        <label for="nama">Nama Lengkap :</label>
                        <input class="form-control" type="text" placeholder="Masukan Nama Lengkap" name="nama" id="nama" aria-label="default input example" required>

                        <label for="fakultas">Fakultas :</label>
                        <input class="form-control" type="text" placeholder="Masukan Fakultas" name="fakultas" id="fakultas" aria-label="default input example" required>

                        <label for="prodi">Prodi :</label>
                        <input class="form-control" type="text" placeholder="Masukan prodi" name="prodi" id="prodi" aria-label="default input example" required>

                        <label for="email">Email :</label>
                        <input class="form-control" type="text" placeholder="Masukan email" name="email" id="email" aria-label="default input example" required>

                        <label for="gambar">Gambar :</label>
                        <input class="form-control" type="text" placeholder="Masukan gambar contoh(tengku.jpg)" name="gambar" id="gambar" aria-label="default input example" required>
                        <br>
                        <!-- note : element required berfungsi untuk ketika si user lupa mengisi salah satu form, maka tombol button tidak dijalankan -->

                        <button class="btn btn-primary shadow  bg-body-tertiary rounded " style="width: 12rem;" type="submit" name="submit">Kirim Data</button>
                    </ul>

                </form>

            </div>
        </div>
    </div>

    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>