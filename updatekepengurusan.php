<?php
include "koneksi.php";
$id=$_POST['id'];
$bidang = $_POST['bidang'];
$posisi = $_POST['posisi'];
$nip = $_POST['nip'];

$mysqli  = "UPDATE kepengurusan SET bidang='$bidang', posisi='$posisi', nip='$nip' WHERE id=$id";

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
