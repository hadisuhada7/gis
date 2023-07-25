<?php
 ?>
<div class="span3 offset2">
<form method="POST" id="form1" action="login/cp_action.php">
	<fieldset>
		<legend>Ganti Password</legend>
		<input type='hidden' name='username' 
		value='<?php echo $_SESSION['username']?>'>
		
		<div class="clearfix">
		<label for="input">Password </label>
		<div class="input">
			<input class="xlarge required" id="xlInput" 
			name="password" size="30" type="password">
		</div>
		</div>
				
		<div class="span2 offset1">
			<input type="submit" name="aksi" 
			class="btn btn-primary" value='Ubah'>
		</div>
	</fieldset>
</form>
<script language="javaScript" type="text/javascript" xml:space="preserve">
//You should create the validator only after the definition of the HTML form
var f  = new Validator("form1");
	f.EnableOnPageErrorDisplaySingleBox();
	f.EnableMsgsTogether();
	f.addValidation("password","req","Password Tidak Boleh Kosong !!!");
</script>
<div id="form1_errorloc" class="text-error"></div>
<?php
//Ketikkan Source Code 1 cp_form.php disini 
// KODE UNTUK MENAMPILKAN PESAN STATUS
if (isset($_GET['status'])) {
	if ($_GET['status'] == 0) {
		echo "Ganti Password Berhasil";
	} else {
		echo "Ganti Password Gagal";
	}
}
//Batas Akhir Pengetikkan Source Code 1 cp_form.php
?>
</div>