<?php

$frutas = ["Morango","Amora","Manga","Banana","Laranja"];

function ordemAlfabetica($frutas){
    sort($frutas);
    foreach($frutas as $f){
        echo "$f <br>";
    }
}

ordemAlfabetica($frutas);

?>