<?php
session_start();
include "koneksi.php";
if(isset($_GET['id'])){
$id = $_GET['id'];
$query = mysqli_query($conn, "DELETE FROM pekalongan where id='$id'") or die(mysql_error());
if($query){
	echo"<script>
	alert('Data Berhasil Dihapus');
	window.location='indexadmin.php#data1';</script>";
}}
?>