
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

$tunombre = $_POST['nombre'];
echo "nom: " . $tunombre . "<br>";

    if(strlen($tunombre) > 3) {
        setcookie("nombre", $tunombre);
        session_start();
        print("cookie creada");
    }
    else {
        print("no se asigna cookie");
    }
?>

