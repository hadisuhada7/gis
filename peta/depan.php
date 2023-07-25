<?php
 ?>
 <div class='well'>
 <script type="text/javascript">$(document).ready(function() {
		$("#idprovinsi").change(function() {
			var idprovinsi = $("#idprovinsi").val();
			$.ajax({
				url : "inc/get_kabupaten.php",
				data : "idprovinsi=" + idprovinsi,
				success : function(data) {
					// jika data sukses diambil dari server, tampilkan di <select id=kota>
					$("#idkabupaten").html(data);
				}
			});
		});
	});
</script>
<form method='POST' action="index.php">
<div class="control-group">
<label class="control-label" for="idprovinsi">Provinsi</label>
	<div class="controls">
	<select id='idprovinsi' name='idprovinsi' class="required " >
	<!-- Ketikkan Source Code 1 depan.php disini -->
	<?php
		combo_provinsi(null);
	?>
	<!--Batas Akhir Pengetikkan Source Code 1 depan.php -->
	</select>
	</div>
</div>
	<div class="controls">
	<select id='idkabupaten' name='idkabupaten' class="required " ></select>
	</div>
<div class="control-group">
	<label class="checkbox">
		<input type="checkbox" name='poi[]'  value="universitas">Universitas
	</label>
	<label class="checkbox">
		<input type="checkbox"  name='poi[]'  value="institut">Institut
	</label>
	<label class="checkbox">
		<input type="checkbox" name='poi[]' value="sekolahtinggi">Sekolah Tinggi
	</label>
	<label class="checkbox">
		<input type="checkbox" name='poi[]' value="politeknik">Politeknik
	</label>
	<label class="checkbox">
		<input type="checkbox" name='poi[]' value="akademi">Akademi
	</label>
	<label class="checkbox">
		<input type="checkbox" name='poi[]' value="kedinasan">Kedinasan
	</label>
</div>
<div class="control-group">
	<div class="controls">
	<button type="submit" class="btn btn-success" name='aksi' >Lihat</button>
	</div>
</div>
</form>
</div> 