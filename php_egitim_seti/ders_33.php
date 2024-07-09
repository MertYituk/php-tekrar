<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>PHP || Ders 33 || Include&Require </title>
    <script src="https://kit.fontawesome.com/aeca299997.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>

     <link rel="stylesheet" type="text/css" href="menu.css"/>


</head>
<body>




<?php

     include "menu.php";

echo "<p>Deneme</p>";

?>

<?php include "degiskenler.php";

    echo $isim;
    echo $meslek;

?>



<script src="menu.js">

        



    </script>




</body>
</html>