<?php 
//Ketikkan Source Code 1 logout.php disini
session_start();
session_destroy();
header("location:../index.php");
//Batas Akhir Pengetikkan Source Code 1 logout.php
?>