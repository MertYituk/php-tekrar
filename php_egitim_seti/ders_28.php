<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>PHP || Ders 28 || Superglobals - $GLOBALS </title>
</head>
<body>



<?php


$x = 5;
$y = 6;


function carp(){



$GLOBALS['z'] =  $GLOBALS['x'] * $GLOBALS['y'];


}

carp();

echo $z;

?>






</body>
</html>