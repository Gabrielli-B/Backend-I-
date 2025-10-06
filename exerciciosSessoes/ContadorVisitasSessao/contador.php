<?php
session_start();

if(isset($_SESSION['visitas'])){
    $_SESSION['visitas']++;
}else{
    $_SESSION['visitas'] = 1;
}

echo "Você já visitou essa página ". $_SESSION['visitas'] . " Vezes nesta sessão.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action = "reset.php">
        <button type = "submit">Reiniciar Contador</button>
    </form>
</body>
</html>