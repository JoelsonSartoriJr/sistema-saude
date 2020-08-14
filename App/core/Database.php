<?php

namespace Application\core;

class Database{
    
    private function connect($url){
        $xml = simplexml_load_file($url);

        if($xml === false){
            throw new Exception('Problema ao acessar o banco de dados.');
        } else{
            return $xml;
        }
    }

    public function connectUsers(){
        return $this->connect('../data/users.xml');
    }

    public function connectDatasheet(){
        return $this->connect('../data/datasheet.xml');
    }

}