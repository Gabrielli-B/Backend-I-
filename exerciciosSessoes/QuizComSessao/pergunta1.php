<?php
  session_start();
  
  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['pergunta1'])){
        $_SESSION['respostas']['p1'] = $POST['pergunta1'];
        header("Location: pergunta2.php");
        exit;
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
        <p>1- Qual a capital do brasil?</p>

        <input type="radio" name="pergunta1" value = "saoPaulo">
        <label for="saoPaulo">São Paulo</label>

        <input type="radio" name="pergunta1" value = "rioJaneiro">
        <label for="rioJaneiro">Rio de janeiro</label>

        <input type="radio" name="pergunta1" value = "brasilia">
        <label for="brasilia">Brasilia</label>

        <button type = "submit">Enviar</button>
    </form>
</body>
</html>

