<?php
require 'functions.php';

//cek apakah tombol submit sudah ditekan apa belum
if (isset($_POST["submit"])) {
    // panggil function tambah cek apakah data berhasil ditambahkan apa belum
    if (tambah($_POST) > 0) {
        echo"
            <script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href='index.php';
            </script>
        ";
    }
    else{
        echo"
            <script>
                alert('Data Gagal Ditambahkan!');
                document.location.href='tambah.php';
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
    <title>Add Books</title>
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
                                <h2>Add Books</h2>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="judul">Judul</label>
                            </td>
                            <td>:</td>
                            <td colspan="4">
                                <input type="text" name="judul" id="judul" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="pengarang">Pengarang</label>
                            </td>
                            <td>:</td>
                            <td colspan="4">
                                <input type="text" name="pengarang" id="pengarang" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="penerbit">Penerbit</label>
                            </td>
                            <td>:</td>
                            <td colspan="4">
                                <input type="text" name="penerbit" id="penerbit" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="tahun">Tahun</label>
                            </td>
                            <td>:</td>
                            <td class="tahun">
                                <input type="text" name="tahun" id="tahun" required>
                            </td>
                            <td>
                                <label for="kategori">Kategori</label>
                            </td>
                            <td>:</td>
                            <td>
                                <select name="kategori" id="kategori" required>
                                    <option value="Pendidikan">Pendidikan</option>
                                    <option value="Novel">Novel</option>
                                    <option value="Komik">Komik</option>
                                    <option value="Sejarah">Sejarah</option>
                                </select>
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