<?php

class Childclass extends Pclass 
{
        public $d;
        public $e;
        function __construct($a,$b,$c,$d,$e)
        {
            parent::__construct($a,$b,$c);
            $this->d=$d;
            $this->e=$e;
            // $this->c="ccc";
        }
}
