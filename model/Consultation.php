<?php

require_once 'Register.php';

class Consultation extends Register
{
    public $symptoms, $recipe, $patience_id, $doctor_id;

    public function __construct($id, $patience, $patience_id, $doctor_id, $doctor, $hour, $date, $obs,$others, $symptoms, $recipe)
    {
        parent::__construct($id, $patience, $doctor, $hour, $date, $obs,$others);
        $this->patience_id = $patience_id;
        $this->doctor_id = $doctor_id;
        $this->symptoms = $symptoms;
        $this->recipe = $recipe;
    }
}
