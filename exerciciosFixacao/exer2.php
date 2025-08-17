<?php
/*1 - Crie uma função chamada calcularMedia que receba 3 notas de um aluno e retorne a média.
Depois verifique se o aluno foi "Aprovado" (média ≥ 7) ou "Reprovado" (média < 7).*/

function calcularMedia($n1, $n2, $n3){
    return ($n1+$n2+$n3)/3;
}

function aprovadoReprovado($media){
    if($media >=7 && $media<=10){
        echo "Aprovado!<br>";
    }else if($media < 7 && $media >= 0){
        echo"Reprovado!<br>";
    }else{
        echo"Nota inválida!<br>";
    }
}
$media = calcularMedia(1,4,3);
aprovadoReprovado($media);

// 2 - Crie um array com 10 números inteiros. Exiba apenas os números pares usando um laço de repetição.
$numeros = [1,2,3,4,5,6,7,8,9,10];

for($i = 0; $i<count($numeros); $i++){
    if($numeros[$i] % 2 == 0){
        echo "$numeros[$i] <br>";
    }
}

foreach($numeros as $n){
    if($n % 2 == 0){
        echo "$n<br>";    
    }
}

/* 3 - Crie um array associativo onde a chave seja o nome de produtos e o valor seja o preço.
Mostre apenas os produtos que custam menos de 50 reais*/

$produtos = [
    "TV" => 1900,
    "Fone de ouvido" => 30.99,
    "Teclado" => 55.00,
    "Mouse" => 29.00,
    "Pote" => 19.00,
    "Copo" => 25.50,
];

function filtroProdutos($produtos){
    foreach($produtos as $nome => $preco){
        if($preco < 50.00){
            echo "$nome | $preco<br>";
        }
    }
}

filtroProdutos($produtos);

/* 4 - Crie uma lista de alunos com suas notas em um array associativo.
Exemplo: ["Maria" => 8, "João" => 6, "Ana" => 9].
Exiba apenas os alunos que tiraram nota maior ou igual a 7.*/

$alunos = [
    "Maria" => 8,
    "João" => 6,
    "Ana" => 9
];

function filtroAluno($alunos){
    foreach($alunos as $nome => $nota){
        if($nota <= 7){
            echo "$nome | $nota";
        }
    }
}
filtroAluno($alunos);

// 5 - Crie uma função que receba um array de números e retorne o maior número desse array.
$arrayNumeros = [3,7,1,5,20,6,55,2,8,19];

function maiorNumero($numeros){
    return max($numeros);//Encontrar o maior valor numérico em uma lista
    //strings, o PHP compara elas em ordem alfabética, ou seja, ele vai retornar o último nome da ordem alfabética 
}

echo maiorNumero($arrayNumeros);

// 6 - Crie uma função que receba um array de nomes e retorne apenas os nomes que começam com a letra "A".
$arrayNomes = ["Junior","Amanda","Antônio","Sofia","Carlos","Allan","Tifani","Arlei"];

function filtroNomeLetraA($nomes){
    $resultado = [];
    foreach($nomes as $n){
        if(strtoupper($n[0]) === "A"){
            // strtoupper garante que não importa se for "a" ou "A"
            $resultado[]=$n;
        }
    }
    return $resultado;
}
$arrayComNomesComA = filtroNomeLetraA($arrayNomes);

foreach($arrayComNomesComA as $nomes){
    echo"$nomes<br>";
}

/*Crie um programa que simule um sistema de login.
Tenha um array associativo com usuário e senha (ex.: "admin" => "1234") e verifique se os dados digitados pelo usuário estão corretos.*/

$usuarios = [
    "Admin" => 1234,
    "Visitante" => 5678    
];

function verificarCredenciais($usuarios, $nomeUsuario, $senhaUsuario){
    $aux = false;
    foreach( $usuarios as $nome => $senha){
        if($nome === $nomeUsuario && $senha === $senhaUsuario){
            $aux = true;
        }
    }
    if($aux == true){
        echo "ACESSO PERMITIDO!<br>";
    }else{
        echo"ACESSO NEGADO! senha ou nome de usuário incorretos...<br>";
    }
}

verificarCredenciais($usuarios, "Admin",1234);
verificarCredenciais($usuarios, "adimin",1234);
verificarCredenciais($usuarios, "Visitante",1234);
verificarCredenciais($usuarios, "Visitante",5678);

// ou....
/*function verificarCredenciais($usuarios, $nomeUsuario, $senhaUsuario){
    if(isset($usuarios[$nomeUsuario]) && $usuarios[$nomeUsuario] === $senhaUsuario){
        echo "ACESSO PERMITIDO!<br>";
    } else {
        echo "ACESSO NEGADO! senha ou nome de usuário incorretos...<br>";
    }
} OBS: isset =verifica se o usuário existe na lista*/
?>