<?php 
session_start();

if (empty($_SESSION['id_petugas'])) {

	echo "<script>
	alert('Maaf Anda Belum Login');
	window.location.assign('../index2.php');
	</script>";

}
if ($_SESSION['level']!='petugas') {

	echo "<script>
	alert('Maaf Anda Bukan Sesi petugas');
	window.location.assign('../index2.php');
	</script>";

}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Petugas - Aplikasi Pembayaran SPP.</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color:rgb(193,193,193);">
<div class="container mt-5">
	 <div class="alert bg-dark text-white">
	 	Anda Login Sebagai Petugas <b><?= $_SESSION['nama_petugas'] ?></b> Aplikasi Pembayaran SPP.
	 </div>
	 <a href="petugas.php?url=Pembayaran" class="btn bg-dark text-white">Pembayaran</a>
	 <a href="petugas.php?url=Logout" class="btn bg-dark text-white">Logout</a>

	 <div class="card mt-2">
	 	<div class="bodycart- alert">
	 		<!-- ini isi web kita -->
	 		<?php 
	 		$file = @$_GET['url'];
	 		if (empty($file)) {
	 		 	echo "<h4>Selamat Datang Di Halaman Petugas.</h4>";
	 		 	echo "Aplikasi Pembayaran SPP digunakan untuk mempermudah dalam mencatat pembayaran siswa / siswi di sekolah.";
	 		 }else{
	 		 	include $file.'.php';
	 		 }
	 		  ?>
	 	</div>
	 </div>
</div>


<script src="../js/bootstrap.min.js"></script>
</body>
</html>