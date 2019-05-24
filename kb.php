<!DOCTYPE html>
<html lang="en">
<head>
  <title>DP3AKB | Input KB</title>
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
                <li><a href="kepegawaian.php">Lihat Data</a></li>
                <li><a href="kepegawaianlihatdata.php">Input Data</a></li>
              </ul>
            </li>

            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Kepengurusan <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="kepengurusan.php">Input Data</a></li>
                <li><a href="kepengurusanlihatdata.php">Lihat Data</a></li>
              </ul>
            </li>

            <li><a href="informasikorban.php">Informasi Korban & Kekerasan</a></li>

            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Keluarga Berencana <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="active"><a href="#">Input Data</a></li>
                <li><a href="kblihatdata.php">Lihat Data</a></li>
              </ul>
            </li>
            <li><a href="logout.php">Log Out</a></li>
          </ul>
        </div>
        <div class="row content">
            <div class="col-md-4">
        <div class="container">
<form action="inputkb.php">
  <div class="form-group">
    <label for="nokk">No. KK:</label>
    <input type="text" class="form-control" id="nokk" placeholder="Masukkan No. KK.." name="nokk">
  </div>
  <div class="namakepkel">
    <label for="namakepkel">Nama Kepala Keluarga:</label>
    <input type="text" class="form-control" id="namakepkel" placeholder="Masukkan Nama Kepala Keluarga.." name="namakepkel">
  </div> </br>
  <div class="jumlah">
    <label for="jumlah">Jumlah Anggota Keluarga:</label>
    <input type="number" class="form-control" id="jumlah" placeholder="Masukkan Jumlah Anggota.." name="jumlah">
  </div> </br>
  <div class="kelurahan">
    <label for="lurah">Kelurahan:</label>
    <input type="text" class="form-control" id="kelurahan" placeholder="Masukkan Kelurahan.." name="kelurahan">
  </div> </br>
  <div class="rt">
    <label for="rt">RT:</label>
    <input type="number" class="form-control" id="rt" placeholder="Masukkan RT.." name="rt">
  </div> </br>
  <div class="kecamatan">
    <label for="camat">Kecamatan:</label>
    <input type="text" class="form-control" id="kecamatan" placeholder="Masukkan Kecamatan.." name="kecamatan">
  </div> </br>

  <button type="submit" class="btn btn-default">Simpan Data</button>
</form>
<div class="row content">
    <div class="col-md-4">
</div>
      </nav>
