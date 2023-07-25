<?php
include('../inc/config.php');
include('../inc/function.php');
$kirim=$_GET['loc'];

$data=explode('|',$kirim);
$tabel= $data[0];
$id=$data[1];


switch ($tabel) {
	case 'jalan': {
		$sql_lokasi="select *
        from jalan where idjalan='$id' ";
				
        $result=query($sql_lokasi);
        while($data=mysql_fetch_object($result)){
        $content="<div id=\"content\">
		<div id=\"siteNotice\" > </div>
		<h4 id=\"firstHeading\" class=\"firstHeading\">$data->nama</h4>
		<div id=\"bodyContent\" height=\"400px\"><p>
		<img src=\"upload/jalan/$data->foto\" 
		<ul>
			<li> Nomor: $data->nomor 
			<li> panjang: $data->panjang KM
			<li> STA: $data->sta KM
			<li> Baik: $data->baik KM
				$data->pbaik %
			<li> Sedang: $data->sedang KM
				$data->psedang %
			<li> Rusak ringan: $data->rusak_ringan KM
				$data->rusak_ringan %
			<li> rusak berat: $data->rusak_berat KM
				$data->prusak_berat %
		</ul></div></div>"; ?>
            		   
    <?php
		} //end while
		echo $content;
	} //end case jalen
	break;
	
	case 'jembatan': {
		$sql_lokasi="select *
        from jembatan where idjembatan='$id' ";
		
        $result=query($sql_lokasi);
        while($data=mysql_fetch_object($result)){
        $content="<div id=\"content\">
		<div id=\"siteNotice\">
		</div>
		<h4 id=\"firstHeading\" class=\"firstHeading\">$data->nama</h4>
		<div id=\"bodyContent\"><p>
		<img src=\"upload/jembatan/$data->foto\" 
		<ul>
			<li> No Jembatan: $data->no_jembatan 
			<li> panjang: $data->panjang M
			<li> STA: $data->sta KM
		</ul></div></div>"; 
		}
		echo $content;
	}
	break;
	
	//Ketikkan Source Code 1 get_info.php disini
	case 'universitas': {
		$sql_lokasi="select *
        from universitas where iduniversitas='$id' ";
			
        $result=query($sql_lokasi);
        while($data=mysql_fetch_object($result)){
        $content="<div id=\"content\">
		<div id=\"siteNotice\">
		</div>
		<h4 id=\"firstHeading\" class=\"firstHeading\">$data->nama</h4>
		<div id=\"bodyContent\"><p>
		<img src=\"universitas/img/$data->foto\" 
		<ul>
			<li> Alamat : $data->alamat </li>
			<li> No. Telpon : $data->no_telpon </li>
		</ul></div></div>";
		} //end while 
		echo $content;
	}//end case universitas
	break;
	
	case 'institut': {
		$sql_lokasi="select *
        from institut where idinstitut='$id' ";
			
        $result=query($sql_lokasi);
        while($data=mysql_fetch_object($result)){
        $content="<div id=\"content\">
		<div id=\"siteNotice\">
		</div>
		<h4 id=\"firstHeading\" class=\"firstHeading\">$data->nama</h4>
		<div id=\"bodyContent\"><p>
		<img src=\"institut/img/$data->foto\" 
		<ul>
			<li> Alamat : $data->alamat </li>
			<li> No. Telpon : $data->no_telpon </li>
		</ul></div></div>";
		} //end while 
		echo $content;
	}//end case institut
	break;

	case 'sekolahtinggi': {
		$sql_lokasi="select *
        from sekolahtinggi where idsekolahtinggi='$id' ";
			
        $result=query($sql_lokasi);
        while($data=mysql_fetch_object($result)){
        $content="<div id=\"content\">
		<div id=\"siteNotice\">
		</div>
		<h4 id=\"firstHeading\" class=\"firstHeading\">$data->nama</h4>
		<div id=\"bodyContent\"><p>
		<img src=\"sekolahtinggi/img/$data->foto\" 
		<ul>
			<li> Alamat : $data->alamat </li>
			<li> No. Telpon : $data->no_telpon </li>
		</ul></div></div>";
		} //end while 
		echo $content;
	}//end case sekolahtinggi
	break;

	case 'politeknik': {
		$sql_lokasi="select *
        from politeknik where idpoliteknik='$id' ";
			
        $result=query($sql_lokasi);
        while($data=mysql_fetch_object($result)){
        $content="<div id=\"content\">
		<div id=\"siteNotice\">
		</div>
		<h4 id=\"firstHeading\" class=\"firstHeading\">$data->nama</h4>
		<div id=\"bodyContent\"><p>
		<img src=\"politeknik/img/$data->foto\" 
		<ul>
			<li> Alamat : $data->alamat </li>
			<li> No. Telpon : $data->no_telpon </li>
		</ul></div></div>";
		} //end while 
		echo $content;
	}//end case politeknik
	break;

	case 'akademi': {
		$sql_lokasi="select *
        from akademi where idakademi='$id' ";
			
        $result=query($sql_lokasi);
        while($data=mysql_fetch_object($result)){
        $content="<div id=\"content\">
		<div id=\"siteNotice\">
		</div>
		<h4 id=\"firstHeading\" class=\"firstHeading\">$data->nama</h4>
		<div id=\"bodyContent\"><p>
		<img src=\"akademi/img/$data->foto\" 
		<ul>
			<li> Alamat : $data->alamat </li>
			<li> No. Telpon : $data->no_telpon </li>
		</ul></div></div>";
		} //end while 
		echo $content;
	}//end case akademi
	break;

	case 'kedinasan': {
		$sql_lokasi="select *
        from kedinasan where idkedinasan='$id' ";
			
        $result=query($sql_lokasi);
        while($data=mysql_fetch_object($result)){
        $content="<div id=\"content\">
		<div id=\"siteNotice\">
		</div>
		<h4 id=\"firstHeading\" class=\"firstHeading\">$data->nama</h4>
		<div id=\"bodyContent\"><p>
		<img src=\"kedinasan/img/$data->foto\" 
		<ul>
			<li> Alamat : $data->alamat </li>
			<li> No. Telpon : $data->no_telpon </li>
		</ul></div></div>";
		} //end while 
		echo $content;
	}//end case kedinasan
	break;
	//Batas Akhir Pengetikkan Source Code 1 get_info.php 
}
?>
