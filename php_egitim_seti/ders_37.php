<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>PHP || Ders 37 || fwrite() </title>
</head>
<body>



<?php

    
    $file = fopen("deneme21.txt","x") or die(".....");

    $isim = "Veli\n";

    fwrite($file,$isim);
    fwrite($file,"Ali\n");

    fclose($file);


?>










</body>
</html>