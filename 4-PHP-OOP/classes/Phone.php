<?php

echo "<pre>";

class Phone
{
    public $name;
    public $model;

    public function makeCall()
    {
        return $this->model . "can make a call";
    }

    public function useingInternet()
    {
        return $this->model . "can use internet";
    }
}
