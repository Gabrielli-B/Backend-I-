<?php

function somar($a,$b){
    $soma = $a + $b;
    
    $dados = [
        "a" => $a,
        "b" => $b,
        "soma" => $soma
    ];

    header("Content-Type: application/json");
    echo json_encode($dados);
}
?>