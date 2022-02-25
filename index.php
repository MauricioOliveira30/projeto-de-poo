<?php
$acao = 'recuperar';
require 'controller.php';





?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="controller.php?acao=inserir" method="post">
    <label >Nome</label><br>
    <input type="text" name="nome">
    <label >Email</label>
    <input type="text" name="email">
    <input type="submit" value="Cadastrar">
    </form>
</body>
</html>