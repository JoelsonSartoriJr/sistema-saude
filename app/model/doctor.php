<?php

class Doctor extends User {

    protected $crm;
    protected $specialty;

    function __constructor($phone, $address, $email, $password, $type, $crm, $specialty){
        parent::__construct($phone, $address, $email, $password, $type);
        $this->crm = $crm;
        $this->specialty = $specialty;
    }
}

?>