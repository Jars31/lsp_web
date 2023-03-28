<?php 
//$_POST = Mengumpulkan data form setelah post mengirim sebuah form html dengan method
//$_GET = Menghubungkan menjadi link
//$_SESSION = menyimpan data di server
$id_kelas = $_GET['id_kelas'];
$nama_kelas = $_POST['nama_kelas'];
$kompetensi_keahlian = $_POST['kompetensi_keahlian'];
//include = memasukan file php kedalam file php lainnya
include'../koneksi.php';
$sql = "UPDATE kelas SET nama_kelas='$nama_kelas', kompetensi_keahlian='$kompetensi_keahlian' WHERE id_kelas='$id_kelas'";

$query = mysqli_query($koneksi, $sql);
//else = pilihan terakhir semua pilihan tidak memiliki nilai benar(true)
//if = salah satu penyeleksian yang memungkinkan kita menapulasi aliran jalnnya 
if($query) {
	header("Location:?url=kelas");
}else{
	//echo = perintah untuk menampilkan nilai ke layar
	echo "<script>alert('Maaf Data Tidak Tersimpan');
	window.Location.assign('?url=kelas');
	<script>";
	}
 ?>
