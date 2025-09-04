<?php

function verificaProdutoNoCatalogo($produtosCatalogo,$nomeProduto){
    return isset($produtosCatalogo[$nomeProduto]);
}

?>