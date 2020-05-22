<html>
<head>
	<style>
		body
		}
	</style>
	<title>Login - Admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="assets/jquery.min.js"></script>
  <script src="assets/bootstrap.min.js"></script>
  
</head>
<body>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>	
	<div class="login">
		<h2><center><font size="5">Halaman Login</font></h2></center>
		<br>
		<form action="login.php" method="post" onSubmit="return validasi()">
			<div>
				<label>Username:</label>
				<input type="text" name="username" id="username" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password"  />
			</div>
			<div>Belum Memiliki Akun?<a href="indexdaftar.php"> Daftar</div>			
			<div>
				<br>
				<input type="submit" value="Login" class="btn btn-primary btn-l text js-scroll-trigger">
			</div>
			
		</form>
		</div>
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