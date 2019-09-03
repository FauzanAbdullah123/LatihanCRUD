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
    <tr>
        <th>NIS</th>
        <td>:</td>
        <td><input type="text" name="nis" size="50"></td>
    </tr>
    <tr>
        <th>Nama Siswa</th>
        <td>:</td>
        <td><input type="text" name="siswa" size="50"></td>
    </tr>
    <tr>
        <th>Kelas</th>
        <td>:</td>
        <td><input type="text" name="kelas" size="50"></td>
    </tr>
    <tr>
        <th><input type="submit" value="Simpan" name="Save"></th>
    </tr>
    </form>
    </table>
</body>
</html>