<?php

class Square extends Shape{
     public function area(float $length): float
     {
        return $length*2;
     }
     public function ShowName(){
        return "this is square";
    }
}