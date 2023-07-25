<?php
 ?>
<!DOCTYPE html>
<html> 
<head> 
<meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
<script src="http://maps.google.com/maps/api/js?key=AIzaSyA4YQd5bxiVWNerZJI14PHEIrYeLJmUK-I" 
type="text/javascript"></script>
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
<h2 id="headings"> Politeknik </h2>
<a href='index.php?mod=politeknik&pg=politeknik_view'>
<i class="icon-list"></i>List View</a>
<div id="map" style="width: 800px; height: 400px;"></div>
<!-- Ketikkan Source Code 1 peta.php disini -->
<script type="text/javascript">
var locations = [
<?php
$id=$_GET['id'];
 include ('inc/config.php');
 $sql_lokasi="select * from politeknik where idpoliteknik='$id'";
 $result=query($sql_lokasi);
 while($data=mysql_fetch_object($result)) {
 	$content="'<div id=\"content\">'+
 	'<div id=\"siteNotice\">'+
 	'</div>'+
 	'<h4 id=\"firstHeading\" class=\"firstHeading\">$data->nama</h4>'+
 	'<div id=\"bodyContent\"><p>'+
 	'<img src=\"politeknik/img/$data->foto\" ' +
 	'<ul>'+
 	'<li> Alamat : $data->alamat' +
 	'</li></ul></div></div>'"; ?>
 	['<?php echo $data->nama;?>',
 	<?php echo $data->lat;?>,
 	<?php echo $data->lng;?>],
 <?php
 }
 ?>
	];
	var latLng = new google.maps.LatLng(locations[0][1], locations[0][2]);
	var map = new google.maps.Map(document.getElementById('map'), {
	zoom: 12,
	center:latLng,
	mapTypeId: google.maps.MapTypeId.ROADMAP
	});
	var infowindow = new google.maps.InfoWindow();
	var marker, i;
	var content=<?php echo $content?>;

	for (i = 0; i < locations.length; i++) {
		marker = new google.maps.Marker({
		position: latLng,
		map: map,
		icon:'assets/ico/politeknik.jpg'
		});

		google.maps.event.addListener(marker, 'click',
			(function(marker, i) {
				return function() {
					infowindow.setContent(content);
					infowindow.open(map, marker);
				}
			})(marker, i));
		}	
</script>
<!-- Batas Akhir Pengetikkan Source Code 1 peta.php -->  
</body>
</html>