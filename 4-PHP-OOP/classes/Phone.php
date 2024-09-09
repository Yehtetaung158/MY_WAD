<?php

// echo "<pre>";

class Phone
{
    public $name;
    public $model;

    function __construct($inputName, $inputModel)
    {
        //    echo "I am counstructor"; 
        $this->name = $inputName;
        $this->model = $inputModel;
    }

    public function makeCall()
    {
        return $this->model . "can make a call";
    }

    public function useingInternet()
    {
        return $this->model . "can use internet";
    }

    function __destruct()
    {
        echo "I am destructor";
    }
}
