<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="nome">Informe seu nome:</label>
        <input type="text" name="nome" required>

        <label for="sobrenome">Informe seu sobrenome:</label>
        <input type="text" name="sobrenome" required>

        <br>

        <label for="idade">Informe sua idade:</label>
        <input type="number" name="idade" id="idade">

        <label for="cidade">Informe sua cidade:</label>
        <input type="text" name="cidade">

        <br>
        <button type="submit">Enviar</button>
    </form>

    <br>
    <form method="POST">

        <label for="nomeExcluir">Informe o nome de quem deseja excluir:</label>
        <input type="text" name="nomeExcluir">
        <br>
        <label for="sobrenomeExcluir">Informe o sobrenome de quem deseja excluir:</label>
        <input type="text" name="sobrenomeExcluir">

        <button type="submit">Enviar</button>
    </form>
    <br><br><br>

    <form method="POST">
        <button type="submit" name="apagar">Apagar arquivo</button>
    </form>
</body>
</html>

<?php

    require_once "arquivo.php";

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        if(isset($_POST["nome"]) && isset($_POST["sobrenome"]) && !empty($_POST["nome"]) && !empty($_POST["sobrenome"])) {
            $nome = $_POST["nome"];
            $sobrenome = $_POST["sobrenome"];
            $idade = !empty($_POST["idade"]) ? $_POST["idade"] : "Não informado";
            $cidade = !empty($_POST["cidade"]) ? $_POST["cidade"] : "Não informado";
            inserirDados($nome,$sobrenome,$idade,$cidade);
            //exibirDadosArquivo("arquivo.txt");

            header("Location: " . $_SERVER['PHP_SELF']);
            exit;
        }
        if (isset($_POST["nomeExcluir"]) && isset($_POST["sobrenomeExcluir"])) {
            $nomeExcluir = $_POST["nomeExcluir"];
            $sobrenomeExcluir = $_POST["sobrenomeExcluir"];
            removerDadosArquivo("arquivo.txt", $nomeExcluir, $sobrenomeExcluir);
            //exibirDadosArquivo("arquivo.txt");
            header("Location: " . $_SERVER['PHP_SELF']);
            exit;
       }
       if(isset($_POST['apagar'])){
            apagarArquivo("arquivo.txt");
            header("Location: " . $_SERVER['PHP_SELF']);
            exit;
        }
    }  
?>