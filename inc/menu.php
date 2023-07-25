<?php
//Ketikkan Source Code 1 menu.php disini
function menu($sessi){
	switch($sessi){
		case 'admin': {
//Batas Akhir Pengetikkan Source Code 1 menu.php			
?>
<div class=" well sidebar-nav" >
  <ul class="nav nav-list ">
	<li class="nav-header">Menu</li>
	<li>
		<a href="index.php?mod=login&pg=welcome" title="Halaman Depan">
		<i class='icon-home'></i> Home</a>
	</li>
	<li class="nav-header">Wilayah</li>
	<li>
		<a href="index.php?mod=provinsi&pg=provinsi_view"> 
		<i class='icon-play'></i> Provinsi</a>
	</li>
	<li>
		<a href="index.php?mod=kab&pg=kab_view"> 
		<i class='icon-folder-close'></i> Kota / Kabupaten</a>
	</li>
	<li>
	<li class="nav-header">Lokasi</li>
	<li>			
		<a href="index.php?mod=universitas&pg=universitas_view"> 
		<i class='icon-home'></i> Universitas</a>
	</li>
	<li>	
		<a href="index.php?mod=institut&pg=institut_view"> 
		<i class='icon-home'></i> Institut</a>
	</li>
	<li>	
		<a href="index.php?mod=sekolahtinggi&pg=sekolahtinggi_view"> 
		<i class='icon-home'></i> Sekolah Tinggi</a>
	</li>
	<li>	
		<a href="index.php?mod=politeknik&pg=politeknik_view"> 
		<i class='icon-home'></i> Politeknik</a>
	</li>
	<li>	
		<a href="index.php?mod=akademi&pg=akademi_view"> 
		<i class='icon-home'></i> Akademi</a>
	</li>
	<li>	
		<a href="index.php?mod=kedinasan&pg=kedinasan_view"> 
		<i class='icon-home'></i> Kedinasan</a>
	</li>				
	<li class="nav-header">System</li>
	<li>
		<a href="index.php?mod=admin&pg=admin_view">
		<i class='icon-user'></i> Admin</a>
	</li>	
  </ul>
</div>
</div>
<!-- Ketikkan Source Code 2 menu.php disini -->
<?php		
		}
		break;

		default:
	{?>
	<div class="  sidebar-nav" >
          
<?php
    include ('peta/depan.php');
?>
<!--Batas Akhir Pengetikkan Source Code 2 menu.php -->         
</div>
</div>
<?php
} //end of case no login;
} //end of switch
} //end of function
