<?php

session_start();
require_once('../utils/Utils.php'); 

try {
    $method = $_SERVER['REQUEST_METHOD'];
    
    if (file_exists('../date/date.xml')){
        $xml = simplexml_load_file('../date/date.xml')  or die ("Failed to load");
        if($method == 'POST'){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $node = $xml->xpath("//user[email = '$email' and password = '$password']");

            if(count($node) > 0){
                $id = (string)$node[0]->id;
                $type = (string)$node[0]->type;
                
                $_SESSION['user'] = $id;
                $_SESSION['type'] = $type;

                if($type == 'admin'){
                    header('Location: ../views/admin/index.php');
                } elseif($type == 'doctor'){
                    header('Location: ../views/medico/index.php');
                }elseif($type == 'lab'){
                    header('Location: ../views/laboratorio/index.php');
                }elseif($type == 'patient'){
                    header('Location: ../views/paciente/index.php');
                }
            }else{
                console_log('Usúario não encontrado');
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