<?php

ini_set('display_errors', 1);
session_start();
/**
 * Description of controllerLogin
 *
 * @author WhoAmI
 */
$usuario = $_POST['login'];
$senha = $_POST['senha'];
$opcao = $_POST['user'];

if ($opcao === 'aluno') {
    $result = mysqli_query($con, "SELECT * FROM aluno WHERE "
            . "nomeAluno = '$usuario' AND senhaAluno = '$senha';");

    
    $con = mysqli_connect("localhost", "root", "", "gerenciadortcc");
    
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['login'] = $usuario;
        $_SESSION['senha'] = $senha;
        $_SESSION['alunoTabela'] = mysqli_fetch_assoc($result);


        header('../View/inicioAluno.php');
    } else {
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        header('../view/index.php');
    }
} else if ($opcao === 'professor') {
    $result = mysqli_query($con, "SELECT * FROM professor WHERE "
            . "nomeProfessor = '$usuario' AND senhaProfessor = '$senha';");
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['login'] = $usuario;
        $_SESSION['senha'] = $senha;
        header('Location:../View/cadastrarMonografia.php');
    } else {
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        header('Location:../index.php');
    }
}
?>