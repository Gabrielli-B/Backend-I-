<?php

function multiplicar($num,$limite){
    for($i=1; $i<=$limite; $i++){
        echo"$num X $i = ". $num*$i . "<br>";
    }
}

?>