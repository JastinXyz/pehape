<?php

$panjang = @$_POST['panjang'];
$lebar = @$_POST['lebar'];
$hasil = @$_POST['luas'];
$keliling = @$_POST['keliling'];

if(isset($_POST['hitung'])) {
    $hasil = $panjang * $lebar;
    $keliling = 2 * ($panjang + $lebar);
} else if(isset($_POST['clear'])) {
    $panjang = "";
    $lebar = "";
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

            <p>Panjang: <input type="number" name="panjang" placeholder="masukan angka" value="<?= $panjang; ?>"/></p>
            <p>Lebar: <input type="number" name="lebar" placeholder="masukan angka" value="<?= $lebar; ?>"/></p>
            <button type="submit" name="hitung">hitung</button>

            <br/>

            <p>Luas: <input name="luas" placeholder="hasil disini" value="<?= $hasil; ?>" disabled/></p>
            <p>Keliling: <input name="keliling" placeholder="hasil disini" value="<?= $keliling; ?>" disabled/></p>

            <input type="submit" name="clear" value="Clear">

        </center>
    </form>
</body>
</html>