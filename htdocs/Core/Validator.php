<?php

class Validator
{

    public static function string($value, int $max, int $min=2){

        $value = trim($value);

        if(strlen($value) < $min){
            return "must be at least 4 characters";
        } else if (strlen($value) > $max){
            return "must be less than 20 characters";
        }

        return 0;
    }

}