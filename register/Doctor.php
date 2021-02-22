<?php

session_start();

require_once('../login/conexao.php');
require_once('../utils/Utils.php');

try {
    $crm = $_POST['crm'];

    $query = $conn->prepare("SELECT * FROM doctor WHERE crm = ? ");
    $query->execute(array($crm));

    if ($query->rowCount()) {
        $_SESSION['erro'] = 'Médico já cadastrado';
        header("Location: http://localhost:8000/views/admin/admin.php");
    } else {
        $type = 'doctor';
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
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
    header("Location: http://localhost:8080");
} catch (Exception $e) {
    console_log('Exception' . $e);
    header("Location: http://localhost:8080");
}