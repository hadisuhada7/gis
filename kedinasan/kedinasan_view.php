<?php
//Ketikkan Source Code 1 kedinasan_view.php disini
//===========CODE DELETE RECORD ================
if(isset($_GET['act'])) {
	$id = $_GET['id'];
	$sql = "delete from kedinasan where idkedinasan='$id'";
	mysql_query($sql) or die(mysql_error());
}
//Batas Akhir Pengetikkan Source Code 1 kedinasan_view.php	
?>

<div>
<h2 id="headings"> Data Perguruan Tinggi Kedinasan</h2>
<!--<a href='index.php?mod=kedinasan&pg=peta'><i class="icon-map-marker"></i>Map View</a>-->
<table class="table table-striped table-condensed">
<thead>
	<th><td><b>Nama </b></td>
		<td><b>Alamat</b></td>
		<td><b>Kabupaten</b></td>
		<td><b>Aksi</b></td>
	</th>
</thead>
<tbody>
<?php
//Ketikkan Source Code 2 kedinasan_view.php disini
$batas='5';
$halaman=$_GET['halaman'];
$posisi=null;
if(empty($halaman)) {
	$posisi=0;
	$halaman=1;
} else {
	$posisi=($halaman-1) * $batas;
}
$query= "SELECT kedinasan.idkedinasan,kedinasan.nama,k.nama as nama_kabupaten, kedinasan.alamat FROM kedinasan as kedinasan,kabupaten as k where kedinasan.idkabupaten=k.idkabupaten limit $posisi, $batas ";
$result=mysql_query($query) or die (mysql_error());
$no=1;
//proses menampilkan data
while($rows=mysql_fetch_object($result)) {
//Batas Akhir Pengetikkan Source Code 2 kedinasan_view.php	
?>
<!-- Ketikkan Source Code 3 kedinasan_view.php disini -->
<tr>
<td><?php echo $posisi+$no ?></td>
<td><?php echo $rows -> nama;?></td>
<td><?php echo $rows -> alamat;?></td>
<td><?php echo $rows -> nama_kabupaten;?></td>
<td>
<a href="index.php?mod=kedinasan&pg=peta&id=<?php echo $rows -> idkedinasan;?>"
class='btn'><i class="icon-map-marker"></i></a>

<a href="index.php?mod=kedinasan&pg=kedinasan_form&id=<?php echo $rows -> idkedinasan;?>"
class='btn'><i class="icon-pencil"></i></a>

<a href="index.php?mod=kedinasan&pg=kedinasan_view&act=del&id=<?php echo $rows -> idkedinasan;?>"
onclick="return confirm('Yakin Data Akan Di Hapus ???')";
class='btn'><i class="icon-trash"></i></a></td>
</tr>
<?php
$no++;
}?>
<tr>
	<td colspan='4'></td>
	<td><a href="index.php?mod=kedinasan&pg=kedinasan_form" class='btn'><i class="icon-plus"></i></a></td>
</tr>
</tbody>
</table>
<!-- Batas Akhir Pengetikkan Source Code 3 kedinasan_view.php -->
<?php
//Ketikkan Source Code 4 kedinasan_view.php disini
//=============CUT HERE for paging==========
$tampil2=mysql_query("SELECT idkedinasan from kedinasan");
$jmldata=mysql_num_rows($tampil2);
$jumlah_halaman=ceil($jmldata/$batas);
echo "<div class='pagination'><ul>";
for($i=1;$i<=$jumlah_halaman;$i++)
	echo "<li><a href='index.php?mod=kedinasan&pg=kedinasan_view&halaman=$i'>$i</a></li>";
//Batas Akhir Pengetikkan Source Code 4 kedinasan_view.php
?>
</ul>
</div>
<br>
<!-- Ketikkan Source Code 5 kedinasan_view.php disini -->
<div class='well'>Jumlah Data :
<strong><?php echo $jmldata;?></strong></div>
<?php
//kode menampilkan pesan status
if(isset($_GET['status'])) {
	if($_GET['status'] == 0) {
		echo "Operasi Data Berhasil !!!";
	} else {
		echo "Operasi Data Gagal !!!";
	}
}
//close database
?>
</div>
<!-- Batas Akhir Pengetikkan Source Code 5 kedinasan_view.php -->