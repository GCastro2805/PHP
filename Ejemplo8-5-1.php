
<head>
    <title>Portal con PHP</title>
</head>

<?php
    $patron = '/@/';
    if(preg_match($patron, "pepe@dominio.com"))
    {
        printf("Los datos insertados en el formulario son correctos");
    }
    else
    {
        printf("La dirección de e-mail no es correcta, por favor vuelva a introducirla");
    }

?>