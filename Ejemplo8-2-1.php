
<head>
    <title>Portal con PHP</title>
</head>

<body bgcolor = "#303030">
<body text = "#A0A0A0">
<body leftmargin = "20">
<body topmargin = '20'>
<font face = "Tahoma">
<font siza = "3">
<hr size = "9" color = "FFFFFF" width = "40%" align = "left">

<?php
    for($i = 1; $i <= 255; $i++) 
    { 
        //print("ASCII: " . $i . "-<caracter: " . chr($i));
        print("ASCII: " . $i . "-caracter: " . chr($i) . "<br>");
        //print("<br>");
    }
?>

