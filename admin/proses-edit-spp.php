<?php 
//$_GET = Menghubungkan menjadi link
$id_spp = $_GET['id_spp'];
//$_POST = Mengumpulkan data form setelah post mengirim sebuah form html dengan method
$tahun = $_POST['tahun'];
$nominal= $_POST['nominal'];

include'../koneksi.php';
//UPDATE SET    = MEMPROSES DATA YANG DIKIRIM DARI FILE EDIT.PHP
$sql = "UPDATE spp SET tahun='$tahun', nominal='$nominal' WHERE id_spp='$id_spp'";

$query = mysqli_query($koneksi, $sql);
//header = bagian dan dokumen yang munul diata margin
//else = pilihan terakhir semua pilihan tidak memiliki nilai benar(true)
//if = salah satu penyeleksian yang memungkinkan kita menapulasi aliran jalnnya 
if($query) {
	header("Location:?url=spp");
}else{
	echo "<script>alert('Maaf Data Tidak Tersimpan');
	window.Location.assign('?url=spp');
	<script>";
	}
 ?>
