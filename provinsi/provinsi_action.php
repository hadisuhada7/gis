<?php
//Ketikkan Source Code 1 provinsi_action.php disini 
include ('../inc/config.php');
//data dari provinsi

$nama = $_POST['nama'];
$lat=$_POST['lat'];
$lng=$_POST['lng'];
$aksi = $_POST['aksi'];
$id = $_POST['id'];

//echo $password;
//exit;
$sql = null;
if($aksi == 'Tambah') {
	$sql = "INSERT INTO provinsi(nama,lat,lng)
	VALUES('$nama','$lat','$lng')";
}else if($aksi == 'Edit') {
	$sql = "update provinsi set nama='$nama',
	lat='$lat',lng='$lng' where idprovinsi='$id'";
}
$result = mysql_query($sql) or die(mysql_error());
//check if query successful
if($result) {
	header('location:../index.php?
	mod=provinsi&pg=provinsi_view&level=0');
} else {
	header('location:../index.php?
	mod=provinsi&pg=provinsi_view&level=1');
}
//Batas Akhir Pengetikkan Source Code 1 provinsi_action.php
?>
