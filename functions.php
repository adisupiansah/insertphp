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
    $gambar = $database["gambar"];

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
