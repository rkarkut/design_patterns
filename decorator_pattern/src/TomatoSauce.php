<?php

namespace Acme;

class TomatoSauce extends ToppingDecorator {

    public function __construct(Pizza $pizza)
    {
        parent::__construct($pizza);
    }

    public function getDescription()
    {
        return $this->basePizza->getDescription() . ' with Tomato sauce';
    }

    public function getCost()
    {
        return $this->basePizza->getCost() + 3;
    }
}