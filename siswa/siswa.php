<?php 
session_start();

if (empty($_SESSION['nisn'])) {

	echo "<script>
	alert('Maaf Anda Belum Login');
	window.location.assign('../index.php');
	</script>";

}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Siswa - Aplikasi Pembayaran SPP.</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color:RGB(193,193,193);">
<div class="container mt-5">
	 <div class="alert bg-dark text-white">
	 	Anda Login Sebagai Siswa <b><?= $_SESSION['nama'] ?></b> Aplikasi Pembayaran SPP.
	 </div>
	 <a href="siswa.php?url=Logout" class="btn bg-dark text-white">Logout</a>

	 <div class="card mt-2">
	 	<div class="bodycart- alert">
	 		<!-- ini isi web kita -->
	 		<?php 
	 		$file = @$_GET['url'];
	 		if (empty($file)) {
	 		 	echo "<hr>";
	 		 	include'history-pembayaran.php';
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