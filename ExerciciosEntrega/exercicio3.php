<?php
$nota = 3;

function verificarAprovacao($nota){
    if($nota < 5){
        echo "REPROVADO!<br>";
    }else if($nota >= 5 && $nota<= 6.9){
        echo"RECUPERAÇÃO!<br>";
    }else{
        echo"APROVADO!<br>";
    }
}

verificarAprovacao($nota);
?>