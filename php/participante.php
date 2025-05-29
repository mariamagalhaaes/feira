<?php

if (isset($_POST ["nome"])){
    $nome=$_POST["nome"];
    $idade=$_POST["idade"];
    $tipo = $_POST["tipo"];
    $documento = $_POST["documento"];

    echo "Seu cadastro foi realizado como '$tipo' foi realizado!";
}

