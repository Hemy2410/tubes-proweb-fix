<!DOCTYPE html>
<html lang="en">
<head>
  <title>DP3AKB | Login Pegawai</title>
  <link rel="shortcut icon" href="logo.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel = "stylesheet" type="text/css" href = "tubes.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>



<?php
include 'koneksi.php';
$nip= $_POST['nip'];
$password=$_POST['pwd'];

if (!empty($nip)&& !empty($password)){
  $sql=mysqli_query($connect, "select * from user where nip = '$nip' and password='$password'");
  $result=mysqli_num_rows($sql);

  if($result){
    echo "<script>alert('Login berhasil')</script>";
    echo "<meta http-equiv='refresh' content='1 url=awal.php'>";

    }
    else{
      echo "<script>alert('Login gagal')</script>";
      echo "<meta http-equiv='refresh' content='1 url=loginpegawai.php'>";
    }
  }
    else{
      echo "<script>alert('Login gagal')</script>";
      echo "<meta http-equiv='refresh' content='1 url=loginpegawai.php'>";
    }
 ?>
