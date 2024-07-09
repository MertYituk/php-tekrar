<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>PHP || Ders 35 || fread() </title>
</head>
<body>



<?php

    $file = fopen("deneme.txt","r") or die("Dosya bulunamadı!");
    
    echo fread($file,filesize("deneme.txt"));

    fclose($file);

?>










</body>
</html>