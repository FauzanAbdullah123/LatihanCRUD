<?php
include('C:\xampp\htdocs\LatihanCRUD\koneksi.php');
$a = $_POST['nis'];
$b = $_POST['siswa'];
$c = $_POST['kelas'];
$tambah = "INSERT INTO siswa SET nis='$a',nama_siswa='$b',kelas='$c'";
mysqli_query($koneksi, $tambah);
header('location:../siswa/index.php');