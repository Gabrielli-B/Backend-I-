<?php

function aplicarDesconto($produtos){
    $produtosComDesconto = [];
    foreach($produtos as $nome => $preco){
        $novoPreco = $preco - 30;
        $produtosComDesconto[$nome] = $novoPreco; 
    }
    return $produtosComDesconto;
}

?>