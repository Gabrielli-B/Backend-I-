<?php

    $arquivo = "arquivo.txt";

    function inserirDados($nome,$sobrenome,$idade,$cidade){
        global $arquivo;
        $linha = "Seu nome é $nome" . " $sobrenome" .  " você tem $idade de idade e mora em $cidade.\n";
        $abre = fopen($arquivo, "a");
        fwrite($abre,$linha);
        fclose($abre);
    }

    function exibirDadosArquivo($arquivo){
        if(file_exists($arquivo)){
           echo nl2br(file_get_contents($arquivo));
        }else{
            echo "Nenhum dado encontrado no arquivo.";
        }
    }

  function removerDadosArquivo($arquivo, $nome, $sobrenome) {
        if (!file_exists($arquivo)) {
            echo " Arquivo não encontrado! <br>";
            return;
        }
        $leitura = fopen($arquivo, "r");
        $temp = fopen("temp.txt", "w");

        while (($linha = fgets($leitura)) !== false) {
            if (!(strpos($linha, $nome) !== false && strpos($linha, $sobrenome) !== false)) {
                fwrite($temp, $linha);
            }
        }

        fclose($leitura);
        fclose($temp);

        rename("temp.txt", $arquivo);

        echo "Linha removida com sucesso!<br>";
    }  

    function apagarArquivo($arquivo){
        if (file_exists($arquivo)) {
             unlink($arquivo); 
            echo "Arquivo excluído com sucesso!";
        } else {
            echo "O arquivo não existe.";
        }
    }
?>