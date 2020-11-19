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

  public function laboratorio()
  {
    $this->view('admin/cadastroLab.php');
  }

  public function medico()
  {
    $this->view('admin/cadastroMed.php');
  }

  public function paciente()
  {
    $this->view('admin/cadastroPac.php');
  }

}