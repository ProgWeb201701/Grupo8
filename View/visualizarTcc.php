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

            <?php
            $prof = $conexao->lerLinha('SELECT * FROM coordenador WHERE idProfessor =' . $professorTabela['idProfessor']);

            $tccs = $conexao->lerTabela('tcc');
            if ($tccs) {
                while ($obj = mysqli_fetch_object($tccs)) {

                    $query = 'SELECT aluno.nomeAluno FROM aluno WHERE aluno.idAluno =' . $obj->idOrientado;
                    $aluno = $conexao->executeQuery($query);
                    $query2 = 'SELECT professor.nomeProfessor FROM professor WHERE professor.idProfessor =' . $obj->idOrientador;
                    $orientador = $conexao->executeQuery($query2);
                    while ($alun = mysqli_fetch_object($aluno)) {
                        while ($prof = mysqli_fetch_object($orientador)) {
                            echo ' <div class="list-group">
    <a href="#" class="list-group-item active"> Titulo: ' . $obj->tituloTcc . '</a>
            <a href="#" class="list-group-item"> Nome do Aluno: ' . $alun->nomeAluno . '</a>
                <a href="#" class="list-group-item"> Nome do Orientador: ' . $prof->nomeProfessor . '</a>
     <form id="login-form" action="../Controller/visualizarMonografia.php" method="POST" role="form" style="display: block;">
               <input type="hidden" name="id" value="' . $obj->idTcc . '"/>
                                                       <a href="visualizarTcc.php">

<input type="submit" name="cadastrar" id="cadastrar" class="btn btn-primary" value="Visualizar Monografia">
</a>
</form>
  </div>';
                        }
                    }
                }
            }
            ?>
        </div>
    </body>
</html>
