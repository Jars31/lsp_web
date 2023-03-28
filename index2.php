<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<title>Login Page</title>
<link rel="stylesheet" href="style.css" media="screen" title="no title">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

<body>
<body style="background-color:orange;">
  <table border="1" cellspacing="0">
    <center>
      <h1>APLIKASI PEMBAYARAN SPP</h1>
    </center>
    <div class="container">
      <div class="login">
        <h3 class="text-center">LOGIN ADMIN / PETUGAS</h3>
      </div>
      <form action="proses-login-petugas.php" method="post">
        <div class="box-login">
          <i class="fas fa-envelope-open-text"></i>
          <input type="text" name="username" class="form-control" placeholder="Masukan Username anda.." required>
        </div>

        <div class="box-login">
          <i class="fas fa-lock"></i>
          <input type="password" name="password" class="form-control" placeholder="Masukan Password anda.." required>
        </div>

        <button type="submit" class="btn-login">Login</button>
        <div class="submit">
          <a href="index.php">Login Sebagai Siswa</a>
      </form>

    </div>

    </div>






    <script type="../js/bootstrap.bundle.min.js"></script>

</body>

</html>