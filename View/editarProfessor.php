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
        $professorLogin = $_SESSION['professorTabela'];
        $conexao = new ConexaoBanco();
        $query = "SELECT * FROM professor WHERE idProfessor = " . $professorLogin['idProfessor'];
        $result = $conexao->executeQuery($query);
        $professorTabela = mysqli_fetch_assoc($result);
        $prof = $conexao->executeQuery('select * from professor where idProfessor ='. $professorLogin['idProfessor']);
        $professor = mysqli_fetch_object($prof);
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
                    <div class="navbar-header col-md-3">
                        <a href="inicioProfessor.php" class="navbar-brand" title="Página inicial">
                            Gerenciador de TCC
                        </a>
                    </div>
                    <div class="navbar-header col-md-3">
                        <a href="listaTcc.php" class="navbar-brand" title="Avaliar Trabalhos">
                            Avaliar Trabalhos
                        </a>
                    </div>

                    <div class="navbar-header col-md-3">
                        <a href="visualizarTcc.php" class="navbar-brand" title="Visualizar Trabalhos">
                            Visualizar Trabalhos
                        </a>
                    </div>
                    <div class="navbar-header col-md-2">
                        <a href="editarProfessor.php" class="navbar-brand" title="Visualizar Trabalhos">
                            Editar Dados
                        </a>
                    </div>

                    <div class="navbar-header col-md-1">
                        <a href="../index.php" class="navbar-brand" title="sair">
                            Sair
                        </a>
                    </div>
                </div>
            </div>
            <form class="form-horizontal" method="POST" action="../Controller/editarProfessorController.php">
                <fieldset>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="idNome">Nome</label>  
                        <div class="col-md-5">
                            <input id="idNome" name="nome" type="text" placeholder="Nome do usuário" class="form-control input-md" required="" value=<?php $professor->nomeProfessor?>>
                        </div>
                    </div>
                    <!-- Password input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="idSenha">Senha</label>
                        <div class="col-md-5">
                            <input id="idSenha" name="senha" type="password" placeholder="Digite a senha" class="form-control input-md" required="" value=<?php $professor->senhaProfessor?>>

                        </div>
                    </div>
                    <!-- Button (Double) -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="idConfirmar"></label>
                        <div class="col-md-8">
                            <input type="submit" name="cadastrar" id="cadastrar"  class="btn btn-primary" value="Confirmar">
                            <a href="inicioProfessor.php"title="cancelar" class="btn btn-danger">
                                cancelar 
                            </a>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </body>
</html>
