<?php

require_once('Pessoa.php');

class Lab extends Pessoa{
    private $type_exam, $cnpj;

    public function __construct($id, $type, $name, $phone, $email, $password, $type_exam, $cnpj)
    {
        parent::__construct($id, $type, $name, $phone, $email, $password);
        $this->type_exam = $type_exam;
        $this->cnpj = $cnpj;
    }
}