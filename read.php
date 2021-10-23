<?php
include ('konek.php');

class Crud extends Koneksi  //class
{
    function __construct()
    {
        parent::__construct();
    }

    public function read_data($table){
        $query = "SELECT * FROM $table";

        $hasil = $this->conn->query($query);

        if (!$hasil) {
            return "Terjadi Kesalahan";
        }

        $rows = array();
        while ($row = $hasil->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }
}



?>