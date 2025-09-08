<?php

$catalogoSalas = [
    "sala1" => 20,
    "sala3" => 30,
    "sala4" => "indisponível",
    "sala5" => 10
];

function salasDisponiveis($catalogoSalas){
    foreach($catalogoSalas as $nome => $qtd){
        if($qtd!=="indisponível" && $qtd!=0){
            echo"$nome | $qtd<br>";
        }
    }
}

?>