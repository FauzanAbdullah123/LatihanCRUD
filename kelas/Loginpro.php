<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<head>
    <title>LOGIN</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<body id="LoginForm">
<nav class="navbar navbar-expand-lg navbar-light bg-#f1c40f">
  <a class="navbar-brand" href="home.php">Assalaam</a>
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
      <a href="../kelas/Login.php"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">LOGIN</button></a>
    </form>
  </div>
</nav>
<?php
 // memanggil file koneksi.php
 include('C:\xampp\htdocs\LatihanCRUD\koneksi.php');
 // membuat variable dengan nilai dari form
 $email = $_POST['email']; // variablenya = username, dan nilainya sesuai yang dimasukkan di input name="username" tadi
 $password = $_POST['password']; // variable password, dan nilainya sesuai yang dimasukkan di input name="password" tadi
 // md5 ada sebuah fungsi PHP untuk engkripsi. misalnya admin jadi 21232f297a57a5a743894a0e4a801fc3. untuk lengkapnya, silahkan googling tentang md5
 // menyesuaikan dengan data di database
 $perintah = "SELECT*FROM login WHERE email = '$email' AND password = '$password'";
 $hasil = mysqli_query($koneksi, $perintah);
 $row = mysqli_fetch_array($hasil);
    if ($row['email'] == $email && $row['password'] == $password) {
        session_start(); // memulai fungsi session
        $_SESSION['email'] = $email;
        header("location:../kelas/index.php"); // jika berhasil login, maka masuk ke file home.php
    }
    elseif ($row['email'] != $email && $row['password'] == $password){
        ?><div class="main-content">
        <?php
        echo "Email anda salah silahkan kembali login <a href=../kelas/Login.php> Klik disini </a>"; ?></div>
        <?php
    }
    elseif ($row['email'] == $email && $row['password'] != $password){
        ?><div class="main-content">
        <?php
        echo "Password anda salah silahkan kembali login <a href=../kelas/Login.php> Klik disini </a>"; ?></div>
        <?php
    }
    else{
        ?><div class="main-content">
        <?php
        echo "Email atau password anda salah silahkan kembali login <a href=../kelas/Login.php> Klik disini </a>"; ?></div>
        <?php
    }