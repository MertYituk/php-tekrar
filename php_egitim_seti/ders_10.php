<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>PHP || Ders 10 || Data Types - Array</title>
</head>
<body>



<?php


$renkler = array("kırmızı","mavi","yeşil");

var_dump($renkler);
echo "<br>";
$a = count($renkler);
echo $a;
echo "<br>";

$meslek = array("Ali"=>"Muhendis","Mehmet"=>"Mimar" );

echo "Ali'nin Mesleği : " . $meslek['Ali'];
echo "<br>";

$kisiler = array(

    array("Ali", 30, "Muhendis"),
    array("AMehmet", 40, "Mimar")

);

echo $kisiler[0][0] . " " . $kisiler[0][1] . " yaşında bir " . $kisiler[0][2];

echo "<br>";

$sayilar = [2,1,3];

rsort($sayilar);

echo $sayilar[0] . "<br>";
echo $sayilar[1] . "<br>";
echo $sayilar[2] . "<br>";


?>






</body>
</html>