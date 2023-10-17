<?php

// koneksi ke database
$kon = mysqli_connect("localhost", "root", "", "latihan");

function query($data)
{
    global $kon;
    $panggil = mysqli_query($kon, $data);
    $kotak = [];
    while ($pensil = mysqli_fetch_assoc($panggil)) {
        $kotak[] = $pensil;
    }

    return $kotak;
}

// script tambah data
function tambah($database)
{

    global $kon;

    // ambil data dari setiap elemeny
    $nim = $database["nim"];
    $nama = $database["nama"];
    $fakultas = $database["fakultas"];
    $prodi = $database["prodi"];
    $email = $database["email"];

    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $data = "INSERT INTO daftar VALUES 
    ('', '$nim', '$nama', '$fakultas', '$prodi', '$email', '$gambar')";

    mysqli_query($kon, $data);

    return mysqli_affected_rows($kon);
}

// sourcode data di hapuskan
function hapus($hapus)
{
    global $kon;
    mysqli_query($kon, "DELETE FROM daftar WHERE id = $hapus");

    return mysqli_affected_rows($kon);
}

// sourcode functioon ubah
function ubah($data)
{
    global $kon;

    $id = $data['id'];
    $nim = htmlspecialchars($data['nim']);
    $nama = htmlspecialchars($data['nama']);
    $fakultas = htmlspecialchars($data['fakultas']);
    $prodi = htmlspecialchars($data['prodi']);
    $email = htmlspecialchars($data['email']);
    $gambarLama = $data['gambarLama'];

    if ($_FILES['gambar']['erorr'] === 4) {

        $gambar = $gambarLama;
        
    } else {
        $gambar = upload();
    }


    $query = "UPDATE daftar SET
                    nim = '$nim',
                    nama = '$nama',
                    fakultas = '$fakultas',
                    prodi = '$prodi',
                    email = '$email',
                    gambar = '$gambar' 
                WHERE id = $id";

    mysqli_query($kon, $query);

    return mysqli_affected_rows($kon);
}

function upload () {
    $fileName = $_FILES['gambar']['name'];
    $fileSize = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $storage = $_FILES['gambar']['tmp_name'];

// cek apakah ada gambar di upload, jika tidak ada maka program tidak di jalankan (return false) ?
if ($error === 4) {
    echo "
        <script>
            alert('Mohon mengisi gambar terlebih dahulu');
        </script>
    ";
    return false;
}
    //cek, apakah yang di input user adalaha gambar 
    $fileGambar = ['jpg', 'jpeg', 'png'];
    $ekstensi = explode ('.', $fileName);
    $ekstensi = strtolower(end($ekstensi));

    if ( !in_array($ekstensi, $fileGambar)) {
        echo "
            <script>
                alert('Yang Anda Upload Bukan File Gambar');
            </script> 
        ";
        return false;
    }

    // cek batas maksimal ukuran file
    if ( $fileSize > 1000000 ) {
        echo "
            <script>
                alert('Ukuran terlalu besar, batas maximal gambar 1 mb');
            </script> 
        ";
        return false;
    }

    // generata nama gambar baru ketika berhasil di upload
    $newNameFile = uniqid();
    $newNameFile .= '.';
    $newNameFile .= $ekstensi;


    // tempat penympanan gambar jika lolos pengecekan, dan berhasil  di upload
    move_uploaded_file($storage, 'penyimpanan/' .$newNameFile);

    return $newNameFile;

}
