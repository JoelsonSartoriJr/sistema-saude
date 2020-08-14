<?php

namespace Application\core;

class Database{
    
    public function connectUsers(){
        $xml = simplexml_load_file('../data/users.xml');

        if($xml === false){
            throw new Exception('Problema ao acessar o banco de dados.');
        } else{
            echo 'ok';
        }
    }
}
