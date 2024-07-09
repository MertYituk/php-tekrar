<?php

$uploaddir = "uploads/";
$uploadfile = $uploaddir . basename($_FILES['selectFile']['name']);

$test = move_uploaded_file($_FILES['selectFile']['tmp_name'],$uploadfile);

if($test){

	echo "Basarili";

}else{


	echo "Dosya yükleme baþarýsýz oldu..";

}




?>