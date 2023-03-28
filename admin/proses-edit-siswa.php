<?php 
$nisn = $_GET['nisn'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$id_kelas = $_POST['id_kelas'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$id_spp = $_POST['id_spp'];


include'../koneksi.php';
//UPDATE SET    = MEMPROSES DATA YANG DIKIRIM DARI FILE EDIT.PHP
$sql = "UPDATE  siswa SET nis='$nis', nama='$nama', id_kelas='$id_kelas', alamat='$alamat', no_telp='$no_telp', id_spp='$id_spp' WHERE nis='$nis'";
//mysqli_query = nama pungsi untuk menjalnkan intruki
$query = mysqli_query($koneksi, $sql);
//if = salah satu penyeleksian yang memungkinkan kita menapulasi aliran jalnnya 

if($query) {
	//header = bagian dan dokumen yang munul diata margin
	header("Location:?url=siswa");
	//else = pilihan terakhir semua pilihan tidak memiliki nilai benar(true)
}else{
	echo "<script>alert('Maaf Data Tidak Tersimpan');
	window.location.assign('?url=siswa');</script>";
	}
 ?>
