<?php
//Ketikkan Source Code 1 kab_action.php disini
include ('../inc/config.php');
include ('../inc/function.php');
// data dari kabupaten

$nama = $_POST['nama'];
$lat=$_POST['lat'];
$lng=$_POST['lng'];
$idprovinsi=$_POST['idprovinsi'];
$latlng= explode(",", $idprovinsi);
$idprovinsi=get_idprovinsi($latlng[0],$latlng[1]);

$aksi = $_POST['aksi'];
$id = $_POST['id'];
// echo password
// exit;
$sql = null;
if($aksi == 'Tambah') {
$sql = "INSERT INTO kabupaten(nama,idprovinsi,lat,lng)
		VALUES('$nama','$idprovinsi','$lat','$lng')";
} else if($aksi == 'Edit') {
$sql = "update kabupaten set nama='$nama' ,
		idprovinsi='$idprovinsi',lat='$lat',lng='$lng'
		where idkabupaten='$id'";
}
$result = mysql_query($sql) or die(mysql_error());
//check if query succesful
if($result) {
	header('location:../index.php?mod=kab&pg=kab_view&level=0');
} else {
	header('location:../index.php?mod=kab&pg=kab_view&level=1');
}
//Batas Akhir Pengetikkan Source Code 1 kab_action.php
?>
