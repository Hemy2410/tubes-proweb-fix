<?php
include "koneksi.php";
$id=$_POST['id'];
$nokk = $_POST['nokk'];
$namakepkel = $_POST['namakepkel'];
$jumlah = $_POST['jumlah'];
$kelurahan = $_POST['kelurahan'];
$rt = $_POST['rt'];
$kecamatan = $_POST['kecamatan'];

$mysqli  = "UPDATE keluargaberencana SET nokk='$nokk', namakepkel='$namakepkel', jumlah='$jumlah', kelurahan='$kelurahan', rt='$rt', kecamatan='$kecamatan' WHERE id=$id";

$result  = mysqli_query($connect, $mysqli);
if ($result) {
  echo "<script>alert('Edit data berhasil')</script>";
  echo "<meta http-equiv='refresh' content='1 url=kb.php'>";
  } else {
    echo "<script>alert('Edit data gagal')</script>";
    echo "<meta http-equiv='refresh' content='1 url=kb.php'>";
  }
  mysqli_close($connect);
?>
