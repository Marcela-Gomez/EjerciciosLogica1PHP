<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Números primos</title>
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
$numero = $_POST["numero"];

function primo($numero){
// evalua si el numero es mayor o igual a uno poque no puede ser primo
    if ($numero <= 1) {
        echo "<h1>El número $numero no es primo.</h1>";
    }else{
        // evalua si el numero es divisible entre algun numero anterior a el desde el dos porque si lo es no es primo
        for ($i=2; $i < $numero; $i++) {
            if($numero % $i == 0){
                echo "<h1>El número $numero no es primo.</h1>";
                return;
            }
        }
        echo "<h1>El número $numero es primo.</h1>";
    }
}

primo($numero);

?>