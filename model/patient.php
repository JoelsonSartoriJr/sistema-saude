<?php

class Patient extends User{

    protected $date_birth;
    protected $cpf;
    protected $gender;


    function __constructor($phone, $address, $email, $password, $type, $date_birth, $cpf, $gender){
        parent::__construct($phone, $address, $email, $password, $type);
        $this->date_birth = $date_birth;
        $this->cpf = $cpf;
        $this->gender = $gender;
    }
}

?>