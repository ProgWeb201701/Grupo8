<?php

include '../Model/BD/ConexaoBanco.php';
include '../index.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product = new loginController();
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $product->login($login, $senha);
}

class loginController
{

    public function login($login, $senha)
    {
        $conexao = new ConexaoBanco();
        $query = "SELECT nome, senha FROM aluno WHERE nome = $login and senha = $senha";

        if (!$conexao->requisicoesBanco($query)) {
            $query = "SELECT nome, senha FROM professor WHERE nome = $login and senha = $senha";
            if (!$conexao->requisicoesBanco($query)) {
                header("Location: ../index.php");
            }
            header("Location: ../View/inicioProfessor.php");
        } else {
            header("Location: ../View/inicioAluno.php");
        }
    }

}