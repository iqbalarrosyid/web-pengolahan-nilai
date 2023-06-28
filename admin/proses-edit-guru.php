<?php

include("../database.php");


if(isset($_POST['simpan'])){


        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $nama = $_POST['nama'];
        $mapel = $_POST['mapel'];
        $no_telp = $_POST['no_telp'];


        $sql = "UPDATE guru SET username='$username', password='$password', nama='$nama'
        , mapel='$mapel', no_telp='$no_telp' WHERE id_guru='$id'";
        $query = mysqli_query($db, $sql);


        if( $query ){

            header('Location: list-guru.php');
        } else {

            die("Gagal menyimpan perubahan....");
        }


} else {
    die("Akses dilarang...");
}

?>