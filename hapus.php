<?php
// menyambungkan ke file funtions.php
require 'functions.php';

$hapus = $_GET["id"];

if (hapus($hapus) > 0) {
    echo "
        <script>
            alert('data berhasil dihapus');
            document.location.href = 'input.php';
        </script>
        ";
} else {
    echo "
        <script>
            alert('data gagal dihapus');
            document.location.href = 'input.php';
        </script>
        ";
}
