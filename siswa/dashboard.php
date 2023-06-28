<?php
include "../database.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Spetaq | Siswa</title>
  <!-- <link rel="stylesheet" href="style.css" /> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="../fontawesome/css/all.css">
  <link rel="stylesheet" href="../bs/css/bootstrap.css">
  <link rel="icon" type="image/png" href="../logo smataq.png" />
  <link rel="stylesheet" href="../style.css">
</head>

<body>
  <?php include "navbar-ds.php"; ?>

  <div class="p-4" id="main-content">
    <?php include "../button.php"; ?>
    <div class="card mt-5">
      <div class="card-body shadow">
        <h4>Selamat datang <?php echo $_SESSION['nama'] ?></h4>
        <p>
          Sebagai Siswa, anda dapat melihat nilai anda mulai dari nilai tugas, UTS, UAS, dan rata-ratanya.
        </p>
      </div>
    </div>
  </div>


  <script src="../bs/js/bootstrap.js"></script>
  <script src="../script.js"></script>
</body>

</html>