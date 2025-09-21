<?php

session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: form.html");
    exit;
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
    <h1>Bem-vindo, <?php echo htmlspecialchars($_SESSION['usuario']); ?>!</h1>
    <form action="logout.php" method="post">
        <button type="submit">Sair</button>
    </form>
</body>
</html>