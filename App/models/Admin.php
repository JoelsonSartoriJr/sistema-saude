<?php

namespace App\models;

use App\core\Database;

class Admin{

    public function registerDoctor(){
        $data = new Database();
        $data->connectUsers();
    }
}

$a = new Admin();
$a->registerDoctor();