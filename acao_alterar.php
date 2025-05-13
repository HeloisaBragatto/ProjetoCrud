<?php

include 'conexao.php';


session_start();

$NomeNovo = $_POST['nome'];
$ApelidoNovo = $_POST['apelido'];
$NascimentoNovo = $_POST['nascimento'];
$AtivoNovo = $_POST['ativo'];

if($NomeNovo != ""){
    $sqlnome= mysqli_query($conexao, "update cadastro set nome = '$NomeNovo' where id=" . $_SESSION['id']);
}

if($ApelidoNovo != ""){
    $sqlapelido= mysqli_query($conexao, "update cadastro set apelido = '$ApelidoNovo' where id=" . $_SESSION['id']);
}

if($NascimentoNovo != ""){
    $sqlnascimento= mysqli_query($conexao, "update cadastro set nascimento = '$NascimentoNovo' where id=" . $_SESSION['id']);
}

$sqlativo = mysqli_query($conexao, "update cadastro set ativo = '$AtivoNovo' where id=" . $_SESSION['id']);

mysqli_close($conexao);
session_destroy();
session_abort();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            text-align: center;
            background-color: #e7e7e7;
        }
    </style>
    <title>Banco de Dados</title>
</head>
<body>
    <h1>Alterado com Sucesso.</h1>
    <br><br>
    <button onclick="window.location='inserir.html'">Inserir</button>
    <button onclick="window.location='acao_visualizar.php'">Visualizar</button>
    <button onclick="window.location='atualizar.html'">Atualizar</button>
    <button onclick="window.location='apagar.html'">Apagar</button>
</body>
</html>