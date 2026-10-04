<?php
class Film
{
    public $id;
    public $title;
    public $year;
    public $duration;

    public function __construct()
    {
        //leave empty
    }

    function getAge(){
        return date("Y") - $this->year;
    }
}
