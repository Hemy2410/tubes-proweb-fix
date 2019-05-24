<?php
include "koneksi.php";
$bidang = $_REQUEST['bidang'];
$posisi = $_REQUEST['posisi'];
$nip = $_REQUEST['nip'];


$mysqli  = "INSERT INTO kepengurusan (bidang, posisi, nip)
VALUES ('$bidang', '$posisi', '$nip')";

$result  = mysqli_query($connect, $mysqli);
if ($result) {
  echo "<script>alert('Input data berhasil')</script>";
  echo "<meta http-equiv='refresh' content='1 url=kepengurusan.php'>";
  } else {
    echo "<script>alert('Gagal input data')</script>";
    echo "<meta http-equiv='refresh' content='1 url=kepengurusan.php'>";}
  mysqli_close($connect);
?>
