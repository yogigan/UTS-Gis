<?php 
include "koneksi.php";
	$id = $_POST['id'];
	$kec = $_POST['kec'];
	$kab = $_POST['kab'];
	$prov = $_POST['prov'];
	$sma_ma = $_POST['sma_ma'];
	$smk = $_POST['smk'];
	$jumlah = $_POST['jumlah'];

$query=mysqli_query($conn,"UPDATE siswa SET kec='$kec', kab='$kab', prov='$prov', sma_ma='$sma_ma', smk='$smk', jumlah='$jumlah' WHERE id='$id'");
	if($query){
	echo"<script>
	alert('Data Berhasil Diubah');
	window.location='indexadmin.php#data2';</script>";
	}
 ?>