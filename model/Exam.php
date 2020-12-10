<?php

require_once('Register.php');

class Exam extends Register
{
    public $type_exam, $result, $lab, $lab_id, $patient_id;
    
    public function __construct($id, $lab_id, $lab, $patient, $patient_id, $doctor, $hour, $date, $obs,$others, $type_exam, $result)
    {
        parent::__construct($id, $patient, $doctor, $hour, $date, $obs, $others);
        $this->lab_id = $lab_id;
        $this->patient_id = $patient_id;
        $this->type_exam = $type_exam;
        $this->result = $result;
        $this->lab = $lab;
    }
}