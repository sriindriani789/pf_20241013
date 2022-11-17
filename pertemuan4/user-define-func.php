<?php 
function salam ($waktu, $nama) {
   return "selamat $waktu, $nama!";} ?>


<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>latihan function</title>
</head>
<body>
    <h1> <?= salam ("siang" , "administrator"); ?></h1> 
    <h1>selamat siang administrator</h1>
  
</body>
</html>