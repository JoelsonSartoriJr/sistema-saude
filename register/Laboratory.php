<?php

session_start();

require_once('../login/conexao.php');
require_once('../utils/Utils.php');

try {
    $cnpj = $_POST['cnpj'];
    $email = $_POST['email'];

    $queryLab = $conn->prepare("SELECT * FROM laboratory WHERE cnpj = ? ");
    $queryLab->execute(array($cnpj));

    $queryUser = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $queryUser->execute(array($email));

    if ($queryLab->rowCount() == 1 or $queryUser == 1) {
        $_SESSION['erro'] = 'Laboratorio já cadastrado';
        header("Location: http://localhost:8000/views/admin/admin.php");
    } else {
        $type = 'lab';
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $password = $_POST['password'];
        $type_exam = $_POST['type_exam'];

        $queryUser = $conn->prepare("INSERT INTO users (name, email, password, type) VALUES(?, ?, ?, ?)");
        $queryUser->execute(array($name, $email, $password, $type));

        $id_user = $conn->lastInsertId();

        $queryLab = $conn->prepare("INSERT INTO laboratory (cnpj, id_user, phone, address, type_exam) VALUES(?, ?, ?, ?, ?)");
        $queryLab->execute(array($cnpj, $id_user, $phone, $address, $type_exam));

        $_SESSION['erro'] = "Laboratório cadastrado com sucesso!";
        header("Location: http://localhost:8000/views/admin/admin.php");
    }
} catch (Throwable $e) {
    console_log('Throwable' . $e);
    header("Location: http://localhost:8000");
} catch (Exception $e) {
    console_log('Exception' . $e);
    header("Location: http://localhost:8000");
}