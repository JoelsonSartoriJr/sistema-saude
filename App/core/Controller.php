<?php

namespace App\core;

#use App\models\Users;

class Controller{

  
  public function model($model){
    require '../App/models/' . $model . '.php';
    $classe = 'App\\models\\' . $model;

    return new $classe();
  }

  public function view(string $view, $data = []){
    require '../App/views/' . $view . '.php';
  }

  public function pageNotFound(){
    $this->view('erro404');
  }
}