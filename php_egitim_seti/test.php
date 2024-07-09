<?php

    if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    $isim = $_REQUEST['kullaniciAdi'];


    if(empty($isim)){
    
        echo "Herhangi bir değer girilmemiştir..";

	}else{
    
        echo "İsminiz : $isim";

	}



	}





?>