<?php
$numero = $_POST["numero"];

function primo($numero){

    if ($numero <= 1) {
        echo "<h1>El número $numero no es primo.</h1>";
    }else{
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