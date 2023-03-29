<?php 
session_start();
//mengecek variabel ada atau tidak nya
if (empty($_SESSION['id_petugas'])) {

	echo "<script>
	alert('Maaf Anda Belum Login');
	window.location.assign('../index2.php');
	</script>";

}
if ($_SESSION['level']!='admin') {

	echo "<script>
	alert('Maaf Anda Bukan Sesi Admin');
	window.location.assign('../index2.php');
	</script>";

}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin - Aplikasi Pembayaran SPP.</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color:rgb(193,193,193);">
<div class="container mt-5">
	 <div class="alert bg-dark text-white">
	 	Anda Login Sebagai Admin <b>ADMINISTRATOR</b> Aplikasi Pembayaran SPP.
	 </div>
	 <?php  //mencari situs url?>
	 <a href="admin.php?url=spp" class="btn bg-dark text-white">SPP</a>
	 <a href="admin.php?url=kelas" class="btn bg-dark text-white">Kelas</a>
	 <a href="admin.php?url=siswa" class="btn bg-dark text-white">Siswa</a>
	 <a href="admin.php?url=petugas" class="btn bg-dark text-white">Petugas</a>
	 <a href="admin.php?url=Pembayaran" class="btn bg-dark text-white">Pembayaran</a>
	 <a href="admin.php?url=Laporan" class="btn bg-dark text-white">Laporan</a>
	 <a href="admin.php?url=Logout" class="btn bg-dark text-white">Logout</a>

	 <div class="card mt-2">
	 	<div class="bodycart- alert">
	 		<!-- ini isi web kita -->
	 		<?php 
	 		
	 		//$_Get menghubungkan menjadi link
	 		$file = @$_GET['url'];
	 		if (empty($file)) {
	 		 	echo "<h4>Selamat Datang Di Halaman Administrator.</h4>";
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