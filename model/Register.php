<?php

class Register{
    public $id, $hour, $date, $obs, $patient, $doctor, $others;

    public function __construct($id, $patient, $doctor, $hour, $date, $obs,$others)
    {
        $this->id = $id;
        $this->patient = $patient;
        $this->doctor = $doctor;
        $this->hour = $hour;
        $this->date = $date;
        $this->obs = $obs;
        $this->others = $others;
    }
}