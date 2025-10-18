<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="nomePost">Envie seu nome via Post:</label>
        <input type="text" name="nomePost">

        <button type="submit">Enviar</button>
    </form>

    <br><br><br><br>

    <form method="GET">
        <label for="nomeGet">Acessar novamente via Get</label>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
    if(isset($_POST["nomePost"]) && !empty($_POST["nomePost"])){
        $nome = $_POST["nomePost"];

        setcookie('nome',$nome,time()+86400);
        echo "Bem-vindo, $nome! Seu nome foi salvo nos Cookies";
    }
}

if($_SERVER["REQUEST_METHOD"]==="GET"){
    if(isset($_COOKIE['nome'])){
        echo "Bem-vindo de volta, " . $_COOKIE['nome'] ." !";
    }else{
        echo "Olá, visitante! Envie seu nome via POST.";
    }
}

?>