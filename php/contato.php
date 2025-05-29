<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST["nome"]  );
    $email = htmlspecialchars($_POST["email"]  );
    $mensagem = nl2br(htmlspecialchars($_POST["mensagem"]  ));

    echo "<h2>Mensagem recebida com sucesso!</h2>";
}
?>
