<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>PHP || Ders 26 || Return</title>
</head>
<body>



<?php

$x = 5;
$y = 6;
 
function carp (){
    
    global $x, $y;

    return $x * $y;

}

function selamlama(){
    return "Hoşgeldiniz";
}

$a = carp() * 2;

echo $a;
echo "<br>";

echo selamlama();


/*
for($x=0; $x<10;$x++){

    

    if($x == 5){
     return;
	}

    echo "$x <br>";
}

*/






?>






</body>
</html>