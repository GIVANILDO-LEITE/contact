<?php

$server = "localhost";
$user = "root";
$password = "";

$connection = new mysqli($server, $user, $password);

if($connection->connect_error) {
    die("Falha na conexão: " . $connection->connect_error);
}else {
    echo "Conexão realizada";
}







