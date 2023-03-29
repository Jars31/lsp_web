<!DOCTYPE html>
<html>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <body style="background-color:rgb(193,193,193);">
    <table border="1" cellspacing="0">
  <center><h1>APLIKASI PEMBAYARAN SPP</h1></center>
	<div class="container">
          <div class="login">
          <h3 >LOGIN SISWA</h3>
          </div>
          <form action="proses-login-siswa.php" method="post">
          <div class="box-login">
           <input type="number" name="nisn" class="form-control" placeholder="Masukan NISN anda.." required>
          </div>

          <div class="box-login">
           <input type="number" name="nis" class="form-control" placeholder="Masukan NIS anda.." required>
          </div>

          <button type="submit" class="btn-login">Login</button>
          <div class="submit">
            <a href="index2.php">Login Sebagai Administrator / Petugas</a>
            </form>

          </div>
      
	</div>




         

<script type="../js/bootstrap.bundle.min.js"></script>

</body>
</html>