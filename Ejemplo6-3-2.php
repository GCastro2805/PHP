

<head>
    <title>Portal con PHP</title>
</head>

<?php

    $color = "negro";
    
    switch($color)
    {
        case "blanco":
            $sector = "claro";
        break;
        case "naranja":
            $sector = "normal";
        break;
        case "negro":
            $sector = "oscuro";
        break;
    }
    print "<br>";
    print($sector);
?>

