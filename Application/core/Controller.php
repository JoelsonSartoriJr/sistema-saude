<?php

namespace Application\core;

/**
* Esta classe é responsável por instanciar um model e chamar a view correta
* passando os dados que serão usados.
*/
class Controller
{

  /**
  * Este método é responsável por chamar uma determinada view (página).
  *
  * @param  string  $model   É o model que será instanciado para usar em uma view, seja seus métodos ou atributos
  */
  public function model($model)
  {
    require '../Application/models/' . $model . '.php';
    $classe = 'Application\\models\\' . $model;
    return new $classe();

  }

  public function view(string $view)
  {
    require '../Application/views/' . $view . '.php';

  }

  /**
  * Este método é herdado para todas as classes filhas que o chamaram quando
  * o método ou classe informada pelo usuário nçao forem encontrados.
  */
  public function pageNotFound()
  {
    $this->view('erro404');
  }
}
