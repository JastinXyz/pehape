<?php

$alas = @$_POST['alas'];
$tinggi = @$_POST['tinggi'];
$sisi1 = @$_POST['sisi1'];
$sisi2 = @$_POST['sisi2'];
$sisi3 = @$_POST['sisi3'];
$hasil = @$_POST['luas'];
$keliling = @$_POST['keliling'];

if (isset($_POST['hitung'])) {
    $hasil = 1 / 2 * $alas * $tinggi;
    $keliling = $sisi1 + $sisi2 + $sisi3;
} else if (isset($_POST['clear'])) {
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

            <p>Alas: <input type="number" name="alas" placeholder="masukan angka" value="<?= $alas; ?>" required /></p>
            <p>Tinggi: <input type="number" name="tinggi" placeholder="masukan angka" value="<?= $tinggi; ?>" required /></p>

            <hr />

            <p>utk keliling</p>

            <p>Sisi 1: <input type="number" name="sisi1" placeholder="masukan angka" value="<?= $sisi1; ?>" required /></p>
            <p>Sisi 2: <input type="number" name="sisi2" placeholder="masukan angka" value="<?= $sisi2; ?>" required /></p>
            <p>Sisi 3: <input type="number" name="sisi3" placeholder="masukan angka" value="<?= $sisi3; ?>" required /></p>
            <button type="submit" name="hitung">hitung</button>

            <br />

            <p>Luas: <input name="luas" placeholder="hasil disini" value="<?= $hasil; ?>" disabled /></p>
            <p>Keliling: <input name="keliling" placeholder="hasil disini" value="<?= $keliling; ?>" disabled /></p>

            <input type="submit" name="clear" value="Clear">

        </center>
    </form>
</body>

</html>