<?php

session_start();

require_once '../utils/Utils.php';

if(!isset($_SESSION['user'])){
    console_log('Você não está logado....');
    header('Location: ../index.php');
} elseif($_SESSION['type']) {

}