<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "GET">
        <h3>Buscar produto</h3>
        <br>
        <label for="buscarProduto">Digite o nome do produto:</label>
        <input type="text" name = "buscarProduto" id = "buscarProduto" >
        <button type="submit">Buscar</button>
    </form> 
    
    <?php
        require_once "verificarCatalogo.php";
        require_once "catalogoProdutos.php";
        $nomeProduto ="";

        if($_SERVER["REQUEST_METHOD"] === "GET"){
            if(isset($_GET["buscarProduto"]) && !empty($_GET["buscarProduto"]) ){
                $nomeProduto = $_GET["buscarProduto"];

                if(verificaProdutoNoCatalogo($produtosCatalogo,$nomeProduto)){
                    echo "Produto está disponível no catálogo<br>";
                    infoProduto($produtosCatalogo,$nomeProduto);
                }else{
                    echo"ATENÇÃO! PRODUTO NÃO EXISTE NO CATÁLOGO";
                }
            }
        }
    ?>


    <br><br>
    <h3>Adiconar ao carrinho</h3>

    <form method = "POST">
        <label for="nomeProduto">Digite o nome do produto:</label>
        <input type="text" name="nomeProduto" id="nomeProduto" >
        
        <br><br>

        <label for="qtdProduto">Digite a quantidade que deseja adicionar no carrinho</label>
        <input type="number" name="qtdProduto" id="qtdProduto">

        <button type="submit">Adicionar</button>
    </form>

    <?php
        require_once "carrinho.php";
        require_once "catalogoProdutos.php";

        if($_SERVER["REQUEST_METHOD"] === "POST"){
            if(isset($_POST["nomeProduto"])){
                $nomeProduto = $_POST["nomeProduto"];
            }
            if(isset($_POST["qtdProduto"])){
                $qtd = $_POST["qtdProduto"];;
            }
            adicionarCarrinho($nomeProduto,$produtosCatalogo,$carrinho,$qtd);
            echo infoCarrinho($carrinho);
            echo"Total R$ " . calculaPrecoTotalCarrinho($carrinho,$produtosCatalogo);
        }
    ?>
</body>
</html>

