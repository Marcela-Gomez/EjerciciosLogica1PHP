<!-- Serie de Fibbonaci -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fibbonaci</title>
</head>
<body>
    <div>
        <div>
           <a href="./fibbonaci.html">Serie de fibbonaci</a>
           <a href="">¿Es número primo?</a>
           <a href="">¿Es un palindromo?</a>
        </div>

        <div>
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
    echo $serie;
};
//llamamos a la funcion y enviamos el valor de n
serieFibonacci($n);
?>