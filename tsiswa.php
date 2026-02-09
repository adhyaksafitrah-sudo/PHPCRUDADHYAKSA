<?php

// Koneksi database
include 'koneksi.php';

// Ambil data dari form
$nis        = isset($_POST['nis']) ? trim($_POST['nis']) : '';
$nama        = isset($_POST['nama']) ? trim($_POST['nama']) : '';
$jk          = isset($_POST['jk']) ? $_POST['jk'] : '';
$tgl_lahir   = isset($_POST['tgl_lahir']) ? $_POST['tgl_lahir'] : '';
$kelas       = isset($_POST['kelas']) ? trim($_POST['kelas']) : '';
$jurusan     = isset($_POST['jurusan']) ? trim($_POST['jurusan']) : '';
$keterangan  = isset($_POST['keterangan']) ? trim($_POST['keterangan']) : '';

// Insert ke database
$query = "INSERT INTO siswa (nis, nama, jk, tgl_lahir, kelas, jurusan, keterangan) VALUES ('$nis', '$nama', '$jk', '$tgl_lahir', '$kelas', '$jurusan', '$keterangan')";
mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

// Arahkan kembali
header("Location: siswa.php");
exit;
?>