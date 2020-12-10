<?php

session_start();


require_once '../utils/Utils.php';
require_once '../model/Lab.php';

try {

    $method = $_SERVER['REQUEST_METHOD'];
    
    if (file_exists('../date/date.xml')){
        $xml = simplexml_load_file('../date/date.xml')  or die ("Failed to load");
        if($method == 'POST'){
            $cnpj = $_POST['cnpj'];
            $node = $xml->xpath("//user[cnpj = '$cnpj']");

            if(count($node) > 0){
                console_log('Laboratorio já existe...');
            }else{
                $user = $xml->users->addChild('user');
                $id = md5(uniqid(""));
                $type = 'lab';
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $password = $_POST['password'];
                $type_exam = $_POST['type_exam'];

                $lab = new Lab($id, $type, $phone, $email,$address, $password, $type_exam, $cnpj);

                foreach ($lab as $key => $value){
                    $user->addChild($key, $value);
                }

                $xml->asXML('../date/date.xml');
                console_log("O Laboratorio foi adicionado com sucesso no banco de dados");
            }
            
        }
    } else {
        console_log('Erro ao conectar ao bando de dados.....');
    }
    header("Location: http://localhost:8080/views/admin/admin.php");

} catch (Throwable $e) {
    console_log('Throwable'.$e);
    header("Location: http://localhost:8080");
} catch (Exception $e) {
    console_log('Exception'.$e);
    header("Location: http://localhost:8080");
}