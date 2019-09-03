<?php
include('C:\xampp\htdocs\LatihanCRUD\koneksi.php');
$id = $_GET['id'];
$siswa = mysqli_query($koneksi, "SELECT*FROM kelas WHERE id='$id'");
$data = mysqli_fetch_array($siswa);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menambah Record</title>
</head>
<body>
<center><h2>Menambah Record</h2></center><br><br>
<table>
<form action="../siswa/createpro.php" method="post">
<input type="hidden" name="id" value="<?php echo $data['id'];?>">
    <tr>
        <th>NIS</th>
        <td>:</td>
        <td><input type="text" name="nis" value="<?php echo $data['nis'];?>" size="50"></td>
    </tr>
    <tr>
        <th>Nama Siswa</th>
        <td>:</td>
        <td><input type="text" name="siswa" value="<?php echo $data['nama_siswa'];?>" size="50"></td>
    </tr>
    <tr>
        <th>Kelas</th>
        <td>:</td>
        <td><input type="text" name="kelas" value="<?php echo $data['kelas'];?>" size="50"></td>
    </tr>
    <tr>
        <th><input type="submit" value="Simpan" name="Save"></th>
    </tr>
    </form>
    </table>
</body>
</html>