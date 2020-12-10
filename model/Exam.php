<?php

require_once('Register.php');

class Exam extends Register
{
    public $type_exam, $result, $lab;
    
    public function __construct($id, $lab, $patient, $doctor, $hour, $date, $obs,$others, $type_exam, $result)
    {
        parent::__construct($id, $patient, $doctor, $hour, $date, $obs,$others);
        $this->type_exam = $type_exam;
        $this->result = $result;
        $this->lab = $lab;
    }
}