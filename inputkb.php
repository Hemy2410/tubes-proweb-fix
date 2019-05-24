<?php
include "koneksi.php";
$nokk = $_REQUEST['nokk'];
$namakepkel = $_REQUEST['namakepkel'];
$jumlah = $_REQUEST['jumlah'];
$kelurahan = $_REQUEST['kelurahan'];
$rt = $_REQUEST['rt'];
$kecamatan = $_REQUEST['kecamatan'];

$mysqli  = "INSERT INTO keluargaberencana (nokk, namakepkel, jumlah, kelurahan, rt, kecamatan)
VALUES ('$nokk', '$namakepkel', '$jumlah','$kelurahan', '$rt', '$kecamatan')";

$result  = mysqli_query($connect, $mysqli);
if ($result) {
  echo "<script>alert('Input data berhasil')</script>";
  echo "<meta http-equiv='refresh' content='1 url=kb.php'>";
  } else {
    echo "<script>alert('Input data gagal')</script>";
    echo "<meta http-equiv='refresh' content='1 url=kb.php'>";
  }
  mysqli_close($connect);
?>
