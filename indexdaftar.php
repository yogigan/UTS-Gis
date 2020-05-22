<html>
<head>
	<style>
		body
		}
	</style>
	<title>Daftar - Admin</title>
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
	include "koneksi.php";
	if(isset($_POST['daftar'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

// Insert user data into table
	$result = mysqli_query($conn, "INSERT INTO user(username,password)
	VALUES('$username','$password')");
	if($result){
	echo"<script>
	alert('Pendaftaran Berhasil, Silahkan Login');
	window.location='indexlogin.php';</script>";
		}
	}
?>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<div class="login">
		<center><h2><font font size="5">Halaman Daftar</font></h2></center>	
		<br>
		<form action="" method="post" onSubmit="return validasi()">
			<div>
				<label>Username:</label>
				<input type="text" name="username" id="username" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" />
			</div>
			<div>Sudah Memiliki Akun?<a href="indexlogin.php"> Login</div>			
			<div>
				<br>
				<input type="submit" name="daftar" value="Daftar" class="btn btn-primary btn-l text js-scroll-trigger">
			</div>
			
		</form>
	</div>
</body>
 
<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username Atau Password Tidak Boleh Kosong !');
			return false;
		}
	}
 
</script>
</html>