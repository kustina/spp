<?php 

$id_pembayaran	=	$_GET['id_pembayaran'];

include '../koneksi.php';
$sql = ("DELETE FROM pembayaran WHERE id_pembayaran ='$id_pembayaran'");
$query = mysqli_query($koneksi,$sql);
if ($query) {
	"<script> 
	Window.history.go('-1'); 
	</script>";

}else{
	"<script>
	alert('Maaf data tidak terhapus'); 
	Window.history.go('-1'); 
	</script>";
}

?>