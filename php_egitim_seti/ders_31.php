<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>PHP || Ders 31 || Superglobals - $_POST & $_GET </title>
</head>
<body>


<form method="GET" action="">

    <input type="text" name="kullaniciAdi">
    <input type="submit">


</form>

<?php

    if($_SERVER['REQUEST_METHOD'] == "GET"){
    
    $isim = $_GET['kullaniciAdi'];

    if(empty($isim)){
    
        echo "Herhangi bir değer girilmemiştir..";

	}else{
    
        echo "İsminiz : $isim";
        

	}



	}





?>









</body>
</html>