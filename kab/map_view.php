<?php
 ?>
<!DOCTYPE html>
<html> 
<head> 
<meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
<style type="text/css">
#map img { 
  max-width: none;
}

#map label { 
  width: auto; display:inline; 
} 
</style>
</head> 
<body>
<h2 id="headings"> Kabupaten</h2>
<a href='index.php?mod=kab&pg=Kab_view'>
<i class="icon-list"></i>List View</a>
<div id="map" style="width: 800px; height: 400px;"></div>
<script type="text/javascript">     
<?php
//Ketikkan Source Code 1 map_view.php disini
 $id=$_GET['id'];
 include ('inc/config.php');
 $sql_lokasi="select nama, lat, lng from kabupaten where idkabupaten='$id'";
 $result=query($sql_lokasi);
 $titik=mysql_fetch_object($result);
//Batas Akhir Pengetikkan Source Code 1 map_view.php
?>
//<!-- Ketikkan Source Code 2 map_view.php disini -->
var latlng = new google.maps.LatLng(<?php echo $titik->lat?>,<?php echo $titik->lng?>);
var map = new google.maps.Map(document.getElementById('map'), {
	zoom: 12,
	scaleControl: true,
	center:latlng,
	mapTypeId: google.maps.MapTypeId.ROADMAP
});
var marker;
marker = new google.maps.Marker({
	position:latlng,
	map: map
});

//<!--Batas Akhir Pengetikkan Source Code 2 map_view.php--> 
</script>
</body>
</html>