<?php

$produtosCatalogo = [
    "Tv"       => 2500,
    "Notebook" => 3000,
    "Mouse"    => 50.30,
    "Teclado"  => 150.90,
    "Monitor"  => 1000,
];

function infoProduto($produtosCatalogo,$nomeProduto){
    foreach($produtosCatalogo as $nome => $preco){
        if($nome === $nomeProduto){
            echo"$nome | $preco <br>";
        }
    }
}
?>