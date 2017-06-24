<?php

include '../Model/BD/ConexaoBanco.php';
ini_set('display_errors', 1);

$usuario = $_POST['user'];

if ($usuario == '1') {
    $conexao = new ConexaoBanco();

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $query = "INSERT INTO aluno (nome, senha, email)
    VALUES ('$nome','$senha','$email')";
    $conexao->requisicoesBanco($query);
} else {
    $conexao = new ConexaoBanco();


    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $query = "INSERT INTO professor (nome, senha, email)
    VALUES ('$nome','$senha','$email')";
    $conexao->requisicoesBanco($query);
}
