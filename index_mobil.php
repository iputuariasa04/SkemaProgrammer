<?php
require 'functions.php';

//ambil semua data dari tabel mobil_crud
$jTotal = total("SELECT * FROM mobil_crud");
//ambil data dari tabel mobil_crud yang merk_mobilnya Toyota
$jCard1 = Card1("SELECT * FROM mobil_crud WHERE merk_mobil = 'Toyota'");

//ambil data dari tabel mobil_crud yang kategorinya Mazda
$jCard2 = Card2("SELECT * FROM mobil_crud WHERE merk_mobil = 'Mazda'");

//ambil data dari tabel mobil_crud yang merk_mobilnya Suzuki
$jCard3 = Card3("SELECT * FROM mobil_crud WHERE merk_mobil = 'Suzuki'");

//ambil data dari tabel mobil_crud yang merk_mobilnya Honda
$jCard4 = Card4("SELECT * FROM mobil_crud WHERE merk_mobil = 'Honda'");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skema Programmer</title>
    <link rel="stylesheet" href="style_mobil.css">
    <link rel="stylesheet" href="./fontawesome-free-5.15.4-web/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="nav">
            <ul>
                <li>
                    <a href="">
                        <span class="icon"><i class="fas fa-book-reader"></i></span>
                        <span class="title">Mobil</span>
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
                    <a href="./tambah_mobil.php">
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
                    <h2>Total Mobil : <?= $jTotal?></h2>
                </div>
            </div>

            <!-- contect -->
            <div class="contect">
                <div class="box">
                    <div class="number">
                        <h3><?= $jCard1;?></h3>
                    </div>
                    <div class="title">
                        <img src="./img/TOYOTA_Brand_Logo.png" alt="" width="70%">
                        <p>Toyota</p>
                    </div>
                </div>
                <div class="box">
                    <div class="number">
                        <h3><?= $jCard2;?></h3>
                    </div>
                    <div class="title">
                    <img src="./img/MAZDA_Brand_Logo.png" alt="" width="70%">
                        <p>Mazda</p>
                    </div>
                </div>
                <div class="box">
                    <div class="number">
                        <h3><?= $jCard3;?></h3>
                    </div>
                    <div class="title">
                    <img src="./img/SUZUKI_Brand_Logo.png" alt="" width="70%">
                        <p>Suzuki</p>
                    </div>
                </div>
                <div class="box">
                    <div class="number">
                        <h3><?= $jCard4;?></h3>
                    </div>
                    <div class="title">
                    <img src="./img/HONDA_Brand_Logo.png" alt="" width="70%">
                        <p>Honda</p>
                    </div>
                </div>
            </div>

            <!-- databook -->
            <div class="dataBook">
                <div class="boxBook">
                    <div class="titleBook">
                        <h2>Mobil </h2>
                        <a href="">View All</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Nama Mobil</td>
                                <td>Merk Mobil</td>
                                <td>CC</td>
                                <td>Warna</td>
                                <td>Harga</td>
                                <td>Tgl Launching</td>
                                <td>Fungsi</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include('read.php');

                                $crud = new Crud;   //object
                                $mobils = $crud->read_data('mobil_crud');
                            ?>
                            <?php $i = 1;?>
                            <?php foreach($mobils as $mobil) :?>
                            <tr>
                                <td><?= $i;?></td>
                                <td><?= $mobil["nama_mobil"];?></td>
                                <td><?= $mobil["merk_mobil"];?></td>
                                <td><?= $mobil["cc"]. " CC";?></td>
                                <td><?= $mobil["warna"];?></td>
                                <td><?= "Rp.".$mobil["harga"]. " Juta";?></td>
                                <td><?= $mobil["tgl_launching"];?></td>
                                <td class="btn">
                                    <a href="ubah_mobil.php?kode_mobil=<?= $mobil["kode_mobil"];?>" class="edit">Edit</a>
                                    <a href="hapus_mobil.php?kode_mobil=<?= $mobil["kode_mobil"];?>" class="delete" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini?');">Delete</a>
                                </td>
                            </tr>
                            <?php $i++;?>
                            <?php endforeach;?>
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