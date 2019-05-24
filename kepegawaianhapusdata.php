<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($connect,"delete from kepegawaian where id='$id'");
 
// mengalihkan halaman kembali ke index.php
echo "<script>alert('Hapus data berhasil')</script>";
 echo "<meta http-equiv='refresh' content='1 url=kepegawaianlihatdata.php'>";
 
?>