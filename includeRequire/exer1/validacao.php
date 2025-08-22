<?php

function filtroProdutos($produtos){
    foreach($produtos as $nome => $preco){
        if($preco > 3000){
            echo "$nome | $preco<br>";
        }
    }
}

?>