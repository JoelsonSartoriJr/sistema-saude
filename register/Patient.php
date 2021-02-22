<?php

session_start();

require_once('../login/conexao.php');
require_once('../utils/Utils.php');

try {
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];

    $queryPatien = $conn->prepare("SELECT * FROM patient WHERE cpf = ? ");
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

        $id = $conn->lastInsertId();

        $queryDoc = $conn->prepare("INSERT INTO doctor (id, crm, phone, address, specialty) VALUES(?, ?, ?, ?, ?)");
        $queryDoc->execute(array($id, $crm, $phone, $address, $specialty));

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

session_start();


require_once '../utils/Utils.php';
require_once '../model/Patient.php';

try {

    $method = $_SERVER['REQUEST_METHOD'];
    
    if (file_exists('../date/date.xml')){
        $xml = simplexml_load_file('../date/date.xml')  or die ("Failed to load");
        if($method == 'POST'){
            $cpf = $_POST['cpf'];

            $node = $xml->xpath("//user[cpf = '$cpf']");

            if(count($node) > 0){
                $_SESSION['erro'] = "Paciente já cadastrado!";
            }else{
                $user = $xml->users->addChild('user');

                $id = md5(uniqid(""));
                $type = 'patient';
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $password = $_POST['password'];
                $gender = $_POST['gender'];
                $date_nasc = $_POST['date_nasc'];
                $email = $_POST['email'];

                $patient = new Patient($id, $type, $name, $phone, $email,$address, $password, $gender, $date_nasc, $cpf);

                foreach ($patient as $key => $value){
                    $user->addChild($key, $value);
                }
                $xml->asXML('../date/date.xml');
                $_SESSION['erro'] = "Paciente cadastrado com sucesso!";
            }
        }
    } else {
        $_SESSION['erro'] = "Erro ao conectar ao banco!";
    }
    header("Location: http://localhost:8000/views/admin/admin.php");

} catch (Throwable $e) {
    console_log('Throwable'.$e);
    header("Location: http://localhost:8000");
} catch (Exception $e) {
    console_log('Exception'.$e);
    header("Location: http://localhost:8000");
}