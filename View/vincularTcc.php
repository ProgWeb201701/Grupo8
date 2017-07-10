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
        $coordenadorLogin = $_SESSION['coordenadorTabela'];
        $conexao = new ConexaoBanco();
        $query = "SELECT * FROM coordenador WHERE idCoordenador = " . $coordenadorLogin['idCoordenador'];
        $result = $conexao->executeQuery($query);
        $coordenadorTabela = mysqli_fetch_assoc($result);
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
                    <div class="navbar-header col-md-9">
                        <a href="inicioCoordenador.php" class="navbar-brand" title="Página inicial">
                            Gerenciador de TCC
                        </a>
                    </div>
                    <div class="navbar-header col-md-2">
                        <a href="../vincularTcc.php" class="navbar-brand" title="Página inicial">
                            Vincular TCC
                        </a>
                    </div>
                    <div class="navbar-header col-md-1">
                        <a href="../index.php" class="navbar-brand" title="Página inicial">
                            Sair
                        </a>
                    </div>
                </div>
            </div>
            <form class="form-horizontal" method="POST" action="../Controller/vincularTccController.php">
                <div class="form-group">
                    <select id="user" name="idtcc" class="form-control">
                        <?php
                        $tcc = $conexao->lerTabela('tcc');
                        while ($obj = mysqli_fetch_object($tcc)) {
                            echo '<option value="' . $obj->idTcc . '">' . $obj->tituloTcc . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <select id="user" name="idorientador" class="form-control">
                        <?php
                        $tcc = $conexao->lerTabela('professor');
                        while ($obj = mysqli_fetch_object($tcc)) {
                            echo '<option value="' . $obj->idProfessor . '">' . $obj->nomeProfessor . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <select id="user" name="idavaliador" class="form-control">
                        <?php
                        $tcc = $conexao->lerTabela('professor');
                        while ($obj = mysqli_fetch_object($tcc)) {
                            echo '<option value="' . $obj->idProfessor . '">' . $obj->nomeProfessor . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <select id="user" name="idavaliador2" class="form-control">
                        <?php
                        $tcc = $conexao->lerTabela('professor');
                        while ($obj = mysqli_fetch_object($tcc)) {
                            echo '<option value="' . $obj->idProfessor . '">' . $obj->nomeProfessor . '</option>';
                        }
                        ?>
                    </select>
                </div>

                <div class="col-md-8">
                    <input type="submit" name="cadastrar" id="cadastrar"  class="btn btn-primary" value="Confirmar">
                    <a href="inicioCoordenador.php"title="cancelar" class="btn btn-danger">
                        cancelar 
                    </a>
                </div>

            </form>
        </div>
    </body>
</html>
