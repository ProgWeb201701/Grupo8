<?php

session_start();
include '../Model/BD/ConexaoBanco.php';
if ((!isset($_SESSION['login']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('Location:../index.php');
} else {
    
}
$nota = $_POST['nota'];
$idtcc = $_POST['idtcc'];
$query = "update tcc set nota =" . $nota . " where idTcc=" . $idtcc;
$conexao = new ConexaoBanco();
$resulta = $conexao->executeQuery($query);
if ($resulta) {
    header('Location:../View/listaTcc.php');
} else {
    echo'<script>alert("Erro ao vincular o tcc");</script>';
    header('Location:../View/listaTcc.php');
}