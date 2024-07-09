<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>PHP || Ders 05 || Variables</title>
</head>
<body>



<?php

/*
$text = "PHP";
$a = 10;
$c = 20;
$b = 15.6;
echo $text . "<br>";
echo "$text öğreniyorum..<br>";

echo $a . "<br>";

echo $b . "<br>";

echo $a + $c ;
*/

//$x = "Merhaba";

/*
function selamla(){
$x = "Merhaba";
    echo $x;

}

//selamla();

echo $x;
*/

$a = 3;
$b = 4;

function carp(){

    global $a, $b;
    echo $a * $b;
}
carp();



?>






</body>
</html>