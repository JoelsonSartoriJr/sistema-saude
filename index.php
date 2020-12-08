<?php

    require_once 'app/core/Core.php';
    require_once 'lib/Database/Connection.php';
    require_once 'app/controller/LoginController.php';
    require_once 'app/model/User.php';
    require_once 'vendor/autoload.php';

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $core = new Core;
    echo $core->start($_GET);
    