<?php
require "../exer1/produtos.php";
require "aplicarDesconto.php";

$resultado = aplicarDesconto($produtos, 40);

$produtosComDesconto = $resultado["produtos"];
$economia = $resultado["economia"];

foreach($produtosComDesconto as $nome => $preco){
    echo "$nome | R$ $preco<br>";
}

echo"------------------------<br>";
echo"Economia total: R$ $economia";
?>