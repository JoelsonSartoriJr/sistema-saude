<?php

use Application\core\Controller;

class Medico extends Controller
{
  /*
  * chama a view index.php do  /home   ou somente   /
  */
  public function index()
  {
    $this->view('medico/index');
  }

}