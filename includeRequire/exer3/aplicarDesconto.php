<?php

function aplicarDesconto($produtos, $valorDesconto){
    $produtosComDesconto = [];
    $totalEconomia = 0;

    foreach($produtos as $nome => $preco){
        //não deixa o valor negativo, deixa zerado
        $novoPreco = max(0, $preco - $valorDesconto);
        $produtosComDesconto[$nome] = $novoPreco;

        $totalEconomia += ($preco - $novoPreco);
    }
    return [
            "produtos" => $produtosComDesconto,
            "economia" => $totalEconomia
    ];

}
?>