<!-- Ketikkan Source Code 1 akademi_form.php disini -->
<?php
include ('inc/config.php');
$aksi = null;
if(isset($_GET['id'])) {
	$aksi = "Edit";
	$id = $_GET['id'];
	//baris dibawah ini disesuaikan dengan nama tabel dan idtabel
	$sql = "select * from akademi where idakademi='$id'";
	$result = mysql_query($sql) or die (mysql_error());
	$data = mysql_fetch_object($result);
	$idprov = getidprovinsi($data->idkabupaten);

	echo $idprov;
} else {
	$aksi = "Tambah";
}
?>
<style type="text/css">
	#map img {
	max-width: none;
	}
	#map label {
		width: auto;
		display: inline;
	}
	div#map {
		margin: 10px;
		width: 100%;
		height: 500px;
		float: left;
		padding: 10px;
	}
</style>
<script type="text/javascript">
	$(document).ready(function() {
		$("#idprovinsi").change(function() {
			var idprovinsi = $("#idprovinsi").val();
			$.ajax({
				url : "inc/get_kabupaten.php",
				data : "idprovinsi=" + idprovinsi,
				success : function(data) {
					// jika data sukses diambil dari server, tampilkan
					$("#idkabupaten").html(data);
				}
			});
		});
	});
</script>
<div class="span4">
<div id="map"></div>
</div>
<div class='span4'>
	<h2 style="margin-left: 30px"> Form Akademi </h2>
	<form class="form-horizontal" method="POST" id="form1" enctype="multipart/form-data" action="akademi/akademi_action.php">
		<?php $id=$_GET['id'];?>
		<input type='hidden' name='id' value="<?php echo $id?>">

	<div class="control-group">
		<label class="control-label" for="nama">Nama Akademi</label>
		<div class="controls">
			<input type="text" name='nama' value='<?php echo $data->nama?>' class='required'>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="foto">Foto</label>
		<div class="controls">
			<input type="file" name='foto'>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="nama">Jenis</label>
		<div class="controls">
			<select name="jenis">  
				 <option value="">---Silahkan Pilih---</option>  
				 <option <?php if($data->jenis=='Perguruan Tinggi Swasta'){echo "selected";} ?> value='Perguruan Tinggi Swasta'>Perguruan Tinggi Swasta</option>
				 <option <?php if($data->jenis=='Perguruan Tinggi Negeri'){echo "selected";} ?> value='Perguruan Tinggi Negeri'>Perguruan Tinggi Negeri</option>
				 <option <?php if($data->jenis=='Perguruan Tinggi Kedinasan'){echo "selected";} ?> value='Perguruan Tinggi Kedinasan'>Perguruan Tinggi Kedinasan</option>
			</select> 
		</div>
	</div> 

	<div class="control-group">
		<label class="control-label" for="nama">No. Telpon</label>
		<div class="controls">
			<input type="text" name='no_telpon' value='<?php echo $data->no_telpon?>' class='required'>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="nama">Alamat</label>
		<div class="controls">
			<textarea name='alamat'><?php echo $data->alamat;?></textarea>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="nama">Kode Pos</label>
		<div class="controls">
			<input type="text" name='kode_pos' value='<?php echo $data->kode_pos?>' class='required'>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="idprovinsi">Provinsi</label>
		<div class="controls">
			<select id='idprovinsi' name='idprovinsi' class="required">
			<?php combo_provinsi($idprov);?>
			</select>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="idkabupaten">Kabupaten</label>
		<div class="controls">
			<select id='idkabupaten' name='idkabupaten' class="required">
			<?php
			if(isset($_GET['id'])) {
				$hasil = mysql_query("SELECT k.idkabupaten,k.nama,k.lat,k.lng
				from provinsi as p,kabupaten as k
  				where p.idprovinsi=k.idprovinsi
  				and p.idprovinsi='$idprov'");
  
 
				while($k = mysql_fetch_array($hasil)){
   				echo "<option value='$k[2],$k[3]' " . ($k[0] == $data->idkabupaten ? 'selected' : '') . "> " . ucwords($k[1]) ."</option>";
				}

			}?>	
			</select>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label" for="lat"> Latitude </label>
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
			<a href="index.php?mod=akademi&pg=akademi_view" class="btn btn-success">Batal</a>
		</div>
	</div>
	</form>
	<script src="assets/js/lokasi.js"></script>
	<script>
		$('#idkabupaten').change();
	</script>
</div>
<!-- Batas Akhir Pengetikan Source Code 1 akademi_form.php disini -->