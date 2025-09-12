<?php
require_once "index.html";
require_once "catalogoPacientes.php";
require_once "exibirPacientesCadastrados.php";
require_once "validacaoPaciente.php";
require_once "gerenciaAgendamento.php";
require_once "agendamento.php";

$buscaNomePaciente = "";
if($_SERVER["REQUEST_METHOD"] === "GET"){

    if(isset($_GET["buscaNomePaciente"])){
        $buscaNomePaciente = $_GET["buscaNomePaciente"];
        
        if($buscaNomePaciente !== ""){  
            echo validarPaciente($buscaNomePaciente,$catalogoPacientes);
        }else{
            echo exibirPacientesCadastrados($catalogoPacientes);
        }
    }
}

if($_SERVER["REQUEST_METHOD"] === "POST"){
    if(isset($_POST["agendamentoNomePaciente"])){
        $agendamentoNomePaciente = $_POST["agendamentoNomePaciente"];
    }
    if(isset($_POST["dataAgendamento"])){
        $dataAgendamento = $_POST["dataAgendamento"];
    }

    echo agendarConsulta($agendamentos,$catalogoPacientes,$agendamentoNomePaciente,$dataAgendamento);
}
?>