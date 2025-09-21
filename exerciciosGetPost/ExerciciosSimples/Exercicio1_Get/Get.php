<?php

require_once "function.php";

if($_SERVER["REQUEST_METHOD"] === "GET" && (isset($_GET["nome"]) || isset($_GET["idade"]))){
    if(!empty($_GET["nome"])){
        $nome = $_GET["nome"]; 
    }else{
        $nome = "NÃO INFORMADO";
    }
    if(!empty($_GET["idade"])){
        $idade = $_GET["idade"];
    }else{
        $idade = "NÃO INFORMADO";
    }
    echo nomeIdade($nome,$idade);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        <label for="nome">Informe seu nome:</label>
        <input type="text" name = "nome">

        <label for="idade">Informe sua idade:</label>
        <input type="number" name = "idade">

        <button type = "submit">Enviar</button>
    </form>
</body>
</html>