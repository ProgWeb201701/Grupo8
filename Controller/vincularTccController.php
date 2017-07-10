<?php

session_start();
include '../Model/BD/ConexaoBanco.php';
if ((!isset($_SESSION['login']) == true) and ( !isset($_SESSION['senha']) == true)) {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('Location:../index.php');
} else {
    
}
$idtcc = $_POST['idtcc'];
$idorientador = $_POST['idorientador'];
$idavaliador = $_POST['idavaliador'];
$idavaliador2 = $_POST['idavaliador2'];
$query = "update tcc set idOrientador=" . $idorientador . ", idAvaliadorUm=" . $idavaliador . ",idAvaliadorDois=" . $idavaliador2 . " where idTcc=" . $idtcc;
$conexao = new ConexaoBanco();
$resulta = $conexao->executeQuery($query);
if ($resulta) {
    header('Location:../View/inicioCoordenador.php');
} else {
    echo'<script>alert("Erro ao vincular o tcc");</script>';
    header('Location:../View/vincularTcc.php');
}