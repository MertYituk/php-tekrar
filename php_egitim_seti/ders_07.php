<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>PHP || Ders 07 || Data Types - String</title>
</head>
<body>



<?php

$x = "Php öğreniyorum";

echo strlen($x);
echo "<br>";

echo str_word_count($x);
echo "<br>";

echo strrev($x);
echo "<br>";

echo strpos($x, "ğre");
echo "<br>";

echo str_replace("P", "JS", $x);



?>






</body>
</html>