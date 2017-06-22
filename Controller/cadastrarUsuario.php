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


$usuario = $_POST['usuario'];

if ($usuario == '1') {
    $query = "INSERT INTO aluno SET id=NULL, nome=?, senha=?, email=?";
    $conexao = new ConexaoBanco();
    $conexao->connect();

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    echo '<script>alert($nome, $senha, $email); </script>';
//echo "$sku > $name  > $price";

    $query = "INSERT INTO aluno (nome, senha, email) 
    VALUES ($nome,$email,$senha);";

    $conexao->executeQuery($query);
    $conexao->disconnect();
} else {
    $query = "INSERT INTO professor SET id=NULL, nome=?, senha=?, email=?";

    $conexao = new ConexaoBanco();
    $conexao->connect();

    $stmt->bind_param('sss', $nome, $senha, $email);

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
//echo "$sku > $name  > $price";

    $query = "INSERT INTO professor (nome, senha, email)
    VALUES ($nome,$senha,$email)";
    $conexao->executeQuery($query);
    $conexao->disconnect();
}
?>



