<?php

require_once('Pessoa.php');

class Doctor extends Pessoa{
    private $specialty, $crm;

    public function __construct($id, $type, $name, $phone, $email, $password, $specialty, $crm)
    {
        parent::__construct($id, $type, $name, $phone, $email, $password);
        $this->specialty = $specialty;
        $this->crm = $crm;
    }
}