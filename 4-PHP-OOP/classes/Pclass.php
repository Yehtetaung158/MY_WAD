<?php

class Pclass
{
    public $a;
    protected $b;
    private $c;

    function __construct($a,$b,$c)
    {
        $this->a= $a;
        $this->b=$b;
        $this->c=$c;
    }
  
    public function x()
    {
        return "x";
    }

    public function y()
    {
        return "y";
    }

    public function z()
    {
        return "z";
    }
}