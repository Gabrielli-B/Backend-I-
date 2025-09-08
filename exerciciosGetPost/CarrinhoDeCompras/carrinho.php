<?php
require_once "verificarCatalogo.php";

$carrinho = [];

function adicionarCarrinho($nomeProduto,$produtosCatalogo,&$carrinho,$qtd){
    if(verificaProdutoNoCatalogo($produtosCatalogo,$nomeProduto)){
        if(estaNoCarrinho($carrinho,$nomeProduto)){
            $carrinho[$nomeProduto] += $qtd;
            return"Adicionado com sucesso!";
        }else{
            $carrinho[$nomeProduto] = $qtd;
            return "Adicionado com sucesso!";
        }
    }else{
        return "Produto não encontrado no catálogo<br>";
    }
}

function estaNoCarrinho($carrinho,$nomeProduto){
    return isset($carrinho[$nomeProduto]);
}

function calculaPrecoTotalCarrinho($carrinho,$catalogoProdutos){
    $precoTotal = 0;

    foreach($carrinho as $nomeProduto => $qtd){
        if(isset($catalogoProdutos[$nomeProduto])){
            $precoTotal += ($qtd * $catalogoProdutos[$nomeProduto]);
        }
    }

    return $precoTotal;
}

function infoCarrinho(&$carrinho){
    echo"Dados carrinho:<br>";
    if(empty($carrinho)){
        return "CARRINHO VAZIO<br>";
    }
    foreach($carrinho as $nome => $qtd){
        echo"$nome | $qtd<br>";
    }
}
?>