<?php
include("../database.php");

// Periksa apakah parameter ID diteruskan melalui URL
if (isset($_GET['id'])) {
    $id_nilai = $_GET['id'];

    // Periksa apakah data nilai dengan ID yang diberikan ada di database
    $sql = "SELECT * FROM nilai WHERE id_nilai = $id_nilai";
    $query = mysqli_query($db, $sql);
    $nilai = mysqli_fetch_assoc($query);

    // Periksa apakah data nilai ditemukan
    if ($nilai) {
        // Ambil data siswa terkait untuk menampilkan informasi tambahan (jika diperlukan)
        $sql_siswa = "SELECT * FROM siswa WHERE id_siswa = $nilai[id_siswa]";
        $query_siswa = mysqli_query($db, $sql_siswa);
        $siswa = mysqli_fetch_assoc($query_siswa);
?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Edit Nilai</title>
            <?php include "css.php"; ?>
        </head>

        <body>
            <div id="content" class="p-4 p-md-5 pt-5">
                <h2 class="mb-4">Edit Data Nilai</h2>
                <a href="list-nilai.php" class="btn btn-success">Lihat Data</a>
                <hr>
                <form action="proses-edit-nilai.php" method="POST">
                    <fieldset>
                        <input type="hidden" name="id_nilai" value="<?php echo $nilai['id_nilai']; ?>">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama_siswa" class="form-control mt-2 mb-4" value="<?php echo $siswa['nama']; ?>" readonly>
                        <label for="nama">Tugas</label>
                        <input type="text" name="tugas" class="form-control mt-2 mb-4" value="<?php echo $nilai['tugas']; ?>" required>
                        <label for="nama">UTS</label>
                        <input type="text" name="uts" class="form-control mt-2 mb-4" value="<?php echo $nilai['uts']; ?>" required>
                        <label for="no_hp">UAS</label>
                        <input type="text" name="uas" class="form-control mt-2 mb-4" value="<?php echo $nilai['uas']; ?>" required>
                        <div class="form-inline">
                            <input type="submit" class="btn btn-success" value="Simpan" name="simpan">
                        </div>
                    </fieldset>
                </form>
            </div>
            <script src="../bs/js/bootstrap.js"></script>
        </body>

        </html>

<?php
    } else {
        die("Data nilai tidak ditemukan.");
    }
} else {
    die("Akses dilarang.");
}
?>