<!DOCTYPE html>
<html lang="en">
<head>
  <title>DP3AKB | Buat Akun</title>
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

  <form action="prosesregispelapor.php" method="post">
    <div class="form-group">
      <label for="nik">NIK:</label>
      <input type="number" class="form-control" id="NIK" placeholder="Masukkan NIK.." name="nik">
    </div>
    <div class="form-group">
      <label for="nama">Nama:</label>
      <input type="text" class="form-control" id="Nama" placeholder="Masukkan Nama.." name="nama">
    </div>
    <div class="form-group">
      <label for="jeniskelamin">Jenis Kelamin:</label>
      <select name="jeniskelamin">
        <option value=" ">--pilih--</option>
        <option value="Laki-Laki">Laki-Laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
    </div>
    <div class="form-group">
      <label for="tempatLahir">Tempat Lahir:</label>
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
      <label for="alamat">Alamat:</label>
      <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat.." name="alamat">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Password.." name="pwd"> </br>
      <button type="submit" class="btn btn-default">Buat Akun</button>
    </form><br></br>

</div>
