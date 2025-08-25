<?php

require_once "verificaSenhaForte.php";

echo validarSenha("Teste123!"); 
echo "<br>";
echo validarSenha("teste123!"); 
echo "<br>";
echo validarSenha("TESTE123!"); 
echo "<br>";
echo validarSenha("TesteABC!"); 
echo "<br>";
echo validarSenha("Teste1234"); 
echo "<br>";
echo validarSenha("Tes 123!");  

?>