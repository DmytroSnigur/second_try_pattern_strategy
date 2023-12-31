<?php
namespace App\Strategy;
class Context
{
    private array $objects;
    private  iStrategy $strategy;

    public function __construct(array $objects, iStrategy $strategy) {
        $this->objects = $objects;
        $this->strategy = $strategy;
     }

    public function executeStrategy() {
        foreach ($this->objects as $object) {
            $this->strategy->setObject($object);
        }
        return $this->strategy->execute();
    }
}
