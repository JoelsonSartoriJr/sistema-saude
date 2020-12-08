<?php

use Application\core\Controller;

class Laboratorio extends Controller
{
  /*
  * chama a view index.php do  /home   ou somente   /
  */
  public function index()
  {
    $this->view('laboratorio/index');
  }

}