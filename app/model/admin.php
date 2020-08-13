<?php

class Admin extends User{

    function __constructor($phone, $address, $email, $password, $type){
        parent::__construct($phone, $address, $email, $password, $type);
    }

    // Administrator
    function create_admin(){}

    function update_admin(){}

    function remove_admin(){}

    // Doctor
    function create_doctor(){}

    function update_doctor(){}

    function remove_doctor(){}

    //Laboratory
    function create_lab(){}
    
    function update_lab(){}

    function remove_lab(){}
    
    //Patient
    function create_patient(){}

    function update_patient(){}

    function remove_patient(){}

}

?>