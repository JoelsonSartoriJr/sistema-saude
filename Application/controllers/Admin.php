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

  public function cadastroLab()
  {
    $this->view('admin/cadastroLab');
  }

  public function cadastroMed()
  {
    $this->view('admin/cadastroMed');
  }

  public function cadastroPac()
  {
    $this->view('admin/cadastroPac');
  }

}