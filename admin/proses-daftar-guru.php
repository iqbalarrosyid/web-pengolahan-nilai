<?php
    include("../database.php");



    if(isset($_POST['simpan'])){


        $username = $_POST['username'];
        $password = $_POST['password'];
        $nama = $_POST['nama'];
        $mapel = $_POST['mapel'];
        $no_telp = $_POST['no_telp'];


        $sql = "INSERT INTO guru (username, password, nama, mapel, no_telp) 
        VALUE ('$username', '$password', '$nama', '$mapel', '$no_telp')";
        $query = mysqli_query($db, $sql);


        if($query){
            header('Location: list-guru.php');
        } else {
            die("gagal menambah...");
        }


    } else {
        die("Akses dilarang...");
    }

?>