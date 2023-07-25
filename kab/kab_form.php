<?php
//Ketikkan Source Code 1 kab_form.php disini
include ('inc/config.php');
$aksi = null;
if(isset($_GET['id'])) {
	$aksi = "Edit";
	$id = $_GET['id'];
	//baris dibawah ini disesuaikan dengan nama tabel dan idtabel
	$sql = "select * from kabupaten where idkabupaten='$id'";
	$result = mysql_query($sql) or die (mysql_error());
	$data = mysql_fetch_object($result);
} else {
	$aksi = "Tambah";
}
//Batas Akhir Pengetikkan Source Code 1 kab_form.php
?>

<style type="text/css">#map img {
	max-width: none;
	}
	#map label {
		width: auto;
		display: inline;
	}
	div#map {
		margin: 10px;
		width: 100%;
		height: 300px;
		float: left;
		padding: 10px;
	}
</style>
<div class="span8">
<div id="map"></div>
</div>
<!--kolom kiri-->
<!--Ketikkan Source Code 2 kab_form.php disini-->		
<div class='span8'>
	<form class="form-horizontal" method="POST" id="form1" action="kab/kab_action.php">
	<legend>Data Kabupaten</legend><?php $id = $_GET['id'];?>
	<input type='hidden' name='id' value="<?php echo $id?>">
	<div class="control-group">
	<label class="control-label" for="nama">Provinsi</label>
	<div class="controls">
		<select name='idprovinsi' id='idprovinsi' class="required"><?php combo_provinsi2(null);?></select>
	</div>
</div>
<div class="control-group">
	<label class="control-label" for="nama">Nama</label>
	<div class="controls">
	<input type="text" name='nama' value='<?php echo $data->nama?>' class='required'>
	</div>
</div>
<legend>Lokasi Peta</legend>
<div class="control-group">
<label class="control-label" for="lat"> Latitude</label>
<div class="controls">
<input type="text" name='lat' id='lat' value='<?php echo $data->lat?>' class='required'>
</div>
</div>

<div class="control-group">
<label class="control-label" for="lng">Longitude</label>
<div class="controls">
<input type="text" name='lng' id='lng' value='<?php echo $data->lng?>' class='required'>
</div>
</div>

<div class="control-group">
<div class="controls">
<button type="submit" class="btn btn-success" name='aksi' value='<?php echo $aksi?>'><?php echo $aksi?></button>
<a href="index.php?mod=kab&pg=kab_view" class="btn btn-success">Batal</a>
</div>
</div>
</form>

<!--Batas Akhir Pengetikkan Source Code 2 kab_form.php-->

<!--Ketikkan Source Code 3 kab_form.php disini-->
<script type="text/javascript">
function updateMarkerPosition (latLng) {
	document.getElementById('lat').value = [latLng.lat()];
	document.getElementById('lng').value = [latLng.lng()];
}
$('#idprovinsi').change(function() {
	var tengah = $('#idprovinsi').val();
	var latlong=tengah.split(",");
	console.log(latlong);

	var myOptions = {
		zoom: 8,
		scaleControl: true,
		center: new google.maps.LatLng(latlong[0],latlong[1]),
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	var map = new google.maps.Map(document.getElementById('map'),myOptions);

		var marker1 = new google.maps.Marker({
		position : new google.maps.LatLng(latlong[0],latlong[1]),
		title : 'provinsi',
		map : map,
		icon: 'assets/ico/blue.png',
		draggable : true
	});
	//update marker position(latlng)
	google.maps.event.addListener(marker1, 'drag', function() {
		updateMarkerPosition(marker1.getPosition());
	});
});
</script>
</div>
<!--Batas Akhir Pengetikkan Source Code 3 kab_form.php-->