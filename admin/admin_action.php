<?php
//Ketikkan Source Code 1 admin_action.php disini
include ('../inc/config.php');
//data dari admin
$username = $_POST['username'];
$password = md5(trim($_POST['password']));
$aksi = $_POST['aksi'];
$id = $_POST['id'];
//echo $password;
//exit;
//Batas Akhir Pengetikkan Source Code 1 admin_action.php

//Ketikkan Source Code 2 admin_action.php disini
$sql = null;
if($aksi == 'Tambah') {
	$sql = "INSERT INTO admin(username,password)
	VALUES('$username', '$password')";
}else if($aksi == 'Edit') {
	$sql = "update admin set username='$username',
	password='$password' where idadmin='$id'";
}
$result = mysql_query($sql) or die(mysql_error());
//Batas Akhir Pengetikkan Source Code 2 admin_action.php

//Ketikkan Source Code 3 admin_action.php disini
//check if query successful
if($result) {
	header('location:../index.php?
	mod=admin&pg=admin_view&level=0');
} else {
	header('location:../index.php?
	mod=admin&pg=admin_view&level=1');
}
//Batas Akhir Pengetikkan Source Code 3 admin_action.php
?>
