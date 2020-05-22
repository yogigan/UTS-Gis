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
  $mysql = mysqli_query($conn, "SELECT id,kec,kab,prov,smk,sma_ma,jumlah FROM siswa WHERE id='$id'")or die(mysql_error());
  $no=0;
  while($hasil=mysqli_fetch_array($mysql)){
	$no++;
?>

  <div class="edit2">
  <center><h1><font font size="6">Edit Data</font></h1></center>
  <form action="update2.php" method="POST">
  <center><table width="200" border="0"></center>
  <tr>
  <td><td><input type="hidden" name="id" value="<?php echo $hasil["id"] ?>" /></td>
  </tr>

  <tr>
  <td><label>Kecamatan:</label></td>
  <td><td><input style="width: 160px; height: 30px;" type="text" name="kec" value="<?php echo $hasil["kec"] ?>"/></td>
  </tr>

  <tr>
  <td><label>Kabupaten :</label></td>
  <td><td><input style="width: 170px; height: 30px;" type="text" name="kab" value="<?php echo $hasil["kab"] ?>"/></td>
  </tr>

  <tr>
  <td><label>Provinsi :</label></td>
  <td><td><input style="width: 140px; height: 30px;" type="text" name="prov" value="<?php echo $hasil["prov"] ?>"/></td>
  </tr>

  <tr>
  <td><label>SMA/MA :</label></td>
  <td><td><input style="width: 50px; height: 30px;" type="text" name="sma_ma" value="<?php echo $hasil["sma_ma"] ?>"/></td>
  </tr>

  <tr>
  <td><label>SMK :</label></td>
  <td><td><input style="width: 50px; height: 30px;" type="text" name="smk" value="<?php echo $hasil["smk"] ?>"/></td>
  </tr>

  <tr>
  <td><label>Jumlah :</label></td>
  <td><td><input style="width: 60px; height: 30px;" type="text" name="jumlah" value="<?php echo $hasil["jumlah"] ?>"></td>
  </tr>

  <tr><td><td>
  <td><?php echo "<a href='indexadmin.php#data2'>"?><input  style="width: 70px; cursor:pointer" class="btn btn-danger btn-l text js-scroll-trigger" value="Batal"></a>  <input class="btn btn-success btn-l text js-scroll-trigger" type="submit" name="submit" value="Edit"></td></tr>
  </table></form><br><br>
</div>
  <?php } ?>
</div>
</body>
</html>