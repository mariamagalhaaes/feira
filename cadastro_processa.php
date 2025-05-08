<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    echo "<h1>Cadastro Realizado</h1>";
    echo "<p>O participante <strong>$nome</strong> foi cadastrado com sucesso!</p>";
}
?>