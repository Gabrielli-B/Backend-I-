<?php
session_start();

unset($_SESSION['visitas']); //→ apaga apenas a variável específica
//session_destroy(); → encerra a sessão inteira, apagando todas as variáveis da sessão.

header("location: contador.php");

?>