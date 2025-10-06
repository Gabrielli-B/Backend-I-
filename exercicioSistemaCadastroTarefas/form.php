<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="nomeTarefa">Informe o nome da tarefa:</label>
        <input type="text" name="nomeTarefa">

        <label for="descricao">Descrição da tarefa:</label>
        <input type="text" name="descricao">

        <button type="submit">Enviar</button>
    </form>
</body>
</html>

<?php

require_once "processamento.php";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    if(isset($_POST["nomeTarefa"]) && isset($_POST["descricao"]) && !empty($_POST["nomeTarefa"])){
        $nome = $_POST["nomeTarefa"];
        $descricao = !empty($_POST["descricao"]) ? $_POST["descricao"] : "NÃO INFORMADO";
        
        salvarTarefa($nome,$descricao);
        listarTarefas();
    }
}
?>