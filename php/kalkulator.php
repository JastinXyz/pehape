<?php

$bil1 = @$_POST['bil1'];
$bil2 = @$_POST['bil2'];
$hasil = @$_POST['hasil'];

if(isset($_POST['tambah'])) {
    $hasil = $bil1 + $bil2;
} else if(isset($_POST['kurang'])) {
    $hasil = $bil1 - $bil2;
} else if(isset($_POST['kali'])) {
    $hasil = $bil1 * $bil2;
} else if(isset($_POST['bagi'])) {
    $hasil = $bil1 / $bil2;
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
            <h1>KALKULATOR X PPLG</h1>

            <p>Bilangan 1: <input type="number" name="bil1" placeholder="masukan angka" value="<?= $bil1; ?>"/></p>
            <p>Bilangan 2: <input type="number" name="bil2" placeholder="masukan angka" value="<?= $bil2; ?>"/></p>
            <button type="submit" name="tambah">+</button>
            <button type="submit" name="kurang">-</button>
            <button type="submit" name="kali">X</button>
            <button type="submit" name="bagi">/</button>

            <br/>

            <p>Hasil: <input name="hasil" placeholder="hasil disini" value="<?= $hasil; ?>" disabled/></p>

            <input type="submit" name="clear" value="Clear">

        </center>
    </form>
</body>
</html>