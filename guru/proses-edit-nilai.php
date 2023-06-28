<?php
include("../database.php");

if (isset($_POST['simpan'])) {
    $id_nilai = $_POST['id_nilai'];
    $tugas = $_POST['tugas'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];

    $sql = "UPDATE nilai SET tugas='$tugas', uts='$uts', uas='$uas' WHERE id_nilai=$id_nilai";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: list-nilai.php');
    } else {
        die("Gagal mengedit nilai.");
    }
} else {
    die("Akses dilarang.");
}
