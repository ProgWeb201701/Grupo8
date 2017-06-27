<?php

include '../Model/BD/ConexaoBanco.php';
include '../Controller/loginController.php';
ini_set('display_errors', 1);
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of recebeDadosLogin
 *
 * @author junin
 */
$conexao = new ConexaoBanco();

$login = $_POST['login'];
$senha = $_POST['senha'];

$loginController = new loginController();
$result = $loginController->loginAluno($login, $senha);
if ($result != null) {
    if (!isset($_SESSION)) {
        session_start();
        $_SESSION['login'] = $result['login'];
        $_SESSION['senha'] = $result['senha'];
    }
    header("Location: ../View/inicioAluno.php");
}