<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$a = 10;
$b = 1;
$c = 3;
$d= 12;

$somma = $a + $b + $c + $d;

echo "Somma:".  $somma . "<br>";

$media = $somma / 4;

echo "Media:".  $media . "<br>";

$numeri = [$a, $b, $c, $d ];

sort($numeri);

$mediana = ($numeri[1] + $numeri[2]) / 2;

echo "Mediana:".  $mediana;


?>

    



</body>
</html>