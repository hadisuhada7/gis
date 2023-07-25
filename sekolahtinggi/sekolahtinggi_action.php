<!-- Ketikkan Source Code 1 sekolahtinggi_action.php disini -->
<?php
include ('../inc/config.php');
include ('../inc/function.php');
// data dari sekolahtinggi
//$p = arrayToObject($_POST);
$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$no_telpon = $_POST['no_telpon'];
$alamat = $_POST['alamat'];
$kode_pos = $_POST['kode_pos'];
$lat=$_POST['lat'];
$lng=$_POST['lng'];
$foto = $_POST['foto'];
$idkabupaten=$_POST['idkabupaten'];
$latlng= explode(",", $idkabupaten);
$idkabupaten=get_idkabupaten($latlng[0],$latlng[1]);
$aksi = $_POST['aksi'];
$id = $_POST['id'];
$lokasi_file = $_FILES['foto']['tmp_name'];
$foto_file = $_FILES['foto']['name'];
$tipe_file = $_FILES['foto']['type'];
$ukuran_file = $_FILES['foto']['size'];
$direktori = "../sekolahtinggi/img/$foto_file";
$sql = null;
$MAX_FILE_SIZE = 1000000;
//100kb
if($ukuran_file > $MAX_FILE_SIZE) {
	header("Location:../index.php?mod=sekolahtinggi&pg=sekolahtinggi_form&status=1");
	exit();
}
$sql = null;
if($ukuran_file > 0) {
	move_uploaded_file($lokasi_file, $direktori);
}
if($aksi == 'Tambah') {
$sql = "INSERT INTO sekolahtinggi(nama,jenis,no_telpon,lat,lng,alamat,kode_pos,foto,idkabupaten)
		VALUES('$nama','$jenis','$no_telpon','$lat','$lng','$alamat','$kode_pos','$foto_file','$idkabupaten')";
} else if($aksi == 'Edit') {
	if(!empty($foto)) {
		$sql = "update sekolahtinggi set nama='$nama',jenis='$jenis',no_telpon='$no_telpon',
		lat='$lat',lng='$lng',alamat='$alamat',kode_pos='$kode_pos',
		foto='$foto_file',idkabupaten='$idkabupaten'
		where idsekolahtinggi='$id'";
	}else{
		$sql = "update sekolahtinggi set nama='$nama',jenis='$jenis',no_telpon='$no_telpon',
		lat='$lat',lng='$lng',alamat='$alamat',kode_pos='$kode_pos',
		idkabupaten='$idkabupaten'
		where idsekolahtinggi='$id'";
	}
}
$result = mysql_query($sql) or die(mysql_error());
//check if query succesful
if($result) {
	header('location:../index.php?mod=sekolahtinggi&pg=sekolahtinggi_view&status=0');
} else {
	header('location:../index.php?mod=sekolahtinggi&pg=sekolahtinggi_view&status=1');
}
?>
<!-- Batas Akhir Pengetikkan Source Code 1 sekolahtinggi_action.php disini -->