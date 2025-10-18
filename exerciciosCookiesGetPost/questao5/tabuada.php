<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for="num">Informe o número:</label>
        <input type="number" name="num" required>

        <label for="limite">Informe o limite:</label>
        <input type="number" name="limite" required>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>

<?php
require_once "multiplicar.php";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    if(isset($_POST["num"]) && !empty($_POST["num"]) && isset($_POST["limite"]) && !empty($_POST["limite"])){
        $num = $_POST["num"];
        $limite = $_POST["limite"];
        multiplicar($num,$limite);
    }
}

?>