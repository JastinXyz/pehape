<?php

$jari = @$_POST['jari'];
$hasil = @$_POST['luas'];
$keliling = @$_POST['keliling'];

if(isset($_POST['hitung'])) {
    $hasil = 3.14 * $jari * $jari;
    $keliling = 2 * 3.14 * $jari;
} else if(isset($_POST['clear'])) {
    $bil1 = "";
    $bil2 = "";
    $hasil = "";
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>
    <form method="post">
        <center>
            <h1>LINGKARAN</h1>

            <p>Jari-jari: <input type="number" name="jari" placeholder="masukan angka" value="<?= $jari; ?>"/></p>
            <button type="submit" name="hitung">hitung</button>

            <br/>

            <p>Luas: <input name="luas" placeholder="hasil disini" value="<?= $hasil; ?>" disabled/></p>
            <p>Keliling: <input name="keliling" placeholder="hasil disini" value="<?= $keliling; ?>" disabled/></p>

            <input type="submit" name="clear" value="Clear">

        </center>
    </form>
</body>
</html>