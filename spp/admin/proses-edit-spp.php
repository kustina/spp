<?php 

$id_spp	=	$_GET['id_spp'];
$tahun = $_POST['tahun'];
$nominal = $_POST['nominal'];

include '../koneksi.php';
$sql = ("UPDATE spp SET tahun='$tahun',nominal='$nominal' WHERE id_spp ='$id_spp'");
$query = mysqli_query($koneksi,$sql);
if ($query) {
	header('location:?url=spp');
}else{
	"<script>
	alert('Maaf data tidak tersimpan'); 
	Window.location.assign('?url=spp'); 
	</script>";
}

?>