
<head>
    <title>Portal con PHP</title>
</head>

<?php
    $x = 4;
    $y = 5;

    print "<br>";

    if(($x == 4) && ($y == 5))
    {
        print("Estás en lo correcto");
    }
    echo "<br>";

    if(($x == 4) or ($y == 3))
    {
        print("La segunda operación también es correcta");
    }
?>

