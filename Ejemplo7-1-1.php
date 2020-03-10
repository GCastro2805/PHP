

<head>
    <title>Portal con PHP</title>
</head>

<?php
    echo "<h1>";

    function suma($x, $y)
    {
        $z = $x + $y;
        return $z;
    }

    $resultado = suma(5, 12);

    echo "<br>";
    echo $resultado;

    echo "</h1>";
?>

