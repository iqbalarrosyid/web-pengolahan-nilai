<?php include("../database.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "css.php" ?>
</head>
<body>
<div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Tambah Data Siswa</h2>
        <a href="list-siswa.php" class="btn btn-success">Lihat Data</a>
        <hr>
        <form action="proses-daftar-siswa.php" method="POST">
            <fieldset>
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control mt-2 mb-4" placeholder="Isikan Username" required>
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control mt-2 mb-4" placeholder="Isikan Password" required>
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control mt-2 mb-4" placeholder="Isikan Nama" required>
                <label for="nama">Kelas</label>
                <input type="text" name="kelas" class="form-control mt-2 mb-4" placeholder="Isikan Kelas" required>
                <label for="no_hp">No HP</label>
                <input type="text" name="no_telp" class="form-control mt-2 mb-4" placeholder="Isikan No Telp" required>
                <div class="form-inline">
                    <input type="submit" class="btn btn-success" value="Simpan" name="simpan">
                </div>
            </fieldset>
        </form>
<script src="../bs/js/bootstrap.js"></script>
</body>
</html>