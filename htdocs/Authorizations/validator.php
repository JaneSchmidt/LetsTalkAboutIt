<?php

class Validator
{

    public static function string($value, int $max, int $min=2):bool{

        $value = trim($value);

        return (strlen($value) >= $min) && (strlen($value) <= $max);
    }
}