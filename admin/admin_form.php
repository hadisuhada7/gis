<?php
//Ketikkan Source Code 1 admin_form.php disini
include ('inc/config.php');
$aksi = null;
if(isset($_GET['id'])) {
	$aksi = "Edit";
	$id = $_GET['id'];
	//baris dibawah ini disesuaikan dengan nama tabel
	//dan id tabelnya
	$sql = "select * from admin where idadmin='$id' ";
	$result = mysql_query($sql) or die(mysql_error());
	$baris = mysql_fetch_object($result);
} else {
	$aksi = "Tambah";
}
//Batas Akhir Pengetikkan Source Code 1 admin_form.php
?>
<form class="form-horizontal" method="POST" id="form1" action="admin/admin_action.php">
<legend><?php echo $aksi?> Admin</legend>
<input type='hidden' name='id' value="<?php echo $id?>">
<div class="control-group">
	<label class="control-label" for="username">Username</label>
    <div class="controls">
         <input type="text" name='username' class="required" 
		  value="<?php echo $baris->username;?>"> 
    </div>
</div>
<div class="control-group">
    <label class="control-label" for="password">Password</label>
    <div class="controls">
         <input type="password" name='password' class="required" minlength="5">    
    </div>
</div>
<div class="control-group">
<div class="controls">
    <button type="submit" class="btn btn-success" name='aksi' value=<?php echo $aksi?> ><?php echo $aksi?></button>
    <a href="index.php?mod=admin&pg=admin_view" class="btn btn-success">Batal</a>
    </div>
</div>
</form>