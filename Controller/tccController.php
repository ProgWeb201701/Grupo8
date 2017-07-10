<?php

session_start();

include '../Model/BD/ConexaoBanco.php';
if ((!isset($_SESSION['login']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('Location:../index.php');
}

if (isset($_POST['upload']) && $_FILES['userfile']['size'] > 0) {
    $fileName = $_FILES['userfile']['name'];
    $tmpName = $_FILES['userfile']['tmp_name'];
    $fileSize = $_FILES['userfile']['size'];
    $fileType = $_FILES['userfile']['type'];

    $fp = fopen($tmpName, 'r');
    $content = fread($fp, filesize($tmpName));
    $content = addslashes($content);
    fclose($fp);

    if (!get_magic_quotes_gpc()) {
        $fileName = addslashes($fileName);
    }
    $logado = $_SESSION['login'];
    $senha = $_SESSION['senha'];
    $alunoLogin = $_SESSION['alunoTabela'];
    $conexao = new ConexaoBanco();
    $query = "SELECT * FROM aluno WHERE idAluno = " . $alunoLogin['idAluno'];
    $result = $conexao->executeQuery($query);
    $alunoTabela = mysqli_fetch_assoc($result);
    $id = $alunoLogin['idAluno'];
    $titulotcc = $_POST['nometcc'];
    $query = "INSERT INTO tcc(nome, tamanho,tipo, conteudo, tituloTcc, idOrientado) "
            . "VALUES ('$fileName', '$fileSize', '$fileType', '$content', '$titulotcc', '$id')";

    $resulta = $conexao->executeQuery($query);
    if ($resulta) {
        header('Location:../View/inicioAluno.php');
    } else {
        header('Location:../View/cadastrarMonografia.php');
    }
} else {
    header('Location:../View/cadastrarMonografia.php');
}
