<?php

function salvarTarefa($nome,$descricao){
    $linha = $nome . " | " . $descricao . PHP_EOL;
    file_put_contents("tarefas.txt",$linha,FILE_APPEND);
    echo"TAREFA SALVA COM SUCESSO!<br>";
}

/*function listarTarefas(){
   echo '<h3>Lista de tarefas:</h3><br>';
    if(file_exists("tarefas.txt")){
        echo nl2br(file_get_contents("tarefas.txt"));
    }else{
        echo "Nenhum dado encontrado no arquivo.";
    }
}*/

function listarTarefas(){
    echo '<h3>Lista de tarefas:</h3><br>';

    if(file_exists("tarefas.txt")){
        $linhas = file("tarefas.txt");

        foreach($linhas as $linha){
            list($nome, $descricao) = explode(' | ', $linha);
            echo"<p> $nome: $descricao</p>";
        }
    }else{
         echo "Nenhum dado encontrado no arquivo.";
    }
}
?>