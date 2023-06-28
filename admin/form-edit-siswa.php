<?php

include("../database.php");


if(!isset($_GET['id'])){
    header('Location: list-siswa.php');
}


$id = $_GET['id'];


$sql = "SELECT * FROM siswa WHERE id_siswa=$id limit 1";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_array($query);


if(mysqli_num_rows($query) < 1){
    die("data tidak ditemukan....");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
    <?php include "css.php"; ?>
</head>
<body>
<div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Edit Data Siswa</h2>
        <a href="list-siswa.php" class="btn btn-success">Lihat Data</a>
        <hr>
        <form action="proses-edit-siswa.php" method="POST">
            <fieldset>
                <input type="hidden" name="id" value="<?php echo $siswa['id_siswa']?>"/>
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control mt-2 mb-4" value="<?php echo $siswa['username'] ?>" placeholder="Isikan Username" required>
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control mt-2 mb-4" value="<?php echo $siswa['password'] ?>" placeholder="Isikan Password" required>
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control mt-2 mb-4" value="<?php echo $siswa['nama'] ?>" placeholder="Isikan Nama" required>
                <label for="nama">Kelas</label>
                <input type="text" name="kelas" class="form-control mt-2 mb-4" value="<?php echo $siswa['kelas'] ?>" placeholder="Isikan Kelas" required>
                <label for="no_hp">No HP</label>
                <input type="text" name="no_telp" class="form-control mt-2 mb-4" value="<?php echo $siswa['no_telp'] ?>" placeholder="Isikan No Telp" required>
                <div class="form-inline">
                    <input type="submit" class="btn btn-success" value="Simpan" name="simpan">
                </div>
            </fieldset>
        </form>
</body>
</html>