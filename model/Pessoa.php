<?php

class Pessoa{
    public $id, $type, $name, $phone, $email, $address, $password;

    public function __construct($id, $type, $name, $phone, $email, $address, $password)
    {
        $this->id = $id;
        $this->type = $type;
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->address = $address;
        $this->password = $password;
    }
}