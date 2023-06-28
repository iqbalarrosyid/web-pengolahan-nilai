<?php include("../database.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List Siswa</title>
  <?php include "css.php"; ?>
</head>

<body>
  <?php include "navbar-ds.php"; ?>
  <div id="main-content" class="p-4 p-md-5 pt-5">
    <?php include "../button.php"; ?>
    <div class="card mb-2">
      <div class="card-body shadow">
        <h2>Data Siswa</h2>
      </div>
    </div>
    <div class="card mb-2">
      <div class="card-body shadow">
        <a href="form-daftar-siswa.php" class="btn btn-success mb-3 mt-3">Tambah Data</a>
        <br />
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Username</th>
              <th scope="col">Password</th>
              <th scope="col">Nama</th>
              <th scope="col">Kelas</th>
              <th scope="col">No Telp</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $sql = "SELECT * FROM siswa";
            $query = mysqli_query($db, $sql);

            $no = 0;
            while ($siswa = mysqli_fetch_array($query)) {
              echo "<tr>";
              $no++;
            ?>
              <td><?php echo $no ?></td>
              <td><?php echo $siswa['username'] ?></td>
              <td><?php echo $siswa['password'] ?></td>
              <td><?php echo $siswa['nama'] ?></td>
              <td><?php echo $siswa['kelas'] ?></td>
              <td><?php echo $siswa['no_telp'] ?></td>
              <td>
                <a href="form-edit-siswa.php?id=<?php echo $siswa['id_siswa'] ?>" class="btn btn-warning">Edit</a>
                <a href="hapus-siswa.php?id=<?php echo $siswa['id_siswa'] ?>" class="btn btn-danger">Hapus</a>
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