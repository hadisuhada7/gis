<?php
?>
<div class="span5 offset1 well">
<form method="POST" id="form1" class="form-horizontal" action="login/login_action.php">
<legend>Login Form</legend>
<div class="control-group">
	<label class="control-label" for="nama">Username</label>
	<div class="controls">
		<input type="text" name='username'>
	</div>
</div>
<div class="control-group">
	<label class="control-label" for="nama">Password</label>
	<div class="controls">
		<input   type="password" name='password'>
	</div>
</div>				
<div class="row">
	<div class="span4 offset2">
	<input type="submit"  name="login" class="btn btn-primary" value='Login'>	
	</div>
</div>			
</form>
<script language="javaScript" type="text/javascript"
	xml:space="preserve">
	//You should create the validator only after the definition of the HTML form
	var f  = new Validator("form1");
	f.EnableOnPageErrorDisplaySingleBox();
	f.EnableMsgsTogether();
	f.addValidation("username","req","Username Tidak Boleh kosong !!!");
	f.addValidation("password","req","Password Tidak Boleh kosong !!!");
</script>
<div id="form1_errorloc" style="color:#ff0000">
<?php
//Ketikkan Source Code 1 form_login.php disini 
	if(isset($_GET['s'])){
		echo "Login Gagal Boss, Coba Sekali Lagi Boss !!!";
	}
//Batas Akhir Pengetikkan Source Code 1 form_login.php
?>
</div>
</div>
	

