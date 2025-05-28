<?php

$nome = "";
$sobrenome = "";
$idade = null;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['txtnome'];
    $sobrenome = $_POST['txtsobrenome'];
    $idade = $_POST['txtidade'];
}



$mensagem = "Nome: $nome<br>Sobrenome: $sobrenome<br>Idade: $idade";

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <form class="formulario" action="forms.php" method="post">
        <label>Nome:</label> 
        <input type="text" name = "txtnome" placeholder="Digite seu nome" required>
        <br>
        <br>
        <label>Sobrenome:</label>
        <input type="text"  name= "txtsobrenome" placeholder="Digite seu sobrenome" required>
        <br>
        <br>
        <label>Idade:</label>
        <input type="number" name= "txtidade" placeholder="Digite sua idade" required>
        <br>
        <br>
        <input type="submit" value="Ação">
    </form>
    <h1><?php echo "$mensagem";?></h1>
</body>
</html>