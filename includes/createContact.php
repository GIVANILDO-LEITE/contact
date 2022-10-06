<?php

require_once("./conexao1.php")



function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$connection->select_db('contacts')

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $msg = test_input($_POST["msg"]);

    $values = $name . ',' . $email . ',' . $msg;

    $sql = "INSERT INTO contacts (name, email, msg)
    VALUES (" . $values . ")";
    
    if($conexao1->query($sql)) {
        echo "Contato criado com sucesso. <br>";
    } else {
        echo "Erro na criação do contato: " . $conexao1->error;
    }

    $conexao1->close();
}

