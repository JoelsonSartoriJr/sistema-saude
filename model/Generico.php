<?php

class Generico{
    public $id, $type, $phone, $email, $address, $password;

    public function __construct($id, $type, $phone, $email, $address, $password)
    {
        $this->id = $id;
        $this->type = $type;
        $this->phone = $phone;
        $this->email = $email;
        $this->address = $address;
        $this->password = $password;
    }
}