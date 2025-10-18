<?php

function repetirMensagem($mensagem,$vezes){
    for($i = 0; $i<$vezes; $i++){
        echo $i+1 ." - $mensagem <br>";
    }
}

?>