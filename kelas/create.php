<?php
session_start();
//pemeriksaan session
if (isset($_SESSION['email'])){ //jika sudah login
    //menampilkan isi session 
    ?>
<head>
    <title>Menambah Record</title>
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
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="../kelas/Logout.php">LOGOUT</button></a>
    </form>
  </div>
</nav>
<div class="main-content">
<h1><center>Menambahkan Record</center></h1>
<br><br>
<table border="0" width="">
    <form action="../kelas/createpro.php" method="post">
        <tr>
            <th>Kode Kelas</th>
            <th>:</th>
            <th><input type="text" name="kode" size="50"></th>
        </tr>
        <tr>
            <th>Nama Kelas</th>
            <td>:</td>
            <td><input type="text" name="nama" size="50"></td>
        </tr>
        <tr>
            <th>Nama Wali Kelas</th>
            <td>:</td>
            <td><input type="text" name="wali" size="50"></td>
        </tr>
        <tr>
            <th><input type="submit" value="Simpan" name="Save"></th>
        </tr>
    </form>
    </table>
<?php
}else{
?>
<head>
    <title>Menambah Record</title>
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
<?php die("Anda Belum Login! Anda Tidak Berhak Masuk ke Halaman Ini. Silahkan Login <a href='../kelas/Login.php'>disini</a>");
}
?>
</div>

</body>
</html>