<?php
include "koneksi.php";
$nik = $_REQUEST['nik'];
$nama = $_REQUEST['nama'];
$jenisKelamin = $_REQUEST['jeniskelamin'];
$tempatLahir = $_REQUEST['tempatLahir'];
$tanggalLahir = $_REQUEST['tanggalLahir'];
$nomor = $_REQUEST['nomor'];
$alamat = $_REQUEST['alamat'];
$password = $_REQUEST['pwd'];

$mysqli  = "INSERT INTO pelapor (NIK, Nama, jenisKelamin, tempatLahir, tanggalLahir, nomor, alamat, password)
VALUES ('$nik', '$nama', '$jenisKelamin', '$tempatLahir', '$tanggalLahir', '$nomor', '$alamat', '$password')";

$result  = mysqli_query($connect, $mysqli);
if ($result) {
  echo "<script>alert('Input data berhasil')</script>";
  echo "<meta http-equiv='refresh' content='1 url=loginpelapor.php'>";
  } else {
    echo "<script>alert('Gagal input data')</script>";
    echo "<meta http-equiv='refresh' content='1 url=loginpelapor.php'>";}
  mysqli_close($connect);
?>
