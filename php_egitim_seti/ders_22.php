<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>PHP || Ders 22 || Foreach Loop</title>
</head>
<body>



<?php

$isimler = array("ali","veli","mehmet","ayşe","fatma");
$kisiler = array("Ali"=>"Mühendis", "Mehmet"=>"Mimar");

foreach($kisiler as $key => $value){

    echo "$key isimli kişinin mesleği : $value <br>";


}




/*
foreach($isimler as $value){

    echo "$value <br>";


}
*/




?>






</body>
</html>