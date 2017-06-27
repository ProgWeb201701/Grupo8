<?php

// session_start inicia a sessão
// as variáveis login e senha recebem os dados digitados na página anterior


class loginController
{
    function loginAluno($logina, $senhaa)
    {
        $conexao = new ConexaoBanco();
        $query = "SELECT nome, senha from aluno WHERE nome = '$login' and senha = '$senha'";
        $conexao->requisicoesBanco($query);
        if ($conexao == null) {
            return null;
        }
        return $conexao;
    }

    function loginProfessor($login, $senha)
    {
        $conexao = new ConexaoBanco();
        $query = "SELECT nome, senha from professor WHERE nome = '$login' and senha = '$senha'";
        $conexao->requisicoesBanco($query);
        if ($conexao == null) {
            return null;
        }
        return $conexao;
    }

}