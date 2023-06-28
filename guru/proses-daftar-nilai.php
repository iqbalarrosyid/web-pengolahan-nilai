<?php
include("../database.php");



if (isset($_POST['simpan'])) {


    $id_siswa = $_POST['id_siswa'];
    $tugas = $_POST['tugas'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];


    $sql = "INSERT INTO nilai 
        VALUES ('','$id_siswa','$_SESSION[id_guru]','$tugas', '$uts', '$uas')";
    $query = mysqli_query($db, $sql);


    if ($query) {
        header('Location: list-nilai.php');
    } else {
        die("gagal menambah...");
    }
} else {
    die("Akses dilarang...");
}
