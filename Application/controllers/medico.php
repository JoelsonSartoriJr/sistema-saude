<?php

use Application\core\Controller;

class medico extends Controller
{
  /*
  * chama a view index.php do  /home   ou somente   /
  */
  public function index()
  {
    $this->view('medico/index');
  }

}
