<?php
/*Exercício 2: Aplicar Vale-Presente de R$30 e Exibir os Novos Preços
Cenário:
Dado que você tem uma lista de produtos em um array, aplique um vale-presente de R$30 em cada produto da lista. Após aplicar o desconto, exiba todos os produtos com seus novos preços.
Dica:
Use arrays associativos para armazenar os produtos e seus preços.
Utilize funções para aplicar o desconto e retornar os novos valores dos produtos.
 */
require "produtos.php";
require "desconto.php";

$produtosComDesconto = aplicarDesconto($produtos);

foreach($produtosComDesconto as $nome => $preco){
    echo "$nome | $preco<br>";
}
?>