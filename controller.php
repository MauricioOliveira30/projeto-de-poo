<?php
require 'conexao.php';
require  'model.php';
require  'crud.php';

$acao = isset($_GET['acao']) ? $_GET['acao'] :$acao;


if($acao == 'inserir'){
    $nome = new Model();
    $email = new Model();

    $nome->__set('nome',$_POST['nome']);
    $email->__set('email',$_POST['email']);  

    $conexao  = new Conexao();

    $tarefa = new Crud($conexao,$nome,$email);
    $tarefa->inserir(); 
    header('Location:index.php');
}


    