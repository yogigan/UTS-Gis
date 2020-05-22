<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($conn,"select * from user where username='$username' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['status'] = 'login';
	echo"<script>
	alert('Login Berhasil');
	window.location='indexadmin.php';</script>";
}
    else{
	echo"<script>
	alert('Username dan Password Tidak Sesuai!');
	window.location='indexlogin.php';</script>";
}
?>