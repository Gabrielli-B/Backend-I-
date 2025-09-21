<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="email">Informe seu E-mail:</label>
        <input type="text" name = "email">

        <label for="senha">Informe sua senha:</label>
        <input type="password" name = "senha">

        <button type = "submit">Enviar</button>

    </form>
</body>
</html>

<?php
require_once "function.php";

if($_SERVER["REQUEST_METHOD"] === "POST" && (isset($_POST["email"]) || isset($_POST["senha"]))){
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    if(empty($email) || empty($senha)){
        echo "ERRO: Senha ou E-mail não foram inseridos!";
        return;
    }
    echo confirmacaoEmail($email);
}
?>