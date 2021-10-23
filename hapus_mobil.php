<?php
require 'functions.php';

// Ambil kode_mobil yang dikirimkan index_mobil
$kodeMobil = $_GET["kode_mobil"];

if (hapus_mobil($kodeMobil) > 0) {
    echo"
        <script>
            alert('Data Berhasil Dihapus!');
            document.location.href='index_mobil.php';
        </script>
    ";
}
else{
    echo"
        <script>
            alert('Data Gagal Dihapus!');
            document.location.href='index_mobil.php';
        </script>
    ";
}

?>