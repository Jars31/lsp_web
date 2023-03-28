<?php 
$id_petugas = $_GET['id_petugas'];
$username = $_POST['username'];
$password= $_POST['password'];
$nama_petugas = $_POST['nama_petugas'];
$level = $_POST['level'];


include'../koneksi.php';
//UPDATE SET    = MEMPROSES DATA YANG DIKIRIM DARI FILE EDIT.PHP
$sql = "UPDATE petugas SET username='$username', password='$password', nama_petugas='$nama_petugas', level='$level' WHERE id_petugas='$id_petugas'";
$query = mysqli_query($koneksi, $sql);
//if = salah satu penyeleksian yang memungkinkan kita menapulasi aliran jalnnya
if($query) {
	//header = bagian dan dokumen yang munul diata margin
	header("Location:?url=petugas");
//else = pilihan terakhir semua pilihan tidak memiliki nilai benar(true)
}else{
	echo "<script>alert('Maaf Data Tidak Tersimpan');
	window.location.assign('?url=petugas');</script>";
	}
 ?>
