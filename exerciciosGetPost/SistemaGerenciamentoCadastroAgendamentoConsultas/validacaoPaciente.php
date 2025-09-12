<?php

function validarPaciente($nome,$catalogoPacientes){
    if(isset($catalogoPacientes[$nome])){
        return "$nome | " . $catalogoPacientes[$nome];
    }
    return "PACIENTE NÃO FOI ENCONTRADO!";
}


?>