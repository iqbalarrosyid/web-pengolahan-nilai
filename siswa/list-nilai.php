<?php
include "../database.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List Nilai Siswa</title>
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
        <h5><?php echo $_SESSION['kelas'] ?></h5>

        <br />
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Mapel</th>
              <th scope="col">Pengampu</th>
              <th scope="col">Tugas</th>
              <th scope="col">UTS</th>
              <th scope="col">UAS</th>
              <th scope="col">Rata-rata</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $sql = "SELECT id_nilai, nama, mapel, tugas, uts, uas, (tugas + uts + uas) / 3 AS rata_rata FROM nilai a LEFT JOIN guru b ON a.id_guru=b.id_guru WHERE id_siswa='$_SESSION[id_siswa]'";
            $query = mysqli_query($db, $sql);

            $no = 0;
            $rataRata = 0;
            while ($nilai = mysqli_fetch_array($query)) {
              $no++;
              $rataRata += $nilai['rata_rata'];
            ?>
              <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $nilai['mapel'] ?></td>
                <td><?php echo $nilai['nama'] ?></td>
                <td><?php echo $nilai['tugas'] ?></td>
                <td><?php echo $nilai['uts'] ?></td>
                <td><?php echo $nilai['uas'] ?></td>
                <td><?php echo $nilai['rata_rata'] ?></td>
              </tr>
            <?php } ?>
            <tr>
              <th></th>
              <th>Rata-rata</th>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <th colspan="7"><?php echo $rataRata / $no ?></th>
            </tr>
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