<?php

require_once('Generico.php');

class Lab extends Generico{
    public $type_exam, $cnpj, $name;

    public function __construct($id, $name, $type, $phone, $email, $address, $password, $type_exam, $cnpj)
    {
        parent::__construct($id, $type, $phone, $email, $address, $password);
        $this->name = $name;
        $this->type_exam = $type_exam;
        $this->cnpj = $cnpj;
    }
}