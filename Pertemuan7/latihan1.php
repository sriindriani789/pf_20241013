<?php 

// SUPERGLOBALS
// variabel global milik PHP
// merupakan Array Associative
// echo $_SERVER["SERVER_NAME"];

$mahasiswa = [
    ["nama" => "Sri Indriani",
     "nim" => "20241013",
     "email" => "sri@undikma.ac.id",
     "jurusan" => "PTI"
    ],
    ["nama" => "Rauudah Jannah",
     "nim" => "20241014",
     "email" => "idut@undikma.ac.id",
     "jurusan" => "PTI"
    ],
    ["nama" => "Jamaluddin",
     "nim" => "20241015",
     "email" => "jamal@undikma.ac.id",
     "jurusan" => "PTI"
    ]
  ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>latihan 1</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>

<ul>
    <?php foreach( $mahasiswa as $mhs) : ?>
        <li>
        <a href="latihan2.php?nama=<?=$mhs["nama"]?>&nim=<?=$mhs["nim"]?>&jurusan=<?=$mhs["jurusan"]?>&email=<?=$mhs["email"]?>"><?= $mhs["nama"]; ?></a>
        </li>
        <?php endforeach; ?>
</ul>
</body>
</html>