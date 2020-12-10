<?php

class Pessoa{
    private $id, $type, $name, $phone, $email, $password;

    public function __construct($id, $type, $name, $phone, $email, $password)
    {
        $this->id = $id;
        $this->type = $type;
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->password = $password;
    }
}