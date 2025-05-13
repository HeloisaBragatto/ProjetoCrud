<?php

include 'conexao.php';

$apagarid = $_POST['apagarid'];

$sqlapagar = "delete from cadastro where id = $apagarid";

$query = mysqli_query($conexao, $sqlapagar) or die ("Erro ao Deletar");

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
    <h1>Deletado com Sucesso.</h1>
    <br><br> 
    <button onclick="window.location='inicial.html'">Página Inicial</button>
    <button onclick="window.location='inserir.html'">Inserir</button>
    <button onclick="window.location='acao_visualizar.php'">Visualizar</button>
    <button onclick="window.location='atualizar.html'">Atualizar</button>
</body>
</html>