<?php 
header ("Content-type: application/javascript");
include "../koneksi.php";
$sql="select * from pekalongan where lng>0";
$hasil=mysqli_query($conn,$sql);
?>

var json_SMA_SMK_DAN_MA_4 = {
"type": "FeatureCollection",
"name": "SMA_SMK_DAN_MA_4",
"crs": { "type": "name", "properties": { "name": "urn:ogc:def:crs:OGC:1.3:CRS84" } },
"features": [
<?php
while($data=mysqli_fetch_array($hasil)) {

	$nss=$data['nss'];
	$npsn=$data['npsn'];
	$nama=$data['nama'];
	$status=$data['status'];
	$alamat=$data['alamat'];
	$kec=$data['kec'];
	$lat=$data['lat'];
	$lng=$data['lng'];
?>


{ "type": "Feature", "properties": { "NSS": <?php echo $nss; ?>, "NPSN": <?php echo $npsn; ?>, "Nama": "<?php echo $nama; ?>", "Status": "<?php echo $status; ?>", "Alamat": "<?php echo $alamat; ?>", "Kecamatan": "<?php echo $kec; ?>" }, "geometry": { "type": "Point", "coordinates": [ <?php echo $lng; ?>, <?php echo $lat; ?> ] } },
<?php
}
?>
]
}
