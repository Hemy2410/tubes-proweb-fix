<!DOCTYPE html>
<html lang="en">
<head>
  <title>DP3AKB | Input Kepegawaian</title>
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
                <li class="active"><a href="#">Input Data</a></li>
                <li><a href="kepegawaianlihatdata.php">Lihat Data</a></li>
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

<form action="inputpegawai.php">
<form class="form-horizontal">
  <div class="form-group">
    <label for="nip">NIP:</label>
    <input type="text" class="form-control" id="NIP" placeholder="Masukkan NIP.." name="nip">
  </div>
  <div class="col-xs">
    <label for="nama">Nama:</label>
    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama.." name="nama">
  </div>
  <div class="form-group">
    <label for="text">Tempat Lahir:</label>
    <input type="tempatLahir" class="form-control" id="tempatLahir" placeholder="Masukkan Tempat Lahir.." name="tempatLahir">
  </div>
  <div class="form-group">
    <label for="tanggalLahir">Tanggal Lahir:</label>
    <input type="date" class="form-control" id="tanggaltLahir" placeholder="Masukkan Tanggal Lahir.." name="tanggalLahir">
  </div>
  <div class="form-group">
    <label for="nomor">No Telefon:</label>
    <input type="text" class="form-control" id="nomor" placeholder="Masukkan Nomor Telefon.." name="nomor">
  </div>
  <div class="form-group">
    <label for="jk">Jenis Kelamin:</label></br>
    <select name="jk">
      <option value=" ">--pilih--</option>
      <option value="Laki-Laki">Laki-Laki</option>
      <option value="Perempuan">Perempuan</option>
    </select>
  </div>
  <button type="submit" class="btn btn-default">Simpan Data</button>
</form>
<div class="row content">
    <div class="col-md-4">
</div>
      </nav>
