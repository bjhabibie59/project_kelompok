<?php
$angka1 = $_POST;
$angka2 = $_POST;
$hasil1 = $angka1 + $angka2 ;

// $angka1 = 20 ;
// $angka2 = 30 ;
// $hasil2 = $angka1 - $angka2 ;

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
        <!-- <tr>
            <td><?php echo $hasil2 ?></td>
        </tr> -->
    </table>
    <form action="" method="post">
        Angka 1:
        <input type="text" name="$angka1">
        Angka 2:
        <input type="text" name="$angka2">
        <input type="submit" value="Hitung">
    </form>
</body>
</html>