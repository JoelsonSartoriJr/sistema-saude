<?php

use Application\core\Controller;

class Admin extends Controller
{
  /*
  * chama a view index.php do  /home   ou somente   /
  */
  public function index()
  {
    $this->view('admin/index');
  }

}