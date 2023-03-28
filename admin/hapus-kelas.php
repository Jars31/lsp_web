<?php 
$id_kelas = $_GET['id_kelas'];
//include = memasukan file php kedalam file fhp lainnya
include'../koneksi.php';
$sql = "DELETE FROM kelas WHERE id_kelas='$id_kelas'";
$query = mysqli_query($koneksi, $sql);
if($query){
    //header = bagian dan dokumen yang munul diata margin /digunakan untuk memproses http
	header("Location:?url=kelas");
 }else{
    //echo = perintah untuk menampilkan nilai ke layar
 	echo "<script>
 	alert('Maaf data anda tidak Terhapus');
 	window.location.assign('?url=kelas');
 	</script>";
 }

 ?>
