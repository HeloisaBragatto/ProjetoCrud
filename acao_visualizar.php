<?php

include 'conexao.php';

$sqlselecionar = "select * from cadastro";


$query = mysqli_query($conexao,$sqlselecionar) or die ("Erro ao Cadastrar");

while ($dados = mysqli_fetch_array($query)){

    echo "<b>Id :</b>" . $dados['id'] . "<br>";
    echo "<b>Nome :</b>" . $dados['nome'] . "<br>";
    echo "<b>Apelido :</b>" . $dados['apelido'] . "<br>";
    echo "<b>Nascimento :</b>" . $dados['nascimento'] . "<br>";
    echo "<b>Ativo :</b>" . $dados['ativo'] . "<br>";
    echo "<b>Data de Cadastro :</b>" . $dados['datacadastro'] . "<br><br>";
    
} 

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
    <br><br>
    <button onclick="window.location='inserir.html'">Inserir</button>
    <button onclick="window.location='acao_visualizar.php'">Visualizar</button>
    <button onclick="window.location='atualizar.html'">Atualizar</button>
    <button onclick="window.location='apagar.html'">Apagar</button>
</body>
</html>