<?php

ini_set('display_errors', 1);
include '../Model/BD/ConexaoBanco.php';
session_start();


$login = $_POST['login'];
$senha = $_POST['senha'];
$usuario = $_POST['usuario'];
$logar = new loginController();
$logar->login($login, $senha, $usuario);

class loginController
{

    public function login($login, $senha, $usuario)
    {
        $conexao = new ConexaoBanco();

        if ($usuario == 1) {
            $query = "SELECT * FROM aluno WHERE nomeAluno = '$login' and senhaAluno = '$senha'";
            $result = $conexao->executeQuery($query);

            if (mysqli_num_rows($result) > 0) {
                $_SESSION['login'] = $login;
                $_SESSION['senha'] = $senha;
                $_SESSION['alunoTabela'] = mysqli_fetch_assoc($result);

                header("Location: ../View/inicioAluno.php");
            } else {
                unset($_SESSION['login']);
                unset($_SESSION['senha']);
                header('Location:../index.php');
            }
        } else {
            $query = "SELECT * FROM professor  WHERE nomeProfessor = '$login' and senhaProfessor = '$senha'";
            $result = $conexao->executeQuery($query);

            if (mysqli_num_rows($result) > 0) {
                $_SESSION['login'] = $login;
                $_SESSION['senha'] = $senha;
                $_SESSION['professorTabela'] = mysqli_fetch_assoc($result);

                header("Location: ../View/inicioProfessor.php");
            } else {
                unset($_SESSION['login']);
                unset($_SESSION['senha']);
                header('Location:../index.php');
            }
        }
    }

}
?>