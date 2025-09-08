<?php

$alunos = [
    "João"    => "TSI",
    "Maria"   => "ECA",
    "Osvaldo" => "INF",
    "Luiza"   => "MCT"
];

function exibeAlunos($alunos){
    foreach($alunos as $nome => $curso){
        echo "$nome | $curso <br>";
    }
}

exibeAlunos($alunos);

?>