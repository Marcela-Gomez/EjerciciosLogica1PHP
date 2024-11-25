<!-- Serie de Fibbonaci -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Palindromo</title>
</head>
<body>
<div class="navbar">
        <div class="itemsNav">
           <a href="./fibbonaci.html">Serie de Fibonnaci</a>
           <a href="./numerosPrimo.html">¿Es número primo?</a>
           <a href="./palindromo.html">¿Es un palindromo?</a>
        </div>

        <div class="home">
            <a href="./index.html">Inicio</a>
        </div>
    </div>
</body>
</html>

<?php
$palabra = $_POST["palabra"];
$palabra = strtolower($palabra);//vuelve minuscula la frase
$palabra = preg_replace('/[^a-zA-Z0-9]/', '', $palabra);//quita valores especiales y espacios
$palabraReversa = strrev($palabra);//reversa la fraese
//evalua si es igual es un palindromo
if($palabra == $palabraReversa){
    echo "<h1>La palabra o frase $palabra es un palindromo</h1>";
}else{
    echo "<h1>La palabra o frase $palabra no es un palindromo</h1>";
}
?>