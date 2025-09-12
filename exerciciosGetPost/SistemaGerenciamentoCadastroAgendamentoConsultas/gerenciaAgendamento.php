<?php

function agendarConsulta(&$agendamentos, $catalogoPacientes, $nomePaciente, $dataAgendamento) {
    if (!isset($catalogoPacientes[$nomePaciente])) {
        return "Paciente não encontrado!";
    }

    if (isset($agendamentos[$nomePaciente]) && $agendamentos[$nomePaciente] === $dataAgendamento) {
        return "Data de agendamento indisponível!";
    }

    $agendamentos[$nomePaciente] = $dataAgendamento;
    return "Consulta agendada com sucesso!";
}

?>