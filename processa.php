<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $endereco = $_POST["endereco"];
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];
    $nota4 = $_POST["nota4"];
    $nome_pai = $_POST["nome_pai"];
    $nome_mae = $_POST["nome_mae"];
    $escola = $_POST["escola"];

    echo "<h2>Dados Recebidos:</h2>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>CPF:</strong> $cpf</p>";
    echo "<p><strong>Endereço:</strong> $endereco</p>";
    echo "<p><strong>Notas:</strong> $nota1, $nota2, $nota3, $nota4</p>";
    echo "<p><strong>Nome do Pai:</strong> $nome_pai</p>";
    echo "<p><strong>Nome da Mãe:</strong> $nome_mae</p>";
    echo "<p><strong>Escola:</strong> $escola</p>";
}
?>
