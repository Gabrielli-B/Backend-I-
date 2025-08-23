<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form method = "GET">
    <label for="celsius"> Temperatura em Celsius:</label>
    <input type = "number" name="celsius" id = "celsius" required>
    <button type="submit">subimeter</button>
   </form> 
</body>
</html>

<?php
 const FATOR_CONVERSAO = 1.8;

if($_SERVER["REQUEST_METHOD"] === "GET" && ISSET($_GET["celsius"])){
    $celsius = $_GET["celsius"];
    $fahrenheit = conversaoFahrenheit($celsius, FATOR_CONVERSAO);
    echo"Conversão realizada! Temperatura em $fahrenheit";
} 

function conversaoFahrenheit($celsius, $fator){
    return($celsius * $fator ) + 32;
}
?>