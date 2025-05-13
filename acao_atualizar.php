<?php

include 'conexao.php';
session_start();

if (isset($_POST['atualizarid'])) {
    $_SESSION['id'] = $_POST['atualizarid'];
} else {
    die("ID não fornecido.");
}

$sqlatualizar = mysqli_query($conexao, "select * from cadastro where id = " . $_SESSION['id']);

$dados = mysqli_fetch_array($sqlatualizar);

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
    <form action="acao_alterar.php" method="post">
        <label>Id:</label>
        <label> <?php echo $_SESSION['id'];?> </label>
        <br>

        <label>Nome:</label>
        <input type="text" name="nome" placeholder=" <?php echo $dados['nome'];?> "> 
        <br><br>

        <label>Apelido:</label>
        <input type="text" name="apelido" placeholder=" <?php echo $dados['apelido'];?> "> 
        <br><br>

        <label>Data de Nascimento:</label>
        <input type="date" name="nascimento" placeholder=" <?php echo $dados['nascimento'];?> "> 
        <br><br>

        <label>Ativo:</label>
        <label>Sim</label>
        <input type="checkbox" name="ativo" value=1 <?php echo ($dados['ativo'] == 1) ? 'checked' : '';?> >
        <br><br>

        <input type="submit" value="Alterar">
    
    </form>
</body>
</html>