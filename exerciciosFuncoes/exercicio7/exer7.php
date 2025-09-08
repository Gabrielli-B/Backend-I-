<?php
$pessoas = [
    "Maria"   => 10,
    "João"    => 21,
    "Arthur"  => 30,
    "Mark"    => 19,
    "Maia"    => 40,
    "Melissa" => 22,
    "Sara"    => 20
];

function maioresDeVinteUm($pessoas){
    $pessoasMaioresVinteUm = [];

    foreach($pessoas as $nome => $idade){
        if($idade>21){
            $pessoasMaioresVinteUm[$nome] = $idade;
        }
    }
    return $pessoasMaioresVinteUm;
}

function exibirMaioresDeVinteUm($pessoasMaioresVinteUm){
    foreach($pessoasMaioresVinteUm as $nome => $idade){
        echo"$nome | $idade<br>";
    }
}

exibirMaioresDeVinteUm(maioresDeVinteUm($pessoas));

?>