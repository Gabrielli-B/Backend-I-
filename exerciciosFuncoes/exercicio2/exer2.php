<?php

$idade = 20;

function maiorIdade($idade){
    if($idade<0){
        return "IDADE INVÁLIDA!";
    }

    if($idade<18){
        return"Você é menor de idade";
    }else{
        return "Você é maior de idade";
    }
}

echo maiorIdade($idade);
?>