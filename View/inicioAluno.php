<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
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
        ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="css/css.css" rel="stylesheet">
        <title></title>
    </head>
    <body>
        <div>
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="navbar-header col-md-5">
                        <a href="inicioAluno.php" class="navbar-brand" title="Página inicial">
                            Gerenciador de TCC
                        </a>
                    </div>
                    <div class="navbar-header col-md-4">
                        <a href="cadastrarMonografia.php" class="navbar-brand" title="Página inicial">
                            Cadastrar monografia
                        </a>
                    </div>
                    <div class="navbar-header col-md-2">
                        <a href="editarAluno.php" class="navbar-brand" title="Página inicial">
                            Editar Aluno
                        </a>
                    </div>
                    <div class="navbar-header col-md-1">
                        <a href="../index.php" class="navbar-brand" title="Página inicial">
                            Sair
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>
