<?php
require "usuarios.php";
require "verificarCredenciais.php";

verificaCredencial($usuarios,"Maria","Ma10@289");
verificaCredencial($usuarios,"Maria",2520);
verificaCredencial($usuarios,"João","Jo58@905");
verificaCredencial($usuarios,"João",4567);
?>