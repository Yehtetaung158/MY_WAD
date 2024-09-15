<?php

abstract class Shape{
    public $numberSide;
    abstract public function area(float $length) :float;
    abstract public function ShowName();
}