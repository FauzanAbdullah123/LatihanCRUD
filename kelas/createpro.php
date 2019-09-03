<?php
include('C:\xampp\htdocs\LatihanCRUD\koneksi.php');
$a = $_POST['kode'];
$b = $_POST['nama'];
$c = $_POST['wali'];
$tambah = "INSERT INTO kelas SET kode_kelas='$a',
            nama='$b',wali_kelas='$c'";
mysqli_query($koneksi, $tambah);
header('location:../kelas/index.php');    