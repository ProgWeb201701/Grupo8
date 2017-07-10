<?php

session_start();

include '../Model/BD/ConexaoBanco.php';
if ((!isset($_SESSION['login']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('Location:../index.php');
}
$professorLogin = $_SESSION['professorTabela'];
$conexao = new ConexaoBanco();
$query = "SELECT * FROM professor WHERE idProfessor=" . $professorLogin['idProfessor'];
$result = $conexao->executeQuery($query);
$alunoTabela = mysqli_fetch_assoc($result);
$id = $professorLogin['idProfessor'];

$nomeProfessora = $_POST['nome'];
$senhaProfessora = $_POST['senha'];
var_dump($senhaProfessora, $nomeProfessora);die();

$query = 'UPDATE professor SET professor.nomeProfessor = '.$nomeProfessora.', professor.senhaProfessor= '.$senhaProfessora.' WHERE professor.idProfessor ='. $id;
$resulta = $conexao->executeQuery($query);
if (resulta) {
    echo '<script>alert("Dados Atualizados!");</script>';
    header('Location:../View/editarProfessor.php');
} else {
    echo '<script>alert("Dados não puderam ser atualizados!");</script>';
    header('Location:../View/editarProfessor.php');
}
