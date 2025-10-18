<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="mensagem">Mensagem:</label>
        <input type="text" name="mensagem" required>

        <label for="vezes">Vezes:</label>
        <input type="number" name="vezes" required>

        <button type="submit">Enviar</button>

    </form>
</body>
</html>

<?php

require_once "funcao.php";

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $mensagem = $_POST["mensagem"];
    $vezes = $_POST["vezes"];

    repetirMensagem($mensagem,$vezes);
}

?>