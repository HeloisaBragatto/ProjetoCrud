<?php

include 'conexao.php';

$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$nascimento = $_POST['nascimento'];
$ativo = $_POST['ativo'];

$sqlinserir = "insert into cadastro (nome, apelido, nascimento, ativo)
                values ('$nome','$apelido','$nascimento','$ativo')";


$query = mysqli_query($conexao,$sqlinserir) or die ("Erro ao Cadastrar");

mysqli_close($conexao);
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
    <h1>Inserido com Sucesso.</h1>
    <br><br>
    <button onclick="window.location='inicial.html'">Página Inicial</button>
    <button onclick="window.location='acao_visualizar.php'">Visualizar</button>
    <button onclick="window.location='atualizar.html'">Atualizar</button>
    <button onclick="window.location='apagar.html'">Apagar</button>
</body>
</html>