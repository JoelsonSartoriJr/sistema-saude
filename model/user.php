<?php

class User {
    
    public $name;
    public $phone;
    public $address;
    public $email;
    protected $password;
    protected $type;

    public function __construct($phone, $address, $email, $password, $type){
        $this->phone = $phone;
        $this->address = $address;
        $this->email = $email;
        $this->password = $password;
        $this->type = $type;
    }
}

?>