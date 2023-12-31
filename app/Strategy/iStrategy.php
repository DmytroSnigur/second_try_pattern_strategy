<?php
namespace App\Strategy;
interface iStrategy
{
    public function setObject($object) :void;
    public function execute() :array;
}
