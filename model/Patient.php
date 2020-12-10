<?php

require_once('Pessoa.php');

class Patient extends Pessoa{
    public $gender, $date_nasc, $cpf;

    public function __construct($id, $type, $name, $phone, $email, $address, $password, $gender, $date_nasc, $cpf)
    {
        parent::__construct($id, $type, $name, $phone, $email, $address, $password);
        $this->gender = $gender;
        $this->date_nasc = $date_nasc;
        $this->cpf = $cpf;
    }
}