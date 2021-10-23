<?php

$dbms = mysqli_connect("localhost","root","","lspp_library_crud");
 
function query($query){
    global $dbms;
    $result = mysqli_query($dbms, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $dbms;
    $judul = htmlspecialchars($data["judul"]);
    $pengarang = htmlspecialchars($data["pengarang"]);
    $penerbit = htmlspecialchars($data["penerbit"]);
    $tahun = htmlspecialchars($data["tahun"]);
    $kategori = htmlspecialchars($data["kategori"]);

    $query = "INSERT INTO books
                VALUES ('','$judul','$pengarang','$penerbit','$tahun','$kategori')";
    mysqli_query($dbms,$query);

    return mysqli_affected_rows($dbms);
}

function hapus($id_buku){
    global $dbms;
    mysqli_query($dbms,"DELETE FROM books WHERE id_buku = $id_buku");

    return mysqli_affected_rows($dbms);
}

function edit($data){
    global $dbms;
    $id_buku = $data["id_buku"];
    $judul = htmlspecialchars($data["judul"]);
    $pengarang = htmlspecialchars($data["pengarang"]);
    $penerbit = htmlspecialchars($data["penerbit"]);
    $tahun = htmlspecialchars($data["tahun"]);
    $kategori = htmlspecialchars($data["kategori"]);

    $query = "UPDATE books SET
                judul = '$judul',
                pengarang = '$pengarang',
                penerbit = '$penerbit',
                tahun = $tahun,
                kategori = '$kategori'
                    WHERE id_buku = $id_buku
                ";

    mysqli_query($dbms,$query);

    return mysqli_affected_rows($dbms);
}

function total($query1){
    global $dbms;
    $total = mysqli_query($dbms, $query1);
    $jTotal = mysqli_num_rows($total);

    return $jTotal;
}

function Card1($query2){
    global $dbms;
    $dCard1 = mysqli_query($dbms,$query2);
    $jCard1 = mysqli_num_rows($dCard1);

    return $jCard1;
}

function Card2($query3){
    global $dbms;
    $dCard2 = mysqli_query($dbms,$query3);
    $jCard2 = mysqli_num_rows($dCard2);

    return $jCard2;
}

function Card3($query4){
    global $dbms;
    $dCard3 = mysqli_query($dbms,$query4);
    $jCard3 = mysqli_num_rows($dCard3);

    return $jCard3;
}

function Card4($query5){
    global $dbms;
    $dCard4 = mysqli_query($dbms,$query5);
    $jCard4 = mysqli_num_rows($dCard4);

    return $jCard4;
}

// Mobil

function tambah_mobil($data){
    global $dbms;
    $namaMobil = htmlspecialchars($data["nama_mobil"]);
    $merkMobil = htmlspecialchars($data["merk_mobil"]);
    $cc = htmlspecialchars($data["cc"]);
    $warna = htmlspecialchars($data["warna"]);
    $harga = htmlspecialchars($data["harga"]);
    $tglLaunching = htmlspecialchars($data["tgl_launching"]);

    $query = "INSERT INTO mobil_crud
                VALUES ('','$namaMobil','$merkMobil','$cc','$warna','$harga','$tglLaunching')";
    mysqli_query($dbms,$query);

    return mysqli_affected_rows($dbms);
}

function hapus_mobil($kodeMobil){
    global $dbms;
    mysqli_query($dbms,"DELETE FROM mobil_crud WHERE kode_mobil = $kodeMobil");

    return mysqli_affected_rows($dbms);
}

function ubah_mobil($data){
    global $dbms;
    $kodeMobil = $data["kode_mobil"];
    $namaMobil = htmlspecialchars($data["nama_mobil"]);
    $merkMobil = htmlspecialchars($data["merk_mobil"]);
    $cc = htmlspecialchars($data["cc"]);
    $warna = htmlspecialchars($data["warna"]);
    $harga = htmlspecialchars($data["harga"]);
    $tglLaunching = htmlspecialchars($data["tgl_launching"]);

    $query = "UPDATE mobil_crud SET
                nama_mobil = '$namaMobil',
                merk_mobil = '$merkMobil',
                cc = '$cc',
                warna = '$warna',
                harga = '$harga',
                tgl_launching = '$tglLaunching'
                    WHERE kode_mobil = $kodeMobil
                ";

    mysqli_query($dbms,$query);

    return mysqli_affected_rows($dbms);
}


?>