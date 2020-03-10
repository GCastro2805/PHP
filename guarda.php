
<head>
    <title>Portal con PHP</title>
</head>


<body bgcolor = "#303030">
<body text = "#ffffff">
<body leftmargin = "60">
<body topmargin = '60'>
<font face = "Tahoma">
<font siza = "3">

<form enctype = "multipart/form-data" action = "recepcion.php" method = "post">
<input type = "hidden" name = "lim_tamano" value = "500000">
<b>
<font size = "6">
Formulario para el envío de ficheros
</b>
</font size>
<p><b>Archivo a transferir</b><br>
<input type = "file" name = "archivo"></p>
<p><input type = "submit" name = "enviar" value = "Aceptar"></p>
</form>
</head>

<b>Instrucciones de uso: Pulse el botón Seleccionar archivo y seleccione el archivo que desee y luego pulse el botón Aceptar.


<?php



?>