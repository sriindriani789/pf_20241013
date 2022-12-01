<?php 
  // $mahasiswa = [
//     ["Sri Indriani", "20241013", "PTI", "sri@undikma.ac.id"],
//     ["Rauudah Jannah", "20241014", "PTI", "idut@undikma.ac.id"],
//     ["Jamaluddin", "20241015", "PTI", "jamal@undikma.ac.id"],
// ];

  // Array Associative
  // definisinya sama dengan array numerik, kecuali
  // key-nya adalah string yang kita buat sendiri

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
    <title>Asosiatif Array</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs) :?>
    <ul>
      <li>nama: <?= $mhs["nama"]; ?></li>
      <li>nim :<?= $mhs["nim"]; ?></li>
      <li>jurusan: <?= $mhs ["jurusan"]; ?></li>
      <li>email: <?= $mhs["email"]; ?></li>
    </ul>
    <?php endforeach ?>
</body>
</html>
