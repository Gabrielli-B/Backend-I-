<?php

function exibirPacientesCadastrados($pacientes){
    foreach($pacientes as $nome => $prontuario){
        echo "$nome | $prontuario<br>";
    }
}

?>