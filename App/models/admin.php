<?php

class Admin{
    private $name;
    private $address;
    private $phone;
    private $email;
    private $password;
    

    public function save($name, $address, $phone, $email, $password){
        $xml = simplexml_load_file('../data/users.xml');

        if($xml === false){
            echo "Erro ao abrir xml";
        } else {
            $node = $xml->addChild("User");
            $node->addAttribute("type", "admin");
            $node->addChild("Name", $name);
            $node->addChild("Address", $address);
            $node->addChild("Phone", $phone);
            $node->addChild("Email", $email);
            $node->addChild("Password", $password);

            $s = simplexml_import_dom($xml);
            $s->saveXML('../data/users.xml');
        }

    }

    public function remove(){}

    public function listAll(){}
}

$a = new Admin();

$a->save('Joao', 'RUa do joao', 123456789, 'joao@email.com', 'coxinha123');