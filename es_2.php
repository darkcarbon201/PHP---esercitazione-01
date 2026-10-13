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
$b = 5;

$i = 0;

$somma_iterativa = 0;


while($i < $b){
    $somma_iterativa = $somma_iterativa + $a;
    $i = $i + 1;
}

echo "Somma iterativa:". $somma_iterativa;


?>
    
</body>
</html>