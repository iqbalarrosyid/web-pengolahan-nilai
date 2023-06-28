<?php

include("../database.php");


if(isset($_POST['simpan'])){


        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $no_telp = $_POST['no_telp'];


        $sql = "UPDATE siswa SET username='$username', password='$password', nama='$nama'
        , kelas='$kelas', no_telp='$no_telp' WHERE id_siswa='$id'";
        $query = mysqli_query($db, $sql);


        if( $query ){

            header('Location: list-siswa.php');
        } else {

            die("Gagal menyimpan perubahan....");
        }


} else {
    die("Akses dilarang...");
}

?>