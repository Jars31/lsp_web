<?php 
//$_SESSION = menyimpan data di server
$id_petugas = $_SESSION['id_petugas'];
$nisn = $_POST['nisn'];
//$_POST = Mengumpulkan data form setelah post mengirim sebuah form html dengan method
$tgl_bayar = $_POST['tgl_bayar'];
$bulan_dibayar = $_POST['bulan_dibayar'];
$tahun_dibayar = $_POST['tahun_dibayar'];
$id_spp = $_POST['id_spp'];
$jumlah_bayar = $_POST['jumlah_bayar'];

include'../koneksi.php';
//INSERT*INT0 = untuk menambhah data kedalam database yang telah ditentukan
$sql = "INSERT INTO pembayaran(id_petugas,nisn,tgl_bayar,bulan_dibayar,tahun_dibayar,id_spp,jumlah_bayar) VALUES('$id_petugas','$nisn','$tgl_bayar','$bulan_bayar','$tahun_dibayar','$id_spp','$jumlah_bayar')";
$query = mysqli_query($koneksi, $sql);
if($query) {
	header("Location:?url=pembayaran");
}else{
	echo "<script>alert('Maaf Data Tidak Tersimpan');
	window.location.assign('?url=pembayaran');</script>";
	}
//header = bagian dan dokumen yang muncul diatas margin
//else = pilihan terakhir semua pilihan tidak memiliki nilai benar(true)
//if = salah satu penyeleksian yang memungkinkan kita menapulasi aliran jalnnya 
//include = memasukan file php kedalam file php lainnya
 ?>
