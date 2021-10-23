<?php
require 'functions.php';

//tangkap id_buku dari index lalu simpan ke variabel $id_buku
$id_buku = $_GET["id_buku"];

// buat function query baru untuk menampilkan data berdasarkan id yang dipilih
$book = query("SELECT * FROM books WHERE id_buku = $id_buku")[0];

//cek apakah tombol submit sudah ditekan apa belum
if (isset($_POST["submit"])) {
    // panggil function tambah cek apakah data berhasil diubah apa belum
    if (edit($_POST) > 0) {
        echo"
            <script>
                alert('Data Berhasil Diubah!');
                document.location.href='index.php';
            </script>
        ";
    }
    else{
        echo"
            <script>
                alert('Data Gagal Diubah!');
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
    <title>Update Books</title>
    <link rel="stylesheet" href="./tambah/style.css">
</head>
<body>
    <div class="container">
        <div class="box">
            <div class="imgBg">
                <img src="./img/undraw_Update_re_swkp.svg" alt="" width="100%">
            </div>
            <div class="content">
                <form action="" method="post">
                    <input type="hidden" name="id_buku" value="<?= $book["id_buku"];?>">
                    <table>
                        <tr>
                            <td colspan="6">
                                <h2>Update Books</h2>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="judul">Judul</label>
                            </td>
                            <td>:</td>
                            <td colspan="4">
                                <input type="text" name="judul" id="judul" required value="<?= $book["judul"];?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="pengarang">Pengarang</label>
                            </td>
                            <td>:</td>
                            <td colspan="4">
                                <input type="text" name="pengarang" id="pengarang" required value="<?= $book["pengarang"];?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="penerbit">Penerbit</label>
                            </td>
                            <td>:</td>
                            <td colspan="4">
                                <input type="text" name="penerbit" id="penerbit" required value="<?= $book["penerbit"];?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="tahun">Tahun</label>
                            </td>
                            <td>:</td>
                            <td class="tahun">
                                <input type="text" name="tahun" id="tahun" required value="<?= $book["tahun"];?>">
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