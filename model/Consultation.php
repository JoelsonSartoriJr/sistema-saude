<?php

require_once 'Register.php';

class Consultation extends Register
{
    private $symptoms, $recipe;

    public function __construct($id, $patience_id, $doctor_id, $hour, $date, $obs,$others, $symptoms, $recipe)
    {
        parent::__construct($id, $patience_id, $doctor_id, $hour, $date, $obs,$others);
        $this->symptoms = $symptoms;
        $this->recipe = $recipe;
    }
}
