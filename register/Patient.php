<?php

session_start();

require_once '../utils/Utils.php';
require_once '../model/Patient.php';

try {

    $method = $_SERVER['REQUEST_METHOD'];
    
    if (file_exists('../date/date.xml')){
        $xml = simplexml_load_file('../date/date.xml')  or die ("Failed to load");
        if($method == 'POST'){
            $email = $_POST['email'];
            $node = $xml->xpath("//user[email = '$email']");

            if(count($node) > 0){
                console_log('Usúario já existe...');
            }else{
                $id = md5(uniqid(""));
                $type = 'patient';
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $password = $_POST['password'];
                $gender = $_POST['gender'];
                $date_nasc = $_POST['date_nasc'];
                $cpf = $_POST['cpf'];

                $patient = new Patient($id, $type, $name, $phone, $email,$password, $gender, $date_nasc, $cpf);
                console_log($patient);
            }
        }
    } else {
        console_log('Erro ao conectar ao bando de dados.....');
    }

} catch (Throwable $e) {
    console_log('Throwable'.$e);
    header("Location: http://localhost:8080");
} catch (Exception $e) {
    console_log('Exception'.$e);
    header("Location: http://localhost:8080");
}