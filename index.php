<?php
$angka1 = 20 ;
$angka2 = 30 ;
$hasil1 = $angka1 + $angka2 ;

$angka1 = 20 ;
$angka2 = 30 ;
$hasil2 = $angka1 - $angka2 ;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1px">
        <tr>
            <td>Nilai</td>
        </tr>
        <tr>
            <td><?php echo $hasil1 ?></td>
        </tr>
        <tr>
            <td><?php echo $hasil2 ?></td>
        </tr>
    </table>
</body>
</html>