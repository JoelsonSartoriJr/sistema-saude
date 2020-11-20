<?php

use Application\core\Controller;

class User extends Controller
{
  /**
  * chama a view index.php da seguinte forma /user/index   ou somente   /user
  * e retorna para a view todos os usuários no banco de dados.
  */
  public function index()
  {
    $Users = $this->model('Users'); // é retornado o model Users()
    $data = $Users::findAll();
    $this->view('user/index', ['users' => $data]);
  }

  public function show($id = null)
  {
    if (is_numeric($id)) {
      $Users = $this->model('Users');
      $data = $Users::findById($id);
      $this->view('user/show', ['user' => $data]);
    } else {
      $this->pageNotFound();
    }
  }


}
