<?php

function verificaCredencial($usuarios, $nome,$senha){
    if(isset($usuarios[$nome]) && $usuarios[$nome] === $senha){
        echo "LOGIN BEM-SUCEDIDO!<br>";
    }else{
        echo "USUÁRIO OU SENHA INVÁLIDO!<br>";
    }
}

?>