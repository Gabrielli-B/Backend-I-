<?php
require_once "validarSala.php";

$reservas = [];

function reservar($nomeSala,$qtdPessoas,$catalogoSalas,&$reservas){
    if(!salaExiste($catalogoSalas,$nomeSala)){
        return "Sala não encontrada";
    }

    if($catalogoSalas[$nomeSala] == 0 || $catalogoSalas[$nomeSala] == "indisponível"){
        return "Sala indisponível para reserva";
    }
    
    if($catalogoSalas[$nomeSala] >= $qtdPessoas){
        $reservas[$nomeSala] = $qtdPessoas;
        return "$nomeSala | $qtdPessoas<br>" . "Sala reservada com sucesso";
    }else{
        return "Capacidade excedida";
    }
}


?>