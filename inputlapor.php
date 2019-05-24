<?php
include "koneksi.php";
$nama = $_REQUEST['nama'];
$alamat = $_REQUEST['alamat'];
$jk = $_REQUEST['jk'];
$nomor = $_REQUEST['nomor'];
$ktp = $_REQUEST['ktp'];
$deskripsi = $_REQUEST['deskripsi'];

$mysqli  = "INSERT INTO laporan (nama, alamat, jk, nomor, ktp, deskripsi)
VALUES ('$nama', '$alamat', '$jk', '$nomor', '$ktp', '$deskripsi')";
$result  = mysqli_query($connect, $mysqli);
if ($result) {
  echo "<script>alert('Input data berhasil')</script>";
  echo "<meta http-equiv='refresh' content='1 url=awallapor.php'>";
  } else {
    echo "<script>alert('Input data gagal')</script>";
    echo "<meta http-equiv='refresh' content='1 url=awallapor.php'>";
  }
  mysqli_close($connect);
?>
