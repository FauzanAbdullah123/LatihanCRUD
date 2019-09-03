<?php
include('C:\xampp\htdocs\LatihanCRUD\koneksi.php');
$id = $_POST['id'];
$a = $_POST['nis'];
$b = $_POST['siswa'];
$c = $_POST['kelas'];
$edit = "UPDATE siswa SET nis='$a',nama_siswa='$b',kelas='$c' WHERE id='$id'";
mysqli_query($koneksi, $edit);
header("location:../siswa/index.php");