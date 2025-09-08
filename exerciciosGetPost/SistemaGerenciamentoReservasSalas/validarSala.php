<?php

function validarSala($nomeSala, $catalogoSalas){
    if(salaExiste($catalogoSalas,$nomeSala)){
        if($catalogoSalas[$nomeSala] == 0 || $catalogoSalas[$nomeSala] == "indisponível"){
            return "SALA INDISPONÍVEL";
        }else{
            return "SALA DISPONÍVEL";
        }
    }else{
        return "SALA NÃO FOI ENCONTRADA";
    }
}

function salaExiste($catalogoSalas,$nomeSala){
    return isset($catalogoSalas[$nomeSala]);
}
?>