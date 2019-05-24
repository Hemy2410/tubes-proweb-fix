<!DOCTYPE html>
<html lang="en">
<head>
  <title>DP3AKB | Login Pelapor</title>
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

  <form action="prosesloginpelapor.php" method="post">
    <div class="form-group">
      <label for="nik">NIK:</label>
      <input type="number" class="form-control" id="NIK" placeholder="NIK.." name="nik">
    </div>


    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Password.." name="pwd"> </br>
      <button type="submit" class="btn btn-default">Login</button>
    </form><br></br>

<label>Tidak punya akun? <a href="regispelapor.php">Buat akun</a></label>
</div>
