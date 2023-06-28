<?php include("../database.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Nilai</title>
    <?php include "css.php" ?>
</head>

<body>
    <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Tambah Data Nilai</h2>
        <a href="list-nilai.php" class="btn btn-success">Lihat Data</a>
        <hr>
        <form action="proses-daftar-nilai.php" method="POST">
            <fieldset>
                <label for="nama">Nama</label>
                <select name="id_siswa" id="" class="form-control mt-2 mb-4">
                    <option value="" disabled selected>Pilih Siswa</option>
                    <?php
                    $sql = "SELECT * FROM siswa";
                    $query = mysqli_query($db, $sql);

                    while ($siswa = mysqli_fetch_array($query)) {
                    ?>
                        <option value="<?php echo $siswa['id_siswa'] ?>"><?php echo $siswa['nama'] ?></option>
                    <?php } ?>
                </select>
                <label for="nama">Tugas</label>
                <input type="text" name="tugas" class="form-control mt-2 mb-4" placeholder="Isikan Nilai Tugas" required>
                <label for="nama">UTS</label>
                <input type="text" name="uts" class="form-control mt-2 mb-4" placeholder="Isikan Nilai UTS" required>
                <label for="no_hp">UAS</label>
                <input type="text" name="uas" class="form-control mt-2 mb-4" placeholder="Isikan Nilai UAS" required>
                <div class="form-inline">
                    <input type="submit" class="btn btn-success" value="Simpan" name="simpan">
                </div>
            </fieldset>
        </form>
        <script src="../bs/js/bootstrap.js"></script>
</body>

</html>