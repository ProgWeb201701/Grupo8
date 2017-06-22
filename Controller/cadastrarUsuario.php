<?php

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

if ($usuario == 'Aluno') {
    $query = "INSERT INTO aluno SET id=NULL, nome=?, senha=?, email=?";

    $stmt = $mysqli->stmt_init();

    $stmt->prepare($query);

    $stmt->bind_param('sss', $nome, $senha, $email);

    $sku = $_POST['sku'];
    $name = $_POST['name'];
    $price = $_POST['price'];
//echo "$sku > $name  > $price";

    $stmt->execute();
    $stmt->close();
    $mysqli->close();
    $query = "INSERT INTO aluno (nomeAlu, senhaAlu, emailAlu) 
    VALUES ($nome,$email,$senha);";
} else {
    $query = "INSERT INTO professor (nomePro, senhaPro, emailPro)
VALUES ($nome,$senha,$email)";
}
?>



