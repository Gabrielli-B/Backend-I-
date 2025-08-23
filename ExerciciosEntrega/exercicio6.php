<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de viagem</title>
</head>
<body>
    <form method = "GET">
        <label for="distancia">Digite a distância em KM: </label>
        <input type="number" name = "distancia" id = "distancia">

        <label for="consumo">Digite o consumo do carro(Km por litro): </label>
        <input type="number" name = "consumo" id = "consumo">

        <label for="combustivel">Digite o preço do combustível por litro: (Km por litro): </label>
        <input type="number" name = "combustivel" id = "combustivel">

        <button type = "submit">Submeter</button>
    </form>
</body>
</html>

<?php
$distancia = 300;
$consumo = 12;
$combustivel = 5.00;

if($_SERVER["REQUEST_METHOD"] === "GET"){
    if(isset($_GET["distancia"]) && $_GET["distancia"] != ""){
        $distancia = $_GET["distancia"];        
    }
    if(isset($_GET["consumo"]) && $_GET["consumo"] != ""){
        $consumo = $_GET["consumo"];        
    }
    if(isset($_GET["combustivel"]) && $_GET["combustivel"] != ""){
        $combustivel = $_GET["combustivel"];        
    }
    $litrosNecessariosCalculado = litrosNecessarios($distancia,$consumo);
    $custoViagemCalculado = custoViagem($combustivel,$litrosNecessariosCalculado);
    exibirRelatorio($litrosNecessariosCalculado,$custoViagemCalculado);
}

function litrosNecessarios($distancia,$consumo){
    return $distancia/$consumo;
}
function custoViagem($combustivel, $litrosNecessarios){
    return $litrosNecessarios * $combustivel;
}
function exibirRelatorio($litrosNecessarios,$custoViagem){
   echo"RELATÓRIO DE VIAGEM:<br>";
   echo"Litros necessários | $litrosNecessarios<br>";
   echo"Custo Viagem | R$ $custoViagem<br>";
}
?>