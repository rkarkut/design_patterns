<?php

namespace Acme;

class Mozarella extends ToppingDecorator {

    public function __construct(Pizza $pizza)
    {
        parent::__construct($pizza);
    }

    public function getDescription()
    {
        return $this->basePizza->getDescription() . ' with Mozarella';
    }

    public function getCost()
    {
        return $this->basePizza->getCost() + 5;
    }
}