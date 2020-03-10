

<head>
    <title>Portal con PHP</title>
</head>


<body bgcolor = "#303030">
<body text = "#ffffff">
<body leftmargin = "60">
<body topmargin = '60'>
<font face = "Tahoma">
<font siza = "3">

<?php
    $archivo = $_FILES['archivo']['name'];
    $archivo_size = $_FILES['archivo']['size'];
    $lim_tamano = 500000;
    $archivo_type = $_FILES['archivo']['type'];

    if($archivo != "none" and $archivo_size != 0 and $archivo_size <= $lim_tamano){
        if(copy("c:/ficheros/" . $archivo, "c:/ficheros/upload/" . $archivo)){
            echo "<h2>Se ha transferido el archivo $archivo</h2>";
            echo "<br>Su tamaño es: $archivo_size bytes<br>";
            echo "<br>El fichero es tipo: $archivo_type<br>";
        }
        else{
            echo "<h2>No ha podido transferise el archivo</h2>";
        }
    }
    else {
        echo "<h3>Su tamaño no puede exceder de $lim_tamano bytes</h3>";
    }
    echo "<a href = '. $archivo .'>";
?>


