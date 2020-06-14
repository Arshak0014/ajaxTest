<?php


class Main
{
    public $name;
    public $surname;

    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }

    final public function get_other(){
        return 'Other hello '.$this->name.' '.$this->surname.'<br>';
    }

}

