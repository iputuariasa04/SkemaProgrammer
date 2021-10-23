<?php
require 'functions.php';

$id_buku = $_GET["id_buku"];
    // pangggil function hapus dan cek apakah data berhasil dihapus apa tidak
    if (hapus($id_buku) > 0) {
        echo"
            <script>
                alert('Data Berhasil Dihapus!');
                document.location.href='index.php';
            </script>
        ";
    }
    else{
        echo"
            <script>
                alert('Data Gagal Dihapus!');
                document.location.href='index.php';
            </script>
        ";
    }


?>