<?php

function validarSenha($senha){
    //strlen() => retorna o tamanho da string, quantos caracteres ela tem
    //verifico tamanhi mínimo!!!
    if(strlen($senha)<8){
        return "A senha deve ter pelo menos 8 caracteres!<br>";
    }
    //verifica se um texto existe dentro de outro e encontra a posição, 
    //caso ele não encontre ele retorna false, se encontrar a posição!
    if(strpos($senha, " ") !== false){
        return "A senha não pode conter espaços em branco.";
    }

    $temMaiuscula = false;
    $temMinuscula = false;
    $temNumero = false;

    //str_split() => quebra a string em partes e coloca dentro de um array
    foreach (str_split($senha) as $caractere) {
    
        if (ctype_upper($caractere)) {
            $temMaiuscula = true;
        }
        if (ctype_lower($caractere)) {
            $temMinuscula = true;
        }
        if (is_numeric($caractere)) {
            $temNumero = true;
        }
    }

    if (!$temMaiuscula) {
        return "A senha deve conter pelo menos uma letra maiúscula.";
    }
    if (!$temMinuscula) {
        return "A senha deve conter pelo menos uma letra minúscula.";
    }
    if (!$temNumero) {
        return "A senha deve conter pelo menos um número.";
    }

    // 6 - Pelo menos um caractere especial
    // Podemos definir um conjunto de símbolos aceitos
    $caracteresEspeciais = "!@#$%^&*()-_=+[]{};:,.<>/?|\\";
    //verifica se tem algum caractere da lista
    if (!strpbrk($senha, $caracteresEspeciais)) {
        return "A senha deve conter pelo menos um caractere especial.";
    }

    // Se passou em tudo:
    return "Senha válida!";
}

?>