<?php 
include "koneksi.php";
	$kec = $_GET['kec'];
	$kab = $_GET['kab'];
	$prov = $_GET['prov'];
	$sma_ma = $_GET['sma_ma'];
	$smk = $_GET['smk'];
	$jumlah = $_GET['jumlah'];

$query=mysqli_query($conn,"INSERT INTO siswa(kec,kab,prov,sma_ma,smk,jumlah) VALUES('$kec','$kab','$prov','$sma_ma','$smk','$jumlah')");
if($query){
	echo"<script>
	alert('Data Berhasil Ditambah');
	window.location='indexadmin.php#data2';</script>";
}
	
 ?>