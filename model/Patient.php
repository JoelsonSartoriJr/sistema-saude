<?php

require_once('Generico.php');

class Patient extends Generico{
    public $name, $gender, $date_nasc, $cpf;

    public function __construct($id, $type, $name, $phone, $email, $address, $password, $gender, $date_nasc, $cpf)
    {
        parent::__construct($id, $type, $phone, $email, $address, $password);
        $this->name = $name;
        $this->gender = $gender;
        $this->date_nasc = $date_nasc;
        $this->cpf = $cpf;
    }
}