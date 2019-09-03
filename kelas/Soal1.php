<?php
session_start();
//pemeriksaan session
if (isset($_SESSION['Login'])){ //jika sudah login
    //menampilkan isi session 
    ?>
<head>
    <title>SOAL1</title>
</head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-#f1c40f">
  <a class="navbar-brand" href="home.php">Assalaam</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="Soal1.php">Soal1 <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Soal2.php">Soal2</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="Logout.php">LOGOUT</button></a>
    </form>
  </div>
</nav>
<div class="main-content">
<h1><center>Selamat Datang di Soal 1 Fauzan</center></h1>
<br><br>
<div class="card">
  <div class="card-header">
    Upload Foto
  </div>
  <div class="card-body">
    <FORM ACTION="" METHOD="POST" ENCTYPE="multipart/form-data">
        <div class="form-group">
            <label for="exampleFormControlFile1">Foto</label>
            <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
  
    <button class="btn btn-primary" type="submit" name="Upload">Save</button>
    </form>
  </div>
</div>

<?php
    if (isset($_POST['Upload'])) {
        $dir_upload = "Foto/";
        $nama_file = $_FILES['file']['name'];
//
        if (is_uploaded_file($_FILES['file']['tmp_name'])) {
            $cek = move_uploaded_file ($_FILES['file']['tmp_name'],
            $dir_upload.$nama_file);
             echo "<br><br><center>
                    <a href='$dir_upload/$nama_file'><img src='$dir_upload/$nama_file'width='300px'height='250px'></a></center>";
        }
    }?></div>
<?php 
}else{
?>
<head>
    <title>SOAL1</title>
</head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-#f1c40f">
  <a class="navbar-brand" href="home.php">Assalaam</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="Soal1.php">Soal1 <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Soal2.php">Soal2</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="Login.php">LOGIN</button></a>
    </form>
  </div>
</nav>
<div class="main-content">
<?php die("Anda Belum Login! Anda Tidak Berhak Masuk ke Halaman Ini. Silahkan Login <a href='Login.php'>disini</a>");
}
?>
</div>
    
</body>
</html>