<?php 
$angka= [2,3,45,23,5,1,5,6,8,77,12];
$numbers = [2,3,45,23,5,1,5,6,8,77,12]; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>latihan array</title>
    <style>
     .kotak{
      width: 50px;
      height: 50px;
      background-color: aqua;
      text-align: center;
      line-height: 50px;
      margin: 3px;
      float: left;
  }

  .clear{
      clear: both;
  }
    </style>
</head>
<body>
    <?php for( $i = 0; $i < count ($angka); $i++) : ?>
    <div class="kotak"><?= $angka[$i] ?></div>
    <?php endfor; ?>
  
    <div class="clear"></div>

    <?php foreach( $numbers as $number) : ?>
        <div class="kotak"><?= $number; ?></div>
        <?php endforeach; ?>
</body>
</html>