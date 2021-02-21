<?php

session_start();
require_once('../utils/Utils.php'); 
require_once('./conexao.php');

if(isset($_POST["email"]) && isset($_POST["password"]) && $conn != null){
    $query = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $query->execute(array($_POST['email'], $_POST['password']));

    if($query->rowCount()){
        $user = $query->fetchAll(PDO::FETCH_ASSOC)[0];
        $_SESSION['user'] = array($user['id'], $user['name'], $user['email'], $user['type']);
        
        if($user['type'] == 'admin'){
            header('Location: ../views/admin/admin.php');
        } elseif($user['type']== 'doctor'){
            header('Location: ../views/medico/medico.php');
        }elseif($user['type'] == 'lab'){
            header('Location: ../views/laboratorio/laboratorio.php');
        }elseif($user['type'] == 'patient'){
            header('Location: ../views/paciente/paciente.php');
        }
    }else{
        $_SESSION['erro'] = "Usuario invalido!";
        header("Location: http://localhost:8000");
    }
}else{
    $_SESSION['erro'] = "Digite o email e a senha!";
    header("Location: http://localhost:8000");
}