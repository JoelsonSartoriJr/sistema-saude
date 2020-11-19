<?php

use Application\core\Controller;

class paciente extends Controller
{
  /*
  * chama a view index.php do  /home   ou somente   /
  */
  public function index()
  {
    $this->view('paciente/index');
  }

}
