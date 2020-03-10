
<head>
    <title>Portal con PHP</title>
</head>

<?php
    $x = 9;
    $y = 3;
    $z = 5;

    $suma = $x + $y;
    $resta = $x - $z;
    $multiplicacion = $suma * $resta;
    $final = $multiplicacion++;

    echo $multiplicacion;
?>

