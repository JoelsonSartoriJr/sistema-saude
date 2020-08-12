<?php

class Lab extends User {

    public $exam_type;
    public $cnpj;

    function __constructor($phone, $address, $email, $password, $type, $exam_type, $cnpj){
        parent::__construct($phone, $address, $email, $password, $type);
        $this->exam_type = $exam_type;
        $this->cnpj = $cnpj;
    }

}

?>