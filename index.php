<?php
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>..:: Sistem Informasi - Persebaran Perguruan Tinggi di Indonesia ::..</title>
<link rel="shortcut icon" href="images/icon.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<!-- Le styles -->
<link href="assets/css/cerulean.min.css" rel="stylesheet">
<style type="text/css">	
	body {
		padding-top: 60px;
		padding-bottom: 40px;
		background-image: url("images/graduation.jpg");
	    background-position: center;
	    background-repeat: no-repeat;
	    background-size: cover;
		}
	.sidebar-nav {
		padding: 9px 0;
		}		
	label.error {			
		color: red;	
		}
</style>
<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="assets/js/jquery.validate.js"></script>
<script type="text/javascript" src="assets/js/messages_id.js"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyA4YQd5bxiVWNerZJI14PHEIrYeLJmUK-I"
		type="text/javascript"></script>
<script>$(document).ready(function() {
		$("#form1").validate();
		});
</script>
</head>
<body>
<div class="navbar navbar-fixed-top">
<div class="navbar-inner">
<div class="container-fluid">
<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> 
	<span class="icon-bar"></span> 
	<span class="icon-bar"></span> 
	<span class="icon-bar"></span></a>
<a class="brand" href="#">Sistem Informasi Geografis - Persebaran Perguruan Tinggi di Indonesia</a>
<div class="nav-collapse">
	<ul class="nav"></ul>
	<ul class="nav pull-right">
		<li><a href="#"></a></li>
		<li class="divider-vertical"></li>
		<li class="dropdown">
		<!-- ...KETIKKAN SOURCE CODE 1 DISINI ... -->
		<?php
			if(isset($_SESSION['username'])){
		?>
		<!-- ...KETIKKAN SOURCE CODE 1 DISINI ... -->
		<a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
		<i class="icon-user icon-white"></i>Setting 
		<b class="caret"></b></a>
		<ul class="dropdown-menu">
			<li>
				<a href="index.php?mod=login&pg=cp_form">
				<i class="icon-lock"></i>Change Password</a>
			</li>
			<li class="divider"></li>
			<li>
				<a href="login/logout.php">
				<i class="icon-off"></i>Logout</a>
			</li>
		</ul>
		</li>
		<?php	}else {?>
		<li>
			<a href="index.php?mod=login&pg=form_login">
			<i class="icon-user icon-white"></i>Login</a>
		</li>
		<?php	} //end of if?>
		</ul>
</div>
</div><!-- /navbar-inner -->
</div><!-- /navbar -->
</div>
<div class="container-fluid">
<div class="row">
<div class="span3">
<!-- ...KETIKKAN SOURCE CODE 2 DISINI ... -->
<?php	
	include ('inc/config.php');
	include ('inc/menu.php');
	include ('inc/function.php');
	$sessi = $_SESSION['username'];
	menu($sessi);
?>
<!-- ...KETIKKAN SOURCE CODE 2 DISINI ... -->
<div class="span9">
<div>
<?php
	$pg = '';
/*
 * PHP Code untuk mendapatkan halaman view masing masing tabel
 */

if(!isset($_GET['pg'])) {
	if(!empty($_SESSION['username'])) {
		include ('login/welcome.php');
	} else {
		include ('peta/peta.php');
	}
} else {
	$pg = $_GET['pg'];
	$mod = $_GET['mod'];
	include $mod . '/' . $pg . ".php";
}?>
</div><!--/span-->
</div><!--/row-->
</div>
<footer>
<p style="text-align: center">
	<a href='http://www.ikmi.ac.id/'>
	Sistem Informasi Geografis Perguruan Tinggi di Indonesia - Copyright &copy; 
	<?php echo date("Y"); ?></a>
</p>
</footer>
</div><!--/.fluid-container-->
</body>
</html>