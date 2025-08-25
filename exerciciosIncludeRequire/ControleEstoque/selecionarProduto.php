<?php
 require "subtraiEstoque.php";

function selecionaProduto(&$estoque,$nome,$qtd){
    if(isset($estoque[$nome])){
        if($estoque[$nome] >= $qtd){
            echo"Produto disponível! quantidade solicitada: $qtd<br>";
            subtraiEstoque($estoque,$nome,$qtd);
        }else{
            echo"Quantidade solicitada indisponível<br>";
        }
    }else{
        echo"Produto não foi encontrado!<br>";
    } 
}

?>