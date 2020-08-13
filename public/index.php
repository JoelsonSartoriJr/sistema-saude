<?php

require_once('../vendor/autoload.php');
require_once('../app/config/config.php');
require_once('../app/functions/functions.php');


use app\controller\Teste;

(new \app\core\RouterCore());


$controller = new Teste();