<!DOCTYPE html>
<html lang="en">
<head>
  <title>DP3AKB | Edit Kepengurusan</title>
  <link rel="shortcut icon" href="logo.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel = "stylesheet" type="text/css" href = "tubes.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="row content">
      <div class="col-md-4">
      </div>
  <div class="container">
    <div class="jumbotron">
      <img src="logo.png" width="80"height="80" align="left">
      <h2 align="justify">Dinas Pemberdayaan Perempuan, Perlindungan Anak, dan Keluarga Berencana</h2>

      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li><a href="awal.php">Home</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Kepegawaian <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="kepegawaian.php">Input Data</a></li>
                <li><a href="kepegawaianlihatdata.php">Lihat Data</a></li>
              </ul>
            </li>

            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Kepengurusan <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="active"><a href="kepengurusan.php">Input Data</a></li>
                <li><a href="kepengurusanlihatdata.php">Lihat Data</a></li>
              </ul>
            </li>

            <li><a href="informasikorban.php">Informasi Korban & Kekerasan</a></li>

            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Keluarga Berencana <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="kb.php">Input Data</a></li>
                <li><a href="kblihatdata.php">Lihat Data</a></li>
              </ul>
            </li>
            <li><a href="logout.php">Log Out</a></li>
          </ul>
        </div>


        <div class="row content">
            <div class="col-md-4">
        <div class="container">

<?php
include 'koneksi.php';
$id=$_GET['id'];
$no = 1;
$data = mysqli_query($connect,"select * from kepengurusan WHERE id='$id'");
while($d = mysqli_fetch_array($data)){
?>

<form action="updatekepengurusan.php" method ="post">
<form class="form-horizontal">
  <div class="form-group">
    <label for="bidang">Bidang:</label>
     <input type="hidden" name="id" value="<?php echo $d['id']?>">
    <input type="text" class="form-control" id="Bidang" placeholder="Masukkan Bidang.." name="bidang" value="<?php echo $d['bidang']?>">
  </div>
  <div class="posisi">
    <label for="posisi">Posisi:</label>
    <input type="text" class="form-control" id="posisi" placeholder="Masukkan Posisi.." name="posisi" value="<?php echo $d['posisi']?>">
  </div> </br>
  <div class="nip">
    <label for="nip">Nip:</label>
    <input type="text" class="form-control" id="nip" placeholder="Masukkan NIP.." name="nip" value="<?php echo $d['nip']?>">
  </div> </br>

  <button type="submit" class="btn btn-default">Simpan Data</button>

  <div class="row content">
      <div class="col-md-4">


</form>
<?php } ?>
</body>
</html>
