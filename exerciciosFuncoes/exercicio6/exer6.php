<?php
$saldoTotal = 0;

function depositar($v1,$v2,$v3){
    global $saldoTotal;

    $saldoTotal += ($v1+$v2+$v3);
}

function mostrarSaldoTotal(){
    global $saldoTotal;
    echo"Saldo total: R$ $saldoTotal";
}

depositar(10,20,30);
depositar(100,250,310);
mostrarSaldoTotal();
?>