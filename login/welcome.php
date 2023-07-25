<?php
//Ketikkan Source Code 1 welcome.php disini
$username = $_SESSION['username'];
?>
<h4>Halaman
<?php
echo $username;
?>
</h4>
<!--admin-->
<?php
	if(!empty($username)){
//Batas Akhir Pengetikkan Source Code 1 welcome.php		
?>
<div>
<ul>
	<li class="span2 ">
	<div class="thumbnail">
	<img src="assets/img/universitas.jpg" alt="">
		<div class="caption">
			<p style="text-align: center">
			<a href="index.php?mod=universitas&pg=universitas_view" 
			class="btn btn-primary btn-small">Universitas</a>
			</p>
		</div>
	</div>
	</li>
	
	<li class="span2 ">
	<div class="thumbnail">
	<img src="assets/img/institut.jpg" alt="">
		<div class="caption">
			<p style="text-align: center">
			<a href="index.php?mod=institut&pg=institut_view" 
			class="btn btn-primary btn-small">Institut</a>
			</p>
		</div>
	</div>
	</li>
	
	<li class="span2 ">
	<div class="thumbnail">
	<img src="assets/img/sekolah-tinggi.jpg" alt="">
		<div class="caption">
			<p style="text-align: center">
			<a href="index.php?mod=sekolahtinggi&pg=sekolahtinggi_view" 
			class="btn btn-primary btn-small">Sekolah Tinggi</a>
			</p>
		</div>
	</div>
	</li>

	<li class="span2 ">
	<div class="thumbnail">
	<img src="assets/img/politeknik.jpg" alt="">
		<div class="caption">
			<p style="text-align: center">
			<a href="index.php?mod=politeknik&pg=politeknik_view" 
			class="btn btn-primary btn-small">Politeknik</a>
			</p>
		</div>
	</div>
	</li>

	<li class="span2 ">
	<div class="thumbnail">
	<img src="assets/img/akademi.jpg" alt="">
		<div class="caption">
			<p style="text-align: center">
			<a href="index.php?mod=akademi&pg=akademi_view" 
			class="btn btn-primary btn-small">Akademi</a>
			</p>
		</div>
	</div>
	</li>

	<li class="span2 ">
	<div class="thumbnail">
	<img src="assets/img/kedinasan.jpg" alt="">
		<div class="caption">
			<p style="text-align: center">
			<a href="index.php?mod=kedinasan&pg=kedinasan_view" 
			class="btn btn-primary btn-small">Kedinasan</a>
			</p>
		</div>
	</div>
	</li>
</ul>
</div>
<?php } 
?>