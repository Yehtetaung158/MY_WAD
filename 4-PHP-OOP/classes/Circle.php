<?php

class Circle extends Shape{
    public function area(float $length): float
    {
        return pi() * $length;
    }
    public function ShowName(){
        return "this is circle";
    }
}