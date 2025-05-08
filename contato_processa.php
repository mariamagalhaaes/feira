<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    echo "<h1>Mensagem Enviada</h1>";
    echo "<p>O e-mail de <strong>$nome</strong> foi enviado com sucesso!</p>";
}
?>
