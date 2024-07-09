<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>PHP || Ders 27 || Functions</title>
</head>
<body>



<?php


function selamlama($isim){

    echo "Merhaba $isim, hoşgeldin..<br>";

}

function kareAlanHesapla($kenar){

    return $kenar * $kenar;

}



selamlama("Ali");
selamlama("Ayşe");

$hesap = kareAlanHesapla(5);

echo "Karenin Alanı : $hesap";

?>






</body>
</html>