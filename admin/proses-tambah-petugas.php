<?php 
//$_POST = Mengumpulkan data form setelah post mengirim sebuah form html dengan method
$username = $_POST['username'];
$password= $_POST['password'];
$nama_petugas = $_POST['nama_petugas'];
$level = $_POST['level'];


include'../koneksi.php';
$sql = "INSERT INTO petugas (username, password, nama_petugas, level) VALUES('$username', '$password',  '$nama_petugas', '$level')";
$query = mysqli_query($koneksi, $sql);
if($query) {
	header("Location:?url=petugas");
}else{
	echo "<script>alert('Maaf Data Tidak Tersimpan');
	window.location.assign('?url=petugas');</script>";
	}
//header = bagian dan dokumen yang muncul diatas  margin
//else = pilihan terakhir semua pilihan tidak memiliki nilai benar(true)
//if = salah satu penyeleksian yang memungkinkan kita menapulasi aliran jalnnya 
//include = memasukan file php kedalam file php lainnya

 ?>
