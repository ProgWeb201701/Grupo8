<?php

session_start();
include '../Model/BD/ConexaoBanco.php';

$id = $_POST['id'];

$conexao = new ConexaoBanco();
$result = $conexao->executeQuery('SELECT * from tcc WHERE idTcc='.$id);
$row = mysqli_fetch_assoc($result);
header('Content-type: application/pdf');
header('Content-Disposition: inline;');
header('Accept-Rangers: bytes');
echo $row['conteudo'];


