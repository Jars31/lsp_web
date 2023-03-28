<?php 
$nisn = $_POST['nisn'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$id_kelas = $_POST['id_kelas'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$id_spp = $_POST['id_spp'];

//include = memasukan file php kedalam file php lainnya
include'../koneksi.php';
//INSERT*INT0 = untuk menambhah data kedalam database yang telah ditentukan
$sql = "INSERT INTO siswa(nisn, nis, nama, id_kelas, alamat, no_telp, id_spp) VALUES('$nisn','$nis', '$nama', '$id_kelas', '$alamat', '$no_telp', '$id_spp')";
//mysqli_query = nama pungsi untuk menjalnkan intruki
$query = mysqli_query($koneksi, $sql);
if($query) {
//header = bagian dan dokumen yang muncul diatas  margin /digunakan untuk memproses http
	header("Location:?url=siswa");
}else{
	//echo = perintah untuk menampilkan nilai ke layar
	echo "<script>alert('Maaf Data Tidak Tersimpan');
	window.location.assign('?url=siswa');</script>";
	}
 ?>
