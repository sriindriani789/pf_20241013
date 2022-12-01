<?php 
// array multidimensi
// array di dalam array

$mahasiswa = [
    ["Sri Indriani", "20241013", "PTI", "sri@undikma.ac.id"],
    ["Rauudah Jannah", "20241014", "PTI", "idut@undikma.ac.id"],
    ["Jamaluddin", "20241015", "PTI", "jamal@undikma.ac.id"],
];


?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>latihan array multidimensi</title>
</head>
<body>
    <h1>daftar biodata mahasiswa</h1>
    <ul>
        <?php foreach ( $mahasiswa as $mhs ) :  ?>
     <li>Nama : <?= $mhs[0]; ?></li>
      <li>NIM :<?= $mhs[1]; ?></li>
      <li>Jurusan :<?= $mhs[2]; ?></li>
      <li>Email: <?= $mhs[3]; ?></li>
      <br>
        <?php endforeach; ?>
    </ul>
</body>
</html>