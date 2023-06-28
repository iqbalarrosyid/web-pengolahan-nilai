<?php
include("database.php");

// Mendapatkan data dari form login
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

// Pilih tabel berdasarkan level
if ($level == "admin") {
    $table = "admin";
    $redirect = "admin/dashboard.php"; // Ganti dengan halaman admin
} elseif ($level == "guru") {
    $table = "guru";
    $redirect = "guru/dashboard.php"; // Ganti dengan halaman guru
} elseif ($level == "siswa") {
    $table = "siswa";
    $redirect = "siswa/dashboard.php"; // Ganti dengan halaman siswa
}

// Query untuk memeriksa data login pada tabel yang sesuai
$query = "SELECT * FROM $table WHERE username='$username' AND password='$password'";
$result = mysqli_query($db, $query);
$count = mysqli_num_rows($result);
$data = mysqli_fetch_array($result);

// Memeriksa hasil query
if ($count == 1) {
    // Login berhasil
    if ($level == "guru") {
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['id_guru'] = $data['id_guru'];
        $_SESSION['mapel'] = $data['mapel'];
    } elseif ($level == "siswa") {
        $_SESSION['id_siswa'] = $data['id_siswa'];
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['kelas'] = $data['kelas'];
    }

    header("Location: $redirect");
} else {
    // Login gagal
    echo "Login failed. Check your username, password, and level.";
}
