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
                    <div class="navbar-header col-md-7">
                        <a href="inicioAluno.php" class="navbar-brand" title="Página inicial">
                            Gerenciador de TCC
                        </a>
                    </div>
                    <div class="navbar-header col-md-4">
                        <a href="cadastrarMonografia.php" class="navbar-brand" title="Página inicial">
                            Cadastrar monografia
                        </a>
                    </div>
                    <div class="navbar-header col-md-1">
                        <a href="../index.php" class="navbar-brand" title="Página inicial">
                            Sair
                        </a>
                    </div>
                </div>
            </div>

            <form method="post" enctype="multipart/form-data" action="../Controller/tccController.php">
                <table width="350" border="0" cellpadding="1" cellspacing="1" class="box">
                    <tr>
                        <td width="246">
                            <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                            <input type="file" class="form-control" id="arquivo" name="arquivo" placeholder="Arquivo">
                            <input type="textfield" name="nometcc" value="nometcc" id="nometcc">
                            <div class="navbar-header col-md-1">
                                <a href="../index.php" class="navbar-brand" title="Página inicial">
                                    Sair
                                </a>
                            </div>
                        </td>
                        <td width="80"><input name="upload" type="submit" class="box" id="upload" value=" Upload "></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>

