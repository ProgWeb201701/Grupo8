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
        $result = $conexao->requisicoesBanco($query);
        $professorTabela = mysqli_fetch_assoc($result);
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
                    <div class="navbar-header col-md-11">
                        <a href="inicioProfessor.php" class="navbar-brand" title="Página inicial">
                            Gerenciador de TCC
                        </a>
                    </div>

                    <div class="navbar-header col-md-1">
                        <a href="../index.php" class="navbar-brand" title="Página inicial">
                            Sair
                        </a>
                    </div>
                </div>
            </div>
            <div class="list-group">
                <ul class="list-group">
                    <?php
                    $conec = new ConexaoBanco();
                    $query = 'SELECT tcc.tituloTcc, aluno.nomeAluno, professor.nomeProfessor FROM tcc
INNER JOIN professor
ON professor.idProfessor = tcc.idOrientador
INNER JOIN aluno
ON aluno.idAluno = tcc.idOrientando';
                    $dado = $conec->select($query);

                    echo '  <a href="#" class="list-group-item active">'.$dado['tituloTcc']. $dado['nomeAluno'].$dado['nomeProfessor'].'</a>
  <a href="#" class="list-group-item">'.$dado['tituloTcc']. $dado['nomeAluno'].$dado['nomeProfessor'].'</a>
  <a href="#" class="list-group-item">'.$dado['tituloTcc']. $dado['nomeAluno'].$dado['nomeProfessor'].'</a>';
                    ?>
                </ul>
            </div>
            <!--            <div class="list-group">
                            <ul class="list-group">
                                <li class="list-group-item btn-primary"><a href="#" class="list-group-item">TCC : alomundo Nome: adalberto</a></li>
                                <li class="list-group-item"><a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a></li>
                                <li class="list-group-item">TCC : alomundo Nome: mariana</li>
                                <li class="list-group-item">feds</li>
                                <li class="list-group-item"><a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a></li>
                            </ul>
                        </div>-->
        </div>
    </body>
</html>
