<?php
session_start();
$server = "172.18.0.1";
$user = "root";
$password = "";
$db = "clinica";

try{
    $conn = new PDO("mysql:host=$server; dbname=$db", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $erro){
    $_SESSION['erro'] = "Erro de conexão: {$erro->getMessage()}";
    $conn = null;
    header("Location: http://localhost:8000");
}
