<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/bootstrap.min.css">
  <script src="assets/jquery.min.js"></script>
  <script src="assets/bootstrap.min.js"></script>
  <style>
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    footer{
    width: 100%;
    height: 50px;
    padding-left: 10px;
    line-height: 50px;
    background: #333;
    color: #fff;
    }
  textarea {
    width:600px;
    height:150px;
    padding:10px;
    font-family:Arial;
    font-size:10px;
  }
  input[type=text]{
    width:100%;
    padding:6px 0px;
    margin: 10px 0;
  } 
  .button {
    width: auto;
    padding: 5px 20px;
       background: #121212;
    color: #fff;
  }
  .pertama{
  color: #fff;
  }

  </style>
</head>
<body>
  <div class="table-responsive">
  <table class="table table-bordered table-hover">
  <thead>
  <tr bgcolor="#212529">
  <td class="pertama">No</td>
  <td class="pertama">NSS</td>
  <td class="pertama">NPSN</td> 
  <td class="pertama">Nama</td>
  <td class="pertama">Status</td>
  <td class="pertama">Alamat</td>
  <td class="pertama">Kecamatan</td>
  <td class="pertama">Latitude</td>
  <td class="pertama">Longitude</td>
  </tr>
  </thead>

<tbody>

<?php 
  include "koneksi.php";
  $no=0;
  $mysql = mysqli_query($conn, "SELECT * FROM pekalongan");
  while($hasil=mysqli_fetch_array($mysql)){
  $no++;
  echo "<body>";
  echo "<tr>";
  echo "<td>",$no."</td>";
  echo "<td>",$hasil['nss']."</td>"; 
  echo "<td>",$hasil['npsn']."</td>";
  echo "<td>",$hasil['nama']."</td>"; 
  echo "<td>",$hasil['status']."</td>";
  echo "<td>",$hasil['alamat']."</td>";
  echo "<td>",$hasil['kec']."</td>";
  echo "<td>",$hasil['lat']."</td>";
  echo "<td>",$hasil['lng']."</td></tr>";
  }
?><table>
    <br>
    <table>
  <td><h class="text-muted">Sumber Data : https://aljundiesalama.wordpress.com/lembaga-pendidikan/sma-ma-smk-kota-pekalongan/</h></td></table>

</body>
</html>