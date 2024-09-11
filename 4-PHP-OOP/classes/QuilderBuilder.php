<?php

class QueryBuilder
{
    public $data;
    public function a()
    {
        $this->data .= "a method is work";
        return $this;
    }
    public function b()
    {
        $this->data .= "b method is work";
        return $this;
    }
    public function c()
    {
        $this->data .= "c method is work";
        return $this;
    }
    public function getData(){
        return $this;
    }
}
