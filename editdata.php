<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
 
if($_SESSION['status'] !='login'){
  header("location:indexlogin.php");
}
?>
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
       background: #FFD700;
    color: #00000;
  }
  </style>
</head>
<body>
<?php 
  include "koneksi.php";
  
	$id = $_GET['id'];
  $mysql = mysqli_query($conn, "SELECT id,nama,nss,npsn,nama,status,alamat,kec,lat,lng FROM pekalongan WHERE id='$id'")or die(mysql_error());
  $no=0;
  while($hasil=mysqli_fetch_array($mysql)){
	$no++;
?>

  <div class="edit">
  <center><h1><font font size="6">Edit Data</font></h1></center>
  <form action="update.php" method="POST">
  <center><table width="200" border="0"></center>
  <tr>
  <td><td><input type="hidden" name="id" value="<?php echo $hasil["id"] ?>" /></td>
  </tr>

  <tr>
  <td><label>NSS :</label></td>
  <td><td><input style="width: 150px; height: 30px;" type="text" name="nss" value="<?php echo $hasil["nss"] ?>"/></td>
  </tr>

  <tr>
  <td><label>NPSN :</label></td>
  <td><td><input style="width: 150px; height: 30px;" type="text" name="npsn" value="<?php echo $hasil["npsn"] ?>"/></td>
  </tr>

  <tr>
  <td><label>Nama :</label></td>
  <td><td><input style="width: 170px; height: 30px;" type="text" name="nama" value="<?php echo $hasil["nama"] ?>"/></td>
  </tr>

  <tr>
  <td><label>Status :</label></td>
  <td><td><input style="width: 100px; height: 30px;" type="text" name="status" value="<?php echo $hasil["status"] ?>"/></td>
  </tr>

  <tr>
  <td><label>Alamat :</label></td>
  <td><td><input style="resize: none;width: 220px; height: 30px;" type="text" name="alamat" value="<?php echo $hasil["alamat"] ?>"></td>
  </tr>

  <tr>
  <td><label>Kecamatan:</label></td>
  <td><td><input style="width: 170px; height: 30px;" type="text" name="kec" value="<?php echo $hasil["kec"] ?>"/></td>
  </tr>

  <tr>
  <td><label>Latitude :</label></td>
  <td><td><input style="width: 150px; height: 30px;" type="text" name="lat" value="<?php echo $hasil["lat"] ?>"/></td>
  </tr>

  <tr>
  <td><label>Longitude :</label></td>
  <td><td><input style="width: 150px; height: 30px;" type="text" name="lng" value="<?php echo $hasil["lng"] ?>"/></td>
  </tr>

  <tr><td><td>
  <td><?php echo "<a href='indexadmin.php#data1'>"?><input  style="width: 70px; cursor:pointer" class="btn btn-danger btn-l text js-scroll-trigger" value="Batal"></a>  <input class="btn btn-success btn-l text js-scroll-trigger" type="submit" name="submit" value="Edit"></td></tr>
  </table></form><br><br>
</div>
  <?php } ?>
  </div>
</body>
</html>