<?php
//Ketikkan Source Code 1 cp_action.php disini
require_once ('../inc/config.php');

$username=$_POST['username'];
$password = md5(trim($_POST['password']));
$sql = "update admin set password='$password' where
username='$username'";
$result = mysql_query($sql) or die(mysql_error());
//Batas Akhir Pengetikkan Source Code 1 cp_action.php

//Ketikkan Source Code 2 cp_action.php disini
//check if query successful
if ($result) {
	header('location:../index.php?
	mod=login&pg=cp_form&status=0');
} else {
	header('location:../index.php?
	mod=login&pg=cp_form&status=1');
}
//Batas Akhir Pengetikkan Source Code 2 cp_action.php
?>
