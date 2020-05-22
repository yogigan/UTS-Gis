<?php 
include "koneksi.php";
	$nss = $_GET['nss'];
	$npsn = $_GET['npsn'];
	$nama = $_GET['nama'];
	$status = $_GET['status'];
	$alamat = $_GET['alamat'];
	$kec = $_GET['kec'];
	$lat = $_GET['lat'];
	$lng = $_GET['lng'];

$query=mysqli_query($conn,"INSERT INTO pekalongan(nss,npsn,nama,status,alamat,kec,lat,lng) VALUES('$nss','$npsn','$nama','$status','$alamat','$kec', '$lat','$lng')");
if($query){
	echo"<script>
	alert('Data Berhasil Ditambah');
	window.location='indexadmin.php#data1';</script>";
}
	
 ?>