<?php 
require 'functions.php';
$mahasiswa= query("SELECT * FROM tabel_mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>halaman admin</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>

    <a href="tambah.php">tambah data mahasiswa</a>
    <br>

    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>

    <?php $i = 1 ?>
    <?php foreach ($mahasiswa as $row):?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>|
                <a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('yakin ke?')">Hapus</a>
            </td>
            <td><img src="IMG/<?= $row["gambar"];?>"alt =""></td>
            <td><?= $row["nim"];?></td>
            <td><?= $row["nama"];?></td>
            <td><?= $row["email"];?></td>
            <td><?= $row["jurusan"];?></td>
        </tr>
    <?php $i++; ?>
    <?php endforeach; ?>                                                                                                                                                                                                                                                                                
    </table>
</body>
</html>