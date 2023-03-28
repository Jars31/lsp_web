<?php 
$id_pembayaran = $_GET['id_pembayaran'];
//untuk mengirim sebuah fail
include'../koneksi.php';
$sql = "DELETE FROM pembayaran WHERE id_pembayaran='$id_pembayaran'";
$query = mysqli_query($koneksi, $sql);
if($query) {
	//echo = perintah untuk menampilkan nilai ke layar
	echo "<script>window.history.go(-1);</script>";
}else{
	echo "<script>alert('Maaf Data Tidak Terhapus'); window.history.go(-1);</script>";
	}
 ?>
