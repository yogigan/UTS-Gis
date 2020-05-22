<?php 
include "koneksi.php";
	$id = $_POST['id'];
	$nss = $_POST['nss'];
	$npsn = $_POST['npsn'];
	$nama = $_POST['nama'];
	$status = $_POST['status'];
	$alamat = $_POST['alamat'];
	$kec = $_POST['kec'];
	$lat = $_POST['lat'];
	$lng = $_POST['lng'];

$query=mysqli_query($conn,"UPDATE pekalongan SET nss='$nss', npsn='$npsn', nama='$nama', status='$status', alamat='$alamat', kec='$kec', lat='$lat', lng='$lng' WHERE id='$id'");
	if($query){
	echo"<script>
	alert('Data Berhasil Diubah');
	window.location='indexadmin.php#data1';</script>";
	}
 ?>