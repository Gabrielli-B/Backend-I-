<?php

function validarCredencial($nome,$senha,$catalogoUsuarios){
    if(isset($catalogoUsuarios[$nome]) && $catalogoUsuarios[$nome] === $senha){
        return true;
    }
    return false;
}


?>