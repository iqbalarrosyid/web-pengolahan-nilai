<?php
    include("../database.php");



    if(isset($_POST['simpan'])){


        $username = $_POST['username'];
        $password = $_POST['password'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $no_telp = $_POST['no_telp'];


        $sql = "INSERT INTO siswa (username, password, nama, kelas, no_telp) 
        VALUE ('$username', '$password', '$nama', '$kelas', '$no_telp')";
        $query = mysqli_query($db, $sql);


        if($query){
            header('Location: list-siswa.php');
        } else {
            die("gagal menambah...");
        }


    } else {
        die("Akses dilarang...");
    }

?>