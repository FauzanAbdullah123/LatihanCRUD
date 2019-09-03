<head>
    <title>HOME</title>
</head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-#f1c40f">
  <a class="navbar-brand" href="../kelas/home.php">Assalaam</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../kelas/create.php">Tambah <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../kelas/index.php">Semua Data</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="../kelas/Login.php">LOGIN</button></a>
    </form>
  </div>
</nav>
<div class="main-content">
<?php
session_start();
if(isset($_SESSION['email'])){
    unset ($_SESSION);
    session_destroy();
    //
    echo "<h1>Anda sudah berhasil LOGOUT</h1>";
    echo "<h2>Klik <a href='../kelas/Login.php'>disini</a> untuk LOGIN kembali</h2>";
    echo "<h2>Anda sekarang tidak bisa masuk ke halaman lain lagi</h2>";
}
?>
</div>
</body>
</html>