<?php
session_start();
//pemeriksaan session
if (isset($_SESSION['email'])){ //jika sudah login
    //menampilkan isi session 
    ?>
<head>
    <title>Data Kelas</title>
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
<h1><center>Data Kelas</center></h1>
<br><br>
    <center><a href="../kelas/create.php">Tambah Data</a><br><br>
    <table border="1" width="80%">
    <tr>
        <th>No</th>
        <th>Kode Kelas</th>
        <th>Nama Kelas</th>
        <th>Wali Kelas</th>
        <th colspan="3">Aksi</th>
    </tr>
    <?php
    include('C:\xampp\htdocs\LatihanCRUD\koneksi.php');
    $kelas = mysqli_query($koneksi, "SELECT * FROM kelas");
    $no = 1;
    foreach ($kelas as $data){
        ?>
    <tr>
        <td><?php echo $no ?></td>
        <td><?php echo $data['kode_kelas']?></td>
        <td><?php echo $data['nama']?></td>
        <td><?php echo $data['wali_kelas']?></td>
        <td><a href="../kelas/show.php?id=<?php echo $data['id']?>">Show</a></td>
        <td><a href="../kelas/edit.php?id=<?php echo $data['id']?>">Edit</a></td>
        <td><a href="../kelas/delete.php?id=<?php echo $data['id']?>">Delete</a></td>
    </tr>
    <?php
       $no++;
    }
    ?>
    </table></center>
<?php
}else{
    ?>
<head>
    <title>Data Kelas</title>
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