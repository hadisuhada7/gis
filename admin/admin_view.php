<?php
//Ketikkan Source Code 1 admin_view.php disini
require_once ('inc/config.php');
if(isset($_GET['act'])){
	$id = $_GET['id'];
	$sql = "delete from admin where idadmin='$id' ";
	mysql_query($sql) or die(mysql_error());
}
//Batas Akhir Pengetikkan Source Code 1 admin_view.php	
?>
<h2 id="headings"> Data Admin</h2>
<table  class="table table-condensed table-striped table-hover">
	<thead>
	<th class='info'>
		<td><b>Nama </b></td>
		<td><b>Password</b></td>
		<td><b>Aksi</b></td>
	</th>
	</thead>
	<tbody>
	<?php
	//Ketikkan Source Code 2 admin_view.php disini
	$query="SELECT * from admin ";
	$result=mysql_query($query) or die(mysql_error());
	$no=1;
	//proses menampilkan data
	while($rows=mysql_fetch_object($result)){
	//Batas Akhir Pengetikkan Source Code 2 admin_view.php	
	?>
	<tr>
		<td><?php echo $no ?></td>
		<td><b><?php echo $rows -> username;?><b></td>		
		<td><?php echo $rows ->password;?></td>
		<td><a href="index.php?mod=admin&pg=admin_form&id=
			<?php echo $rows -> idadmin;?>" class='btn'>
			<i class="icon-pencil"></i></a>
			<a href="index.php?mod=admin&pg=admin_view&act=del&id=
			<?php echo $rows -> idadmin;?>"
			onclick="return confirm('Yakin data akan dihapus?') ";
			class='btn'><i class="icon-trash"></i></a></td>
	</tr>
	<?php
	$no++;
	}?>
<tr>
	<td colspan=3 ></td>
	<td><a href="index.php?mod=admin&pg=admin_form" class='btn'>
	<i class="icon-plus"></i></a></td>
</tr>
</tbody>
</table>
<?php
//Ketikkan Source Code 3 admin_view.php disini
// KODE UNTUK MENAMPILKAN PESAN STATUS
if(isset($_GET['status'])) {
	if($_GET['status'] == 0) {
		echo " Operasi Data Berhasil";
	} else {
		echo "Operasi Gagal";
	}
}
//close database
//Batas Akhir Pengetikkan Source Code 3 admin_view.php	
?>