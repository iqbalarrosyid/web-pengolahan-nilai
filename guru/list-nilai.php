<?php include("../database.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List Nilai</title>
  <?php include "css.php"; ?>
</head>

<body>
  <?php include "navbar-ds.php"; ?>
  <div id="main-content" class="p-4 p-md-5 pt-5">
    <?php include "../button.php"; ?>
    <div class="card mb-2">
      <div class="card-body shadow">
        <h2>Data Nilai</h2>
      </div>
    </div>
    <div class="card mb-3">
      <div class="card-body shadow">
        <h5><?php echo $_SESSION['nama'] ?></h5>
        <h5><?php echo $_SESSION['mapel'] ?></h5>
        <a href="form-daftar-nilai.php" class="btn btn-success mb-3 mt-3">Tambah Data</a>
        <br />
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Kelas</th>
              <th scope="col">Tugas</th>
              <th scope="col">UTS</th>
              <th scope="col">UAS</th>
              <th scope="col">Rata-rata</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $sql = "SELECT id_nilai, nama, kelas, tugas, uts, uas, (tugas + uts + uas) / 3 AS rata_rata FROM nilai a LEFT JOIN siswa b ON a.id_siswa=b.id_siswa WHERE id_guru='$_SESSION[id_guru]'";
            $query = mysqli_query($db, $sql);

            $no = 0;
            while ($nilai = mysqli_fetch_array($query)) {
              echo "<tr>";
              $no++;
            ?>
              <td><?php echo $no ?></td>
              <td><?php echo $nilai['nama'] ?></td>
              <td><?php echo $nilai['kelas'] ?></td>
              <td><?php echo $nilai['tugas'] ?></td>
              <td><?php echo $nilai['uts'] ?></td>
              <td><?php echo $nilai['uas'] ?></td>
              <td><?php echo $nilai['rata_rata'] ?></td>
              <td>
                <a href="form-edit-nilai.php?id=<?php echo $nilai['id_nilai'] ?>" class="btn btn-warning">Edit</a>
                <a href="hapus-nilai.php?id=<?php echo $nilai['id_nilai'] ?>" class="btn btn-danger">Hapus</a>
              </td>

            <?php
            }
            ?>
          </tbody>
        </table>
        <p>Total data: <?php echo mysqli_num_rows($query) ?></p>
      </div>
    </div>
  </div>
  </div>
  <script src="../bs/js/bootstrap.js"></script>
  <script src="../script.js"></script>
</body>

</html>