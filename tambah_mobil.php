<?php
require 'functions.php';

//cek apakah tombol submit sudah ditekan apa belum
if (isset($_POST["submit"])) {
    // panggil function tambah cek apakah data berhasil ditambahkan apa belum
    if (tambah_mobil($_POST) > 0) {
        echo"
            <script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href='index_mobil.php';
            </script>
        ";
    }
    else{
        echo"
            <script>
                alert('Data Gagal Ditambahkan!');
                document.location.href='tambah_mobil.php';
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Cars</title>
    <link rel="stylesheet" href="./tambah/style.css">
</head>
<body>
    <div class="container">
        <div class="box">
            <div class="imgBg">
                <img src="./img/undraw_Add_content_re_vgqa.svg" alt="" width="100%">
            </div>
            <div class="content">
                <form action="" method="post">
                    <table>
                        <tr>
                            <td colspan="6">
                                <h2>Add Cars</h2>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="nama">Nama Mobil</label>
                            </td>
                            <td>:</td>
                            <td colspan="4">
                                <input type="text" name="nama_mobil" id="nama" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="merk_mobil">Merk Mobil</label>
                            </td>
                            <td>:</td>
                            <td>
                                <select name="merk_mobil" id="merk_mobil" required>
                                    <option value="Toyota">Toyota</option>
                                    <option value="Mazda">Mazda</option>
                                    <option value="Suzuki">Suzuki</option>
                                    <option value="Honda">Honda</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="cc">CC</label>
                            </td>
                            <td>:</td>
                            <td colspan="4">
                                <input type="text" name="cc" id="cc" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="warna">Warna</label>
                            </td>
                            <td>:</td>
                            <td class="warna">
                                <input type="text" name="warna" id="warna" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="harga">Harga</label>
                            </td>
                            <td>:</td>
                            <td>
                                <input type="text" name="harga" id="harga" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="tgl">Tgl Launching</label>
                            </td>
                            <td>:</td>
                            <td>
                                <input type="date" name="tgl_launching" id="tgl">
                            </td>
                        </tr>
                    </table>
                    <div class="btn">
                        <button type="reset">Cancel</button>
                        <button type="submit" name="submit">Submit</button>
                    </div>
                    <div class="help">
                        <h5>Butuh Bantuan? <a href="">Help!</a></h5>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>