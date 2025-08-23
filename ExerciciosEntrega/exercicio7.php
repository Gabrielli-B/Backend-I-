<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "GET">
        <label for="quatidadeAlunos">Quantos alunos deseja cadastrar? </label>
        <input type="number" name = "quantidadeAlunos" id = "quantidadeAlunos">
        <button type = "submit">Enviar</button>
    </form>

</body>
</html>

<?php
if(isset($_GET["quantidadeAlunos"])) {
    $qtd = $_GET["quantidadeAlunos"];
    echo "<form method='GET'>";
    for($i=1; $i<=$qtd; $i++) {
        echo "<h3>Aluno $i</h3>";
        echo "Nome: <input type='text' name='nome[]' required><br>";
        echo "Nota: <input type='number' name='nota[]' required><br><br>";
    }
    echo "<input type='hidden' name='quantidadeAlunos' value='$qtd'>";
    echo "<button type='submit'>Cadastrar</button>";
    echo "</form>";
}

if(isset($_GET['nome']) && isset($_GET['nota'])) {
    $nomes = $_GET['nome'];
    $notas = $_GET['nota'];

   
    echo "<h2>Lista de alunos e notas</h2>";
    $soma = 0;
    for($i=0; $i<count($nomes); $i++) {
        echo $nomes[$i] . ": " . $notas[$i] . "<br>";
        $soma += $notas[$i];
    }

    $media = $soma / count($notas);
    echo "<h3>Média da turma: " . $media . "</h3>";

    echo "<h3>Aprovados (nota >= 7)</h3>";
    for($i=0; $i<count($nomes); $i++) {
        if($notas[$i] >= 7) echo $nomes[$i] . "<br>";
    }

    echo "<h3>Reprovados (nota < 7)</h3>";
    for($i=0; $i<count($nomes); $i++) {
        if($notas[$i] < 7) echo $nomes[$i] . "<br>";
    }

    echo '<form method="GET">
            <label for="buscarAluno">Pesquisar aluno:</label>
            <input type="text" name="buscarAluno" id="buscarAluno">
            <button type="submit">Buscar</button>';
    for($i=0; $i<count($nomes); $i++) {
        echo "<input type='hidden' name='nome[]' value='".$nomes[$i]."'>";
        echo "<input type='hidden' name='nota[]' value='".$notas[$i]."'>";
    }
    echo '</form>';

    if(isset($_GET['buscarAluno']) && !empty($_GET['buscarAluno'])) {
        $nomeBusca = strtolower($_GET['buscarAluno']);
        $encontrado = false;
        for($i=0; $i<count($nomes); $i++){
            if(strtolower($nomes[$i]) == $nomeBusca){
                echo "<h3>Aluno: " . $nomes[$i] . " | Nota: " . $notas[$i] . "</h3>";
                $encontrado = true;
                break;
            }
        }
        if(!$encontrado){
            echo "<h3>Aluno não encontrado.</h3>";
        }
    }
}
?>