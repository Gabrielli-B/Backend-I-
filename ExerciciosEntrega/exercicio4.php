<?php

$numero = 5;

function tabuada($numero){
    $soma = 0;
    for($i = 1; $i <=10; $i++){
        $multiplicado = $numero * $i;
        echo"$multiplicado<br>";
        $soma+=$multiplicado;
    }
    echo"Soma tabuada : $soma";
}

tabuada($numero);
?>