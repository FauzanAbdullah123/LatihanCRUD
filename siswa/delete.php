<?php
include('C:\xampp\htdocs\LatihanCRUD\koneksi.php');
$id = $_GET['id'];
$delete = "DELETE FROM siswa WHERE id='$id'";
mysqli_query($koneksi, $delete);
header("location:../siswa/index.php");
