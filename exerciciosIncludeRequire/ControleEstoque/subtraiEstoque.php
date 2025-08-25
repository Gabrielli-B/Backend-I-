<?php

function subtraiEstoque(&$estoque,$nomeProduto,$qtdProduto){
    if (isset($estoque[$nomeProduto])) {
        $estoque[$nomeProduto] -= $qtdProduto;
    }
}
?>