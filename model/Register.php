<?php

class Register{
    public $id, $hour, $date, $obs, $patience_id, $doctor_id, $others;

    public function __construct($id, $patience_id, $doctor_id, $hour, $date, $obs,$others)
    {
        $this->id = $id;
        $this->patience_id = $patience_id;
        $this->doctor_id = $doctor_id;
        $this->hour = $hour;
        $this->date = $date;
        $this->obs = $obs;
        $this->others = $others;
    }
}