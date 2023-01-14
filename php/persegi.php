<?php

$sisi = @$_POST['sisi'];
$hasil = @$_POST['luas'];
$keliling = @$_POST['keliling'];

if(isset($_POST['hitung'])) {
    $hasil = $sisi * $sisi;
    $keliling = 4 * $sisi;
} else if(isset($_POST['clear'])) {
    $sisi = "";
    $hasil = "";
    $keliling = "";
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
            <h1>PERSEGI</h1>

            <p>Sisi: <input type="number" name="sisi" placeholder="masukan angka" value="<?= $sisi; ?>"/></p>
            <button type="submit" name="hitung">hitung</button>

            <br/>

            <p>Luas: <input name="luas" placeholder="hasil disini" value="<?= $hasil; ?>" disabled/></p>
            <p>Keliling: <input name="keliling" placeholder="hasil disini" value="<?= $keliling; ?>" disabled/></p>

            <input type="submit" name="clear" value="Clear">

        </center>
    </form>
</body>
</html>