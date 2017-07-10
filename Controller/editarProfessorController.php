<?php

session_start();

include '../Model/BD/ConexaoBanco.php';
if ((!isset($_SESSION['login']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('Location:../index.php');
}
$conexao = new ConexaoBanco();
$query = "SELECT * FROM professor WHERE idProfessor = " . $professorLogin['idProfessor'];
$result = $conexao->executeQuery($query);
$alunoTabela = mysqli_fetch_assoc($result);
$id = $professorLogin['idProfessor'];

$nomeProfessor = $_POST['nomeprofessor'];
$senhaProfessor = $_POST['senhaprofessor'];

$query = "update professor set nomeProfessor=" . $nomeProfessor . ", senhaProfessor=" . $senhaProfessor;
$resulta = $conexao->executeQuery($query);
if (resulta) {
    echo '<script>alert("Dados Atualizados!");</script>';
    header('Location:../View/editarProfessor.php');
} else {
    echo '<script>alert("Dados não puderam ser atualizados!");</script>';
    header('Location:../View/editarProfessor.php');
}
