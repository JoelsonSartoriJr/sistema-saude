<?php

class Admin extends User{

    function __constructor($phone, $address, $email, $password, $type){
        parent::__construct($phone, $address, $email, $password, $type);
    }

}

?>