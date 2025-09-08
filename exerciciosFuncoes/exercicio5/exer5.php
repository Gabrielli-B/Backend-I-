<?php

$alunos = [
    "João"    => "TSI",
    "Maria"   => "ECA",
    "Osvaldo" => "INF",
    "Luiza"   => "MCT"
];

function apenasTSI($alunos){
    foreach($alunos as $nome => $curso){
        if($curso==="TSI"){
            echo"$nome | $curso";
        }
    }
}

apenasTSI($alunos);
?>