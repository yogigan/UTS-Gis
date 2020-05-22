<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="assets/jquery.min.js"></script>
  <script src="assets/bootstrap.min.js"></script>
  <style>
    .navbar {
      margin-bottom: 10;
      border-radius: 0;
    }
    

  input[type=text]{
    width:100%;
    padding:6px 0px;
    margin: 10px 0;
  } 
  .button {
    width: auto;
    padding: 5px 20px;
       background: #0d87c0;
    color: #fff;
  }
  </style>
</head>
<body>
  <div class="tambah2">
<center><h1><font font font size="6">Tambah Data</h1></center>
  <form action="tambah2.php" method="GET">
  <center><table width="200" border="0"></center>

  <tr>
  <td><label>Kecamatan:</label></td>
  <td><td><input style="width: 160px; height: 30px;" type="text" name="kec"/></td>
  </tr>

  <tr>
  <td><label>Kabupaten :</label></td>
  <td><td><input style="width: 170px; height: 30px;" type="text" name="kab"/></td>
  </tr>

  <tr>
  <td><label>Provinsi :</label></td>
  <td><td><input style="width: 140px; height: 30px;" type="text" name="prov"></td>
  </tr>

  <tr>
  <td><label>SMK/MA :</label></td>
  <td><td><input style="width: 50px; height: 30px;" type="text" name="sma_ma"></td>
  </tr>

  <tr>
  <td><label>SMK :</label></td>
  <td><td><input style="width: 50px; height: 30px;" type="text" name="smk"></td>
  </tr>

  <tr>
  <td><label>Jumlah :</label></td>
  <td><td><input style="width: 60px; height: 30px;" type="text" name="jumlah"/></td>
  </tr>

  <tr><td><td>
  <td><?php echo "<a href='indexadmin.php#data2'>"?><input  style="width: 70px; cursor:pointer" class="btn btn-danger btn-l text js-scroll-trigger" value="Batal"></a>  <input class="btn btn-success btn-l text js-scroll-trigger" type="submit" name="submit" value="Tambah"></td></tr>
  </table></form><br><br>
</div>
</body>
</html>