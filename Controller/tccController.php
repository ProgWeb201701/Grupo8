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
$result = $conexao->requisicoesBanco($query);
$alunoTabela = mysqli_fetch_assoc($result);
$id = $alunoLogin['idAluno'];
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
    $result = $conexao->requisicoesBanco($query);
    $alunoTabela = mysqli_fetch_assoc($result);
    $id = $alunoLogin['idAluno'];

    $query = "INSERT INTO `tcc`(`idTcc`, `idOrientado`, `idOrientador`, "
            . "`idAvaliadorUm`, `idAvaliadorDois`, `tipo`, `nome`, `tamanho`, `conteudo`) "
            . "VALUES ('',$id,'','','',$fileName', '$fileSize', '$fileType', '$content')";



    $conexao = new ConexaoBanco();
    $result = $conexao->requisicoesBanco($query);
}