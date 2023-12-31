<?php

namespace App\Strategy;

class FirstStrategyFormat extends RequiredAbstractClass
{

    protected function formatToStr($elem, $val): string
    {
        return "{$elem}-{$val} <br>";
    }
}


