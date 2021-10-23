<?php
require 'functions.php';

//tangkap kode_mobil yang dikirimkan index_mobil.php
$kodeMobil = $_GET["kode_mobil"];

//tampilkan data berdasarkan id yang dipilih
$mobil = query("SELECT * FROM mobil_crud WHERE kode_mobil = $kodeMobil")[0];

//cek apakah tombol submit sudah ditekan apa belum
if (isset($_POST["submit"])) {
    // panggil function tambah cek apakah data berhasil diubsh apa belum
    if (ubah_mobil($_POST) > 0) {
        echo"
            <script>
                alert('Data Berhasil Diubah!');
                document.location.href='index_mobil.php';
            </script>
        ";
    }
    else{
        echo"
            <script>
                alert('Data Gagal Diubah!');
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
    <title>Update Cars</title>
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
                    <input type="hidden" name="kode_mobil" value="<?= $mobil["kode_mobil"];?>">
                    <table>
                        <tr>
                            <td colspan="6">
                                <h2>Update Cars</h2>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="nama">Nama Mobil</label>
                            </td>
                            <td>:</td>
                            <td colspan="4">
                                <input type="text" name="nama_mobil" id="nama" required value="<?= $mobil["nama_mobil"];?>">
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
                                <input type="text" name="cc" id="cc" required  value="<?= $mobil["cc"];?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="warna">Warna</label>
                            </td>
                            <td>:</td>
                            <td class="warna">
                                <input type="text" name="warna" id="warna" required value="<?= $mobil["warna"];?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="harga">Harga</label>
                            </td>
                            <td>:</td>
                            <td>
                                <input type="text" name="harga" id="harga" required value="<?= $mobil["harga"];?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="tgl">Tgl Launching</label>
                            </td>
                            <td>:</td>
                            <td>
                                <input type="date" name="tgl_launching" id="tgl" required value="<?= $mobil["tgl_launching"];?>">
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