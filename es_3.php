<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$a = 20;
$b = 3;

$quoziente = 0;
$resto = $a;

while($resto >= $b){

    $resto = $resto - $b;

    $quoziente = $quoziente + 1;
}

echo "<br> Resto: ". $resto . "<br>" . "<br>" . "Quoziente: " . $quoziente;



?>
    
</body>
</html>