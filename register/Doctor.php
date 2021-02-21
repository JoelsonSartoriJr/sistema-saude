<?php

session_start();


require_once '../utils/Utils.php';
require_once '../model/Doctor.php';

try {

    $method = $_SERVER['REQUEST_METHOD'];
    
    if (file_exists('../date/date.xml')){
        $xml = simplexml_load_file('../date/date.xml')  or die ("Failed to load");
        if($method == 'POST'){
            $crm = $_POST['crm'];
            $node = $xml->xpath("//user[crm = '$crm']");

            if(count($node) > 0){
                $_SESSION['erro'] = "Usuario já cadastrado!";
            }else{
                $user = $xml->users->addChild('user');
                $id = md5(uniqid(""));
                $name = $_POST['name'];
                $type = 'doctor';
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $password = $_POST['password'];
                $specialty = $_POST['specialty'];

                $lab = new Doctor($id, $type, $name, $phone, $email, $address, $password, $specialty, $crm);

                foreach ($lab as $key => $value){
                    $user->addChild($key, $value);
                }

                $xml->asXML('../date/date.xml');
                $_SESSION['erro'] = "Usuario cadastrado com sucesso!";
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