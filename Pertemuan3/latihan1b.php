<!DOCTYPE html>
<html lang="en">
<head>
    <title>latihan 1b</title>
    <style>
        .warna-baris {
            background-color: aquamarine;
        }
    </style>
</head>
<body>
<table border="1" cellpadding="10" cellspacing="0">
        <?php for($i=1; $i <=3; $i++) : ?>
            <?php if ($i % 2 == 1) : ?>
        <tr class="warna-baris">
            <?php else : ?>
                <tr>
            <?php endif ; ?>
            <?php for($j =1; $j <=5; $j++) : ?>
                <td><?= "$i,$j"; ?></td>
                <?php endfor;?>
        </tr>
    <?php endfor; ?>
</table>
</body>
</html>