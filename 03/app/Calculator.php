<?php

namespace OOP;

class Calculator{

    static public function sum(...$params){
        return array_sum($params);
    }

}