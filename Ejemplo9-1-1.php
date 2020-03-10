
<head>
    <title>Portal con PHP</title>
</head>

<?php
    $abre = "c:/ficheros/texto.txt";
    $fp = fopen($abre, "r");
    if($fp)
    {
        print("El fichero se ha abierto");
        fclose($fp);
    }
    else
    {
        print("El fichero no se encuentra");
    }
?>

