<!DOCTYPE html>
<html lang="en">
<head>
  <title>DP3AKB | Data KB</title>
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
                <li><a href="kepengurusan.php">Input Data</a></li>
                <li><a href="kepengurusanlihatdata.php">Lihat Data</a></li>
              </ul>
            </li>

            <li><a href="informasikorban.php">Informasi Korban & Kekerasan</a></li>

            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Keluarga Berencana <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="kb.php">Input Data</a></li>
                <li class="active"><a href="kblihatdata.php">Lihat Data</a></li>

              </ul>
            </li>
              <li><a href="logout.php">Log Out</a></li>
          </ul>
        </div>


        <div class="row content">
            <div class="col-md-4">
        <div class="container">

          <form class="example" action="kbcari.php" method="get">
              <input type="text" placeholder="Cari.." name="cari">
          	<button type="submit" class="btn btn-primary btn-sm" value="cari">Cari..</button>
          </form>
        </div>
        <div class="row content">
            <div class="col-md-4">


<div class="container">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>NO</th>
        <th>No. KK</th>
        <th>Nama Kepala Keluarga</th>
        <th>Jumlah Anggota Keluarga</th>
        <th>Kelurahan</th>
        <th>RT</th>
        <th>Kecamatan</th>
        <th> Opsi </th>
      </tr>
    </thead>

  <?php
  include 'koneksi.php';
  $no = 1;
  $data = mysqli_query($connect,"select * from keluargaberencana");
  while($d = mysqli_fetch_array($data)){
    ?>
  </tbody>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $d['nokk']; ?></td>
      <td><?php echo $d['namakepkel']; ?></td>
      <td><?php echo $d['jumlah']; ?></td>
      <td><?php echo $d['kelurahan']; ?></td>
      <td><?php echo $d['rt']; ?></td>
      <td><?php echo $d['kecamatan']; ?></td>
      <td>
        <a href="kbeditdata.php?id=<?php echo $d['id']; ?>">EDIT</a>
        <a href="kbhapusdata.php?id=<?php echo $d['id']; ?>">HAPUS</a>
      </td>
    </tr>
  </tbody>
    <?php
  }
  ?>
</table>
</body>
</html>
