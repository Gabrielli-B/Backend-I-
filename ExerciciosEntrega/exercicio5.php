<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
         <label for="numero1"> Digite o primeiro número:</label>
         <input type = "number" name="num1" id = "num1">

         
         <label for="numero2"> Digite o segundo número:</label>
         <input type = "number" name="num2" id = "num2" >

         
         <label for="operacao"> Digite a operação:(+, -, *,/)</label>
         <input type = "text" name="operacao" id = "operacao" >

        <button type="submit">calcular</button>

   </form> 
</body>
</html>


<?php

$num1 = 10;
$num2 = 2;
$operacao = "+";
    
    if($_SERVER["REQUEST_METHOD"] === "GET"){
        if(isset($_GET["num1"]) && $_GET["num1"] != ""){
            $num1 = $_GET["num1"];        
        }
        if(isset($_GET["num2"]) && $_GET["num2"] != ""){
            $num2 = $_GET["num2"];        
        }
        if(isset($_GET["operacao"]) && $_GET["operacao"] != ""){
            $operacao = $_GET["operacao"];        
        }
    calcular($num1,$num2,$operacao);
}

function calcular($a,$b,$operacao){
    if($operacao=="+"){
        echo "$a + $b = " . ($a+$b);
    }else if($operacao=="-"){
        echo "$a - $b = " . ($a-$b);
    }else if($operacao=="*"){
        echo "$a X $b = " . ($a*$b);
    }else if($operacao=="/"){
        if($b==0){
            echo "Erro:divisão por zero não é permitida";
            return;
        }
        echo"$a / $b = " . ($a/$b);
    }
}
?>