<?php

class Validator
{

    public static function string($value, ?int $max, int $min=2){

        $value = trim($value);

        if(strlen($value) < $min){
            return "must be at least $min characters";
        } else if (strlen($value) > $max && $max != null){
            return "must be less than $max characters";
        }

        return 0;
    }

}