<?php

session_start();

require_once('../login/conexao.php');
require_once('../utils/Utils.php');

try {
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];

    $queryPatient = $conn->prepare("SELECT * FROM patient WHERE cpf = ? ");
    $queryPatient->execute(array($cpf));

    $queryUser = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $queryUser->execute(array($email));

    if ($queryPatient->rowCount() == 1 or $queryUser->rowCount() == 1) {
        $_SESSION['erro'] = 'Paciente já cadastrado';
        header("Location: http://localhost:8000/views/admin/admin.php");
    } else {
        $type = 'patient';
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $date_nasc = $_POST['date_nasc'];

        $queryUser = $conn->prepare("INSERT INTO users (name, email, password, type) VALUES(?, ?, ?, ?)");
        $queryUser->execute(array($name, $email, $password, $type));

        $id_user = $conn->lastInsertId();

        $queryPatient = $conn->prepare("INSERT INTO patient (cpf, id_user, phone, address, gender, date_nasc) VALUES(?, ?, ?, ?, ?, ?)");
        $queryPatient->execute(array($cpf, $id_user, $phone, $address, $gender, $date_nasc));
        $_SESSION['erro'] = "Paciente cadastrado com sucesso!";
        header("Location: http://localhost:8000/views/admin/admin.php");
    }
} catch (Throwable $e) {
    console_log('Throwable' . $e);
    header("Location: http://localhost:8000");
} catch (Exception $e) {
    console_log('Exception' . $e);
    header("Location: http://localhost:8000");
}
