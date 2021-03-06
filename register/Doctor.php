<?php

session_start();

require_once('../login/conexao.php');
require_once('../utils/Utils.php');

try {
    $crm = $_POST['crm'];
    $email = $_POST['email'];

    $queryDoc = $conn->prepare("SELECT * FROM doctor WHERE crm = ?");
    $queryDoc->execute(array($crm));

    $queryUser = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $queryUser->execute(array($email));

    if ($queryDoc->rowCount() == 1 or $queryUser->rowCount() == 1) {
        $_SESSION['erro'] = 'Médico já cadastrado';
        header("Location: http://localhost:8000/views/admin/admin.php");
    } else {
        $type = 'doctor';
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $password = $_POST['password'];
        $specialty = $_POST['specialty'];

        $queryUser = $conn->prepare("INSERT INTO users (name, email, password, type) VALUES(?, ?, ?, ?)");
        $queryUser->execute(array($name, $email, $password, $type));

        $id_user = $conn->lastInsertId();

        $queryDoc = $conn->prepare("INSERT INTO doctor (crm, id_user, phone, address, specialty) VALUES(?, ?, ?, ?, ?)");
        $queryDoc->execute(array($crm, $id_user, $phone, $address, $specialty));

        $_SESSION['erro'] = "Médico cadastrado com sucesso!";
        header("Location: http://localhost:8000/views/admin/admin.php");
    }
} catch (Throwable $e) {
    console_log('Throwable' . $e);
    header("Location: http://localhost:8000");
} catch (Exception $e) {
    console_log('Exception' . $e);
    header("Location: http://localhost:8000");
}