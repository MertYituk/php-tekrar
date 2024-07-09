<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>PHP || Ders 32 || Date&Time </title>
</head>
<body>




<?php

     
     echo date("d.m.Y");
     echo "<br>";

     echo date("h:i:sa");
     echo "<br>";

     date_default_timezone_set("Europe/Istanbul");
     echo date("H:i:sa");
     echo "<br>";

     $date = mktime(10,20,30, 3,21,2020);
     echo date("d.m.Y H:i:s", $date);
     echo "<br>";

     $dateSecond = strtotime("11:00pm February 22 2020");
     echo date("d.m.Y H:i:sa", $dateSecond);


?>









</body>
</html>