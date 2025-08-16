<?php
//1 - Declare três variáveis: nome, idade e cidade. Logo após exiba uma frase que combine essas variáveis em uma única frase, informando o nome da pessoa, a idade e onde ela mora.
$nome = "Maria";
$idade1 = 10;
$cidade = "Charqueadas";

echo "Meu nome é " . $nome . ", tenho ". $idade1 . " de idade, eu moro em " . $cidade . " ! <br>";

//2 - Declare uma variável idade, logo após verifique se idade é maior que 18, se sim exibir na tela “Você é maior de idade”. Caso contrário exiba “Você é menor de idade”.
$idade2 = 19;
if($idade2 >= 18){
    echo" Você é maior de idade!<br> ";
}else if($idade2 < 0){
    echo"Idade inválida! <br>";
}else{
    echo"Você é menor de idade!<br>";
}

//3 - Crie um array com 5 frutas e exiba cada fruta em uma linha separada usando um laço de repetição, porém esta lista de frutas deve ser mostrada em ordem alfabética.
$frutas = ["Maça" , "Banana", "Laranja","Uva","Manga"];
sort($frutas);//ordem crescente / alfabética
for($i = 0; $i<5; $i++){
    echo $frutas[$i] . "<br>";
}

for($i = 0; $i<count($frutas); $i++){
    echo $frutas[$i] . "<br>";
}

foreach($frutas as $f){
    echo $f . "<br>";
}

// 4 - Crie um array associativo com nome e curso, exemplos: João, TSI, Maria, ECA, Osvaldo INF, Luiza MCT e logo após mostre na tela o nome dos alunos e os cursos aos quais eles estão cursando.
$alunos = [
    "João"    => "TSI",
    "Maria"   => "ECA",
    "Osvaldo" => "INF",
    "Luiza"   => "MCT"
];

foreach ($alunos as $nome => $curso){
    echo "$nome | $curso<br>";
}

//5 - Crie um array associativo com nome e curso, exemplos: João, TSI, Maria, ECA, Osvaldo INF, Luiza MCT, Enzo, TSI, Lucas, TSI e logo após mostre na tela somente os alunos do TSI.
$alunos2 = [
    "João"    => "TSI",
    "Maria"   => "ECA",
    "Osvaldo" => "INF",
    "Luiza"   => "MCT",
    "Enzo"    => "TSI",
    "Lucas"   => "TSI"
];

foreach($alunos2 as $nome => $curso){
    if($curso === "TSI"){
        echo "$nome | $curso <br>";
    }
}

/*6 - Escreva uma função chamada depositar que receba como parâmetros 3 valores de depósitos e adicione esses valores ao saldo total armazenado na variável $saldoTotal.
Em seguida, crie outra função chamada mostrarSaldoTotal, que deverá exibir o valor do saldo total acumulado.*/
$saldoTotal = 0;
function depositar($valor1, $valor2, $valor3){
    global $saldoTotal; //acessa a variável global
   $saldoTotal+=($valor1 + $valor2 + $valor3);
}

function mostrarSaldoTotal(){
    global $saldoTotal;
    echo"Saldo total = $saldoTotal<br>";
}

depositar(10,20,30);
mostrarSaldoTotal();
depositar(10,20,30);
mostrarSaldoTotal();

//outro jeito sem usar global...
$saldoTotal2 = 0;
function depositar2($saldo, $v1, $v2, $v3){
    return $saldo += ($v1 + $v2 + $v3);
}

function mostrarSaldoTotal2($saldo){
    echo "Saldo total = $saldo <br>";
}

$saldoTotal2 = depositar2($saldoTotal2, 50,100,100);
mostrarSaldoTotal2($saldoTotal2);

/*7 - Crie um array associativo em que a chave seja o nome da pessoa e o valor seja a idade.
Em seguida, crie uma função que receba este array associativo como parâmetro e retorne um novo array apenas com as pessoas que têm mais de 21 anos.
Exiba na tela o nome e a idade das pessoas que atendem ao critério de idade.*/
$pessoas = [
    "Maria"   => 10,
    "João"    => 21,
    "Antônio" => 3,
    "Carlos"  => 25,
    "Mafalda" => 80,
    "Jose"    => 8
];

function idadeSuperior($pessoas){
    $maiorVinteUm = [];
    foreach($pessoas as $nome => $idade){
        if($idade > 21){
            $maiorVinteUm[$nome] = $idade;
        }
    }
    return $maiorVinteUm;
}

$pessoasFiltradas = idadeSuperior($pessoas);

foreach($pessoasFiltradas as $nome => $idade){
    echo "$nome | $idade <br>";
}


?>