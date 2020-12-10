<?php

require_once('Generico.php');

class Doctor extends Generico{
    public $specialty, $name,$crm;

    public function __construct($id, $type, $name, $phone, $email, $address, $password, $specialty, $crm)
    {
        parent::__construct($id, $type, $phone, $email, $address, $password);
        $this->name = $name;
        $this->specialty = $specialty;
        $this->crm = $crm;
    }
}