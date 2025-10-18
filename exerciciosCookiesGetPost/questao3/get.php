<?php
    require_once "soma.php";

    if($_SERVER["REQUEST_METHOD"] === "GET"){
        if(isset($_GET["numA"])){
            $numA = $_GET["numA"];
        }
        if(isset($_GET["numB"])){
            $numB = $_GET["numB"];
        }

        if(!empty($numA) && !empty($numB)){
            somar($numA,$numB);
        }else{
            echo"Para apropriedade da soma se aplicar os dois números devem ser inseridos!!!!";
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
    <form method="GET">
        <label for="numA">Informe o primeiro número</label>
        <input type="number" name="numA">

        <label for="numB">Informe o segundo número</label>
        <input type="number" name="numB">

        <button type = "submit">Enviar</button>
    </form>
</body>
</html>
