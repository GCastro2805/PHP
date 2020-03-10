

<head>
    <title>Portal con PHP</title>
</head>

<?php
    $t = 'Ejemplo';
    $w = "unión";
    $x = 'de';
    $y = 'cadenas';
    $z = ' ';
    $resultado1 = $t;

    $resultado2 = $t . $z . $x . $z . $w . $z . $x . $z . $y;

    echo '<b><h1>';
    echo $resultado1;
    echo '<hr>';

    echo $resultado2;
    echo '</b></h1>';
?>
