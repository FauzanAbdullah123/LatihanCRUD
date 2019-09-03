<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD</title>
</head>
<body>
    <center><h2>Data Siswa</h2></center><br><br>
    <center><a href="../siswa/create.php">Tambah Data</a><br><br>
    <table border="1" width="80%">
    <tr>
        <th>ID</th>
        <th>NIS</th>
        <th>Nama Siswa</th>
        <th>Kelas</th>
        <th colspan="3">Aksi</th>
    </tr>
    <?php
    include('C:\xampp\htdocs\LatihanCRUD\koneksi.php');
    $siswa = mysqli_query($koneksi, "SELECT * FROM siswa");
    foreach ($siswa as $data){
        ?>
    <tr>
        <td><?php echo $data['id']?></td>
        <td><?php echo $data['nis']?></td>
        <td><?php echo $data['nama_siswa']?>
        <td><?php echo $data['kelas']?></td>
        <td><a href="../siswa/show.php?id=<?php echo $data['id']?>">Show</a></td>
        <td><a href="../siswa/edit.php?id=<?php echo $data['id']?>">Edit</a></td>
        <td><a href="../siswa/delete.php?id=<?php echo $data['id']?>">Delete</a></td>
    </tr>
    <?php
    }
    ?>
    </table></center>
</body>
</html>