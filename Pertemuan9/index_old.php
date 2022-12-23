<?php 
//koneksi kedata base
$conn =mysqli_connect ("localhost", "root", "", "db_20241013") ;

//ambil data dari tabel mahasiswa (query)
$result= mysqli_query($conn, "SELECT * FROM tabel_mahasiswa");

//amnil data (fecth) dari objek $result
//mysqli_fecth_rowl()
//$mhs = mysqli_fecth_rowl($result); // mengembalikan array numerik
// var_dump($mhs);
// mysqli_fetch_assoc()
// $mhs= mysqli_fetch_assoc($result);
// var_dump($mhs);
// mysqli_fetch_array()
// $mhs= mysqli_fetch_array($result);
// var_dump($mhs);

// while ( $mhs = mysqli_fetch_assoc($result)){
// var_dump($mhs);
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>halaman admin</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>

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
    <?php while($row= mysqli_fetch_assoc($result)) :?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">ubah</a>|
            <a href="">hapus</a></td>
            <td><img src="IMG/<?= $row["gambar"];?>"alt =""></td>
            <td><?= $row["nim"];?></td>
            <td><?= $row["Nama"];?></td>
            <td><?= $row["email"];?></td>
            <td><?= $row["jurusan"];?></td>
        </tr>
    <?php $i++; ?>
    <?php endwhile; ?>                                                                                                                                                                                                                                                                                
    </table>
</body>
</html>