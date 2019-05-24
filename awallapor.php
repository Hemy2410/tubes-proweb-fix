<!DOCTYPE html>
<html lang="en">
<head>
  <title>DP3AKB | Pelaporan</title>
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
      <li class="active"><a href="awallapor.php">Laporan Kekerasan</a></li>
          <li><a href="logout.php">Log Out</a></li>
    </div>

    <div class="row content">
        <div class="col-md-4">


      <form action="inputlapor.php">
      <form class="form-horizontal">
        <div class="container">

        <div class="form-group">
          <label for="nip">Nama:</label>
          <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama.." name="nama">
        </div>

        <div class="col-xs">
          <label for="nama">Alamat:</label>
          <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat.." name="alamat">
        </div>

        <div class="form-group">
          <label for="text">Jenis Kelamin: </label>
          <input type="text" class="form-control" id="jk" placeholder="Jenis Kelamin" name="jk">
        </div>

        <div class="form-group">
          <label for="nomor">Nomor Telefon: </label>
          <input type="text" class="form-control" id="nomor" placeholder="Masukkan Nomor Telefon" name="nomor">
        </div>

        <div class="form-group">
          <label for="nomor">No KTP: </label>
          <input type="text" class="form-control" id="ktp" placeholder="Masukkan No. KTP" name="ktp">
        </div>

        <div class="form-group">
          <label for="deskripsi">Deskripsi: </label></br>
          <input type=text class="form-control" id="deskripsi" placeholder="Deskripsi Kejadian.." name="deskripsi">
        </div>
        <button type="submit" class="btn btn-default">Simpan Data</button>
      </form>
      <div class="row content">
          <div class="col-md-4">
      </div>
            </nav>
            <footer class="page-footer">
  <div class="footer-copyright text-center py-3">© 2019 Dinas Pemberdayaan Perempuan, Perlindungan Anak, dan Keluarga Berencana
  </div>




</body>
</html>
