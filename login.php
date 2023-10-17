<?php
//apakah tombol sudah ditekan appa belum 
if (isset($_POST["submit"])) {
    // cek username
    if ($_POST["username"] == "mahasiswa" && $_POST["password"] == "mahasiswa") {
        // jka benar, redirect ke halaman table mahasiswa input.php
        header("Location: input.php");
        exit;
    } else {
        echo "
            <script>
            alert('password salah');
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
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="shortcut icon" href="img/logo.png">


    <title>Login-mahasiswa</title>
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" alt="" width="35" height="35" class="d-inline-block align-text-top">
                Universitas Terbuka
            </a>
        </div>
    </nav>

    <!-- card login -->
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center mb-4 ">LOGIN</h5>

                <form action="" method="post">
                    <ul>

                        <label for="username">Username :</label>
                        <input class="form-control" type="text" placeholder="Masukan Username" name="username" id="username" aria-label="default input example" required>

                        <label for="password">Password :</label>
                        <input class="form-control" type="password" placeholder="Masukan password" name="password" id="password" aria-label="default input example" required>

                        <br>
                        <!-- note : element required berfungsi untuk ketika si user lupa mengisi salah satu form, maka tombol button tidak dijalankan -->

                        <button class="btn btn-primary " type="submit" name="submit">Login</button>
                    </ul>

                </form>


            </div>
        </div>
    </div>


    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>