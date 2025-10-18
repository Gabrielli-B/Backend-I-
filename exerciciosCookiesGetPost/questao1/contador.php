<?php
if(isset($_COOKIE['visitas'])){
   $visitas = $_COOKIE['visitas'] + 1;

    setcookie('visitas',$visitas,time()+3600);

    echo "Você já visitou esta página $visitas vezes.";
}else{
    setcookie('visitas',1,time()+3600);
    echo"Bem-vindo! Esta é sua primeira visita";
}

?>