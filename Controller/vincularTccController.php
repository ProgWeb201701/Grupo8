<?php

session_start();
include '../Model/BD/ConexaoBanco.php';
if ((!isset($_SESSION['login']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('Location:../index.php');
}
$logado = $_SESSION['login'];
$senha = $_SESSION['senha'];
$alunoLogin = $_SESSION['alunoTabela'];
$conexao = new ConexaoBanco();
$query = "SELECT * FROM aluno WHERE idAluno = " . $alunoLogin['idAluno'];
$result = $conexao->executeQuery($query);
$alunoTabela = mysqli_fetch_assoc($result);
$id = $alunoLogin['idAluno'];
