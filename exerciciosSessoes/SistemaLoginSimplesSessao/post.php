<?php
require_once "catalogoUsuarios.php";
require_once "validarCredenciais.php";

$nomeUsuario = "";
$senhaUsuario = "";
if($_SERVER["REQUEST_METHOD"] === "POST"){
    if(isset($_POST["nomeUsuario"])){
        $nomeUsuario = $_POST["nomeUsuario"];
    }
    if(isset($_POST["senhaUsuario"])){
        $senhaUsuario = $_POST["senhaUsuario"];
    }
    if(validarCredencial($nomeUsuario,$senhaUsuario,$catalogoUsuarios)){
        session_start();
        $_SESSION['usuario'] = $nomeUsuario;
        header("Location: perfil.php");
        exit;
    }else{
        echo"SENHA OU USUÁRIO DIGITADO ERRADO!";;
    }
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
    <form method="POST">
        <label for="nomeUsuario">Nome usuário:</label>
        <input type="text" name="nomeUsuario" id="nomeUsuario">

        <label for="senhaUsuario">Informe a senha:</label>
        <input type="text" name="senhaUsuario" id="senhaUsuario">

        <button type="submit">Entrar</button>
    </form>
</body>
</html>