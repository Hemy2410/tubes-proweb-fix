<?php
include "koneksi.php";
$nip = $_REQUEST['nip'];
$nama = $_REQUEST['nama'];
$tempatLahir = $_REQUEST['tempatLahir'];
$tanggalLahir = $_REQUEST['tanggalLahir'];
$nomor = $_REQUEST['nomor'];
$jk = $_REQUEST['jk'];




$mysqli  = "INSERT INTO kepegawaian (nip, nama, tempatLahir, tanggalLahir, nomor, jk)
VALUES ('$nip', '$nama', '$tempatLahir', '$tanggalLahir', '$nomor', '$jk')";
$result  = mysqli_query($connect, $mysqli);
if ($result) {
  echo "<script>alert('Input data berhasil')</script>";
  echo "<meta http-equiv='refresh' content='1 url=kepegawaian.php'>";
  } else {
    echo "<script>alert('Input data gagal')</script>";
    echo "<meta http-equiv='refresh' content='1 url=kepegawaian.php'>";
  }
  mysqli_close($connect);
?>
