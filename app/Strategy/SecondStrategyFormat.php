<?php
namespace App\Strategy;

class SecondStrategyFormat extends RequiredAbstractClass
{
    protected function formatToStr($elem, $val): string
    {
        $wordsElem = preg_replace('([A-Z])', ' ${0}', $elem);
        $lowerWords = strtolower($wordsElem);
        return "{$lowerWords}|{$val}|<br>";
    }
}
