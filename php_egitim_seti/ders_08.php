<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>PHP || Ders 08 || Data Types - Numbers</title>
</head>
<body>



<?php

$x = 10;

var_dump($x);
echo "<br>";

var_dump(is_integer($x));
echo "<br>";

$y = 10.5;

var_dump($y);
echo "<br>";
var_dump(is_float($y));
echo "<br>";

$z = 3.4e567;
var_dump(is_infinite($x));
echo "<br>";

$a = (int)$y;

echo $a;



?>






</body>
</html>