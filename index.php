<?php
require 'functions.php';

//panggil fungsi query
$books = query("SELECT * FROM books");

//ambil semua data dari tabel books
$jTotal = total("SELECT * FROM books");
//ambil data dari tabel books yang kategorinya Pendidikan
$jCard1 = Card1("SELECT * FROM books WHERE kategori = 'Pendidikan'");

//ambil data dari tabel books yang kategorinya Novel
$jCard2 = Card2("SELECT * FROM books WHERE kategori = 'Novel'");

//ambil data dari tabel books yang kategorinya Komik
$jCard3 = Card3("SELECT * FROM books WHERE kategori = 'Komik'");

//ambil data dari tabel books yang kategorinya Sejarah
$jCard4 = Card4("SELECT * FROM books WHERE kategori = 'Sejarah'");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skema Programmer</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./fontawesome-free-5.15.4-web/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="nav">
            <ul>
                <li>
                    <a href="">
                        <span class="icon"><i class="fas fa-book-reader"></i></span>
                        <span class="title">LibraryKu</span>
                    </a>
                </li>
                <li>
                    <a href="index.php">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="./tambah.php">
                        <span class="icon"><i class="fas fa-book"></i></span>
                        <span class="title">Tambah Buku</span>
                    </a>
                </li>
                <li>
                    <a href="index_mobil.php">
                        <span class="icon"><i class="fas fa-car-side"></i></span>
                        <span class="title">Dashboard Mobil</span>
                    </a>
                </li>
                <li>
                    <a href="./tambah.php">
                        <span class="icon"><i class="fas fa-car"></i></span>
                        <span class="title">Tambah Mobil</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- main -->
        <div class="main">
            <div class="topbar">
                <!-- toggle -->
                <div class="toggle">
                    <i class="fas fa-bars"></i>
                </div>
                <!-- search -->
                <div class="search">
                    <label for="search">
                        <i class="fas fa-search"></i>
                        <input type="text" name="search" id="search">
                    </label>
                </div>
                <!-- admin -->
                <div class="admin">
                    <label for="">Unknow</label>
                    <img src="./img/myphoto.png" alt="">
                </div>
            </div>

            <div class="total">
                <div class="boxTotal">
                    <h2>Total Buku : <?= $jTotal?></h2>
                </div>
            </div>

            <!-- contect -->
            <div class="contect">
                <div class="box">
                    <div class="number">
                        <h3><?= $jCard1;?></h3>
                    </div>
                    <div class="title">
                        <i class="fas fa-university"></i>
                        <p>Pendidikan</p>
                    </div>
                </div>
                <div class="box">
                    <div class="number">
                        <h3><?= $jCard2;?></h3>
                    </div>
                    <div class="title">
                        <i class="fas fa-feather-alt"></i>
                        <p>Novel</p>
                    </div>
                </div>
                <div class="box">
                    <div class="number">
                        <h3><?= $jCard3;?></h3>
                    </div>
                    <div class="title">
                        <i class="fas fa-theater-masks"></i>
                        <p>Komik</p>
                    </div>
                </div>
                <div class="box">
                    <div class="number">
                        <h3><?= $jCard4;?></h3>
                    </div>
                    <div class="title">
                    <i class="fas fa-monument"></i>
                        <p>Sejarah</p>
                    </div>
                </div>
            </div>

            <!-- databook -->
            <div class="dataBook">
                <div class="boxBook">
                    <div class="titleBook">
                        <h2>Books Library</h2>
                        <a href="">View All</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Judul</td>
                                <td>Pengarang</td>
                                <td>Penerbit</td>
                                <td>Tahun</td>
                                <td>Kategori</td>
                                <td>Fungsi</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;?>
                            <?php foreach($books as $book) :?>
                            <tr>
                                <td><?= $i;?></td>
                                <td><?= $book["judul"];?></td>
                                <td><?= $book["pengarang"];?></td>
                                <td><?= $book["penerbit"];?></td>
                                <td><?= $book["tahun"];?></td>
                                <td><?= $book["kategori"];?></td>
                                <td class="btn">
                                    <a href="edit.php?id_buku=<?= $book["id_buku"];?>" class="edit">Edit</a>
                                    <a href="hapus.php?id_buku=<?= $book["id_buku"];?>" class="delete" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini?')">Delete</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        let toggle =document.querySelector('.toggle');
        let nav = document.querySelector('.nav');
        let main = document.querySelector('.main');

        toggle.onclick = function() {
            nav.classList.toggle('active');
            main.classList.toggle('active');
        }
    </script>
</body>
</html>