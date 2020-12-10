<?php

require_once('Register.php');

class Exam extends Register
{
    private $type_exam, $result, $lab_id;
    
    public function __construct($id, $patience_id, $doctor_id, $hour, $date, $obs,$others, $type_exam, $result, $lab_id)
    {
        parent::__construct($id, $patience_id, $doctor_id, $hour, $date, $obs,$others);
        $this->type_exam = $type_exam;
        $this->result = $result;
        $this->lab_id = $lab_id;
    }
}