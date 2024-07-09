<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>PHP || Ders 36 || fgets() & fgetc() </title>
</head>
<body>



<?php

    $i = 0;

    $file = fopen("deneme.txt","r") or die("......");
    /*
    while(!feof($file)){

    echo fgets($file);

    $i++;

    }
    */

    while($i < 30){

    echo fgetc($file);

    $i++;

    }

    fclose($file);


?>










</body>
</html>