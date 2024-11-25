<!-- Serie de Fibbonaci -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>fibonnaci</title>
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
$n = $_POST["numero"]; //tomamos el valor ingresado por el usuario

//declaramos la funcion y solicitamos el numero de digitos solicitados
function serieFibonacci($n) {
    $serie = "0, 1, "; //inicializamos la serie con los dos primeros numeros de la serie de fibbonaci
    $a = 0; //inicializamos el primer numero de la serie
    $b = 1; //inicializamos el segundo numero de la serie

    //Agregamos un digito de la serie fibonnaci hasta llegar a el numero solicitado - 2 que ya se declararon anteriormente
    for ($i = 0; $i < $n-2; $i++) { 
        $c = $a + $b; //sumamos los dos numeros anteriores
        $a = $b; //actualizamos el primer numero
        $b = $c; //actualizamos el segundo numero
        $serie = $serie . $c . ", "; //agregamos el nuevo numero a la serie
    }
    //mostramos los resultados
    echo '<h1>Los primeros ' . $n . ' números de la serie de Fibonacci son: </h1>'; 
    echo '<p>' . $serie . '</p>';
};
//llamamos a la funcion y enviamos el valor de n
serieFibonacci($n);
?>