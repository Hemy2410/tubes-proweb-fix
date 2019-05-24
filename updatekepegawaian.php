<?php
include "koneksi.php";
$id=$_POST['id'];
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$tempatLahir = $_POST['tempatLahir'];
$tanggalLahir = $_POST['tanggalLahir'];
$nomor = $_POST['nomor'];
$jk = $_POST['jk'];

$mysqli  = "UPDATE kepegawaian SET nip='$nip', nama='$nama', tempatLahir='$tempatLahir',
tanggalLahir='$tanggalLahir', nomor='$nomor', jk='$jk' WHERE id=$id";
$result  = mysqli_query($connect, $mysqli);
if ($result) {
  echo "<script>alert('Edit data berhasil')</script>";
  echo "<meta http-equiv='refresh' content='1 url=kepegawaian.php'>";

} else {
  echo "<script>alert('Edit data gagal')</script>";
  echo "<meta http-equiv='refresh' content='1 url=kepengurusan.php'>";}
mysqli_close($connect);
?>
