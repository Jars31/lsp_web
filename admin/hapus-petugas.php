<?php 
$id_petugas = $_GET['id_petugas'];
//include = memasukan file php kedalam file php lainnya
include'../koneksi.php';
$sql = "DELETE FROM petugas  WHERE id_petugas='$id_petugas'";
$query = mysqli_query($koneksi, $sql);
//if = salah satu penyeleksian yang memungkinkan kita menapulasi aliran jalnnya
if($query) {
	header("Location:?url=petugas");
	//else = pilihan terakhir semua pilihan tidak memiliki nilai benar(true
}else{
	echo "<script>alert('Maaf Data Tidak Terhapus');
	window.location.assign('?url=petugas');</script>";
	}
 ?>
