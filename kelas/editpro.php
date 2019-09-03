<?php
include('C:\xampp\htdocs\LatihanCRUD\koneksi.php');
$id = $_POST['id'];
$a = $_POST['kode'];
$b = $_POST['nama'];
$c = $_POST['wali'];
$edit = "UPDATE kelas SET kode_kelas='$a',nama='$b',wali_kelas='$c' WHERE id='$id'";
mysqli_query($koneksi, $edit);
header("location:../kelas/index.php");
?>  