<?php
//Ketikkan Source Code 1 provinsi_view.php disini
//============CODE DELETE RECORD ===============
require_once ('inc/config.php');
if(isset($_GET['act'])) {
	$id = $_GET['id'];
	$sql = "delete from provinsi where idprovinsi='$id' ";
	mysql_query($sql) or die(mysql_error());
}
//Batas Akhir Pengetikkan Source Code 1 provinsi_view.php
?>
<div class='span5'>
<h2 id="headings"> Data Provinsi</h2>	
<form id='form1' action='index.php?mod=
	provinsi&pg=provinsi_view' method="POST">
<input type='text' name='qcari' class="required" >
<input type='submit' class='btn' value='Cari'>
	 <a href='index.php?mod=provinsi&pg=provinsi_view' class="btn" >
	 <i class='icon-list'></i>All</a>
	 <br>
	 <a href='index.php?mod=provinsi&pg=map_view'>
	 <i class="icon-map-marker"></i>Map View</a>
</form>
	<table  class="table  table-condensed table-hover">
	<thead>
		<th><td><b>Nama </b></td><td><b>Aksi</b></td></th>
	</thead>
	<tbody>
	<?php
	//Ketikkan Source Code 2 provinsi_view.php disini
	//paging 
	//data paging 
	$batas=5;
	$halaman=$_GET['halaman'];
	$posisi=null;
	if(empty($halaman)){
		$posisi=0;
		$halaman=1;
	}else{
		$posisi=($halaman-1)* $batas;
	}
	$query="select * from provinsi order by idprovinsi desc limit
	$posisi,$batas ";
	$sql_page= "select * from provinsi";

	if(isset($_POST['qcari'])){
		$qcari=$_POST['qcari'];
		$query="SELECT * FROM provinsi
		where name like '%qcari%' order by idprovinsi desc";
		$sql_page= "select * from provinsi where nama
		like '%$qcari%' ";
	}
$result=mysql_query($query) or die(mysql_error());
$no=1;
//proses menampilkan data
while($rows=mysql_fetch_object($result)){
//Batas Akhir Pengetikkan Source Code 2 provinsi_view.php
	?>
	<tr>
		<td><?php echo  $posisi+$no
			?></td>
		<td><?php echo $rows -> nama;?></td>			
		<td><a href="index.php?mod=provinsi&pg=provinsi_form&id=
			<?php echo 	$rows -> idprovinsi;?>" class='btn'>
			<i class="icon-pencil"></i></a>
			<a href="index.php?mod=provinsi&pg=provinsi_view&act=
			del&id=<?php echo $rows -> idprovinsi;?>"
			onclick="return confirm('Yakin data akan dihapus?') ";
			class='btn'> <i class="icon-trash"></i></a></td>
	</tr>
<?php
	$no++;
}?>
	<tr>
		<td colspan=2></td>
		<td><a href="index.php?mod=provinsi&pg=provinsi_form"
			class='btn'	><i class="icon-plus"></i></a></td>
	</tr>
	</tbody>
</table>
<?php
//Ketikkan Source Code 3 provinsi_view.php disini
//=============CUT HERE for paging===============
$tampil2=mysql_query($sql_page);
$jmldata=mysql_num_rows($tampil2);
$jumlah_halaman=ceil($jmldata/$batas);

echo "<div class='pagination'><ul>";
	for($i=1;$i<=$jumlah_halaman;$i++)
	echo "<li><a href='index.php?mod=
		provinsi&pg=provinsi_view&halaman=$i'>$i</a></li>";
//Batas Akhir Pengetikkan Source Code 3 provinsi_view.php			
?>
</ul>
</div>
<div class='well'>Jumlah data :
	<strong><?php echo $jmldata;?></strong>
</div>
<?php
//Ketikkan Source Code 4 provinsi_view.php disini
// KODE UNTUK MENAMPILKAN PESAN STATUS
if(isset($_GET['status'])) {
	if($_GET['status'] == 0) {
		echo " Operasi data berhasil";
	} else {
		echo "Operasi gagal";
	}
}
//close database
//Batas Akhir Pengetikkan Source Code 4 provinsi_view.php
?>
</div>