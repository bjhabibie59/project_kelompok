<?php
$hasil1 = "";
if (isset($_POST['angka1']) && isset($_POST['angka2'])) {
    # code...
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $hasil1 = $angka1 + $angka2 ;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Nilai</td>
        </tr>
        <tr>
            <td><input type="text" value="<?= $hasil1 ?>"></td>
        </tr>
    </table>
    <form action="" method="post">
        Angka 1:
        <input type="text" name="angka1">
        Angka 2:
        <input type="text" name="angka2">
        <input type="submit" value="Hitung">
    </form>
</body>
</html>