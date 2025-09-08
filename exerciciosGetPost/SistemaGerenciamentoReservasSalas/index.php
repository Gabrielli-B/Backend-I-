<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h3>Buscar sala:</h3>
    <form method="GET">
        <label for="nomeSala">Insira o nome da sala:</label>
        <input type="text" name="nomeSala" id="nomeSala">

        <button type="submit">Verificar</button>
    </form>

    <?php        
        require_once "catalogoSalas.php";
        require_once "validarSala.php";

        $nomeSala = "";
        if($_SERVER["REQUEST_METHOD"] === "GET"){
            if(isset($_GET["nomeSala"])){
                $nomeSala = $_GET["nomeSala"];

                if($nomeSala !== ""){
                    echo validarSala($nomeSala, $catalogoSalas);    
                }else{
                    salasDisponiveis($catalogoSalas);
                }
            }
        }
    ?>
    <br><br>

    <h3>Reservar sala:</h3>

    <form method="POST">
        <label for="salaNomeReserva">Insira o nome da sala:</label>
        <input type="text" name="salaNomeReserva" id="salaNomeReserva">

        <br><br>

        <label for="qtdPessoasReserva">Insira o número de pessoas para reservar: </label>
        <input type="number" name="qtdPessoasReserva" id="qtdPessoasReserva">

        <button type="submit">Reservar</button>
    </form>

    <?php
        require_once "gerenciarReserva.php";

        if($_SERVER["REQUEST_METHOD"] === "POST"){
            if(isset($_POST["salaNomeReserva"])){
                $salaNomeReserva = $_POST["salaNomeReserva"];
            }
            if(isset($_POST["qtdPessoasReserva"])){
                $qtdPessoasReserva = $_POST["qtdPessoasReserva"];
            }
           echo reservar($salaNomeReserva,$qtdPessoasReserva,$catalogoSalas,$reservas);
        }
    ?>

</body>
</html>