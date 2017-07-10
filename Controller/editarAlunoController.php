<?php

session_start();

include '../Model/BD/ConexaoBanco.php';
if ((!isset($_SESSION['login']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('Location:../index.php');
}
$alunoLogin = $_SESSION['alunoTabela'];
$conexao = new ConexaoBanco();
$query = "SELECT * FROM aluno WHERE idAluno=" . $alunoLogin['idAluno'];
$result = $conexao->executeQuery($query);
$alunoTabela = mysqli_fetch_assoc($result);
$id = $alunoLogin['idAluno'];

$nomeAluno = $_POST['nome'];
$senhaAluno = $_POST['senha'];

$query = "update aluno set nomeAluno= '$nomeAluno', senhaAluno='$senhaAluno' where idAluno= $id";
$resulta = $conexao->executeQuery($query);
if (resulta) {
    echo '<script>alert("Dados Atualizados!");</script>';
    header('Location:../View/editarAluno.php');
} else {
    echo '<script>alert("Dados não puderam ser atualizados!");</script>';
    header('Location:../View/editarAluno.php');
}
