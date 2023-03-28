<?php 
$nama_kelas = $_POST['nama_kelas'];
$kompetensi_keahlian= $_POST['kompetensi_keahlian'];

//include = memasukan file php kedalam file php lainnya
include'../koneksi.php';
//INSERT*INT0 = untuk menambhah data kedalam database yang telah ditentukan
$sql = "INSERT INTO kelas(nama_kelas,kompetensi_keahlian) VALUES('$nama_kelas','$kompetensi_keahlian')";
//header = bagian dan dokumen yang muncul diatas margin
//else = pilihan terakhir semua pilihan tidak memiliki nilai benar(true)
//if = salah satu penyeleksian yang memungkinkan kita menapulasi aliran jalnnya 
$query = mysqli_query($koneksi, $sql);
if($query) {
	header("Location:?url=kelas");
}else{
	echo "<script>alert('Maaf Data Tidak Tersimpan');
	window.location.assign('?url=kelas');</script>";
	}
 ?>
