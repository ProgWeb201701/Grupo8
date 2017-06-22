<?php

include '../Model/BD/ConexaoBanco.php';
ini_set('display_errors', 1);

// $mysqli = new mysqli("localhost","bernardino","mysql", "catalog");
// $sku = $_POST['sku'];
// $name = $_POST['name'];
// $price = $_POST['price'];
// $sql = "INSERT INTO products SET id=NULL, sku=$sku, name=$name, price=$price";
// if ($mysqli->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $mysqli . "<br>" . $mysqli->error;
// }


$usuario = $_POST['user'];

if ($usuario == '1') {
    $conexao = new ConexaoBanco();

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $query = "INSERT INTO aluno (nome, senha, email)
    VALUES ('$nome','$senha','$email')";
    $conexao->requisicoesBanco($query);
} else {
    $conexao = new ConexaoBanco();


    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
//echo "$sku > $name  > $price";

    $query = "INSERT INTO professor (nome, senha, email)
    VALUES ('$nome','$senha','$email')";
    $conexao->requisicoesBanco($query);
}
